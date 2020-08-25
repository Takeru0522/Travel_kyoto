<?php
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SpotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = DB::table('users')->first();
        $kyotos = [
            [
                'name' => '清水寺',
                'content'  => '飛び降りる気持ちで',
                'location' => '京都府',
                'address' => '住所'
            ],
            [
                'name' => '金閣寺',
                'content'  => '豪華絢爛な建築物。足利義満建立。',
                'location' => '京都府'
            ],

        ];

        foreach ($kyotos as $kyoto) {

            DB::table('spots')->insert([
                'name' => $kyoto['name'],
                'content' => $kyoto['content'],
                'img' => 'img/test.jpg',
                'location' =>$kyoto['location'],
                'iframe_code' => 'testtesttest',
                'user_id' => $user->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                
            ]);
        }
    }
}


