<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    protected function setUp(): void
    {
        #echo '¯\_(°_o)_/¯';
    }

    public function testReturnFullName()
    {
        $user = new User();
        $user->first_name = 'John';
        $user->surname = "Doe";

        $this->assertEquals("John Doe", $user->getFullName());
    }

    public function testReturnEmptyFullName()
    {
        $user = new User();

        $this->assertEquals("", $user->getFullName());
    }

    /**
     * @test
     */
    public function returnFullNameNotNull()
    {
        $user = new User();
        $user->first_name = null;
        $user->surname = null;

        $this->assertNotNull($user->getFullName());

    }

    protected function tearDown(): void
    {
        #echo '¯\_(ツ)_/¯';
    }
}