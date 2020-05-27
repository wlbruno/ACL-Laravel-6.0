<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *s
     * @return void
     */
    public function run()
    {
           $this->call([
            PlanosTableSeeder::class,
            UsuariosTableSeeder::class,
            PermissionsTableSeed::class,
          
            RolesTableSeed::class,
        ]);
     }

}
