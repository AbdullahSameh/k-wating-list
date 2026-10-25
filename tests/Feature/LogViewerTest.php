<?php

use App\Models\User;

test('guests cannot open the log viewer', function () {
    $this->get('/log-viewer')->assertForbidden();
});

test('the verified admin can open the log viewer', function () {
    $admin = User::factory()->create(['email' => 'kunoozai87@gmail.com']);

    $this->actingAs($admin)->get('/log-viewer')->assertOk();
});

test('the admin address without verification cannot open the log viewer', function () {
    $admin = User::factory()->unverified()->create(['email' => 'kunoozai87@gmail.com']);

    $this->actingAs($admin)->get('/log-viewer')->assertForbidden();
});

test('other users cannot open the log viewer', function () {
    $user = User::factory()->create();

    $this->actingAs($user)->get('/log-viewer')->assertForbidden();
});
