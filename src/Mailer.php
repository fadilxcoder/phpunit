<?php

use Exceptions\EmailException;

class Mailer
{

    public $username = 'ADX';

    public $password = 'aN5Di';

    public function send(?string $email, string $message)
    {
        if (empty($email)) {
            throw new EmailException('Email cannot be null !');
        }

        sleep(3); # playing tennis df ¯\_(ツ)_/¯\ *|  /¯\_(°_o)_/¯

        echo "\n Mail dispatch using connector : $this->username::$this->password \n FROM : $email \n MSG : $message";

        return true;
    }
}
