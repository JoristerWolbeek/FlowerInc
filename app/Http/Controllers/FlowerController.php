<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Flower;
use App\Models\Flowers;

class FlowerController extends Controller
{
    public function index()
    {
        $flowers = Flower::get();
        return view('flowers', ['flowers' => $flowers]);
    }

    public function add()
    {
        $flowers = Flower::get();
        return view('flowersAdd', ['flowers' => $flowers]);
    }

    public function create(Request $request)
    {
        $flower = new Flower();
        $flower->name = $request->name;
        $flower->save();
        $flowers = Flower::get();
        return view('flowersAdd', ['flowers' => $flowers]);
    }

    public function delete(Request $request)
    {
        $flower = Flower::find($request->delete);
        $flower->delete();
        $flowers = Flower::get();
        $flowers = DB::table('flowers')->get();
        return view('flowers', ['flowers' => $flowers]);
    }
}
