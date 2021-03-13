<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoneySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('money')->insert([
            [
                'project_id' => 1,
                'target' => 1368000,
                'current' => 456000,
            ],
            [
                'project_id' => 2,
                'target' => 1368000,
                'current' => 456000,
            ],
            [
                'project_id' => 3,
                'target' => 1200000,
                'current' => 11962500,
            ],
            [
                'project_id' => 4,
                'target' => 1500000,
                'current' => 3197000,
            ],
        ]);
    }
}
