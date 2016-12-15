<?php

namespace Peixinchen\Exceptions\Gateways;

class HttpException extends BaseException
{
    protected $status;

    protected $body;

    protected $error;

    public function __construct($status, $body, $error, \Exception $previous = null)
    {
        parent::__construct($error, $status, $previous);

        $this->status = $status;
        $this->body = $body;
        $this->error = $error;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function getError()
    {
        return $this->error;
    }
}
