@extends('layouts.app')

@section('title',"TokoBuku - toko buku online terbesar di nusantara")
    
@section('content')


<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="hero__categories">
                    <div class="hero__categories__all">
                        <i class="fa fa-bars"></i>
                        <span>Kategori Buku</span>
                    </div>
                    <ul>
                        @foreach ($data as $item)
                            <li><a href="{{url('/shop').'/'.$item->category_name}}">{{$item->category_name}}</a></li>
                        @endforeach
                        
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action="{{url('/search')}}" method="GET">
                            
                            <input name="search" type="text" placeholder="Ingin baca buku apa, saudara?">
                            <button type="submit" class="site-btn">Cari...</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>+65 11.188.888</h5>
                            <span>Dukungan 24/7</span>
                        </div>
                    </div>
                </div>
                <div class="hero__item set-bg" data-setbg="{{asset('img/hero/banner2.jpg')}}">
                    <div class="hero__text">
                        <span class="text-light">BUKU BAGUS TIAP HARI</span>
                        <h2>BUKU APA AJA<br /> TERSEDIA</h2>
                        <p>Bebas Pesan dan Antar Kapan Aja</p>
                        <a href="{{url('/shop')}}" class="primary-btn">BELI BUKU SEKARANG</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


{{-- <section class="categories">
    <div class="container">
        <div class="row">
            <div class="categories__slider owl-carousel">
                @foreach ($data as $item)   
                <div class="col-lg-3">
                    <div class="categories__item set-bg" data-setbg="img/categories/cat-5.jpg">
                        <h5><a href="{{url('/shop').'/'.$item->category_name}}">{{$item->category_name}}</a></h5>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section> --}}


<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Buku Buku Keren</h2>
                </div>
                <div class="featured__controls">
                    <ul>
                        <li class="active" data-filter="*">All</li>
                        @foreach ($data as $item)                  
                            <li data-filter=".{{$item->category_name}}">{{$item->category_name}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="row featured__filter">
            @foreach ($data as $item)  
                @foreach ($item->book as $it)           
                <div class="col-lg-3 col-md-4 col-sm-6 mix {{$item->category_name}}">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{asset('storage/bookcover').'/'.$it->images}}">
                            <ul class="featured__item__pic__hover">
                                {{-- <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li> --}}
                                <li><a href="{{url('/cart/addtocart').'/'.$it->id}}"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="{{url('/shop/product').'/'.$it->id}}">{{$it->title}}</a></h6>
                            <h5>{{$it->price}}</h5>
                        </div>
                    </div>
                </div>
                @endforeach          
            @endforeach
        </div>
    </div>
</section>





{{-- <section class="latest-product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-8">
                <div class="latest-product__text">
                    <h4>Baru Rilis</h4>
                    <div class="latest-product__slider owl-carousel">
                        @foreach (App\Book::limit(5)->get() as $item)              
                            <div class="latest-prdouct__slider__item">
                                <a href="{{url('/shop/product').'/'.$item->id}}" class="latest-product__item">
                                    <div class="latest-product__item__pic">
                                        <img src="img/latest-product/lp-1.jpg" alt="">
                                    </div>
                                    <div class="latest-product__item__text">
                                        <h6>{{$item->title}}</h6>
                                        <span>{{$item->price}}</span>
                                    </div>
                                </a>   
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-8">
                <div class="latest-product__text">
                    <h4>Paling Disukai</h4>
                    <div class="latest-product__slider owl-carousel">
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/lp-1.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                        </div>
                        <div class="latest-prdouct__slider__item">
                            <a href="#" class="latest-product__item">
                                <div class="latest-product__item__pic">
                                    <img src="img/latest-product/lp-1.jpg" alt="">
                                </div>
                                <div class="latest-product__item__text">
                                    <h6>Crab Pool Security</h6>
                                    <span>$30.00</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}


@endsection
{{-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
