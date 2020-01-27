<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        [
            'name' => 'Imam Firmansyah',
            'username' => 'Firmansyah',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'title' => 'M.Kom',
            'position' => 'Kepala Sekolah',
            'address' => 'Cibaregbeg - Jawa Barat',
            'instagram' => 'instagram.com',
            'twitter' => 'twitter.com',
            'github' => 'github.com',
            'about_me' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae ducimus fuga, praesentium placeat possimus laudantium explicabo. Doloribus odit ab tenetur repellat hic itaque, blanditiis necessitatibus voluptas, qui illum ut atque!',
            'created_at' => now(),
            'updated_at' => now()
        ],[
            'name' => 'Neddy AP',
            'username' => 'Neddy',
            'email' => 'neddy@admin.com',
            'password' => Hash::make('neddy'),
            'title' => 'S.Kom',
            'position' => 'Kepala Sekolah',
            'address' => 'Cicurug - Sukabumi',
            'instagram' => 'instagram.com',
            'twitter' => 'twitter.com',
            'github' => 'github.com',
            'about_me' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis obcaecati aut aliquid sint. Quia, beatae quaerat sapiente sed in cumque numquam ad facilis odio quidem voluptas ut, aperiam, neque mollitia.',
            'created_at' => now(),
            'updated_at' => now()
        ]]);
    }
}
