<?php

namespace App\DI\UserMail;

use App\DI\Mail\Mailer;
use App\DI\User\UserManager;
use DI\Container;
use DI\Definition\Source\MutableDefinitionSource;

class UserMail
{
    private Container $container;

    public function __construct(array|MutableDefinitionSource $definitions)
    {
        $this->container = new Container($definitions);
    }

    public function test(string $text, string $text2)
    {
        $userClass = $this->container->get(UserManager::class);
        $mailerClass = $this->container->get(Mailer::class);

        $userClass->test($text);
        echo "\n";
        $mailerClass->test($text2);
    }
}
