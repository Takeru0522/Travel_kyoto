<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon; // 追加
use Illuminate\Support\Facades\DB; // 追加

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'ドラえもん',
                'email'  => 'doraemon@gmail.com',
                'password'=>'abc',
                'img' => 'storage/images/profilePicture/draemon.jpg',
            ],
            [
                'name' => 'ドラみちゃん',
                'email'  => 'dorami@gmail.com',
                'password'=>'aaa',
                'img' => 'storage/images/profilePicture/drami.jpeg',
            ],
            [
                'name' => 'のびた',
                'email'  => 'nobinobi@gmail.com',
                'password'=>'12345',
                'img' => 'storage/images/profilePicture/nobita.png',
            ],

        ];

        foreach ($users as $user) {

            DB::table('users')->insert([
                'name' => $user['name'],
                'email' => $user['email'],
                'password'=>$user['password'],
                'img' => $user['img'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}