<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Table2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('table2')->insert([
            'product' => Str::random(10),
            'order' => Str::random(10).'@gmail.com',
            'client' => Hash::make('password'),
        ]);
    }
}
