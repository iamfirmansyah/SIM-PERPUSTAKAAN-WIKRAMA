<?php

use Illuminate\Database\Seeder;

class EmailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('email')->insert([
            [
                'name' => 'johndoe',
                'address' => 'johndoe@gmail.com',
                'subject' => 'Subject 01',
                'message' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum error doloribus dolor libero. Adipisci odio nemo quod omnis accusamus voluptatibus, repellat ab, ullam, voluptate delectus similique quidem eligendi suscipit aspernatur.',
                'status' => 'read',
                'created_at' => now(),
                'updated_at' => now()
            ],[
                'name' => 'janedoe',
                'address' => 'janedoe@gmail.com',
                'subject' => 'Subject 02',
                'message' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus perspiciatis, amet laborum labore ipsa adipisci ut distinctio fugiat, et qui esse hic. Nihil fugit similique minus, dolore deleniti tenetur repellat. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis dolor ab fuga exercitationem animi voluptas officia, necessitatibus tenetur aut aliquam consectetur laboriosam culpa magni totam illum nulla! A, iste aut.',
                'status' => 'unread',
                'created_at' => now(),
                'updated_at' => now()
            ],[
                'name' => 'cha',
                'address' => 'cha@gmail.com',
                'subject' => 'Subject 03',
                'message' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In veniam iusto perferendis sint facilis? Vitae ducimus explicabo, praesentium dolorum dicta commodi maxime incidunt atque deleniti numquam cum amet doloremque modi?',
                'status' => 'unread',
                'created_at' => now(),
                'updated_at' => now()
            ],[
                'name' => 'adamant',
                'address' => 'adamant@gmail.com',
                'subject' => 'Subject 04',
                'message' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure quo facilis nobis voluptatibus consequuntur, ex similique quisquam, quas quia, omnis dolore laudantium officia harum et. Ratione corrupti sequi iure et.',
                'status' => 'read',
                'created_at' => now(),
                'updated_at' => now()
            ],[
                'name' => 'jolly',
                'address' => 'jolly@gmail.com',
                'subject' => 'Subject 05',
                'message' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum dolore aut, reiciendis accusantium excepturi quaerat ex consequuntur ipsum atque, soluta praesentium velit consequatur dolor iure deserunt laudantium tenetur nobis enim!',
                'status' => 'unread',
                'created_at' => now(),
                'updated_at' => now()
            ],[
                'name' => 'pulse',
                'address' => 'pulse@gmail.com',
                'subject' => 'Subject 06',
                'message' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus facere sit eius, at doloremque ducimus architecto ipsam magnam, impedit debitis eum vitae itaque porro sunt doloribus provident iusto voluptas esse?',
                'status' => 'unread',
                'created_at' => now(),
                'updated_at' => now()
            ],]);
    }
}