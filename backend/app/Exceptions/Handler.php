<?php

namespace App\Exceptions;

use App\Http\Concerns\HasApiResponse;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use Throwable;

class Handler extends ExceptionHandler
{
    use HasApiResponse;

    /**
     * A list of the exception types that are not reported.
     *
     * @var string[]
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var string[]
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * @param \Exception $exception Exception
     *
     * @return void
     * @throws Throwable
     */
    public function report(Throwable $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param \Illuminate\Http\Request $request   Request
     * @param Throwable                $exception Throwable
     *
     * @return \Illuminate\Http\Response|Response
     */
    public function render($request, Throwable $exception)
    {
        // dd($exception);
        switch (true) {
            case $exception instanceof AuthenticationException:
                return $this->responseError(
                    trans('auth.unauthorized'),
                    [],
                    Response::HTTP_UNAUTHORIZED
                );

            case $exception instanceof ModelNotFoundException:
                return $this->responseError(
                    trans('message.model_not_found'),
                    [],
                    Response::HTTP_BAD_REQUEST
                );

            case $exception instanceof ValidationException:
                return $this->responseError(
                    trans('message.validate.fail'),
                    $exception->validator->errors()->first(),
                    Response::HTTP_UNPROCESSABLE_ENTITY
                );

            case $exception instanceof NotFoundHttpException:
                return $this->responseError(
                    trans('message.404_not_found'),
                    [],
                    Response::HTTP_NOT_FOUND
                );

            case $exception instanceof AuthorizationException:
                return $this->responseError(
                    $exception->getMessage(),
                    [],
                    Response::HTTP_FORBIDDEN
                );

            case $exception instanceof BusinessException:
                return $this->responseError(
                    $exception->getMessage(),
                    $exception->getErrors(),
                    Response::HTTP_BAD_REQUEST
                );

            default:
                return $this->responseError(
                    trans('message.server_error'),
                    [],
                    Response::HTTP_INTERNAL_SERVER_ERROR
                );
        }
    }
}
