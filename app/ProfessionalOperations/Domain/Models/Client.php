<?php

namespace App\ProfessionalOperations\Domain\Models;

use Database\Factories\ClientFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    /** @use HasFactory<ClientFactory> */
    use HasFactory;

    /**
     * @var list<string>
     */
    protected $fillable = ['name', 'email', 'notes'];

    /**
     * Laravel guesses factory classes by mirroring the model's namespace under
     * Database\Factories. Domain Models live outside App\Models, so every one
     * of them must override this to keep `database/factories/` flat (Decision 0003).
     */
    protected static function newFactory(): ClientFactory
    {
        return ClientFactory::new();
    }
}
