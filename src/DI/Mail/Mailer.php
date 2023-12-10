<?php

namespace App\DI\Mail;

class Mailer
{
    public function mail(string $to, string $subject, string $message, array|string $additionalHeaders = [], string $additionalParams = ''): bool
    {
        return mail($to, $subject, $message, $additionalHeaders, $additionalParams);
    }

    public function test(string $text): void
    {
        echo $text;
    }
}
