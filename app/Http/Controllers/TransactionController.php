<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
use App\Book;
class TransactionController extends Controller
{
    
    public function save(Request $request)
    {
        $trans = new Transaction;

        $trans->user_id = $request->iduser;
        $trans->recipient = $request->penerima;
        $trans->address = $request->alamat.' Kota '.$request->kota.' '.$request->kodepos;
        $trans->phone = $request->telepon;
        if( $trans->save()){
            $newTrans = Transaction::latest()->take(1)->firstOrFail(); 
            $books = json_decode($request->bukus,true);
            foreach($books as $item){
                $data = [
                    "amount" =>$item["price"]*$item["quantity"],
                    "pay_amount" =>$item["price"]*$item["quantity"],
                ];
                $book = Book::find($item["id"]);
                $book->stock = $book->stock - $item["quantity"];
                $book->save();
                $newTrans->book()->attach($item["id"],$data);
            }
            \Cart::clear();
            alert()->success('Berhasil','Pembayaran Berhasil, Tunggu Paket Buku akan datang :))');
            return redirect()->back();
        }
    }
}
