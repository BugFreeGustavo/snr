<?php

namespace Database\Seeders;

use App\Professional\Domain\Models\Professional;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     *
     * The domain models exactly one Professional (docs/02-domain/domain-concepts.md).
     * This is that Professional's development record.
     */
    public function run(): void
    {
        Professional::factory()->create([
            'name' => 'Gustavo Marques',
            'email' => 'gustavo@snr.test',
        ]);
    }
}
