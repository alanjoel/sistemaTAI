<?php

use Illuminate\Database\Seeder;

class clienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cliente')->insert(['nombre'=>'Alan Ibanez','calle'=>'calle 1','numero'=>'698','ciudad'=>'cochabamba','comuna'=>'campos verdes']);
        DB::table('cliente')->insert(['nombre'=>'Boris Gabriel','calle'=>'ecuador','numero'=>'654','ciudad'=>'cochabamba','comuna'=>'ecuador']);
        DB::table('cliente')->insert(['nombre'=>'Edson Lido','calle'=>'licenciada','numero'=>'666','ciudad'=>'cochabamba','comuna'=>'licenciada']);
        DB::table('cliente')->insert(['nombre'=>'Fausto Aquino','calle'=>'veci','numero'=>'675','ciudad'=>'cochabamba','comuna'=>'vecindad']);
 		DB::table('cliente')->insert(['nombre'=>'Jhaziel Sarzuri','calle'=>'paraguay','numero'=>'123','ciudad'=>'cochabamba','comuna'=>'campos verdes']);
        DB::table('cliente')->insert(['nombre'=>'Ximena Anaguaya','calle'=>'calle 3','numero'=>'222','ciudad'=>'cochabamba','comuna'=>'vinto']);
        DB::table('cliente')->insert(['nombre'=>'Mario Chura','calle'=>'brasil','numero'=>'111','ciudad'=>'cochabamba','comuna'=>'brasil']);
        DB::table('cliente')->insert(['nombre'=>'Sandy Calle','calle'=>'calle 1','numero'=>'545','ciudad'=>'cochabamba','comuna'=>'ecuador']);
        DB::table('cliente')->insert(['nombre'=>'Rodrigo Navarro','calle'=>'callejon 1','numero'=>'333','ciudad'=>'cochabamba','comuna'=>'callejon']);
        DB::table('cliente')->insert(['nombre'=>'Alex Guzman','calle'=>'entre rios','numero'=>'888','ciudad'=>'cochabamba','comuna'=>'rios']);
    }
}
