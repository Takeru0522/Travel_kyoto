<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Spot;
class SpotController extends Controller
{
    // public function index(){
    //     $spots = Spot::all();
    //     $spot = Spot::find(2);
    //     return view('spots.index', compact('spots','spot'));
    // }
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
    $spot->save(); //DBに保存

    return redirect()->route('spots.update'); //一覧ページにリダイレクト
}
}