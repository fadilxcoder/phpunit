<?php

use Exceptions\EmailException;
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

    public function testNotificationIsSent()
    {
        $mock = $this->createMock(Mailer::class);
        $mock
            ->expects($this->once())
            ->method('send')
            ->with($this->equalTo('faker@mailer.com'), $this->equalTo('Warm welcome on board !'))
            ->willReturn(true)
        ;

        $user = new User();
        $user->email = 'faker@mailer.com';
        $user->setMailer($mock); // Using mock
        # $user->setMailer(new Mailer()); // Calling the class itself

        $this->assertTrue($user->notify('Warm welcome on board !'));
    }

    public function testNotificationIsSentException()
    {
        $mock = $this->getMockBuilder(Mailer::class)
                ->onlyMethods([])
                ->getMock()
        ;

        $user = new User();
        $user->setMailer($mock);

        $this->expectException(EmailException::class);
        $this->expectExceptionMessage('Email cannot be null !');

        $user->notify('Lorem ip..');
    }

    protected function tearDown(): void
    {
        #echo '¯\_(ツ)_/¯';
    }
}