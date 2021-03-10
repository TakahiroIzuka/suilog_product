<?php

use Illuminate\Database\Seeder;

class LikesTableSeeder extends Seeder
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
            'user_id' => 1,
            'store_id' => 3,
        ];
        DB::table('likes')->insert($param);

        $param = [
            'user_id' => 1,
            'store_id' => 5,
        ];
        DB::table('likes')->insert($param);

        $param = [
            'user_id' => 1,
            'store_id' => 7,
        ];
        DB::table('likes')->insert($param);

        $param = [
            'user_id' => 2,
            'store_id' => 7,
        ];
        DB::table('likes')->insert($param);

        $param = [
            'user_id' => 2,
            'store_id' => 9,
        ];
        DB::table('likes')->insert($param);

        $param = [
            'user_id' => 2,
            'store_id' => 11,
        ];
        DB::table('likes')->insert($param);

        $param = [
            'user_id' => 2,
            'store_id' => 13,
        ];
        DB::table('likes')->insert($param);

        $param = [
            'user_id' => 3,
            'store_id' => 13,
        ];
        DB::table('likes')->insert($param);

        $param = [
            'user_id' => 3,
            'store_id' => 15,
        ];
        DB::table('likes')->insert($param);

        $param = [
            'user_id' => 3,
            'store_id' => 17,
        ];
        DB::table('likes')->insert($param);

        $param = [
            'user_id' => 3,
            'store_id' => 19,
        ];
        DB::table('likes')->insert($param);

        $param = [
            'user_id' => 4,
            'store_id' => 19,
        ];
        DB::table('likes')->insert($param);

        $param = [
            'user_id' => 4,
            'store_id' => 20,
        ];
        DB::table('likes')->insert($param);

        $param = [
            'user_id' => 4,
            'store_id' => 1,
        ];
        DB::table('likes')->insert($param);

        $param = [
            'user_id' => 4,
            'store_id' => 2,
        ];
        DB::table('likes')->insert($param);
        $param = [
            'user_id' => 5,
            'store_id' => 3,
        ];
        DB::table('likes')->insert($param);

        $param = [
            'user_id' => 5,
            'store_id' => 4,
        ];
        DB::table('likes')->insert($param);

        $param = [
            'user_id' => 5,
            'store_id' => 5,
        ];
        DB::table('likes')->insert($param);

        $param = [
            'user_id' => 5,
            'store_id' => 6,
        ];
        DB::table('likes')->insert($param);

        $param = [
            'user_id' => 6,
            'store_id' => 6,
        ];
        DB::table('likes')->insert($param);

        $param = [
            'user_id' => 6,
            'store_id' => 7,
        ];
        DB::table('likes')->insert($param);

        $param = [
            'user_id' => 6,
            'store_id' => 8,
        ];
        DB::table('likes')->insert($param);

        $param = [
            'user_id' => 6,
            'store_id' => 9,
        ];
        DB::table('likes')->insert($param);

        $param = [
            'user_id' => 7,
            'store_id' => 10,
        ];
        DB::table('likes')->insert($param);

        $param = [
            'user_id' => 7,
            'store_id' => 11,
        ];
        DB::table('likes')->insert($param);

        $param = [
            'user_id' => 7,
            'store_id' => 13,
        ];
        DB::table('likes')->insert($param);

        $param = [
            'user_id' => 7,
            'store_id' => 15,
        ];
        DB::table('likes')->insert($param);

        $param = [
            'user_id' => 8,
            'store_id' => 15,
        ];
        DB::table('likes')->insert($param);

        $param = [
            'user_id' => 8,
            'store_id' => 17,
        ];
        DB::table('likes')->insert($param);

        $param = [
            'user_id' => 8,
            'store_id' => 19,
        ];
        DB::table('likes')->insert($param);

        $param = [
            'user_id' => 8,
            'store_id' => 20,
        ];
        DB::table('likes')->insert($param);

        $param = [
            'user_id' => 9,
            'store_id' => 7,
        ];
        DB::table('likes')->insert($param);

        $param = [
            'user_id' => 9,
            'store_id' => 4,
        ];
        DB::table('likes')->insert($param);

        $param = [
            'user_id' => 9,
            'store_id' => 10,
        ];
        DB::table('likes')->insert($param);

        $param = [
            'user_id' => 9,
            'store_id' => 3,
        ];
        DB::table('likes')->insert($param);

        $param = [
            'user_id' => 10,
            'store_id' => 11,
        ];
        DB::table('likes')->insert($param);

        $param = [
            'user_id' => 10,
            'store_id' => 20,
        ];
        DB::table('likes')->insert($param);

        $param = [
            'user_id' => 10,
            'store_id' => 1,
        ];
        DB::table('likes')->insert($param);

        $param = [
            'user_id' => 10,
            'store_id' => 3,
        ];
        DB::table('likes')->insert($param);
    }
}
