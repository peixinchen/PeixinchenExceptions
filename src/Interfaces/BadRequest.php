<?php

namespace Peixinchen\Exceptions\Interfaces;

class BadRequest extends BaseException
{
    protected $httpStatus = 400;
}
