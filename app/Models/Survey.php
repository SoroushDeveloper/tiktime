<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Survey extends BaseModel
{
    use SoftDeletes, HasUuids;

    protected $guarded = [];

    public function ScheduledSurvey(): BelongsTo
    {
        return $this->belongsTo(ScheduledSurvey::class, 'scheduled_survey_id', 'id');
    }
}
