<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\SpotWantTo;
use App\SpotVisited;

use Illuminate\Support\Facades\DB;
use App\Http\Requests\CreateMypage; 
use Auth;

class MypageController extends Controller
{
   
   
    public function mypage($id)
    {
        // $profile = new User();
        $visit = DB::table('spot_visited')->where('user_id', $id)->value('spot_id');
        $want = DB::table('spot_want_to')->where('user_id', $id)->value('spot_id');
        // $user=Auth::user();
        $user = User::find($id);
        $picture_path=Auth::user()->picture_path;
        // dd($user);
        $visit_spot = DB::table('spots')->where('id', $visit)->value('name');
        $want_spot = DB::table('spots')->where('id', $want)->value('name');
    //    dd(Auth::user()->picture_path);
        //  return view('users.mypage');
        return view('users.mypage')->with([
            'users' => $user,
             'picture_path' => $picture_path,

            'visit_spots' => $visit_spot,
            'want_spots' => $want_spot,
        ]);
       
        // return view('users.mypage', [
        //     'user' => $user,  'visit' => $visit, 'want' => $want,
        // ]);
    }
    public function edit(int $id)
    {
        //Diaryモデルを使用して、diariesテーブルから$idと一致するidをもつデータを取得
        $user = User::find($id); 

        return view('users.edit', [
            'user' => $user,
        ]);
    }
    public function update(int $id, CreateMypage $request)
    {
        $user = User::find($id);
        $user->name = $request->name; //画面で入力されたタイトルを代入
        $user->email= $request->email; //画面で入力された本文を代入
        // $user->img= 'img'; //画面で入力された本文を代入
        // $user->password= $request->password; 
        // dd($user);//画面で入力された本文を代入
        $imgPath = $this->saveUserImage($request['picture_path']);
        $user->picture_path = $imgPath;
        //  dd($imgPath);
  
        $user->save(); //DBに保存

        return redirect()->route('users.mypage', ['user' => $user]); //一覧ページにリダイレクト
        // return view('users.mypage');
    }
    private function saveUserImage($image)
    {
        // デフォルトではstorage/appに画像が保存されます。
        // 第2引数にpublicをつけることで、storage/app/publicに保存されます。
        // 今回は、/images/profilePictureをつけて、
        // storage/app/public/images/profilePictureに画像が保存されるようにしています。
        // 自分で指定しない場合、ファイル名は自動で設定されます。

        // dd($image, 'come on');
        $imgPath = $image->store('images/userPicture', 'public');

        return 'storage/' . $imgPath;

    }

}
