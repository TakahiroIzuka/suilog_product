<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(StoresTableSeeder::class);
        $this->call(UrlsTableSeeder::class);
        $this->call(GeosTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(TestLikesTableSeeder::class);
        // $this->call(LikesTableSeeder::class);
        $this->call(ArticlesTableSeeder::class);
    }
}
