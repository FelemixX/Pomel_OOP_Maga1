<?php

namespace App\DI\User;

use App\DI\Mail\Mailer;

class UserManager
{
    private Mailer $mailer;

    protected const REGISTER_HEADER = 'Welcome to our portal!';

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    public function register(string $email, string $password): bool
    {
        return $this->mailer->mail($email, static::REGISTER_HEADER, $password);
    }

    public function test(string $text): void
    {
        echo $text;
    }
}
