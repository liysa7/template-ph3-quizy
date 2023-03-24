<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class StudyDateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'hour' => 3,
            'date' => '2023-03-20',
            'content_name' => 'ドットインストール',
            'language_name' => 'PHP',
        ];
        DB::table('study_dates')->insert($param);

        $param = [
            'hour' => 7,
            'date' => '2023-02-20',
            'content_name' => 'N予備校',
            'language_name' => 'JavaScript',
        ];
        DB::table('study_dates')->insert($param);

        $param = [
            'hour' => 1,
            'date' => '2023-03-14',
            'content_name' => 'POSSE課題',
            'language_name' => 'SQL',
        ];
        DB::table('study_dates')->insert($param);

        $param = [
            'hour' => 9,
            'date' => '2023-03-18',
            'content_name' => 'N予備校',
            'language_name' => 'SQL',
        ];
        DB::table('study_dates')->insert($param);

        $param = [
            'hour' => 4,
            'date' => '2023-02-18',
            'content_name' => 'ドットインストール',
            'language_name' => 'PHP',
        ];
        DB::table('study_dates')->insert($param);

        $param = [
            'hour' => 4,
            'date' => '2023-02-02',
            'content_name' => 'POSSE課題',
            'language_name' => 'SHELL',
        ];
        DB::table('study_dates')->insert($param);

        $param = [
            'hour' => 6,
            'date' => '2023-01-07',
            'content_name' => 'N予備校',
            'language_name' => 'PHP',
        ];
        DB::table('study_dates')->insert($param);

        $param = [
            'hour' => 10,
            'date' => '2023-03-12',
            'content_name' => 'N予備校',
            'language_name' => 'CSS',
        ];
        DB::table('study_dates')->insert($param);

        $param = [
            'hour' => 4,
            'date' => '2023-03-30',
            'content_name' => 'ドットインストール',
            'language_name' => 'SQL',
        ];
        DB::table('study_dates')->insert($param);

        $param = [
            'hour' => 9,
            'date' => '2023-03-18',
            'content_name' => 'N予備校',
            'language_name' => 'HTML',
        ];
        DB::table('study_dates')->insert($param);

        $param = [
            'hour' => 9,
            'date' => '2023-03-18',
            'content_name' => 'N予備校',
            'language_name' => '情報システム基礎知識(その他)',
        ];
        DB::table('study_dates')->insert($param);

        $param = [
            'hour' => 7,
            'date' => '2023-02-18',
            'content_name' => 'ドットインストール',
            'language_name' => '情報システム基礎知識(その他)',
        ];
        DB::table('study_dates')->insert($param);

    }
}
