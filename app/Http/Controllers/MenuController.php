<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    //
    public function data()
    {
        $menu=DB::table('menus')->get();
      
        return view('menu.data', ['menus' => $menu]);
    }

    public function add()
    {
        return view('menu.add');
    }

    public function addProcess(Request $request)
    {
        DB::table('menus')->insert([
            'name' => $request->name,
            'desc' => $request->desc
        ]);
        
        return redirect('menus')->with('status', 'Berhasil ditambahkan!');
        
    }

    public function edit($id)
    {
        $menu = DB::table('menus')->where('id', $id)->first();
        return view('menu/edit', compact('menu'));
    }

    public function editProcess(Request $request, $id)
    {
        DB::table('menus')->where('id', $id)
        ->update([
            'name' => $request->name,
            'desc' => $request->desc
        ]);

        return redirect('menus')->with('status', 'Berhasil diupdate!');
    }

    public function delete($id)
    {
        DB::table('menus')->where('id', $id)->delete();
        return redirect('menus')->with('status', 'Berhasil dihapus!');
    }
}


