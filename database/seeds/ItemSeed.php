<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'id'          => 1,
            'name'        => 'Carpaccio de carne',
            'description' => 'Finas lâminas de carne...',
            'type'        => 1,
            'price'       => 15.0,
            'created_at'  => Carbon::now(),
            'updated_at'  => Carbon::now(),
        ]);

        DB::table('items')->insert([
            'id'          => 2,
            'name'        => 'Bruscheta',
            'description' => 'Finas lâminas de pão...',
            'type'        => 1,
            'price'       => 5.0,
            'created_at'  => Carbon::now(),
            'updated_at'  => Carbon::now(),
        ]);

        DB::table('items')->insert([
            'id'          => 3,
            'name'        => 'Macarronada bolonhesa',
            'description' => 'Caseira',
            'type'        => 2,
            'price'       => 35.0,
            'created_at'  => Carbon::now(),
            'updated_at'  => Carbon::now(),
        ]);

        DB::table('items')->insert([
            'id'          => 4,
            'name'        => 'Risoto de queijo',
            'description' => '',
            'type'        => 2,
            'price'       => 45.0,
            'created_at'  => Carbon::now(),
            'updated_at'  => Carbon::now(),
        ]);

        DB::table('items')->insert([
            'id'          => 5,
            'name'        => 'Brownie',
            'description' => 'de chocolate',
            'type'        => 3,
            'price'       => 10.0,
            'created_at'  => Carbon::now(),
            'updated_at'  => Carbon::now(),
        ]);
    }
}
