<?php

use Illuminate\Database\Seeder;

class SpotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $spot = DB::table('spots')->first();
        $kyotos = [
            [
                'title' => '京都で一番人気スポット',
                'body'  => '飛び降りる気持ちで',
            ],
            
        ];

        foreach ($kyotos as $kyoto) {

            DB::table('kyotos')->insert([
                'title' => $kyoto['title'],
                'name' => $kyoto['name'],
                'img' => $kyoto['img/test.jpg'],
                'location' =>$kyoto['location'],
                'iflame_code' =>$kyoto['iflame_code'],
                'body' => $kyoto['body'],
                'spot_id' => $spot->id,
                'user_id' => $user->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
    

