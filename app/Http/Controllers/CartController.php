<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Cart;
use App\Book;
use Illuminate\Support\Str;
class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('cart');
    }

    public function checkout()
    {
        return view('checkout');
    }
   
    public function addToCart(Request $request,$id)
    {
        
        $data = Book::find($id);
       
        Cart::add(array(
           'id' => $data->id,
           'name' => $data->title,
           'price' => $data->price,
           'quantity' => 1
        )
        );

        alert()->success('Berhasil','Barang Ditambah ke Keranjang');
        return redirect('/cart');
    }
}
