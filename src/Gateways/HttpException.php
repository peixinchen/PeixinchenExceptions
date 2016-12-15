<?php

namespace Peixinchen\Exceptions\Gateways;

class HttpException extends BaseException
{
    protected $status;

    protected $body;

    protected $error;

    public function __construct($status, $body, $error, \Exception $prevous = null)
    {
        parent::__construct($error, $status, $previous);

        $this->status = $status;
        $this->body = $body;
        $this->error = $error;
    }
}
