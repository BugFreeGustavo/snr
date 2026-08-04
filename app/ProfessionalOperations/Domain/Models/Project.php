<?php

namespace App\ProfessionalOperations\Domain\Models;

use App\ProfessionalOperations\Domain\Enums\ProjectStatus;
use Database\Factories\ProjectFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Project extends Model
{
    /** @use HasFactory<ProjectFactory> */
    use HasFactory;

    /**
     * @var list<string>
     */
    protected $fillable = ['client_id', 'name', 'status'];

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'status' => ProjectStatus::class,
        ];
    }

    /**
     * @return BelongsTo<Client, $this>
     */
    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    /**
     * Laravel guesses factory classes by mirroring the model's namespace under
     * Database\Factories. Domain Models live outside App\Models, so every one
     * of them must override this to keep `database/factories/` flat (Decision 0003).
     */
    protected static function newFactory(): ProjectFactory
    {
        return ProjectFactory::new();
    }
}
