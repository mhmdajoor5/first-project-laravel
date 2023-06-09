<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StoreController extends Controller
{

    public function index()
    {
        $stores = DB::table('store')->get();
        return view('store.index', compact('stores'));
    }

    public function create()
    {
       return view('store.create');
    }

    public function insert(Request $request)
    {
        DB::table('store')->insert([
            'title' => $request->title,
            'body' => $request->body,
        ]);
        return response('تمت إضافة البيانات بنجاح.');
    }

    public function edit($id)
    {
        $store = DB::table('store')->where('id', $id)->first();
        return view('store.edit', compact('store'));
    }
}
