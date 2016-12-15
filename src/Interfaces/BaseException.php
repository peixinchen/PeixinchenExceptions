<?php

namespace Peixinchen\Exceptions\Interfaces;

use Exception;

abstract class BaseException extends Exception
{
    protected $errorMessage;

    protected $httpStatus;

    /**
     * 错误码
     *
     * @return int
     */
    public function getErrorCode()
    {
        return $this->getCode();
    }

    /**
     * 对外错误信息
     *
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * 详细错误信息
     *
     * @return string
     */
    public function getInternalMessage()
    {
        return $this->getMessage();
    }

    /**
     * HTTP status
     *
     * @return int
     */
    public function getHttpStatus()
    {
        return $this->httpStatus;
    }

    /**
     * Constructor.
     *
     * @param int        $errorCode code
     * @param string     $errorMessage message
     * @param string     $internalMessage internal
     * @param \Exception $previous previous
     */
    public function __construct($errorCode, $errorMessage, $internalMessage, \Exception $previous = null)
    {
        parent::__construct($internalMessage, $errorCode, $previous);

        $this->errorMessage = $errorMessage;
    }
}
