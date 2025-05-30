<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TemakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('tema')->insert([
            [
                'temanev' => 'Kinézetek',
            ],
            [
                'temanev' => 'Igék,'
            ],

        ]);
    }
}
