<?php

use Illuminate\Database\Seeder;

use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Users
        Permission::create([
            'name' =>        'Navegar usuarios',
            'slug' =>        'users.index',
            'description' => 'Listado y navegacion de los usuarios registrados'
        ]);
        Permission::create([
            'name' =>        'Ver detalle de usuario',
            'slug' =>        'users.show',
            'description' => 'Ver detalle de los usuarios'
        ]);
        Permission::create([
            'name' =>        'Edicion de usaurios',
            'slug' =>        'users.edit',
            'description' => 'Edicion de cualquier usuario registrado'
        ]);
        Permission::create([
            'name' =>        'Eliminacion de usuarios',
            'slug' =>        'users.destroy',
            'description' => 'Eliminar cualquier usuario registrado'
        ]);

        //Roles
        Permission::create([
            'name' =>        'Navegar roles',
            'slug' =>        'roles.index',
            'description' => 'Listado y navegacion de los roles registrados'
        ]);
        Permission::create([
            'name' =>        'Crear roles',
            'slug' =>        'roles.create',
            'description' => 'Crear un nuevo rol'
        ]);
        Permission::create([
            'name' =>        'Ver detalle de rol',
            'slug' =>        'roles.show',
            'description' => 'Ver detalle de los roles'
        ]);
        Permission::create([
            'name' =>        'Edicion de roles',
            'slug' =>        'roles.edit',
            'description' => 'Edicion de cualquier roles registrado'
        ]);
        Permission::create([
            'name' =>        'Eliminacion de roles',
            'slug' =>        'roles.destroy',
            'description' => 'Eliminar cualquier rol registrado'
        ]);


        //Products
        Permission::create([
            'name' =>        'Navegar productos',
            'slug' =>        'productos.index',
            'description' => 'Listado y navegacion de los productos registrados'
        ]);
        Permission::create([
            'name' =>        'Crear productos',
            'slug' =>        'productos.create',
            'description' => 'Crear un nuevo producto'
        ]);
        Permission::create([
            'name' =>        'Ver detalle de usuario',
            'slug' =>        'productos.show',
            'description' => 'Ver detalle de los productos'
        ]);
        Permission::create([
            'name' =>        'Edicion de productos',
            'slug' =>        'productos.edit',
            'description' => 'Edicion de cualquier producto registrado'
        ]);
        Permission::create([
            'name' =>        'Eliminacion de productos',
            'slug' =>        'productos.destroy',
            'description' => 'Eliminar cualquier producto registrado'
        ]);
    }
}
