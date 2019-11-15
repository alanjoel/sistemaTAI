<?php

use Illuminate\Database\Seeder;

class categoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria')->insert(['nombre'=>'Lacteos','descripcion'=>'derivados de la leche']);
        DB::table('categoria')->insert(['nombre'=>'Enlatados','descripcion'=>'productos enlatados']);
        DB::table('categoria')->insert(['nombre'=>'Juguetes','descripcion'=>'juguetes']);
        DB::table('categoria')->insert(['nombre'=>'Bebes','descripcion'=>'productos de bebes']);
        DB::table('categoria')->insert(['nombre'=>'Carnes','descripcion'=>'tipos de carne']);
        DB::table('categoria')->insert(['nombre'=>'Bebidas','descripcion'=>'bebidas analcoholicas']);
        DB::table('categoria')->insert(['nombre'=>'Golosinas','descripcion'=>'todas las golosinas']);
        DB::table('categoria')->insert(['nombre'=>'Verduras','descripcion'=>'verduras frescas']);
        DB::table('categoria')->insert(['nombre'=>'BebidasAlcoholicas','descripcion'=>'bebidas con alcohol']);
        DB::table('categoria')->insert(['nombre'=>'Salados','descripcion'=>'productos salados']);
    }
}
