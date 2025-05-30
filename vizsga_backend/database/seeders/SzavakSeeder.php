<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SzavakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('szavak')->insert([
            [
                'angol' => 'beautiful',
                'magyar' => 'gyönyörű',
                'temaId' => 1
            ],
            [
                'angol'=>'create',
                'magyar'=>'létrehozni',
                'temaId'=> 2
            ],
        ]);
    }
}
