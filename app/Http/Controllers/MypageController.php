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
        // $want = SpotWantTo::all();
        // $user=Auth::user();
        $user = User::find($id);
        // dd($user);

        //  return view('users.mypage');
        return view('users.mypage')->with([
            'users' => $user,
            'spot_want_to' => $want,
            'spot_visited' => $visit,
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
        $user->save(); //DBに保存

        return redirect()->route('users.mypage', ['user' => $user]); //一覧ページにリダイレクト
        // return view('users.mypage');
    }


}
