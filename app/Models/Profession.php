<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profession extends Model
{
    use SoftDeletes, HasUuids;

    protected $guarded = [];

    public function Parent(): BelongsTo
    {
        return $this->belongsTo(Profession::class, 'parent_id', 'id');
    }

    public function Children(): HasMany
    {
        return $this->hasMany(Profession::class, 'parent_id', 'id');
    }
}
