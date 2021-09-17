<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;
use App\Models\Warehouse;
use Illuminate\Support\Facades\DB;

class StockController extends Controller
{
    public function add(Request $request)
    {
        DB::table('stocks')
        ->updateOrInsert(
            ['flower_id' => $request->flower_id, "warehouse_id" => $request->warehouse_id],
            ['amount' => $request->amount]
        );
        $warehouses = Warehouse::with('flowers')->get();
        $flowers = DB::table('flowers')->get();
        return view('warehouses', ['warehouses' => $warehouses, 'flowers' => $flowers]);
    }
}
