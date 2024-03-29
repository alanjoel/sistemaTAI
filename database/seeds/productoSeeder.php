<?php

use Illuminate\Database\Seeder;

class productoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert(['nombre'=>'Leche','precioActual'=>'6','stock'=>'10','idCategoria'=>'1','idProveedor'=>'1']);
        DB::table('productos')->insert(['nombre'=>'Yogur','precioActual'=>'8','stock'=>'12','idCategoria'=>'1','idProveedor'=>'1']);
        DB::table('productos')->insert(['nombre'=>'Atun','precioActual'=>'4','stock'=>'15','idCategoria'=>'2','idProveedor'=>'10']);
        DB::table('productos')->insert(['nombre'=>'Sardina','precioActual'=>'6','stock'=>'20','idCategoria'=>'2','idProveedor'=>'10']);
        DB::table('productos')->insert(['nombre'=>'auto','precioActual'=>'20','stock'=>'7','idCategoria'=>'3','idProveedor'=>'2']);
        DB::table('productos')->insert(['nombre'=>'muneco','precioActual'=>'10','stock'=>'12','idCategoria'=>'3','idProveedor'=>'2']);
        DB::table('productos')->insert(['nombre'=>'babero','precioActual'=>'18','stock'=>'8','idCategoria'=>'4','idProveedor'=>'6']);
        DB::table('productos')->insert(['nombre'=>'sonajera','precioActual'=>'20','stock'=>'8','idCategoria'=>'4','idProveedor'=>'6']);
        DB::table('productos')->insert(['nombre'=>'fernet','precioActual'=>'70','stock'=>'20','idCategoria'=>'9','idProveedor'=>'9']);
        DB::table('productos')->insert(['nombre'=>'ron W','precioActual'=>'70','stock'=>'20','idCategoria'=>'9','idProveedor'=>'9']);
    }
}
