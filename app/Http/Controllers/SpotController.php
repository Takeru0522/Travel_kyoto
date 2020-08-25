<?php

namespace App\Http\Controllers;

use App\Spot;
use App\Review;
use Illuminate\Http\Request;
use App\Http\Requests\CreateSpot;
use Illuminate\Support\Facades\Auth;


class SpotController extends Controller
{
public function index()
    {
        $spots = Spot::all(); 
        $reviews = Review::all();
        $reviews = Review::orderBy('id', 'desc')->get();
       

        return view('spots.show',['spots' => $spots],['reviews' => $reviews]);


    }
public function create()
{
    return view('spots.create');
}
public function store(CreateSpot $request)
{
    
    $spot = new Spot();
    
    $spot->name = $request->name;
    $spot->content = $request->content;
    $spot->img = $request->img;
    $spot->location = $request->location;
    $spot->iframe_code = $request->iframe_code;
    $spot->user_id = Auth::user()->id;
    $spot->save();
    
     return redirect()->route('spot.index');


    $review = new Review(); //Diaryモデルをインスタンス化
    
    $review->title = $request->title; //画面で入力されたタイトルを代入
    $review->content = $request->content; //画面で入力された本文を代入
    $review->star = $request->star; //画面で入力された本文を代入
    $review->img = $request->img; //画面で入力された本文を代入
    $review->save(); //DBに保存
    
    return redirect()->route('spots.show'); //
    }
public function show($id){
        $spot = Spot::findOrFail($id);
        return view('spots.show',['spot' => $spot]);
    }

public function edit(int $id){
        $spot = Spot::find($id);
        return view('spots.edit', ['spot' => $spot]);
        
}
    public function update(int $id, CreateSpot $request)
{
    
    $spot = Spot::find($id);
    
    $spot->title = $request->title; //画面で入力されたタイトルを代入
    $spot->body = $request->body; //画面で入力された本文を代入
    $spot->name = $request->name;
    $spot->content = $request->content;
    $spot->img = $request->img;
    $spot->location = $request->location;
    $spot->iframe_code = $request->iframe_code;
    $spot->user_id = Auth::user()->id;
    
    $spot->save(); //DBに保存

    return redirect()->route('spots.update'); //一覧ページにリダイレクト
}

 
    // public function create()
    // {
    //     // views/diaries/create.blade.phpを表示する
    //     return view('reviews.reviewcreate');
    // }

  



// public function store(CreateReview $request){}

 }