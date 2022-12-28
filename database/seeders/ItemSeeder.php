<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_items')->insert([
            'item_name' => 'computer' . Str::random(8),
            'description' => Str::random(15),
            'uom' => "NOs"
        ]);
    }
}
