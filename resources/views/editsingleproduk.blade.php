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
                                                <a class="gallery-link" href="images/tshirt/T-shirt-Mockup.jpg"><img class="w-100" src="{{asset('storage/'.$produk->produk->foto)}}" alt=""></a>
                                            </div>
                                            <!-- end slider item -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-40 md-w-100 product-summary padding-1-rem-left lg-padding-5-rem-left md-no-padding-left">
                            <form method="POST" action="{{route('updatekeranjang',['id'=>$produk->id])}} ">
                                @csrf
                                <input type="hidden" name="iduser" value="{{$produk->produk->iduser}} ">
                                <input type="hidden" name="idbarang" value="{{$produk->produk->id}} ">
                                <input type="hidden" name="harga" value="{{$produk->produk->harga}} ">


                            <div class="d-flex align-items-center margin-3-half-rem-tb md-margin-1-half-rem-tb">
                                <div class="flex-grow-1">
                                    <div class="text-extra-dark-gray font-weight-500 text-extra-large alt-font margin-5px-bottom">{{$produk->produk->nama}} </div>
                                    <span class="product-price text-extra-medium">{{number_format($produk->produk->harga,0,',','.')}}</span>
                                </div>
                            </div>
                            <div class="last-paragraph-no-margin">
                                <p>{{$produk->keterangan}} </p>
                            </div>
                            <div class="margin-4-rem-top">
                                <div class="margin-20px-bottom">
                                    <label class="text-extra-dark-gray text-extra-small font-weight-500 alt-font text-uppercase w-60px">color</label>
                                    <ul class="alt-font shop-color">
                                        <li class="@if ($produk->produk->detail1=='')
                                            {{'invisible'}}
                                        @else
                                        @endif @if ($produk->produk->detail1=='') {{'position-absolute'}} else {{'position-relative'}}@endif ">
                                            <input type="radio" class="btn-check" id="btn-check-outlined1" name="detail" value="{{$produk->produk->detail1}}" @if ($produk->detail==$produk->produk->detail1)
                                            {{'checked'}} 
                                         @endif />
                                            <label class="btn btn-outline-primary" for="btn-check-outlined1">{{$produk->produk->detail1}}</label>                                        
                                        </li>
                                        <li class="@if ($produk->produk->detail2=='')
                                            {{'invisible'}}
                                        @else
                                        @endif @if ($produk->produk->detail2=='') {{'position-absolute'}} else {{'position-relative'}}@endif">
                                            <input type="radio" class="btn-check" id="btn-check-outlined2" name="detail" value="{{$produk->produk->detail2}}" @if ($produk->detail==$produk->produk->detail2)
                                            {{'checked'}} 
                                         @endif />
                                            <label class="btn btn-outline-primary" for="btn-check-outlined2">{{$produk->produk->detail2}}</label>                                        
                                        </li>
                                        <li class="@if ($produk->produk->detail3=='')
                                            {{'invisible'}}
                                        @else
                                        @endif @if ($produk->produk->detail3=='') {{'position-absolute'}} else {{'position-relative'}}@endif">
                                            <input type="radio" class="btn-check" id="btn-check-outlined3" name="detail" value="{{$produk->produk->detail3}}" @if ($produk->detail==$produk->produk->detail3)
                                            {{'checked'}} 
                                         @endif />
                                            <label class="btn btn-outline-primary" for="btn-check-outlined3">{{$produk->produk->detail3}}</label>                                        
                                        </li>
                                        <li class="@if ($produk->produk->detail4=='')
                                            {{'invisible'}}
                                        @else
                                        @endif @if ($produk->produk->detail4=='') {{'position-absolute'}} else {{'position-relative'}}@endif">
                                            <input type="radio" class="btn-check" id="btn-check-outlined4" name="detail" value="{{$produk->produk->detail4}}" @if ($produk->detail==$produk->produk->detail4)
                                            {{'checked'}} 
                                         @endif />
                                            <label class="btn btn-outline-primary" for="btn-check-outlined4">{{$produk->produk->detail4}}</label>                                        
                                        </li>
                                        <li class="@if ($produk->produk->detail5=='')
                                            {{'invisible'}}
                                        @else
                                        @endif @if ($produk->produk->detail5=='') {{'position-absolute'}} else {{'position-relative'}}@endif">
                                            <input type="radio" class="btn-check" id="btn-check-outlined5" name="detail" value="{{$produk->produk->detail5}}" @if ($produk->detail==$produk->produk->detail5)
                                            {{'checked'}} 
                                         @endif />
                                            <label class="btn btn-outline-primary" for="btn-check-outlined5">{{$produk->produk->detail5}}</label>                                        
                                        </li>
                                        
                                    </ul>
                                </div>
                                <div class="margin-4-rem-bottom">
                                    <label class="text-extra-dark-gray text-extra-small font-weight-500 alt-font text-uppercase w-60px">Size</label>
                                    <ul class="text-extra-small shop-size">
                                        <li class="@if ($produk->produk->ukurans=='')
                                            {{'invisible'}}
                                        @else
                                        @endif @if ($produk->produk->ukurans=='') {{'position-absolute'}} else {{'position-relative'}}@endif">
                                            <input class="d-none" type="radio" id="size-1" name="size" value="s" @if($produk->ukuran=='s') checked @endif/>
                                            <label for="size-1" class="width-80"><span>S</span></label>
                                        </li>
                                        <li class="@if ($produk->produk->ukuranm=='')
                                            {{'invisible'}}
                                        @else
                                        @endif @if ($produk->produk->ukuranm=='') {{'position-absolute'}} else {{'position-relative'}}@endif">
                                            <input class="d-none" type="radio" id="size-2" name="size" value="m" @if($produk->ukuran=='m') checked @endif/>
                                            <label for="size-2" class="width-80"><span>M</span></label>
                                        </li>
                                        <li class="@if ($produk->produk->ukuranl=='')
                                            {{'invisible'}}
                                        @else
                                        @endif @if ($produk->produk->ukuranl=='') {{'position-absolute'}} else {{'position-relative'}}@endif">
                                            <input class="d-none" type="radio" id="size-3" name="size" value="l" @if($produk->ukuran=='l') checked @endif/>
                                            <label for="size-3" class="width-80"><span>L</span></label>
                                        </li>
                                        <li class="@if ($produk->produk->ukuranxl=='') {{'invisible'}} @endif 
                                        @if ($produk->produk->ukuranxl=='') {{'position-absolute'}} else {{'position-relative'}}@endif">
                                            <input class="d-none" type="radio" id="size-4" name="size" value="xl" @if($produk->ukuran=='xl') checked @endif/>
                                            <label for="size-4" class="width-80"><span>XL</span></label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="last-paragraph-no-margin">
                                <textarea name="keterangan" placeholder="silahkan isikan keterangan" cols="30" rows="5">{{$produk->keterangan}} </textarea>
                            </div>
                            <div>
                                <div class="quantity margin-15px-right">
                                    <label class="screen-reader-text">Quantity</label>
                                    <input type="button" value="-" class="qty-minus qty-btn" data-quantity="minus" data-field="jumlah">
                                    <input class="input-text qty-text" type="number" name="jumlah" value="{{$produk->jumlah}}">
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
        <!-- start section -->
        <section class="border-top border-width-1px border-color-medium-gray wow animate__fadeIn">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-5 col-md-6 text-center margin-4-rem-bottom sm-margin-2-rem-bottom">
                        <h5 class="alt-font font-weight-500 text-extra-dark-gray letter-spacing-minus-1px">Related products</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="product-listing shop-wrapper grid grid-loading grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large text-center">
                            <li class="grid-sizer"></li>
                            <!-- start shop item -->
                            <li class="grid-item">
                                <div class="product-box">
                                    <!-- start product image -->
                                    <div class="product-image border-radius-6px">
                                        <a href="single-product.html">
                                            <img class="default-image" src="images/tshirt/T-shirt-Mockup.jpg" alt=""/>
                                            <img class="hover-image" src="images/tshirt/T-shirt-Mockup.jpg" alt=""/>
                                        </a>
                                        <div class="product-overlay bg-gradient-extra-midium-gray-transparent"></div>
                                        <div class="product-hover-bottom text-center padding-30px-tb">
                                            <a href="#" class="product-link-icon move-top-bottom" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="feather icon-feather-shopping-cart"></i></a>
                                            <a href="#" class="product-link-icon move-top-bottom" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick shop"><i class="feather icon-feather-zoom-in"></i></a>
                                            <a href="#" class="product-link-icon move-top-bottom" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to wishlist"><i class="feather icon-feather-heart"></i></a>
                                        </div>
                                    </div>
                                    <!-- end product image -->
                                    <!-- start product footer -->
                                    <div class="product-footer text-center padding-25px-top xs-padding-10px-top">
                                        <a href="single-product.html" class="text-extra-dark-gray font-weight-500 d-inline-block">Merlon Jeans</a>
                                        <div class="product-price text-medium">$470.00</div>
                                    </div>
                                    <!-- end product footer -->
                                </div>
                            </li>
                            <!-- end shop item -->
                            <!-- start shop item -->
                            <li class="grid-item">
                                <div class="product-box">
                                    <!-- start product image -->
                                    <div class="product-image border-radius-6px">
                                        <a href="single-product.html">
                                            <img class="default-image" src="images/tshirt/T-shirt-Mockup.jpg" alt=""/>
                                            <img class="hover-image" src="images/tshirt/T-shirt-Mockup.jpg" alt=""/>
                                        </a>
                                        <div class="product-overlay bg-gradient-extra-midium-gray-transparent"></div>
                                        <div class="product-hover-bottom text-center padding-35px-tb">
                                            <a href="#" class="product-link-icon move-top-bottom" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="feather icon-feather-shopping-cart"></i></a>
                                            <a href="#" class="product-link-icon move-top-bottom" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick shop"><i class="feather icon-feather-zoom-in"></i></a>
                                            <a href="#" class="product-link-icon move-top-bottom" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to wishlist"><i class="feather icon-feather-heart"></i></a>
                                        </div>
                                    </div>
                                    <!-- end product image -->
                                    <!-- start product footer -->
                                    <div class="product-footer text-center padding-25px-top xs-padding-10px-top">
                                        <a href="single-product.html" class="text-extra-dark-gray font-weight-500 d-inline-block">Cotton Jacket</a>
                                        <div class="product-price text-medium">$370.00</div>
                                    </div>
                                    <!-- end product footer -->
                                </div>
                            </li>
                            <!-- end shop item -->
                            <!-- start shop item -->
                            <li class="grid-item">
                                <div class="product-box">
                                    <!-- start product image -->
                                    <div class="product-image border-radius-6px">
                                        <a href="single-product.html">
                                            <img class="default-image" src="images/tshirt/T-shirt-Mockup.jpg" alt=""/>
                                            <img class="hover-image" src="images/tshirt/T-shirt-Mockup.jpg" alt=""/>
                                            <span class="product-badge orange">hot</span>
                                        </a>
                                        <div class="product-overlay bg-gradient-extra-midium-gray-transparent"></div>
                                        <div class="product-hover-bottom text-center padding-35px-tb">
                                            <a href="#" class="product-link-icon move-top-bottom" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="feather icon-feather-shopping-cart"></i></a>
                                            <a href="#" class="product-link-icon move-top-bottom" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick shop"><i class="feather icon-feather-zoom-in"></i></a>
                                            <a href="#" class="product-link-icon move-top-bottom" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to wishlist"><i class="feather icon-feather-heart"></i></a>
                                        </div>
                                    </div>
                                    <!-- end product image -->
                                    <!-- start product footer -->
                                    <div class="product-footer text-center padding-25px-top xs-padding-10px-top">
                                        <a href="single-product.html" class="text-extra-dark-gray font-weight-500 d-inline-block">Outlaw Jacket</a>
                                        <div class="product-price text-medium">$400.00</div>
                                    </div>
                                    <!-- end product footer -->
                                </div>
                            </li>
                            <!-- end shop item -->
                            <!-- start shop item -->
                            <li class="grid-item">
                                <div class="product-box">
                                    <!-- start product image -->
                                    <div class="product-image border-radius-6px">
                                        <a href="single-product.html">
                                            <img class="default-image" src="images/tshirt/T-shirt-Mockup.jpg" alt=""/>
                                            <img class="hover-image" src="images/tshirt/T-shirt-Mockup.jpg" alt=""/>
                                            <span class="product-badge green">sale</span>
                                        </a>
                                        <div class="product-overlay bg-gradient-extra-midium-gray-transparent"></div>
                                        <div class="product-hover-bottom text-center padding-35px-tb">
                                            <a href="#" class="product-link-icon move-top-bottom" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to cart"><i class="feather icon-feather-shopping-cart"></i></a>
                                            <a href="#" class="product-link-icon move-top-bottom" data-toggle="tooltip" data-placement="top" title="" data-original-title="Quick shop"><i class="feather icon-feather-zoom-in"></i></a>
                                            <a href="#" class="product-link-icon move-top-bottom" data-toggle="tooltip" data-placement="top" title="" data-original-title="Add to wishlist"><i class="feather icon-feather-heart"></i></a>
                                        </div>
                                    </div>
                                    <!-- end product image -->
                                    <!-- start product footer -->
                                    <div class="product-footer text-center padding-25px-top xs-padding-10px-top">
                                        <a href="single-product.html" class="text-extra-dark-gray font-weight-500 d-inline-block">Cotton Dark Shirt</a>
                                        <div class="product-price text-medium">$370.00</div>
                                    </div>
                                    <!-- end product footer -->
                                </div>
                            </li>
                            <!-- end shop item -->
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
@endsection