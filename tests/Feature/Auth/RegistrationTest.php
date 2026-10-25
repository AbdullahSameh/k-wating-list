<?php

use App\Models\User;

test('registration is closed', function () {
    $response = $this->post('/register', [
        'name' => 'John Doe',
        'email' => 'test@example.com',
        'password' => 'password',
        'password_confirmation' => 'password',
    ]);

    $response->assertClientError();

    $this->assertGuest();
    expect(User::count())->toBe(0);
});
