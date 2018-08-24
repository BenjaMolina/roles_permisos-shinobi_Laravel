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

        User::create([
            'name' => 'Benja', 
            'email' => 'benja@gmail.com', 
            'password' => bcrypt('123123'),
        ]);

        Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'special' => 'all-access'
        ]);
    }
}
