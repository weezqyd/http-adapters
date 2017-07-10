<?php

namespace Http\Tests;

use Http\Adapter\GuzzleHttpAdapter;
use GuzzleHttp\Psr7\Stream;

class GuzzleHttpAdapterTest extends TestCase
{

    /**
     *
     * @covers GuzzleHttpAdapter::__construct
     *
     */
    public function testAdapterShouldBeConstructed()
    {
        $this->assertInstanceOf(GuzzleHttpAdapter::class, $this->adapter);
    }
    /**
     *
     * @covers GuzzleHttpAdapter::get
     *
     */
    public function testAdapterShouldSendGetRequest()
    {
        $response = $this->adapter->get('https://httpbin.org/get?dummy=tested');
        $this->assertInstanceOf(Stream::class, $response);
        $this->assertEquals($this->adapter->response->getStatusCode(), 200);
    }

     /**
     *
     * @covers GuzzleHttpAdapter::post
     *
     */
    public function testAdapterShouldSendPosttRequest()
    {
        $response = $this->adapter->post('https://httpbin.org/post', ['data' => 'dummy data']);
        $this->assertInstanceOf(Stream::class, $response);
        $this->assertEquals($this->adapter->response->getStatusCode(), 200);
    }
     /**
     *
     * @covers GuzzleHttpAdapter::put
     *
     */
    public function testAdapterShouldSendPutRequest()
    {
        $response = $this->adapter->put('https://httpbin.org/put', ['data' => 'dummy data']);
        $this->assertInstanceOf(Stream::class, $response);
        $this->assertEquals($this->adapter->response->getStatusCode(), 200);
    }
     /**
     *
     * @covers GuzzleHttpAdapter::patch
     *
     */
    public function testAdapterShouldSendDeleteRequest()
    {
        $response = $this->adapter->delete('https://httpbin.org/delete', ['data' => 'dummy data']);
        $this->assertInstanceOf(Stream::class, $response);
        $this->assertEquals($this->adapter->response->getStatusCode(), 200);
    }
}
