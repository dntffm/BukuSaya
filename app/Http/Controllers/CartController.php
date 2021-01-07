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

    public function updateCart(Request $request)
    {

        
        
        $ids=  $request->id;
        $amount = $request->jml;
        $i = 0;
        foreach(Cart::getContent() as $item) { 
            $book = Book::find($ids[$i]);
            
            if($book->stock < $amount[$i]){
                alert()->warning('Gagal Update','Stok TIdak Cukup');
                return redirect('/cart');
            }

            Cart::update($ids[$i],[
                'quantity' => array(
                    'relative' => false,
                    'value' => $amount[$i]
                )
            ]); 

            if($item->quantity == 0){
                Cart::remove($item->id);
            }
            $i++;
        }
        return redirect()->back();
    }

    public function deleteCart($id)
    {
        Cart::remove($id);
        return redirect()->back();
    }
}
