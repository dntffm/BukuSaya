
<div class="sidebar">
    <div class="sidebar__item">
        <h4>Kategori</h4>
        <ul>
            @foreach (App\Category::all() as $item)
                <li><a href="{{url('/shop/').'/'.$item->category_name}}">{{$item->category_name}}</a></li>
            @endforeach
        </ul>
    </div>
    {{-- <div class="sidebar__item">
        <h4>Price</h4>
        <div class="price-range-wrap">
            <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                data-min="10" data-max="540">
                <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
            </div>
            <div class="range-slider">
                <div class="price-input">
                    <input type="text" id="minamount">
                    <input type="text" id="maxamount">
                </div>
            </div>
        </div>
    </div> --}}
    <div class="sidebar__item">
        <div class="latest-product__text">
            {{-- <h4>Buku Baru</h4>
            <div class="latest-product__slider owl-carousel">
                @foreach (App\Book::limit(5)->get() as $item)             
                    <div class="latest-prdouct__slider__item">
                        <a href="{{url('/shop/product').'/'.$item->id}}" class="latest-product__item">
                            <div class="latest-product__item__pic">
                                <img src="{{asset('storage/bookcover').'/'.$item->images}}" alt="">
                            </div>
                            <div class="latest-product__item__text">
                                <h6>{{$item->title}}</h6>
                                <span>{{$item->price}}</span>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div> --}}
        </div>
    </div>
</div>