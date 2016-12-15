<?php

namespace Peixinchen\Exceptions\Interfaces;

class Conflict extends BaseException
{
    protected $httpStatus = 409;
}
