<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StoreController extends Controller
{
    public function create()
    {
       return view('store.create');
    }

    public function insert(Request $request)
    {
        return $request;
//        return DB::table(
//            'stores'
//        )->insert(
//            [
//                'name' => request()->name,
//                'address' => request()->address,
//            ]
//        );
    }
}
