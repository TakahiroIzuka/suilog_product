<?php

use Illuminate\Database\Seeder;

class GeosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'lat' => '35.668952',
            'lng' => '139.750158',
        ];
        DB::table('geos')->insert($param);

        $param = [
            'lat' => '35.706613',
            'lng' => '139.762428',
        ];
        DB::table('geos')->insert($param);

        $param = [
            'lat' => '35.710439',
            'lng' => '139.79505',
        ];
        DB::table('geos')->insert($param);
    }
}
