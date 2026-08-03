<?php

use App\Professional\Domain\Models\Professional;

it('redirects guests away from the workspace', function () {
    $response = $this->get('/workspace');

    $response->assertRedirect(route('login'));
});

it('shows the workspace to an authenticated professional', function () {
    $professional = Professional::factory()->create(['name' => 'Ada Lovelace']);

    $response = $this->actingAs($professional)->get('/workspace');

    $response->assertOk();
    $response->assertSee('Ada Lovelace');
});
