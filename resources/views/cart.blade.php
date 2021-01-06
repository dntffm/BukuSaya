@extends('layouts.app')
@section('title','Keranjang Belanja')

@section('content')


<section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Keranjang Belanja</h2>
                    <div class="breadcrumb__option">
                        <a href="{{url('/')}}">Beranda</a>
                        <span>Keranjang Belanja</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="shoping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th class="shoping__product">Nama Buku</th>
                                <th>Harga</th>
                                <th>Jumlah</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <form action="{{url('/cart/checkout/update')}}" method="POST">
                            @csrf
                        <tbody>
                            @foreach (\Cart::getContent() as $item)
                                <input type="hidden" name="id[]" value="{{$item->id}}">
                               <tr>
                                   <td class="shoping__cart__item">
                                       <img src="img/cart/cart-1.jpg" alt="">
                                       <h5>{{$item->name}}</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        {{$item->price}}
                                    </td>
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" name="jml[]" value="{{$item->quantity}}">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="shoping__cart__total">
                                        {{$item->quantity * $item->price}}
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <a href="{{url('/cart/checkout/delete').'/'.$item->id}}" onclick="return confirm('Are You Sure ?')"> <span class="icon_close"></span></a>
                                    </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="{{url('/shop')}}" class="primary-btn cart-btn">Cari Buku Yang Lain</a>
                        <button type="submit" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                            Update Keranjang</button>
                        </div>
                    </div>
                </form>
            <div class="col-lg-6">
                
            </div>
            <div class="col-lg-6">
                <div class="shoping__checkout">
                    <h5>Keranjang Beli</h5>
                    <ul>
                        <li>Total <span>{{Cart::getTotal()}}</span></li>
                    </ul>
                    <a href="{{url('/cart/checkout/update')}}" class="primary-btn">CHECKOUT SEKARANG</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection