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

    $spot->name = $request->name;
    $spot->content = $request->content;
    $spot->img = $request->img;
    $spot->location = $request->location;
    $spot->iframe_code = $request->iframe_code;
    $spot->user_id = Auth::user()->id;
    $spot->save();

    return redirect()->route('spot.index');
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
}

