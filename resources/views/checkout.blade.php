@extends('layouts.app')

@section('content')
<section class="breadcrumb-section set-bg" data-setbg="{{asset('img/breadcrumb.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Checkout</h2>
                    <div class="breadcrumb__option">
                        <a href="{{url('/')}}">Beranda</a>
                        <span>Checkout</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="checkout spad">
    <div class="container">
        <div class="checkout__form">
            <h4>Detail Transaksi</h4>
            <form action="{{url('/cart/transaction')}}" method="POST">
                @csrf
                <input type="hidden" name="iduser" value="{{Auth::user()->id}}">
                <input type="hidden" name="bukus" value="{{\Cart::getContent()}}">
                <div class="row">
                    <div class="col-lg-6 col-md-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="checkout__input">
                                    <p>Nama Lengkap<span>*</span></p>
                                    <input type="text" name="penerima">
                                </div>
                            </div>
                        </div>
                        <div class="checkout__input">
                            <p>Alamat<span>*</span></p>
                            <input type="text" placeholder="Street Address" name="alamat" class="checkout__input__add">
                        </div>
                        <div class="checkout__input">
                            <p>Kota<span>*</span></p>
                            <input type="text" name="kota">
                        </div>
                        <div class="checkout__input">
                            <p>Kode Pos<span>*</span></p>
                            <input type="text" name="kodepos">
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>No. Telepon<span>*</span></p>
                                    <input type="text" name="telepon">
                                </div>
                            </div>
                        </div>

                       
                    </div>
                    @if (count(\Cart::getContent()) > 0)
                    <div class="col-lg-6 col-md-4">
                        <div class="checkout__order">
                            <h4>Transaksi Kamu</h4>
                            <div class="checkout__order__products">Produk <span>Total</span></div>
                            <ul>
                                    <?php  $total = 0; ?>
                                    @foreach (\Cart::getContent() as $item)
                                        <?php $total += $item->price; ?>
                                        <li>{{$item->name}} <span>{{$item->price}}</span></li>
                                    @endforeach
                                </ul>
                                
                                <div class="checkout__order__total">Total <span>{{$total}}</span></div>
                                
                                <button type="submit" class="site-btn">BAYAR SEKARANG</button>
                            </div>
                        </div>
                    </div>
                    @endif
            </form>
        </div>
    </div>
</section>



@endsection