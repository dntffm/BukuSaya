<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
class CartController extends Controller
{
    
    public function index()
    {
        return view('cart');
    }

    public function checkout()
    {
        return view('checkout');
    }
   
    public function addToCart($id)
    {
        
        /* $data = [];
        $request->session()->put('cart',$data);
        return count($request->session()->get('cart')); */

        alert()->success('Berhasil','Buku Telah ditambahkan Ke Keranjang')->persistent(false);
        return view('/cart');
    }
}
