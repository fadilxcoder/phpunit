<?php

use PHPUnit\Framework\TestCase;

class MockMailerTest extends TestCase
{
    public function testMail()
    {
        $mock = $this->createMock(Mailer::class);
        $mock->method('send')
            ->willReturn(true)
        ;

        $mock->username = 'itest';
        $mock->password = 'p@ssw$';
        $result = $mock->send('a@b.x', 'M4S6');

        $this->assertTrue($result);
    }
}