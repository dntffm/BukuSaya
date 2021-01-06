@extends('layouts.app')
@section('title','TokoBuku - SHop')
@section('content')

<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                
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
            </div>
        </div>
    </div>
</section>
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-5">
                @include('layouts.sidebarshop')
            </div>
            <div class="col-lg-9 col-md-7">
                <div class="filter__item">
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="filter__found">
                                <h6><span>{{count($data)}}</span> Buku Lagi Ready</h6>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="row">
                    @foreach ($data as $index=>$item)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="{{asset("storage/bookcover").'/'.$item->images}}">
                                    <ul class="product__item__pic__hover">
                                        
                                        <li><a href="{{url('/cart/addtocart').'/'.$item->book[$index]->id}}"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="{{url('/shop/product').'/'.$item->book[$index]->id}}">{{$item->book[$index]->title}}</a></h6>
                                    <h5>{{$item->book[$index]->price}}</h5>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{$data->links()}}
                {{-- <div class="product__pagination">
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                </div> --}}
            </div>
        </div>
    </div>
</section>
@endsection