<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => '佐藤じゅん',
            'email' => 'sato@sample.com',
            'password' => 'user',
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => '鈴木えみ',
            'email' => 'suzuki@sample.com',
            'password' => 'user',
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => '高橋こうすけ',
            'email' => 'takahashi@sample.com',
            'password' => 'user',
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => '田中みさと',
            'email' => 'tanaka@sample.com',
            'password' => 'user',
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => '渡辺つよし',
            'email' => 'watanabe@sample.com',
            'password' => 'user',
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => '伊藤ひろゆき',
            'email' => 'ito@sample.com',
            'password' => 'user',
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => '山本あいか',
            'email' => 'yamamoto@samole.com',
            'password' => 'user',
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => '中村きょうか',
            'email' => 'nakamura@sample.com',
            'password' => 'user',
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => '小林あきら',
            'email' => 'kobayashi@sample.com',
            'password' => 'user',
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => '加藤やすひろ',
            'email' => 'kato@sample.com',
            'password' => 'user',
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => 'user',
            'email' => 'user@sample.com',
            'password' => 'user',
        ];
        DB::table('users')->insert($param);
    }
}
