<?php

use Illuminate\Database\Seeder;

class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'と村',
            'type' => '京料理',
            'score' => '4.50',
            'smoking' => '分煙',
            'address' => '東京都港区虎ノ門1-11-14 第二ジェスペールビル 1F',
            'ward' => '東京',
            'station' => '虎ノ門駅'
        ];
        DB::table('stores')->insert($param);

        $param = [
            'name' => '焼肉 ジャンボ はなれ',
            'type' => 'ホルモン',
            'score' => '4.46',
            'smoking' => '分煙',
            'address' => '東京都文京区本郷3-27-9 アンリツビル B1F~1F',
            'ward' => '東京',
            'station' => '本郷3丁目駅'
        ];
        DB::table('stores')->insert($param);

        $param = [
            'name' => '鷹匠壽',
            'type' => '鳥料理',
            'score' => '4.40',
            'smoking' => '全席喫煙可',
            'address' => '東京都台東区雷門2-14-6',
            'ward' => '東京',
            'station' => '浅草駅 (東部・都営・メトロ)'
        ];
        DB::table('stores')->insert($param);
    }
}
