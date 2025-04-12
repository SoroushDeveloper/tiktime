<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\SoftDeletes;

class Website extends BaseModel
{
    use SoftDeletes, HasUuids;

    protected $guarded = [];
}
