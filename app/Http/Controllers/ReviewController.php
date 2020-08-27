<?php

namespace App\Http\Controllers;
use App\Review;
use App\User;
use Illuminate\Support\Facades\Auth;

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
    $review = new Review(); 

    $review->title = $request->title; //画面で入力されたタイトルを代入
    $review->content = $request->content; //画面で入力されたタイトルを代入
    
    
    $imgPath = $this->saveReviewImage($request['picture_path']);
    $review->picture_path = $imgPath;
    // dd($imgPath);
  
   
    $num = $request->star;
    $float=floatval($num);
    // dd(gettype($float));

    $review->star =$float;

   
     $review->user_id = Auth::user()->id;
    //   $review->spot_id = $request->spot_id;
     
      $review->spot_id =1;
    
    
    $review->save(); 

    // return redirect()->route('spots.show',['id' => 1]); //一覧ページにリダイレクト
    return redirect()->route('spot.index'); //一覧ページにリダイレクト
}
private function saveReviewImage($image)
    {
        // デフォルトではstorage/appに画像が保存されます。
        // 第2引数にpublicをつけることで、storage/app/publicに保存されます。
        // 今回は、/images/profilePictureをつけて、
        // storage/app/public/images/profilePictureに画像が保存されるようにしています。
        // 自分で指定しない場合、ファイル名は自動で設定されます。

        //  dd($image, 'come on');
        $imgPath = $image->store('images/reviewPicture', 'public');

        return 'storage/' . $imgPath;

    }
public function destroy(int $id)
{
    //Diaryモデルを使用して、diariesテーブルから$idと一致するidをもつデータを取得
    $review= Review::find($id); 

    
    $review->delete();

    return redirect()->route('spot.index');
}

public function edit(int $id)
{
     //Diaryモデルを使用して、diariesテーブルから$idと一致するidをもつデータを取得
    $review = Review::find($id); 
    //  dd($review);
     return view('reviews.reviewedit', [
        'review' => $review,
     ]);
    
}
public function update(int $id, CreateReview $request)
{
    $review= Review::find($id);

    $review->title = $request->title; //画面で入力されたタイトルを代入
    $review->content = $request->content; //画面で入力された本文を代入
    
    $num = $request->star;
    $float=floatval($num); //画面で入力された本文を代入
    $review->spot_id = 1; //画面で入力された本文を代入
    $review->user_id = Auth::user()->id;
     //画面で入力された本文を代入
    $imgPath = $this->saveReviewImage($request['picture_path']);
    $review->picture_path = $imgPath;//画面で入力された本文を代入
    $review->save(); //DBに保存

    return redirect()->route('spot.index'); 
}

public function like(int $id)
{
    $review = Review::where('id', $id)->with('review_likes')->first();

    $review->likes()->attach(Auth::user()->id);
}

}
