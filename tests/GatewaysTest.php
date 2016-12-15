<?php

use Peixinchen\Exceptions\Gateways\HttpException;

class GatewaysTest extends PHPUnit_Framework_TestCase
{
    /**
     * @expectedException Peixinchen\Exceptions\Gateways\BaseException
     */
    public function testThrowHttpException()
    {
        throw new HttpException(500, '', '');
    }

    public function testHttpExceptionGetAttr()
    {
        try {
            throw new HttpException(500, 'body', 'error');
        } catch (HttpException $e) {
            $this->assertEquals(500, $e->getStatus());
            $this->assertEquals(500, $e->getCode());
            $this->assertEquals('body', $e->getBody());
            $this->assertEquals('error', $e->getError());
            $this->assertEquals('error', $e->getMessage());
        }
    }
}
