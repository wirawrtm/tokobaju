@extends('main')
@section('body')						
        <!-- start section -->
        <section class="half-section parallax" data-parallax-background-ratio="0.5" style="background-image:url('images/portfolio-bg.jpg');">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-12 shopping-content d-flex flex-column flex-lg-row align-items-md-center">
                        <div class="w-60 md-w-100">
                            <div class="product-images-box lightbox-portfolio row">
                                <div class="col-12 col-lg-9 px-lg-0 order-lg-2 product-image md-margin-10px-bottom">
                                    <div class="swiper-container product-image-slider" data-slider-options='{ "spaceBetween": 10, "watchOverflow": true, "navigation": { "nextEl": ".slider-product-next", "prevEl": ".slider-product-prev" }, "thumbs": { "swiper": { "el": ".product-image-thumb", "slidesPerView": "auto", "spaceBetween": 15, "direction": "vertical", "navigation": { "nextEl": ".swiper-thumb-next", "prevEl": ".swiper-thumb-prev" } } } }' data-thumb-slider-md-direction="horizontal">
                                        <div class="swiper-wrapper">
                                            <!-- start slider item -->
                                            <div class="swiper-slide product-image-thumb">
                                                <a class="gallery-link" href="{{asset('storage/'.$produk->foto)}}"><img class="w-100" src="{{asset('storage/'.$produk->foto)}}" alt=""></a>
                                            </div>
                                            <!-- end slider item -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-40 md-w-100 product-summary padding-1-rem-left lg-padding-5-rem-left md-no-padding-left">
                            <form method="POST" action="{{route('addkeranjang')}} ">
                                @csrf
                                <input type="hidden" name="iduser" value="{{$produk->iduser}} ">
                                <input type="hidden" name="idbarang" value="{{$produk->id}} ">
                                <input type="hidden" name="harga" value="{{$produk->harga}} ">

                            <div class="d-flex align-items-center margin-3-half-rem-tb md-margin-1-half-rem-tb">
                                <div class="flex-grow-1">
                                    <div class="text-extra-dark-gray font-weight-500 text-extra-large alt-font margin-5px-bottom">{{$produk->nama}} </div>
                                    <span class="product-price text-extra-medium">Rp. {{number_format($produk->harga,0,',','.')}}</span>
                                </div>
                            </div>
                            <div class="last-paragraph-no-margin">
                                <p>{{$produk->keterangan}} </p>
                            </div>
                            <div class="margin-4-rem-top">
                                <div class="margin-20px-bottom">
                                    <label class="text-extra-dark-gray text-extra-small font-weight-500 alt-font text-uppercase w-60px">color</label>
                                    <ul class="alt-font shop-color">
                                        <li class="@if ($produk->detail1=='')
                                            {{'invisible'}}
                                        @else
                                        @endif @if ($produk->detail1=='') {{'position-absolute'}} else {{'position-relative'}}@endif">
                                            <input type="radio" class="btn-check" id="btn-check-outlined1" name="detail" value="{{$produk->detail1}}">
                                            <label class="btn btn-outline-primary" for="btn-check-outlined1">{{$produk->detail1}}</label>                                        
                                        </li>
                                        <li class="@if ($produk->detail2=='')
                                            {{'invisible'}}
                                        @else
                                        @endif @if ($produk->detail2=='') {{'position-absolute'}} else {{'position-relative'}}@endif">
                                            <input type="radio" class="btn-check" id="btn-check-outlined2" name="detail" value="{{$produk->detail2}}">
                                            <label class="btn btn-outline-primary" for="btn-check-outlined2">{{$produk->detail2}}</label>                                        
                                        </li>
                                        <li class="@if ($produk->detail3=='')
                                            {{'invisible'}}
                                        @else
                                        @endif @if ($produk->detail3=='') {{'position-absolute'}} else {{'position-relative'}}@endif">
                                            <input type="radio" class="btn-check" id="btn-check-outlined3" name="detail" value="{{$produk->detail3}}">
                                            <label class="btn btn-outline-primary" for="btn-check-outlined3">{{$produk->detail3}}</label>                                        
                                        </li>
                                        <li class="@if ($produk->detail4=='')
                                            {{'invisible'}}
                                        @else
                                        @endif @if ($produk->detail4=='') {{'position-absolute'}} else {{'position-relative'}}@endif">
                                            <input type="radio" class="btn-check" id="btn-check-outlined4" name="detail" value="{{$produk->detail4}}">
                                            <label class="btn btn-outline-primary" for="btn-check-outlined4">{{$produk->detail4}}</label>                                        
                                        </li>
                                        <li class="@if ($produk->detail5=='')
                                            {{'invisible'}}
                                        @else
                                        @endif @if ($produk->detail5=='') {{'position-absolute'}} else {{'position-relative'}}@endif">
                                            <input type="radio" class="btn-check" id="btn-check-outlined5" name="detail" value="{{$produk->detail5}}">
                                            <label class="btn btn-outline-primary" for="btn-check-outlined5">{{$produk->detail5}}</label>                                        
                                        </li>
                                        
                                    </ul>
                                </div>
                                <div class="margin-4-rem-bottom">
                                    <label class="text-extra-dark-gray text-extra-small font-weight-500 alt-font text-uppercase w-60px">Size</label>
                                    <ul class="text-extra-small shop-size">
                                        <li class="@if ($produk->ukurans=='')
                                            {{'invisible'}}
                                        @else
                                            
                                        @endif @if ($produk->ukurans=='') {{'position-absolute'}} else {{'position-relative'}}@endif">
                                            <input class="d-none" type="radio" id="size-1" name="size" value="s"/>
                                            <label for="size-1" class="width-80"><span>S</span></label>
                                        </li>
                                        <li class="@if ($produk->ukuranm=='')
                                            {{'invisible'}}
                                        @else
                                            
                                        @endif @if ($produk->ukuranm=='') {{'position-absolute'}} else {{'position-relative'}}@endif">
                                            <input class="d-none" type="radio" id="size-2" name="size" value="m" />
                                            <label for="size-2" class="width-80"><span>M</span></label>
                                        </li>
                                        <li class="@if ($produk->ukuranl=='')
                                            {{'invisible'}}
                                        @else
                                            
                                        @endif @if ($produk->ukuranl=='') {{'position-absolute'}} else {{'position-relative'}}@endif">
                                            <input class="d-none" type="radio" id="size-3" name="size" value="l" />
                                            <label for="size-3" class="width-80"><span>L</span></label>
                                        </li>
                                        <li class="@if ($produk->ukuranxl=='')
                                            {{'invisible'}}
                                        @else
                                            
                                        @endif @if ($produk->ukuranxl=='') {{'position-absolute'}} else {{'position-relative'}}@endif">
                                            <input class="d-none" type="radio" id="size-4" name="size" value="xl" />
                                            <label for="size-4" class="width-80"><span>XL</span></label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="last-paragraph-no-margin">
                                <textarea name="keterangan" placeholder="silahkan isikan keterangan" cols="30" rows="5"></textarea>
                            </div>
                            <div>
                                <div class="quantity margin-15px-right">
                                    <label class="screen-reader-text">Quantity</label>
                                    <input type="button" value="-" class="qty-minus qty-btn" data-quantity="minus" data-field="jumlah">
                                    <input class="input-text qty-text" type="number" name="jumlah" value="1">
                                    <input type="button" value="+" class="qty-plus qty-btn" data-quantity="plus" data-field="jumlah">
                                </div>
                                <button type="submit" class="btn btn-dark-gray btn-medium">Add to cart</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
@endsection