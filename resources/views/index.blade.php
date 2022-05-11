@extends('main')
@section('body')
<link rel="stylesheet" type="text/css" href="css/font-icons.min.css">
<link rel="stylesheet" type="text/css" href="css/theme-vendors.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/responsive.css" />

        <!-- start page title -->
        <section class="half-section parallax" data-parallax-background-ratio="0.5" style="background-image:url('images/portfolio-bg.jpg');">
            <div class="container">
                <div class="row align-items-stretch justify-content-center extra-small-screen">
                    <div class="col-12 col-xl-6 col-lg-7 col-md-8 page-title-extra-small text-center d-flex justify-content-center flex-column">
                        <h1 class="alt-font text-gradient-sky-blue-pink margin-15px-bottom d-inline-block">Everything you want</h1>
                        <h2 class="text-extra-dark-gray alt-font font-weight-500 letter-spacing-minus-1px line-height-50 sm-line-height-45 xs-line-height-30 no-margin-bottom">Every new print and color of the season</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->
        <!-- start section -->
        <section class="shopping-left-side-bar pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-9 col-md-8 shopping-content padding-55px-left md-padding-15px-left sm-margin-30px-bottom">
                        <ul class="product-listing shop-wrapper grid grid-loading grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-large text-center">
                            <li class="grid-sizer"></li>
                            <!-- start shop item -->
                            @foreach ($produk as $prod)
                            <li class="grid-item wow animate__fadeIn">
                                <div class="product-box margin-25px-bottom xs-margin-15px-bottom">
                                    <!-- start product image -->
                                    <div class="product-image border-radius-6px">
                                        <a href="{{route('single',['id'=>$prod->id])}}">
                                            <img class="default-image" src="{{asset('storage/'.$prod->foto)}} " alt=""/>
                                            <img class="hover-image" src="{{asset('storage/'.$prod->foto)}}" alt=""/>
                                        </a>
                                    </div>
                                    <!-- end product image -->
                                    <!-- start product footer -->
                                    <div class="product-footer text-center padding-25px-top xs-padding-10px-top">
                                        <a href="{{route('single',['id'=>$prod->id])}}" class="text-extra-dark-gray font-weight-500 d-inline-block">{{$prod->nama}} </a>
                                        <div class="product-price text-medium">{{'Rp '.number_format($prod->harga,0,',','.')}}</div>
                                    </div>
                                    <!-- end product footer -->
                                </div>
                            </li>
                            <!-- end shop item -->
                            @endforeach
                        </ul>
                    </div>
                    <!-- start sidebar -->
                    <aside class="col-12 col-lg-3 col-md-4 shopping-sidebar">
                        <div class="border-bottom border-color-medium-gray padding-3-rem-bottom margin-3-rem-bottom wow animate__fadeIn">
                            <span class="shop-title alt-font font-weight-500 text-extra-dark-gray d-block margin-20px-bottom">Filter by category</span>
                            <ul class="list-style-07 filter-category">
                                <li><a href="#"><span class="product-cb product-category-cb"></span>Casual shirts</a><span class="item-qty">25</span></li>
                                <li><a href="#"><span class="product-cb product-category-cb"></span>Leather bags</a><span class="item-qty">05</span></li>
                                <li><a href="#"><span class="product-cb product-category-cb"></span>Men's shorts</a><span class="item-qty">36</span></li>
                                <li><a href="#"><span class="product-cb product-category-cb"></span>Polo t-shirts</a><span class="item-qty">05</span></li>
                                <li><a href="#"><span class="product-cb product-category-cb"></span>Short skirts</a><span class="item-qty">09</span></li>
                                <li><a href="#"><span class="product-cb product-category-cb"></span>Winter jackets</a><span class="item-qty">12</span></li>
                            </ul>
                        </div>
                        <div class="border-bottom border-color-medium-gray padding-3-rem-bottom margin-3-rem-bottom wow animate__fadeIn">
                            <span class="shop-title alt-font font-weight-500 text-extra-dark-gray d-block margin-20px-bottom">Filter by color</span>
                            <ul class="list-style-07 filter-color">
                                <li><a href="#"><span class="product-cb paroduct-color-cb" style="background-color: #363636"></span>Carbon black</a><span class="item-qty">25</span></li>
                                <li><a href="#"><span class="product-cb paroduct-color-cb" style="background-color:#657fa8"></span>Prussian blue</a><span class="item-qty">03</span></li>
                                <li><a href="#"><span class="product-cb paroduct-color-cb" style="background-color:#936f5e"></span>Light brown</a><span class="item-qty">15</span></li>
                                <li><a href="#"><span class="product-cb paroduct-color-cb" style="background-color:#97a27f"></span>Parrot green</a><span class="item-qty">40</span></li>
                                <li><a href="#"><span class="product-cb paroduct-color-cb" style="background-color:#b95b5b"></span>Dark orange</a><span class="item-qty">29</span></li>
                                <li><a href="#"><span class="product-cb paroduct-color-cb" style="background-color:#b7b5b5"></span>Slate blue</a><span class="item-qty">35</span></li>
                            </ul>
                        </div>
                    </aside>
                    <!-- end sidebar -->
                </div>
            </div>
        </section>
        <!-- end section -->
@endsection