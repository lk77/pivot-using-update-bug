<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class UsersHasRoles extends Pivot
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'comment'
    ];
}
