<?php

namespace App\Exceptions;

use Exception;
use Throwable;

/**
 * Class BusinessException
 *
 * @package App\Exceptions
 */
class UserAuthException extends Exception
{
    /**
     * Errors
     *
     * @var string
     */
    protected $errors;

    /**
     * BusinessException constructor.
     *
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Get Errors
     *
     * @return string
     */
    public function getErrors()
    {
        return $this->errors;
    }
}
