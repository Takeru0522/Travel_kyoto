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
        $spot->picture_path = $picture_path;
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
        $$imgPath = $image->store('images/spotPicture', 'public');

        return 'storage/' . $imgPath;
    }
    public function show($id){
        $spot = Spot::findOrFail($id);
        return view('spots.show',['spot' => $spot]);
    }
    public function edit(int $id){
        $spot = Spot::find($id);
        // dd($spot);
        return view('spots.edit', ['spot' => $spot]);
        
}
    public function update(int $id, CreateSpot $request)
{
    // dd($request);
    $spot = Spot::find($id);
    
    $imgPath = $this->saveSpotImage($request['picture_path']);
    // dd($imgPath);
    $spot->name = $request->name;
    $spot->content = $request->content;
    $spot->picture_path = $imgPath;
    $spot->location = $request->location;
    $spot->iframe_code = $request->iframe_code;
    $spot->user_id = Auth::user()->id;
    $spot->save();

    return redirect()->route('spot.index'); //一覧ページにリダイレクト
}
}

