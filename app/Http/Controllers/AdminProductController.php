<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Validator;
use Alert;
class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            
            'judul' => 'required',
            'harga' => 'required',
            'penerbit' => 'required',
            'penulis' => 'required',
            'kategori' => 'required',
            'stock' => 'required',
            'cover' => 'required|mimes:jpg,jpeg,png,bmp,tiff |max:4096',
        ]);
        
       if($validator->fails())
       {
           return redirect('/admin/shop')->withErrors($validator)->withInput();
       }

       $cover = $request->file('cover');
       $path = '/storage/bookcover';
       $filename = time().'_'.$cover->getClientOriginalName();

       $cover->move($path,$filename);

       $create = Book::create([
           "title" => $request->judul,
           "author" => $request->penulis,
           "publisher" => $request->penerbit,
           "price" => $request->harga,
           "images" => $filename,
           "stock" => $request->stock
       ]);

       if($create){
           $book = Book::latest()->take(1)->firstOrFail();
           
           $book->category()->attach($request->kategori);
       }

       //alert()->success('Berhasil','Buku baru sudah ditambahkan');
      
       return redirect()->back()->with('success','Buku baru sudah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Book::with('category')->where('id',$id)->firstOrFail();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return Book::where('id','=',$id)->with('category')->firstOrFail();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->cover == null)
        {
            //upload file
        }

        $book = Book::find($id);
        $book->title = $request->judul;
        $book->author = $request->penulis;
        $book->publisher = $request->penerbit;
        $book->price = $request->harga;
        $book->stock = $request->stock;
        $book->category()->updateExistingPivot($request->catid,['category_id'=>$request->kategori]);
        
        if($book->save())
        {
            return redirect('/admin/shop');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        
        $msg = "Gagal Dihapus";
        $detach = Book::find($id)->category()->detach($request->catid);
        if($detach){
            if(Book::find($id)->delete()){
                $msg = "Hapus Berhasil";
            }
        }
        return redirect('/admin/shop')->with('status',$msg);
    }
}
