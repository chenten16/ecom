<section class="sale__area pb-55">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section__title-wrapper text-center mb-55">
                    <div class="section__title mb-10">
                        <h2>You might also like</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="sale__area-slider-2 owl-carousel">
                    @foreach ($mightLike as $product)
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
                                    <a href="#">+ Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end single product -->
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</section>