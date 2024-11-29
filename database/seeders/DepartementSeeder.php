<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DepartementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('departments')->insert([
            ['name' => 'null','created_at' => now(), 'updated_at' => now()],
            ['name' => 'IT', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'HR', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}