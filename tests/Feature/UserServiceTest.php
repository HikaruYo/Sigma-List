<?php

namespace Tests\Feature;

use App\Service\UserService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserServiceTest extends TestCase
{
    private $userService;

    protected function setUp(): void
    {
        parent::setUp();

        $this->userService = $this->app->make(UserService::class);
    }

    public function testLoginSuccess()
    {
        self::assertTrue($this->userService->login("admin", "semutgagak"));
        self::assertTrue($this->userService->login("hikaru", "hikaru"));
    }

    public function testUserNotFound()
    {
        self::assertFalse($this->userService->login("user", "user"));
    }

    public function testWrongPassword()
    {
        self::assertFalse($this->userService->login("admin", "wrongpassword"));
    }
}
