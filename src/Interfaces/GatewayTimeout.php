<?php

namespace Peixinchen\Exceptions\Interfaces;

class GatewayTimeout extends BaseException
{
    protected $httpStatus = 504;
}
