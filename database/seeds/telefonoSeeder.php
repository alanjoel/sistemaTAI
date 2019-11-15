<?php

use Illuminate\Database\Seeder;

class telefonoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('telefonos')->insert(['numero'=>'69805781','idCliente'=>'1']);
        DB::table('telefonos')->insert(['numero'=>'72040118','idCliente'=>'1']);
        DB::table('telefonos')->insert(['numero'=>'77502646','idCliente'=>'1']);
        DB::table('telefonos')->insert(['numero'=>'72040113','idCliente'=>'6']);
        DB::table('telefonos')->insert(['numero'=>'75022332','idCliente'=>'6']);
        DB::table('telefonos')->insert(['numero'=>'75546123','idCliente'=>'3']);
        DB::table('telefonos')->insert(['numero'=>'65525120','idCliente'=>'3']);
        DB::table('telefonos')->insert(['numero'=>'75588997','idCliente'=>'4']);
        DB::table('telefonos')->insert(['numero'=>'74040000','idCliente'=>'9']);
        DB::table('telefonos')->insert(['numero'=>'70641948','idCliente'=>'10']);
    }
}
