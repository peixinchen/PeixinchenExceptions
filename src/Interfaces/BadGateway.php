<?php

namespace Peixinchen\Exceptions\Interfaces;

class BadGateway extends BaseException
{
    protected $httpStatus = 502;
}
