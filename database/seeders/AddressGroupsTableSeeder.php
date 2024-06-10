<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('address_groups')->insert([
            'name' => 'Group 1',
            'city_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
