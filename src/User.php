<?php

class User
{
    /**
     * @var string
     */
    public $first_name;
    
    /**
     * @var string
     */
    public $surname;

    /**
     * @var string
     */
    public $email;

    /**
     * @var Mailer
     */
    public $mailer;

    public function setMailer(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function getFullName()
    {
        return trim("$this->first_name $this->surname");
    }

    public function notify(string $msg)
    {
        return $this->mailer->send($this->email, $msg);
    }
}
