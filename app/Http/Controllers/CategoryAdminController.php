<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryAdminController extends Controller
{
    public function store(Request $request)
    {
        $create = Category::create([
            'category_name' => $request->kategori
        ]);

        return redirect()->back();
    }

    public function edit($id)
    {
        return Category::find($id);
    }

    public function update(Request $request,$id)
    {
        $data = Category::find($id);
        $data->category_name = $request->kategori;
        $message = "Ubah Kategori Gagal";
        if($data->save())
        {
            $message = "Ubah Kategori Brehasil";
        }
        return redirect()->back()->with('status',$message);
    }
    public function destroy($id)
    {
        $category = Category::find($id);
        $message = "hapus gagal";
        if($category->delete())
        {
            $message = "Hapus sukses";
        }
        return redirect()->back()->with('status',$message);
    }
}
