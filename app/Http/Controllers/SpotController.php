<?php

namespace App\Http\Controllers;

use App\Spot;
use Illuminate\Http\Request;
use App\Http\Requests\CreateSpot;
use Illuminate\Support\Facades\Auth;


class SpotController extends Controller
{
    public function index()
    {
        $spots = Spot::all(); 

        return view('spots.index',['spots' => $spots]);
    }
    public function create()
    {
        return view('spots.create');
    }
    public function store(CreateSpot $request)
    {
        $spot = new Spot();
        $imgPath = $this->saveSpotImage($request['picture']);
        $spot->name = $request->name;
        $spot->content = $request->content;
        $spot->picture_path = $imgPath;
        $spot->location = $request->location;
        $spot->iframe_code = $request->iframe_code;
        $spot->user_id = Auth::user()->id;
        $spot->save();

        return redirect()->route('spot.index');
    }
    private function saveSpotImage($image)
    {
        // デフォルトではstorage/appに画像が保存されます。 
        // 第2引数にpublicをつけることで、storage/app/publicに保存されます。 
        // 今回は、/images/profilePictureをつけて、
        // storage/app/public/images/profilePictureに画像が保存されるようにしています。
        // 自分で指定しない場合、ファイル名は自動で設定されます。  
        $imgPath = $image->store('images/spotPicture', 'public');

        return 'storage/' . $imgPath;
    }
    public function search(Request $request) {
        
        dd($request);
        
        if(!empty($keyword_name) && empty($keyword_location) && empty($keyword_created_at)) {
            $query = Spot::query();
            $spots = $query->where('name','like', '%' .$keyword_name. '%')->get();
            //return redirect()->route('spot.index');
          }
          if(empty($keyword_name) && !empty($keyword_location) && empty($keyword_created_at)) {
            $query = Spot::query();
            $spots = $query->where('location','like', '%' .$keyword_location. '%')->get();
            //return redirect()->route('spot.index');
          }
        if(empty($keyword_name) && empty($keyword_location) && !empty($keyword_created_at)) {
            $query = Spot::query();
            $spots = $query->where('created_at','like', '%' .$keyword_created_at. '%')->get();
            //return redirect()->route('spot.index');
          }
        else {
            //return redirect()->route('spot.index');
            }
        



    }    
}
