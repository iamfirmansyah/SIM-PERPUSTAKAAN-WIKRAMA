<?php

use Illuminate\Database\Seeder;

class EtubeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('etube')->insert([
        [
            'judul' => 'Android',
            'link' => 'Emr2q3DYlN0',
            'deskripsi' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum error doloribus dolor libero. Adipisci odio nemo quod omnis accusamus voluptatibus, repellat ab, ullam, voluptate delectus similique quidem eligendi suscipit aspernatur.</p>',
            'author' => 'Imam Firmansyah',
            'created_at' => now(),
            'updated_at' => now(),
            'id_kategori' => '1'
        ],[
            'judul' => 'Laravel',
            'link' => 'ISK6o60cCQo',
            'deskripsi' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus voluptate possimus labore non necessitatibus provident soluta officia molestiae sint enim debitis quae quia reiciendis, qui quod ab atque, nobis ea?</p>',
            'author' => 'Neddy AP',
            'created_at' => now(),
            'updated_at' => now(),
            'id_kategori' => '1'
        ],[
            'judul' => 'Python',
            'link' => 'SsUF-7X3ehM',
            'deskripsi' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus voluptate possimus labore non necessitatibus provident soluta officia molestiae sint enim debitis quae quia reiciendis, qui quod ab atque, nobis ea?</p>',
            'author' => 'Neddy AP',
            'created_at' => now(),
            'updated_at' => now(),
            'id_kategori' => '1'
        ],]);
    }
}
