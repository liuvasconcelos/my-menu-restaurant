<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tables')->insert([
            'id'         => 1,
            'status'     => 'L',
            'style'      => 'btn bann_capt',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('tables')->insert([
            'id'         => 2,
            'status'     => 'R',
            'style'      => 'btn bann_capt bn__1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('tables')->insert([
            'id'         => 3,
            'status'     => 'L',
            'style'      => 'btn bann_capt',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('tables')->insert([
            'id'         => 4,
            'status'     => 'L',
            'style'      => 'btn bann_capt',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('tables')->insert([
            'id'         => 5,
            'status'     => 'R',
            'style'      => 'btn bann_capt bn__1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('tables')->insert([
            'id'         => 6,
            'status'     => 'L',
            'style'      => 'btn bann_capt',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('tables')->insert([
            'id'         => 7,
            'status'     => 'L',
            'style'      => 'btn bann_capt',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('tables')->insert([
            'id'         => 8,
            'status'     => 'O',
            'style'      => 'btn bann_capt bn__3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('tables')->insert([
            'id'         => 9,
            'status'     => 'L',
            'style'      => 'btn bann_capt',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('tables')->insert([
            'id'         => 10,
            'status'     => 'O',
            'style'      => 'btn bann_capt bn__3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('tables')->insert([
            'id'         => 11,
            'status'     => 'L',
            'style'      => 'btn bann_capt',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('tables')->insert([
            'id'         => 12,
            'status'     => 'L',
            'style'      => 'btn bann_capt',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('tables')->insert([
            'id'         => 13,
            'status'     => 'L',
            'style'      => 'btn bann_capt',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('tables')->insert([
            'id'         => 14,
            'status'     => 'L',
            'style'      => 'btn bann_capt',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

    }
}
