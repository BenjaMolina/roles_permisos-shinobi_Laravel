<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;

use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class,20)->create();

        $user = User::create([
            'name' => 'Admin', 
            'email' => 'admin@gmail.com', 
            'password' => bcrypt('123123'),
        ]);

        $role = Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'special' => 'all-access'
        ]);

        $user->roles()->attach($role);
    }
}
