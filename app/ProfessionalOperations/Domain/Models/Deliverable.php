<?php

namespace App\ProfessionalOperations\Domain\Models;

use App\ProfessionalOperations\Domain\Enums\DeliverableStatus;
use Database\Factories\DeliverableFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Deliverable extends Model
{
    /** @use HasFactory<DeliverableFactory> */
    use HasFactory;

    /**
     * @var list<string>
     */
    protected $fillable = ['project_id', 'name', 'status'];

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'status' => DeliverableStatus::class,
        ];
    }

    /**
     * @return BelongsTo<Project, $this>
     */
    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }

    /**
     * Laravel guesses factory classes by mirroring the model's namespace under
     * Database\Factories. Domain Models live outside App\Models, so every one
     * of them must override this to keep `database/factories/` flat (Decision 0003).
     */
    protected static function newFactory(): DeliverableFactory
    {
        return DeliverableFactory::new();
    }
}
