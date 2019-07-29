<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function syncRoles()
    {
        $user1 = User::find(1);

        $role1 = Role::find(1);

        $user1->roles()->sync([$role1->id => ['comment' => 'giving role1 to user1 at ' . now()]]);

        // date not updated
        dump($user1->roles()->first()->pivot->updated_at->toString());

        $user2 = User::find(2);

        $role2 = Role::find(2);

        $user2->rolesWithoutUsing()->sync([$role2->id => ['comment' => 'giving role2 to user2 at ' . now()]]);

        // dates updated
        dump($user2->rolesWithoutUsing()->first()->pivot->updated_at->toString());
    }
}
