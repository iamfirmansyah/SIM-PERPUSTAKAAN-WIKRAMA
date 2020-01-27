<?php

use Illuminate\Database\Seeder;

class ArtikelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artikel')->insert([
            [
                'judul' => 'Android',
                'deskripsi' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum error doloribus dolor libero. Adipisci odio nemo quod omnis accusamus voluptatibus, repellat ab, ullam, voluptate delectus similique quidem eligendi suscipit aspernatur.</p>',
                'cover' => 'android.jpg',
                'label' => 'Programing',
                'author' => 'Imam Firmansyah',
                'created_at' => now(),
                'updated_at' => now()
            ],[
                'judul' => 'Laravel',
                'deskripsi' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum error doloribus dolor libero. Adipisci odio nemo quod omnis accusamus voluptatibus, repellat ab, ullam, voluptate delectus similique quidem eligendi suscipit aspernatur.</p>',
                'cover' => 'laravel.jpg',
                'label' => 'Programing',
                'author' => 'Neddy AP',
                'created_at' => now(),
                'updated_at' => now()
            ],]);
    }
}
