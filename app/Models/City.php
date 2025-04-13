<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use SoftDeletes, HasUuids;

    protected $guarded = [];

    public function State(): BelongsTo
    {
        return $this->belongsTo(State::class, 'state_id', 'id');
    }
}
