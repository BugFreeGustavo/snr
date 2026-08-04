<?php

namespace App\ProfessionalOperations\Application\Actions;

use App\ProfessionalOperations\Domain\Models\Client;

class OnboardClient
{
    /**
     * @param  array{name: string, email?: string|null, notes?: string|null}  $data
     */
    public function handle(array $data): Client
    {
        return Client::create($data);
    }
}
