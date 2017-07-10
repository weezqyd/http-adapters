<?php

namespace Http\Tests;

use Http\Adapter\GuzzleHttpAdapter;
use PHPUnit\Framework\TestCase as PHPUnit;

abstract class TestCase extends PHPUnit
{
    protected $adapter;

    public function setUp()
    {
        $this->adapter = new GuzzleHttpAdapter(['headers' => ['Authorization' => 'Bearer eyafgifhjfgdj']]);
    }

    public function tearDown()
    {
        $this->adapter = null;
    }
}
