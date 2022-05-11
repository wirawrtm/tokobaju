@extends('main')
@section('body')						
        <!-- start page title -->
        <section class="half-section parallax" data-parallax-background-ratio="0.5" style="background-image:url('images/portfolio-bg.jpg');">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 col-xl-8 col-lg-6">
                        <h1 class="alt-font text-extra-dark-gray no-margin-bottom text-center text-lg-left">Shopping cart</h1>
                    </div>
                    <div class="col-12 col-xl-4 col-lg-6 breadcrumb justify-content-center justify-content-lg-end text-small alt-font md-margin-10px-top">
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->
        <!-- start section -->
        <section class="wow animate__fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 padding-70px-right lg-padding-30px-right md-padding-15px-right">
                        <div class="row align-items-center">
                            <div class="col-12">
                                <table class="table cart-products margin-60px-bottom md-margin-40px-bottom sm-no-margin-bottom">
                                    <thead>
                                        <tr class="text-center">
                                            <th scope="col" class="alt-font"></th>
                                            <th scope="col" class="alt-font"></th>
                                            <th scope="col" class="alt-font">Product</th>
                                            <th scope="col" class="alt-font">Price</th>
                                            <th scope="col" class="alt-font">Quantity</th>
                                            <th scope="col" class="alt-font">Total</th>
                                            <th scope="col" class="alt-font">Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($produk->where ('idbuyer', $produk2) as $prod)

                                        <tr class="text-center">
                                            <td class="product-remove">
                                                <a href="{{route('destroyaddtocart',['id'=>$prod->id])}} " class="btn-default text-large">&times;</a>
                                            </td>
                                            <td class="product-thumbnail"><a href="single-product.html"><img class="cart-product-image" src="{{asset('storage/'.$prod->produk->foto)}} " alt=""></a></td>
                                            <td class="product-name">
                                                <a href="single-product.html">{{$prod->nama}}
                                                <span class="variation">{{$prod->produk->nama}}</span> </a>
                                            </td>
                                            <td class="product-price" data-title="Price"><div id="txt1">{{'Rp. '.number_format($prod->produk->harga,0,',','.')}} </div></td>
                                            <td class="product-quantity" data-title="Quantity">
                                                <div class="product-subtotal">
                                                    {{$prod->jumlah}}
                                                </div>
                                            </td> 
                                            <td class="product-subtotal" data-title="Total">{{'Rp. '.number_format($prod->produk->harga*$prod->jumlah,0,',','.')}}</td> 
                                            <td class="product-subtotal" data-title="Total"><a href="{{route('editsingleproduk',['id'=>$prod->id])}} " class="btn btn-outline-dark w-100px">Edit</a></td> 

                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div><a href="{{route('index')}} " class="btn btn-dark-gray btn-large d-block btn-fancy margin-15px-top">Add Another Item</a></div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="bg-light-gray padding-50px-all lg-padding-30px-tb lg-padding-20px-lr md-padding-20px-tb">
                            <span class="alt-font text-large text-extra-dark-gray margin-15px-bottom d-inline-block font-weight-500">Cart totals</span>
                            <table class="w-100 total-price-table">
                                <tbody>
                                    <tr class="total-amount">
                                        <th class="font-weight-500 text-extra-dark-gray">Total</th>
                                        <td data-title="Total">
                                            <h2 class="d-block font-weight-500 mb-0 text-extra-dark-gray">{{'Rp. '.number_format($produk->where('idbuyer', $produk2)->sum('total'),0,',','.')}} </h2>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div><a href="{{route('checkout', ['idbuyer'=>$produk2])}} " class="btn btn-dark-gray btn-large d-block btn-fancy margin-15px-top">Proceed to checkout</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
@endsection