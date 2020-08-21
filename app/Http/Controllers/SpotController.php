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
    public function show(){
        $spot = Spot::findOrFail($id);
        return view('spots.show');
    }
//     public function edit(int $id){
//         $kyoto = Kyoto::find($id);
//         return view('kyotos.edit', ['kyoto' => $kyoto]);
// }

}