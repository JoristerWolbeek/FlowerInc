<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use App\Models\Warehouse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WarehouseController extends Controller
{
    public function index()
    {
        $warehouses = Warehouse::with('flowers')->get();
        $flowers = db::table('flowers')->get();
        return view('warehouses', ['warehouses' => $warehouses, 'flowers' => $flowers]);
    }

    public function add()
    {
        $warehouses = Warehouse::with('flowers')->get();
        return view('warehouseAdd', ['warehouses' => $warehouses]);
    }

    public function create(Request $request)
    {
        $warehouse = new Warehouse();
        $warehouse->name = $request->name;
        $warehouse->location = $request->location;
        $warehouse->save();
        $warehouses = Warehouse::with('flowers')->get();
        return view('warehouseAdd', ['warehouses' => $warehouses]);
    }

    public function delete(Request $request)
    {
        $warehouse = Warehouse::find($request->delete);
        $warehouse->delete();
        $warehouses = Warehouse::with('flowers')->get();
        $flowers = db::table('flowers')->get();
        return view('warehouses', ['warehouses' => $warehouses, 'flowers' => $flowers]);
    }
}
