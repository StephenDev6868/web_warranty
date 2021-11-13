<?php

namespace App\Exceptions;

use Exception;
use Throwable;

/**
 * Class BusinessException
 *
 * @package App\Exceptions
 */
class BusinessException extends Exception
{
    /**
     * Errors
     *
     * @var array
     */
    protected $errors;

    /**
     * BusinessException constructor.
     *
     * @param string         $message  Message
     * @param array          $errors   Errors
     * @param int            $code     Code
     * @param Throwable|null $previous Previous
     */
    public function __construct($message = "", $errors = [], $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);

        $this->errors = $errors;
    }

    /**
     * Get Errors
     *
     * @return array
     */
    public function getErrors()
    {
        return $this->errors;
    }
}
