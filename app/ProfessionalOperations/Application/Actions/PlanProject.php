<?php

namespace App\ProfessionalOperations\Application\Actions;

use App\ProfessionalOperations\Domain\Enums\ProjectStatus;
use App\ProfessionalOperations\Domain\Models\Client;
use App\ProfessionalOperations\Domain\Models\Project;

class PlanProject
{
    /**
     * @param  array{name: string}  $data
     */
    public function handle(Client $client, array $data): Project
    {
        return $client->projects()->create([
            'name' => $data['name'],
            'status' => ProjectStatus::Planned,
        ]);
    }
}
