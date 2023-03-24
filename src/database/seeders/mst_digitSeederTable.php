<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class mst_digitSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'digit' => '0',
        ];
        DB::table('mst_digit')->insert($param);

        $param = [
            'digit' => '1',
        ];
        DB::table('mst_digit')->insert($param);

        $param = [
            'digit' => '2',
        ];
        DB::table('mst_digit')->insert($param);

        $param = [
            'digit' => '3',
        ];
        DB::table('mst_digit')->insert($param);

        $param = [
            'digit' => '4',
        ];
        DB::table('mst_digit')->insert($param);

        $param = [
            'digit' => '5',
        ];
        DB::table('mst_digit')->insert($param);

        $param = [
            'digit' => '6',
        ];
        DB::table('mst_digit')->insert($param);

        $param = [
            'digit' => '7',
        ];
        DB::table('mst_digit')->insert($param);

        $param = [
            'digit' => '8',
        ];
        DB::table('mst_digit')->insert($param);

        $param = [
            'digit' => '9',
        ];
        DB::table('mst_digit')->insert($param);

    }
}
