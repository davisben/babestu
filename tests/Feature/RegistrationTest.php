<?php

namespace Tests\Feature;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function testRegistrationForm()
    {
        $response = $this->post('/register', [
            'first_name' => 'Test',
            'last_name' => 'Tester',
            'email' => 'test@example.com',
            'password' => 'Pa$$w0rd',
            'password_confirm' => 'Pa$$w0rd',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);
    }
}
