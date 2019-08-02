<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class UsersHasRoles extends Pivot
{
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'comment'
    ];
}
