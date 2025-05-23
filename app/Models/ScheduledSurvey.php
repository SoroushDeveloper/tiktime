<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ScheduledSurvey extends BaseModel
{
    use SoftDeletes, HasUuids;

    protected $guarded = [];
}
