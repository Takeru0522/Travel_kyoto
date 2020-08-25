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
           $reviews = Review::orderBy('id', 'desc')->get();
           return view('reviews.reviewindex',['reviews' => $reviews]);
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
    $review->star = $request->star; //画面で入力された本文を代入
    $review->img = $request->img; //画面で入力された本文を代入
    $review->save(); //DBに保存

    return redirect()->route('reviews.reviewindex'); //一覧ページにリダイレクト
}
}
