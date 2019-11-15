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
        DB::table('categorias')->insert(['nombre'=>'Lacteos','descripcion'=>'derivados de la leche']);
        DB::table('categorias')->insert(['nombre'=>'Enlatados','descripcion'=>'productos enlatados']);
        DB::table('categorias')->insert(['nombre'=>'Juguetes','descripcion'=>'juguetes']);
        DB::table('categorias')->insert(['nombre'=>'Bebes','descripcion'=>'productos de bebes']);
        DB::table('categorias')->insert(['nombre'=>'Carnes','descripcion'=>'tipos de carne']);
        DB::table('categorias')->insert(['nombre'=>'Bebidas','descripcion'=>'bebidas analcoholicas']);
        DB::table('categorias')->insert(['nombre'=>'Golosinas','descripcion'=>'todas las golosinas']);
        DB::table('categorias')->insert(['nombre'=>'Verduras','descripcion'=>'verduras frescas']);
        DB::table('categorias')->insert(['nombre'=>'BebidasAlcoholicas','descripcion'=>'bebidas con alcohol']);
        DB::table('categorias')->insert(['nombre'=>'Salados','descripcion'=>'productos salados']);
    }
}
