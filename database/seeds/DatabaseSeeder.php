<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TesteSeed::class);
        $this->call(ItensTypeSeed::class);
        $this->call(ItemSeed::class);
        $this->call(MenuSeed::class);
    }
}
