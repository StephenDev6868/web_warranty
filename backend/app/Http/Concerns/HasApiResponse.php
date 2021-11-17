<?php

namespace App\Http\Concerns;

use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;

/**
 * Trait HasApiResponse
 *
 * @package App\Http\Concerns
 */
trait HasApiResponse
{
    /**
     * Response JSON Format
     *
     * @param string $message    Response message
     * @param array  $data       Data
     * @param int    $statusCode Status Code
     * @param array  $rest       Another attributes
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function response($message = '', $data = [], $statusCode = Response::HTTP_OK, $rest = [])
    {
        if ($data instanceof AnonymousResourceCollection) {
            $data = $data->resource;
        }

        if (empty($data)) {
            $data = (object) $data;
        }

        return response()->json(array_merge($rest, [
            'message'     => $message,
            'data'        => $data,
            'status_code' => $statusCode,
        ]), $statusCode);
    }

    /**
     * Response Created
     *
     * @param string $message Response message
     * @param array  $data    Data
     * @param array  $rest    Another attributes
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function responseCreated($message = '', $data = [], $rest = [])
    {
        return $this->response($message, $data, Response::HTTP_CREATED, $rest);
    }

    /**
     * Response Error JSON
     *
     * @param string $message    Response messgae
     * @param string $error      Error array
     * @param int    $statusCode Status Code
     * @param array  $rest       Another attributes
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function responseError($message = '', $error = '', $statusCode = Response::HTTP_BAD_REQUEST, $rest = [])
    {
        // if (empty($error)) {
        //     $error = (object) $error;
        // }

        return response()->json(array_merge($rest, [
            'message'     => $message,
            'error'       => $error,
            'status_code' => $statusCode,
        ]), $statusCode);
    }

    /**
     * Response No Content
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function responseNoContent()
    {
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }

    /**
     * Response Not Found
     *
     * @param string $message Response message
     * @param array  $error   Error array
     * @param array  $rest    Another attributes
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function responseNotFound($message = '', $error = [], $rest = [])
    {
        if (empty($error)) {
            $error = (object) $error;
        }

        return response()->json(array_merge($rest, [
            'message'     => $message,
            'error'       => $error,
            'status_code' => Response::HTTP_NOT_FOUND,
        ]), Response::HTTP_NOT_FOUND);
    }
}
