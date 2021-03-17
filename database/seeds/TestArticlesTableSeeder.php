<?php

use Illuminate\Database\Seeder;

class TestArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'title' => '本格的な京料理が味わえる！',
            'body' => '料理に合うお酒も出してくれて最高です！！！',
            'user_id' => 1,
            'store_id' => 1,
        ];
        DB::table('articles')->insert($param);

        $param = [
            'title' => 'コスパ最高！！',
            'body' => 'ボリューム満点のホルモンが格安でいただけます。',
            'user_id' => 2,
            'store_id' => 2,
        ];
        DB::table('articles')->insert($param);

        $param = [
            'title' => '初めてでも入りやすい',
            'body' => 'マスターが気さくな方で、初めて行ったのですがついつい長居してしまいました。新しい隠れ家を見つけた気分です。',
            'user_id' => 3,
            'store_id' => 3,
        ];
        DB::table('articles')->insert($param);
    }
}
