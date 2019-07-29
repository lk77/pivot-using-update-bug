<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'users_has_roles', 'roles_id', 'users_id')->using(UsersHasRoles::class)->withTimestamps()->withPivot('comment');
    }

    public function usersWithoutUsing()
    {
        return $this->belongsToMany(User::class, 'users_has_roles', 'roles_id', 'users_id')->withTimestamps()->withPivot('comment');
    }
}
