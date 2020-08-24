<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

 use App\SpotWantTo;
 use App\SpotVisited;

use App\Http\Requests\CreateMypage; 
// use Auth;

class MypageController extends Controller
{
    public function index($id)
    {
         $want = SpotWantTo::find($id);
         return view('users.mypage', [
            'want' => $want,
        ]);}
    public function show($id)
    {
         $visit = SpotVisited::find($id);
         return view('users.mypage', [
            'want' => $visit,
        ]);
       
    //  $wants = Spot::orderBy('id', 'desc')->get();
        // return view('users.mypage');
    // }
    // public function __construct()
    // {
    //     $this->middleware('auth');
     }

    public function mypage($id)
    {
        // $profile = new User();
        $user = User::find($id);

        //  return view('users.mypage');
        return view('users.mypage', [
            'user' => $user,
        ]);
        // $profile = Auth::user()->find(1);
        // return view('mypage.mypage', ['profile' => $profile, 'id' => $id]);
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
