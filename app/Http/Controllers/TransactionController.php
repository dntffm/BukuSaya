<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaction;
class TransactionController extends Controller
{
    public function store(Request $request)
    {
        $books = json_decode($request->bukus,true);

        $save = Transaction::insert($books);
    }
}
