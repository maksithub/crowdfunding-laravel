<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('projects')->insert([
            [
            'title' => '16年間走り続けたドクターカーを買い替えさせてください！！',
            'thumbnail' => 'https://readyfor.jp/s3/readyfor-img/project_images/54399/large/bcb94cfdac0b73de27eb7f6ad7f40fc1ac46d866.png?1615205653',
            'description' => '',
            'category_id' => 1,
            'user_id' => 1,
            'duration' => 50,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'title' => '安岡正篤の精神を次世代に継ぐ｜記念館・恩賜文庫の一刻も早い修復を',
            'thumbnail' => 'https://readyfor.jp/s3/readyfor-img/project_images/54066/large/0659b299bc4733dfdc8ef1fae2959e6830f877b2.png?1612257120',
            'description' => '',
            'category_id' => 1,
            'user_id' => 1,
            'duration' => 60,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'title' => '新型コロナ感染拡大を水際で食い止める：夜間休日診療へご支援を',
            'thumbnail' => 'https://readyfor.jp/s3/readyfor-img/project_images/54316/large/a17c9aaa61e80a1bf71d0d850af4e5baa9800bbd.?1609743317',
            'description' => '',
            'category_id' => 1,
            'user_id' => 1,
            'duration' => 45,
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'title' => '自分の体ってすごいんだ！今こそ、免疫の不思議を絵本で子どもたちに！',
            'thumbnail' => 'https://readyfor.jp/s3/readyfor-img/project_images/56868/large/a17c9aaa61e80a1bf71d0d850af4e5baa9800bbd.?1611919870',
            'description' => '',
            'category_id' => 1,
            'user_id' => 1,
            'duration' => 45,
            'created_at' => now(),
            'updated_at' => now(),
            ],
        ]);
    }
}
