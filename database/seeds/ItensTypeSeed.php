<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItensTypeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('itens_types')->insert([
            'id'          => 1,
            'type'        => 'Entrada',
            'description' => '',
            'created_at'  => Carbon::now(),
            'updated_at'  => Carbon::now(),
        ]);

        DB::table('itens_types')->insert([
            'id'          => 2,
            'type'        => 'Prato principal',
            'description' => '',
            'created_at'  => Carbon::now(),
            'updated_at'  => Carbon::now(),
        ]);

        DB::table('itens_types')->insert([
            'id'          => 3,
            'type'        => 'Sobremesa',
            'description' => '',
            'created_at'  => Carbon::now(),
            'updated_at'  => Carbon::now(),
        ]);
    }
}
