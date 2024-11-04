<?php

namespace App\Service\Implementation;

use App\Service\UserService;

class UserServiceImpl implements UserService
{
    private array $users = [
        "admin" => "semutgagak",
        "hikaru" => "hikaru"
    ];

    function login(string $user, string $password): bool
    {
        if (!isset($this->users[$user])) {
            return false;
        };

        $correctPassword = $this->users[$user];

        if ($password === $correctPassword) {
            return true;
        } else {
            return false;
        }

    }
}
