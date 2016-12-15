<?php

namespace Peixinchen\Exceptions\Interfaces;

class InternalServerError extends BaseException
{
    protected $httpStatus = 500;
}
