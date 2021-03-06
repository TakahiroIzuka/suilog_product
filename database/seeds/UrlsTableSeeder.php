<?php

use Illuminate\Database\Seeder;

class UrlsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'url' => 'https://tabelog.com/tokyo/A1308/A130802/13005027/'
        ];
        DB::table('urls')->insert($param);

        $param = [
            'url' => 'https://tabelog.com/tokyo/A1310/A131004/13160962/'
        ];
        DB::table('urls')->insert($param);

        $param = [
            'url' => 'https://tabelog.com/tokyo/A1311/A131102/13003661/'
        ];
        DB::table('urls')->insert($param);
    }
}
