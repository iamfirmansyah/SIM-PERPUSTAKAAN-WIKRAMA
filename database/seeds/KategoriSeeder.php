<?php

use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategoris')->insert([
            [
                'id_kategori' => '1',
                'nama_kategori' => 'Technology',
                'created_at' => now(),
            ],[
                'id_kategori' => '2',
                'nama_kategori' => 'Art',
                'created_at' => now(),
            ],]);
    }
}
