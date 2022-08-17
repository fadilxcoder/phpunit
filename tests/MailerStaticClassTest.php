<?php

use Exceptions\EmailException;
use PHPUnit\Framework\TestCase;

class MailerStaticClassTest extends TestCase
{
    public function testSendMessage()
    {
        $this->assertTrue(MailerStaticClass::send('fadil@xcoder.dvlpr', 'Alpha Tango Foxtrot Sierra Lima'));
    }
    
    public function testEmailException()
    {
        $this->expectException(EmailException::class);
        MailerStaticClass::send('', '');
    }
}