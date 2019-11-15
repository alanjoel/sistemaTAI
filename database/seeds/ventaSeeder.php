<?php

use Illuminate\Database\Seeder;

class ventaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('venta')->insert(['fecha'=>'11/12/2019','descuento'=>'0','cantidad'=>'2','montoTotal'=>'12','idCliente'=>'1','idProducto'=>'1']);
        DB::table('venta')->insert(['fecha'=>'11/12/2019','descuento'=>'0','cantidad'=>'4','montoTotal'=>'24','idCliente'=>'2','idProducto'=>'1']);
        DB::table('venta')->insert(['fecha'=>'11/14/2019','descuento'=>'0','cantidad'=>'5','montoTotal'=>'30','idCliente'=>'3','idProducto'=>'1']);
	    DB::table('venta')->insert(['fecha'=>'11/09/2019','descuento'=>'0','cantidad'=>'5','montoTotal'=>'20','idCliente'=>'9','idProducto'=>'3']);
        DB::table('venta')->insert(['fecha'=>'11/10/2019','descuento'=>'0','cantidad'=>'5','montoTotal'=>'20','idCliente'=>'5','idProducto'=>'3']);
        DB::table('venta')->insert(['fecha'=>'11/12/2019','descuento'=>'0','cantidad'=>'2','montoTotal'=>'12','idCliente'=>'6','idProducto'=>'4']);
        DB::table('venta')->insert(['fecha'=>'11/11/2019','descuento'=>'0','cantidad'=>'3','montoTotal'=>'18','idCliente'=>'10','idProducto'=>'4']);
        DB::table('venta')->insert(['fecha'=>'11/12/2019','descuento'=>'5','cantidad'=>'2','montoTotal'=>'130','idCliente'=>'7','idProducto'=>'9']);
        DB::table('venta')->insert(['fecha'=>'11/14/2019','descuento'=>'5','cantidad'=>'3','montoTotal'=>'195','idCliente'=>'10','idProducto'=>'10']);
        DB::table('venta')->insert(['fecha'=>'11/14/2019','descuento'=>'0','cantidad'=>'2','montoTotal'=>'12','idCliente'=>'6','idProducto'=>'6']);

    }
}
