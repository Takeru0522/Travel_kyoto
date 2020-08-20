<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reviews = [
            [
                'title' => 'オススメ',
                'content'  => 'とてもいい場所でした。( ´∀｀ )',
                'star'   => '4.5',
                'spot_id' => 1
            ],
            [
                'title' => '旅行好きなら行ってみるべし。',
                'content'  => '一生の思い出になります。是非行ってみてください。',
                'star'   => '4.8',
                'spot_id' => 1
            ],
            [
                'title' => '私にはつまらなかった',
                'content'  => '二度と行きません',
                'star'   => '2.7',
                'spot_id' => 1
            ],
        ];

        foreach ($reviews as $review) {

            DB::table('reviews')->insert([
                'title' => $review['title'],
                'content' => $review['content'],
                'star'   => $review['star'],
                'img' => 'img/test.jpg',
                'spot_id' => $review['spot_id'],
                'user_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
