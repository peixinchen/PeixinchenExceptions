<?php

namespace Peixinchen\Exceptions\Interfaces;

class Forbidden extends BaseException
{
    protected $httpStatus = 403;
}
