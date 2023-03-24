<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'content_name' => 'ドットインストール',
        ];
        DB::table('contents')->insert($param);


        $param = [
            'content_name' => 'N予備校',
        ];
        DB::table('contents')->insert($param);

        $param = [
            'content_name' => 'POSSE課題',
        ];
        DB::table('contents')->insert($param);
        
    }
}
