<?php

use App\Professional\Domain\Models\Professional;
use Illuminate\Support\Facades\Hash;

it('redirects guests away from the profile page', function () {
    $response = $this->get('/profile');

    $response->assertRedirect(route('login'));
});

it('shows the current professional in the profile form', function () {
    $professional = Professional::factory()->create([
        'name' => 'Ada Lovelace',
        'email' => 'ada@example.com',
    ]);

    $response = $this->actingAs($professional)->get('/profile');

    $response->assertOk();
    $response->assertSee('Ada Lovelace');
    $response->assertSee('ada@example.com');
});

it('lets the professional update their name and email', function () {
    $professional = Professional::factory()->create([
        'name' => 'Ada Lovelace',
        'email' => 'ada@example.com',
    ]);

    $response = $this->actingAs($professional)->put('/profile', [
        'name' => 'Ada Byron',
        'email' => 'ada.byron@example.com',
    ]);

    $response->assertRedirect(route('profile.edit'));
    expect($professional->refresh())
        ->name->toBe('Ada Byron')
        ->email->toBe('ada.byron@example.com');
});

it('lets the professional change their password with the correct current password', function () {
    $professional = Professional::factory()->create([
        'password' => Hash::make('old-password'),
    ]);

    $this->actingAs($professional)->put('/profile', [
        'name' => $professional->name,
        'email' => $professional->email,
        'current_password' => 'old-password',
        'password' => 'new-password',
        'password_confirmation' => 'new-password',
    ]);

    expect(Hash::check('new-password', $professional->refresh()->password))->toBeTrue();
});

it('rejects a password change with the wrong current password', function () {
    $professional = Professional::factory()->create([
        'password' => Hash::make('old-password'),
    ]);

    $response = $this->actingAs($professional)->put('/profile', [
        'name' => $professional->name,
        'email' => $professional->email,
        'current_password' => 'wrong-password',
        'password' => 'new-password',
        'password_confirmation' => 'new-password',
    ]);

    $response->assertSessionHasErrors('current_password');
    expect(Hash::check('old-password', $professional->refresh()->password))->toBeTrue();
});
