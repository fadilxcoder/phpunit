<?php

use PHPUnit\Framework\TestCase;

class FunctionTest extends TestCase
{
    public function testAdd()
    {
        require 'functions.php';

        $this->assertEquals(4, add(2, 2));

        $this->assertEquals(8, add(3, 5));
        
        $this->assertNotEquals(8, add(6, 9));
    }
}