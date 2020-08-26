<?php

namespace App\Http\Controllers;
use App\Review;
use Illuminate\Http\Request;
use App\Http\Requests\CreateReview;

class ReviewController extends Controller
{
    public function index()
    {
         
           $reviews = Review::all();
        //    $reviews = Review::orderBy('id', 'desc')->get();
           return view('spots.show',['reviews' => $reviews]);
    }
    public function create()
    {
        // views/diaries/create.blade.phpを表示する
        return view('reviews.reviewcreate');
    }


public function store(CreateReview $request)
{
    $review = new Review(); //Diaryモデルをインスタンス化

    $review->title = $request->title; //画面で入力されたタイトルを代入
    $review->content = $request->content; //画面で入力された本文を代入
    $review->star = $request->review; //画面で入力された本文を代入
    $review->spot_id = $request->spot_id; //画面で入力された本文を代入
    $review->user_id = $request->user_id; //画面で入力された本文を代入
    $review->img = $request->img; //画面で入力された本文を代入
    $review->save(); //DBに保存

    return redirect()->route('spots.show'); //一覧ページにリダイレクト
}

public function destroy(int $id)
{
    //Diaryモデルを使用して、diariesテーブルから$idと一致するidをもつデータを取得
    $review= Review::find($id); 

    //取得したデータを削除
    $review->delete();

    return redirect()->route('spots.show');
}
}
