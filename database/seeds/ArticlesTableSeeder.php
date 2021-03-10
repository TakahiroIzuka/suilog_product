<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
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
            'user_id' => 1,
            'store_id' => 8,
        ];
        DB::table('articles')->insert($param);

        $param = [
            'title' => '初めてでも入りやすい',
            'body' => 'マスターが気さくな方で、初めて行ったのですがついつい長居してしまいました。新しい隠れ家を見つけた気分です。',
            'user_id' => 5,
            'store_id' => 9,
        ];
        DB::table('articles')->insert($param);

        $param = [
            'title' => '落ち着いた雰囲気のお店です',
            'body' => 'デートなどにも最適です、もちろん一人でしっぽり飲むのも良いかと。',
            'user_id' => 5,
            'store_id' => 17,
        ];
        DB::table('articles')->insert($param);

        $param = [
            'title' => '味良し、接客良し！',
            'body' => '老舗のお店なので、味は本当に間違いないです！',
            'user_id' => 8,
            'store_id' => 18,
        ];
        DB::table('articles')->insert($param);

        $param = [
            'title' => '店員さんが気さくで話やすいです！',
            'body' => '常連です！普段飲めないお酒も飲めるので毎回新しいお酒を飲んでいます',
            'user_id' => 9,
            'store_id' => 17,
        ];
        DB::table('articles')->insert($param);

        $param = [
            'title' => '飲んで良し、食べて良し！',
            'body' => 'お酒に合う焼き鳥をいただけます！',
            'user_id' => 10,
            'store_id' => 4,
        ];
        DB::table('articles')->insert($param);

        $param = [
            'title' => '希少部位がリーズナブルな値段でいただけます！',
            'body' => 'メインのホルモンが美味しい！',
            'user_id' => 10,
            'store_id' => 16,
        ];
        DB::table('articles')->insert($param);
    }
}
