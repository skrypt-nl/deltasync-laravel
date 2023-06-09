<?php

namespace Skrypt\DeltaSync\Models;

use Illuminate\Database\Eloquent\Model;

class ModelUpdate extends Model
{
    public $timestamps = false;
    protected $visible = ['key'];

    protected $fillable = [
        'key',
        'model_event_id'
    ];
}
