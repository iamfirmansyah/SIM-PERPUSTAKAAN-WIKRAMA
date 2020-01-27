<?php

use Illuminate\Database\Seeder;

class EbookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ebook')->insert([
            [
                'judul' => 'Android',
                'isbn' => '11706106',
                'pengarang' => 'Imam Firmansyah',
                'penerbit' => 'Jacks',
                'jumlah_halaman' => '300',
                'tahun_terbit' => '2018',
                'deskripsi' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum error doloribus dolor libero. Adipisci odio nemo quod omnis accusamus voluptatibus, repellat ab, ullam, voluptate delectus similique quidem eligendi suscipit aspernatur.</p>',
                'link' => 'youtube.com',
                'cover' => 'android.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'judul' => 'Laravel',
                'isbn' => '11706278',
                'pengarang' => 'Neddy AP',
                'penerbit' => 'Jacks',
                'jumlah_halaman' => '100',
                'tahun_terbit' => '2019',
                'deskripsi' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum error doloribus dolor libero. Adipisci odio nemo quod omnis accusamus voluptatibus, repellat ab, ullam, voluptate delectus similique quidem eligendi suscipit aspernatur.</p>',
                'link' => 'youtube.com',
                'cover' => 'laravel.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]]);
    }
}

