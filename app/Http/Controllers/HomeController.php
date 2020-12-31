<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Book;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   /*  public function __construct()
    {
        $this->middleware('auth');
    } */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function search(Request $request)
    {
        $data = Book::where('title','LIKE','%'.$request->search.'%')->paginate(5);
        return view('shop',compact('data'));
    }
    public function index()
    {
        $data = Category::all();

        return view('home',compact("data"));
    }

    public function contact()
    {
        return view('contact');
    }
}
