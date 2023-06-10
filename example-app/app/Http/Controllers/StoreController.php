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
        return redirect()->route('store.index');
    }

    public function edit($id)
    {
        $store = DB::table('store')->where('id', $id)->first();
        return view('store.edit', compact('store'));
    }

    public function update(Request $request, $id)
    {
        $update = DB::table('store')->where('id', $id)->update([
            'title' => $request->title,
            'body' => $request->body,
        ]);
        return redirect()->route('store.index' , compact('update'));
    }

    public function delete($id){
        DB::table('store')->where('id',$id)->delete();
        return redirect()->route('store.index');
    }

    public function deleteAll(){
       $deleteUser =  DB::table('store')->delete();
        return redirect()->route('store.index', compact('deleteUser'));
    }

    public function deleteTruncate(){
        $deleteTruncate=  DB::table('store')->truncate();
        return redirect()->route('store.index' , compact('deleteTruncate'));
    }
}
