<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(sicaab\User::class, 5)->create();

        // Inicio crear rol por defecto
        Role::create([
            'name'    => 'Admin',
            'slug'    => 'admin',
            'special' => 'all-access'
        ]);
        // Fin crear rol por defecto
    }
}
