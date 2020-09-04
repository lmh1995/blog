<?php

use Illuminate\Database\Seeder;

class BanKuaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bankuai')->insert([
            'name' => str_random(10),
        ]);
    }
}
