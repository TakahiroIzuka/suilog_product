<?php

use Illuminate\Database\Seeder;

class TestLikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'user_id' => 1,
            'store_id' => 1,
        ];
        DB::table('likes')->insert($param);

        $param = [
            'user_id' => 2,
            'store_id' => 2,
        ];
        DB::table('likes')->insert($param);

        $param = [
            'user_id' => 3,
            'store_id' => 3,
        ];
        DB::table('likes')->insert($param);

        $param = [
            'user_id' => 4,
            'store_id' => 4,
        ];
        DB::table('likes')->insert($param);

        $param = [
            'user_id' => 5,
            'store_id' => 5,
        ];
        DB::table('likes')->insert($param);

        $param = [
            'user_id' => 6,
            'store_id' => 6,
        ];
        DB::table('likes')->insert($param);

        $param = [
            'user_id' => 7,
            'store_id' => 7,
        ];
        DB::table('likes')->insert($param);

    }
}
