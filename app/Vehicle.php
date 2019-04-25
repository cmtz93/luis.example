<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicle extends Model {

    use SoftDeletes;

    protected $fillable = [
        "plate", "serial", "color", "year"
    ];

    protected $hidden = [
        "created_at", "updated_at", "deleted_at"
    ];

}
