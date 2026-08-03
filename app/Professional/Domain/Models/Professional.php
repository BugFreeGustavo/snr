<?php

namespace App\Professional\Domain\Models;

use Database\Factories\ProfessionalFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

#[Fillable(['name', 'email', 'password'])]
#[Hidden(['password', 'remember_token'])]
class Professional extends Authenticatable
{
    /** @use HasFactory<ProfessionalFactory> */
    use HasFactory, Notifiable;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }

    /**
     * Laravel guesses factory classes by mirroring the model's namespace under
     * Database\Factories. Domain Models live outside App\Models, so every one
     * of them must override this to keep `database/factories/` flat.
     */
    protected static function newFactory(): ProfessionalFactory
    {
        return ProfessionalFactory::new();
    }
}
