<?php

use Exceptions\EmailException;

class MailerStaticClass
{
    private static $username = 'EDM';

    private static $password = 'aM7Kj';

    public static function send(?string $email, string $message)
    {
        if (empty($email)) {
            throw new EmailException('Email cannot be null !');
        }

        sleep(3); # playing tennis df ¯\_(ツ)_/¯\ *|  /¯\_(°_o)_/¯

        echo "\n Mail dispatch using connector : " . self::$username . "::" . self::$password . " \n FROM : $email \n MSG : $message \n";

        return true;
    }
}
