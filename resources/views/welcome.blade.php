@extends('layouts.app')
@section('title', 'Welcome')
@section('content')

<!-- start hero section -->
<div class="banner__area pt-95 mb-3">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="banner__item mb-30 p-relative">
                    <div class="banner__thumb fix">
                        <a href="product-details.html" class="w-img"><img src="http://127.0.0.1:8000/assets/img/shop/banner/banner-sm-1.jpg" alt="banner"></a>
                    </div>
                    <div class="banner__content p-absolute transition-3">
                        <h5><a href="product-details.html">Sunflower Clock <br> Quartz Hands</a></h5>
                        <a href="product-details.html" class="link-btn">Discover now</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="banner__item mb-30 p-relative">
                    <div class="banner__thumb fix">
                        <a href="product-details.html" class="w-img"><img src="http://127.0.0.1:8000/assets/img/shop/banner/banner-sm-2.jpg" alt="banner"></a>
                    </div>
                    <div class="banner__content p-absolute transition-3">
                        <h5><a href="product-details.html">Chair Kimi No Isu <br> Project</a></h5>
                        <a href="product-details.html" class="link-btn">Discover now</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="banner__item mb-30 p-relative">
                    <div class="banner__thumb fix">
                        <a href="product-details.html" class="w-img"><img src="http://127.0.0.1:8000/assets/img/shop/banner/banner-sm-3.jpg" alt="banner"></a>
                    </div>
                    <div class="banner__content p-absolute transition-3">
                        <h5><a href="product-details.html">Sweeper and Dustpan <br> by Jan Kochanski </a></h5>
                        <a href="product-details.html" class="link-btn">Discover now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end hero section -->
<!-- start page content -->
<section class="sale__area pb-55">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section__title-wrapper text-center mb-55">
                    <div class="section__title mb-10">
                        <h2>Title</h2>
                    </div>
                    <div class="section__sub-title">
                        <p>Description</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="sale__area-slider-2 owl-carousel">
                    @foreach ($products as $product)
                    <form action="{{ route('cart.store') }}" method="POST" id="product_{{ $product->id }}">
                        @csrf()
                        <input type="hidden" name="id" value="{{ $product->id }}">
                        <input type="hidden" name="name" value="{{ $product->name }}">
                        <input type="hidden" name="price" value="{{ $product->price }}">
                    
                    <!-- start single product -->
                    <div class="sale__item">
                        <div class="product__wrapper mb-60">
                            <div class="product__thumb">
                                <a href="/shop/{{$product->slug}}" class="w-img">
                                    <img src="{{productImage($product->image)}}" alt="product-img">
                                </a>
                                <div class="product__action transition-3">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                        <i class="fal fa-heart"></i>
                                    </a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Compare">
                                        <i class="fal fa-sliders-h"></i>
                                    </a>
                                    <!-- Button trigger modal -->
                                    <a href="#" data-toggle="modal" data-target="#productModalId">
                                        <i class="fal fa-search"></i>
                                    </a>
                                </div>


                            </div>
                            <div class="product__content p-relative">
                                <div class="product__content-inner">
                                    <h4><a href="/shop/{{$product->slug}}" class="ellipsis-text">{{$product->name}}</a></h4>
                                    <div class="product__price transition-3">
                                        <span>${{format($product->price)}}</span>
                                    </div>
                                </div>
                                <div class="add-cart p-absolute transition-3">
                                    <a href="javascript:void(0)" onclick="document.getElementById('product_{{ $product->id }}').submit();">+ Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                    <!-- end single product -->
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="product__load-btn text-center mt-25">
                    <a href="/shop" class="os-btn os-btn-3">Load More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end page content -->
