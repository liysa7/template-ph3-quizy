<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'language_name' => 'HTML',
        ];
        DB::table('languages')->insert($param);

        $param = [
            'language_name' => 'CSS',
        ];
        DB::table('languages')->insert($param);

        $param = [
            'language_name' => 'JavaScript',
        ];
        DB::table('languages')->insert($param);

        $param = [
            'language_name' => 'PHP',
        ];
        DB::table('languages')->insert($param);

        $param = [
            'language_name' => 'Laravel',
        ];
        DB::table('languages')->insert($param);

        $param = [
            'language_name' => 'SQL',
        ];
        DB::table('languages')->insert($param);

        $param = [
            'language_name' => 'SHELL',
        ];
        DB::table('languages')->insert($param);

        $param = [
            'language_name' => '情報システム基礎知識(その他)',
        ];
        DB::table('languages')->insert($param);

    }
}
