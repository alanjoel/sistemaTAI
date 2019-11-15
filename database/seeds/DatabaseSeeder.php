<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(categoriaSeeder::class);
        $this->call(clienteSeeder::class);
        $this->call(proveedorSeeder::class);
        $this->call(productoSeeder::class);
        $this->call(telefonoSeeder::class);
        $this->call(ventaSeeder::class);

    }
}
