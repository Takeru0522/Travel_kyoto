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
}
