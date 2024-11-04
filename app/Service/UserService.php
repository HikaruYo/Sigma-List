<?php

namespace App\Service;

interface UserService
{
    function login(string $email, string $password): bool;
}
