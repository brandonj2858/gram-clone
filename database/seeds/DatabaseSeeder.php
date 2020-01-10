<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('posts')->insert([
            'user_id' => '1',
            'image' => 'https://cdn.images.express.co.uk/img/dynamic/151/590x/secondary/It-is-not-known-which-type-of-shark-attacked-the-woman-2235865.jpg?r=1577762732019',
            'caption' => 'Hey there',
        ]);


    }
}
