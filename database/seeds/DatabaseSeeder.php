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
        $this->call(UsersTableSeeder::class);
        $this->call(KategoriSeeder::class);
        $this->call(EtubeTableSeeder::class);
        $this->call(EmailTableSeeder::class);
        $this->call(EbookTableSeeder::class);
        $this->call(ArtikelTableSeeder::class);
    }
}
