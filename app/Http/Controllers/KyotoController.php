<?php

namespace App\Http\Controllers;

use App\Kyoto;
use Illuminate\Http\Request;

class KyotoController extends Controller
{
    public function index()
    {
        $spot = Kyoto::all();

        return view('spot.index',['spot' => $spot]);
    }
}
