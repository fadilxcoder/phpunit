<?php

use PHPUnit\Framework\TestCase;

class MailerStaticClassTest extends TestCase
{
    public function testSendMessage()
    {
        $this->assertTrue(MailerStaticClass::send('fadil@xcoder.dvlpr', 'Alpha Tango Foxtrot Sierra Lima'));
    }
}