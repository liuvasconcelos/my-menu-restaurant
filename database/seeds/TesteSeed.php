<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TesteSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testes')->insert([
            'id_teste'                 => 1,
            'teste_1'                  => 'teste_1',
            'teste_2'                  => 'teste_2',
            'teste_3'                  => 'teste_3',
            'teste_4'                  => 'teste_4',
            'teste_criado_em'          => Carbon::now(),
            'teste_atualizado_em'      => Carbon::now(),
        ]);
    }
}
