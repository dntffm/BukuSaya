<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Category;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('admin.index');
    }
    public function shop()
    {
        $data = Book::paginate(5);
        return view('admin.shop-management',compact('data'));
    }
    public function categories()
    {
        $data = Category::paginate(5);
        return view('admin.categories-management',compact('data'));
    }
}
