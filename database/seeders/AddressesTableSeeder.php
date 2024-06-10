<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('addresses')->insert([
            'user_id' => 1,
            'address_group_id' => 1,
            'address' => '123 Main St',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
