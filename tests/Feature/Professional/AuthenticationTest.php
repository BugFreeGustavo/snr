<?php

use App\Professional\Domain\Models\Professional;

it('lets the professional log in with correct credentials', function () {
    $professional = Professional::factory()->create([
        'password' => bcrypt('correct-password'),
    ]);

    $response = $this->post('/login', [
        'email' => $professional->email,
        'password' => 'correct-password',
    ]);

    $this->assertAuthenticatedAs($professional);
    $response->assertRedirect(route('dashboard'));
});

it('rejects login with incorrect credentials', function () {
    $professional = Professional::factory()->create([
        'password' => bcrypt('correct-password'),
    ]);

    $response = $this->post('/login', [
        'email' => $professional->email,
        'password' => 'wrong-password',
    ]);

    $this->assertGuest();
    $response->assertSessionHasErrors('email');
});

it('logs the professional out', function () {
    $professional = Professional::factory()->create();

    $response = $this->actingAs($professional)->post('/logout');

    $this->assertGuest();
    $response->assertRedirect(route('login'));
});

it('redirects guests away from the dashboard', function () {
    $response = $this->get('/dashboard');

    $response->assertRedirect(route('login'));
});
