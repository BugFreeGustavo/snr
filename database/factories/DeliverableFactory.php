<?php

namespace Database\Factories;

use App\ProfessionalOperations\Domain\Enums\DeliverableStatus;
use App\ProfessionalOperations\Domain\Models\Deliverable;
use App\ProfessionalOperations\Domain\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Deliverable>
 */
class DeliverableFactory extends Factory
{
    protected $model = Deliverable::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'project_id' => Project::factory(),
            'name' => ucfirst(fake()->words(3, true)),
            'status' => DeliverableStatus::Planned,
        ];
    }
}