<!-- start page content -->
<section class="sale__area pb-55">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section__title-wrapper text-center mb-55">
                    <div class="section__title mb-10">
                        <h2>Title 2</h2>
                    </div>
                    <div class="section__sub-title">
                        <p>Description</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="grid__slider owl-carousel">

                    @for ($i = 0; $i < count($hotProducts); $i++) <div class="product__item">
                        <div class="sale__item">
                            <div class="product__wrapper mb-60">
                                <div class="product__thumb">
                                    <a href="/shop/{{$hotProducts[$i]->slug}}" class="w-img">
                                        <img src="{{productImage($hotProducts[$i]->image)}}" alt="product-img">
                                    </a>
                                    <div class="product__action transition-3">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                            <i class="fal fa-heart"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare">
                                            <i class="fal fa-sliders-h"></i>
                                        </a>
                                        <!-- Button trigger modal -->
                                        <a href="#" data-toggle="modal" data-target="#productModalId">
                                            <i class="fal fa-search"></i>
                                        </a>
                                    </div>


                                </div>
                                <div class="product__content p-relative">
                                    <div class="product__content-inner">
                                        <h4><a href="/shop/{{$hotProducts[$i]->slug}}" class="ellipsis-text">{{$hotProducts[$i]->name}}</a></h4>
                                        <div class="product__price transition-3">
                                            <span>${{format($hotProducts[$i]->price)}}</span>
                                        </div>
                                    </div>
                                    <div class="add-cart p-absolute transition-3">
                                        <a href="#">+ Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if(count($hotProducts)-1!=$i)
                        <div class="sale__item">
                            <div class="product__wrapper mb-60">
                                <div class="product__thumb">
                                    <a href="/shop/{{$hotProducts[$i+1]->slug}}" class="w-img">
                                        <img src="{{productImage($hotProducts[$i+1]->image)}}" alt="product-img">
                                    </a>
                                    <div class="product__action transition-3">
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                                            <i class="fal fa-heart"></i>
                                        </a>
                                        <a href="#" data-toggle="tooltip" data-placement="top" title="Compare">
                                            <i class="fal fa-sliders-h"></i>
                                        </a>
                                        <!-- Button trigger modal -->
                                        <a href="#" data-toggle="modal" data-target="#productModalId">
                                            <i class="fal fa-search"></i>
                                        </a>
                                    </div>


                                </div>
                                <div class="product__content p-relative">
                                    <div class="product__content-inner">
                                        <h4><a href="/shop/{{$hotProducts[$i+1]->slug}}" class="ellipsis-text">{{$hotProducts[$i+1]->name}}</a></h4>
                                        <div class="product__price transition-3">
                                            <span>${{format($hotProducts[$i+1]->price)}}</span>
                                        </div>
                                    </div>
                                    <div class="add-cart p-absolute transition-3">
                                        <a href="#">+ Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                </div>
                @endfor

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="product__load-btn text-center mt-25">
                <a href="/shop" class="os-btn os-btn-3">Load More</a>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- end page content -->


<!-- client slider area start -->
<section class="client__area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="client__slider pt-80 pb-80 border-top-1 owl-carousel text-center">
                    <div class="client__thumb">
                        <a href="#"><img src="{{asset('assets/img/client/client-1.jpg')}}" alt="client"></a>
                    </div>
                    <div class="client__thumb">
                        <a href="#"><img src="{{asset('assets/img/client/client-2.jpg')}}" alt="client"></a>
                    </div>
                    <div class="client__thumb">
                        <a href="#"><img src="{{asset('assets/img/client/client-3.jpg')}}" alt="client"></a>
                    </div>
                    <div class="client__thumb">
                        <a href="#"><img src="{{asset('assets/img/client/client-4.jpg')}}" alt="client"></a>
                    </div>
                    <div class="client__thumb">
                        <a href="#"><img src="{{asset('assets/img/client/client-5.jpg')}}" alt="client"></a>
                    </div>
                    <div class="client__thumb">
                        <a href="#"><img src="{{asset('assets/img/client/client-4.jpg')}}" alt="client"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- client slider area end -->
@endsection