<?php

use Peixinchen\Exceptions\Interfaces\BaseException;
use Peixinchen\Exceptions\Interfaces\BadRequest;
use Peixinchen\Exceptions\Interfaces\Forbidden;
use Peixinchen\Exceptions\Interfaces\NotFound;
use Peixinchen\Exceptions\Interfaces\Conflict;
use Peixinchen\Exceptions\Interfaces\InternalServerError;
use Peixinchen\Exceptions\Interfaces\BadGateway;
use Peixinchen\Exceptions\Interfaces\GatewayTimeout;

class InterfacesTest extends PHPUnit_Framework_TestCase
{
    /**
     * @expectedException Peixinchen\Exceptions\Interfaces\BaseException
     */
    public function testThrowBadRequest()
    {
        throw new BadRequest(10, '', '');
    }

    /**
     * @expectedException Peixinchen\Exceptions\Interfaces\BaseException
     */
    public function testThrowForbidden()
    {
        throw new Forbidden(10, '', '');
    }

    /**
     * @expectedException Peixinchen\Exceptions\Interfaces\BaseException
     */
    public function testThrowNotFound()
    {
        throw new NotFound(10, '', '');
    }

    /**
     * @expectedException Peixinchen\Exceptions\Interfaces\BaseException
     */
    public function testThrowConflict()
    {
        throw new Conflict(10, '', '');
    }

    /**
     * @expectedException Peixinchen\Exceptions\Interfaces\BaseException
     */
    public function testThrowInternalServerError()
    {
        throw new InternalServerError(10, '', '');
    }

    /**
     * @expectedException Peixinchen\Exceptions\Interfaces\BaseException
     */
    public function testThrowBadGateway()
    {
        throw new BadGateway(10, '', '');
    }

    /**
     * @expectedException Peixinchen\Exceptions\Interfaces\BaseException
     */
    public function testThrowGatewayTimeout()
    {
        throw new GatewayTimeout(10, '', '');
    }

    public function testNotFoundGetAttr()
    {
        try {
            throw new NotFound(10, 'error', 'internal');
        } catch (BaseException $e) {
            $this->assertEquals(10, $e->getCode());
            $this->assertEquals(10, $e->getErrorCode());
            $this->assertEquals('error', $e->getErrorMessage());
            $this->assertEquals('internal', $e->getInternalMessage());
            $this->assertEquals('internal', $e->getMessage());
            $this->assertEquals(404, $e->getHttpStatus());
        }
    }
}
