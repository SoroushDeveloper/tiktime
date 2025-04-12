<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends BaseModel
{
    use SoftDeletes, HasUuids;

    public function Profession(): HasOne
    {
        return $this->hasOne(Profession::class, 'id', 'profession_id');
    }

    public function City(): BelongsTo
    {
        return $this->belongsTo(City::class, 'city_id', 'id');
    }
}
