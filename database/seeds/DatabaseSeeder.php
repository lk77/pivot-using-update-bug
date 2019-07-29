<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::updateOrCreate(['id' => 1], [
            'name'              => 'test',
            'email'             => 'test@laravel.com',
            'password'          => Hash::make('secret'),
            'email_verified_at' => now(),
        ]);

        $user2 = User::updateOrCreate(['id' => 2], [
            'name'              => 'test2',
            'email'             => 'test2@laravel.com',
            'password'          => Hash::make('secret'),
            'email_verified_at' => now(),
        ]);

        $role1 = Role::updateOrCreate(['id' => 1], [
            'name' => 'Administrator'
        ]);

        $role2 = Role::updateOrCreate(['id' => 2], [
            'name' => 'Manager'
        ]);

        $role3 = Role::updateOrCreate(['id' => 3], [
            'name' => 'Publisher'
        ]);

        $user1->roles()->attach([$role1->id => ['comment' => 'giving role1 to user1']]);
        $user2->roles()->attach([$role2->id => ['comment' => 'giving role2 to user2']]);
    }
}
