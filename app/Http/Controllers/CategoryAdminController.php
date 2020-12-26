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
