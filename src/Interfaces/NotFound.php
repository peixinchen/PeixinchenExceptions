<?php

namespace Peixinchen\Exceptions\Interfaces;

class NotFound extends BaseException
{
    protected $httpStatus = 404;
}
