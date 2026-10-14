<?php

namespace App\ProfessionalOperations\Domain\Models;

use App\ProfessionalOperations\Domain\Enums\DeliverableStatus;
use App\ProfessionalOperations\Domain\Exceptions\InvalidDeliverableTransition;
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
     * Applies a documented Business Event's outcome (Discovery 005), refusing it
     * when the lifecycle forbids the move or the Project is Archived (BR-017).
     *
     * @throws InvalidDeliverableTransition
     */
    public function transitionTo(DeliverableStatus $next): void
    {
        if ($this->project->isArchived()) {
            throw InvalidDeliverableTransition::projectArchived();
        }

        if (! $this->status->canBecome($next)) {
            throw InvalidDeliverableTransition::between($this->status, $next);
        }

        $this->update(['status' => $next]);
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
