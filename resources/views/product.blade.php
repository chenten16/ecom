@extends('layouts.app')
@section('title', $product->name)


@section('content')

<section class="shop__area pb-65">
    <div class="shop__top grey-bg-6 pt-100 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="product__modal-box d-flex">
                        <div class="product__modal-nav mr-20">
                            <nav>
                                <div class="nav nav-tabs" id="product-details" role="tablist">
                                    @if ($images)
                                    <!-- <img src="{{ productImage($product->image) }}" class="image-thumbnail active"> -->
                                    @foreach ($images as $image)
                                    <a class="nav-item nav-link" id="pro-one-tab" data-toggle="tab" href="#pro-one" role="tab" aria-controls="pro-one" aria-selected="false">
                                        <div class="product__nav-img w-img">
                                            <img src="{{ productImage($image) }}" width="100" height="100" alt="">
                                        </div>
                                    </a>
                                    @endforeach
                                    @endif
                                </div>
                            </nav>
                        </div>
                        <div class="tab-content mb-20" id="product-detailsContent">
                            <div class="tab-pane fade" id="pro-one" role="tabpanel" aria-labelledby="pro-one-tab">
                                <div class="product__modal-img product__thumb w-img">
                                    <img src="{{ productImage($product->image) }}" alt="">
                                    <!-- <div class="product__sale ">
                                        <span class="new">new</span>
                                        <span class="percent">-16%</span>
                                    </div> -->
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pro-two" role="tabpanel" aria-labelledby="pro-two-tab">
                                <div class="product__modal-img product__thumb w-img">
                                    <img src="assets/img/shop/product/details/details-big-2.jpg" alt="">
                                    <div class="product__sale ">
                                        <span class="new">new</span>
                                        <span class="percent">-16%</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade active show" id="pro-three" role="tabpanel" aria-labelledby="pro-three-tab">
                                <div class="product__modal-img product__thumb w-img">
                                    <img src="{{ productImage($product->image) }}" alt="">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="product__modal-content product__modal-content-2">
                        <h4><a href="/shop/{{$product->slug}}">{{$product->name}}</a></h4>
                        <!-- <div class="rating rating-shop mb-15">
                                        <ul>
                                            <li><span><i class="fas fa-star"></i></span></li>
                                            <li><span><i class="fas fa-star"></i></span></li>
                                            <li><span><i class="fas fa-star"></i></span></li>
                                            <li><span><i class="fas fa-star"></i></span></li>
                                            <li><span><i class="fal fa-star"></i></span></li>
                                        </ul>
                                        <span class="rating-no ml-10 rating-left">
                                            3 rating(s)
                                        </span>
                                        <span class="review rating-left"><a href="#">Add your Review</a></span>
                                    </div> -->
                        <div class="product__price-2 mb-25">
                            <span>${{$product->price}}</span>
                        </div>
                        <div class="product__modal-des mb-30">
                            <p>{{$product->description}}</p>
                        </div>
                        <div class="product__modal-form mb-30">

                            <form action="{{ route('cart.store') }}" method="POST">
                                @csrf()
                                <input type="hidden" name="id" value="{{ $product->id }}">
                                <input type="hidden" name="name" value="{{ $product->name }}">
                                <input type="hidden" name="price" value="{{ $product->price }}">
                                <!-- <div class="product__modal-input size mb-20">
                                    <label>Size <i class="fas fa-star-of-life"></i></label>
                                    <select>
                                        <option>- Please select -</option>
                                        <option> S</option>
                                        <option> M</option>
                                        <option> L</option>
                                        <option> XL</option>
                                        <option> XXL</option>
                                    </select>
                                </div>
                                <div class="product__modal-input color mb-20">
                                    <label>Color <i class="fas fa-star-of-life"></i></label>
                                    <select>
                                        <option>- Please select -</option>
                                        <option> Black</option>
                                        <option> Yellow</option>
                                        <option> Blue</option>
                                        <option> White</option>
                                        <option> Ocean Blue</option>
                                    </select>
                                </div> -->
                                <div class="product__modal-required mb-5">
                                    <span>Repuired Fiields *</span>
                                </div>
                                <div class="pro-quan-area d-sm-flex align-items-center">
                                    <div class="product-quantity-title">
                                        <label>Quantity</label>
                                    </div>
                                    <div class="product-quantity mr-20 mb-20">
                                        <div class="cart-plus-minus"><input type="text" value="1">
                                            <div class="dec qtybutton">-</div>
                                            <div class="inc qtybutton">+</div>
                                        </div>
                                    </div>
                                    <div class="pro-cart-btn">
                                        <button  class="add-cart-btn mb-20"  type="submit">+ Add to Cart</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="product__share">
                            <span>Share :</span>
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shop__bottom">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="product__details-tab">
                        <div class="product__details-tab-nav text-center mb-45">
                            <nav>
                                <div class="nav nav-tabs justify-content-start justify-content-sm-center" id="pro-details" role="tablist">
                                    <a class="nav-item nav-link active" id="des-tab" data-toggle="tab" href="#des" role="tab" aria-controls="des" aria-selected="true">Description</a>
                                    <a class="nav-item nav-link" id="add-tab" data-toggle="tab" href="#add" role="tab" aria-controls="add" aria-selected="false">Additional Information</a>
                                    <a class="nav-item nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="false">Reviews (4)</a>
                                </div>
                            </nav>
                        </div>
                        <div class="tab-content" id="pro-detailsContent">
                            <div class="tab-pane fade show active" id="des" role="tabpanel">
                                <div class="product__details-des">
                                    <p>{{$product->description}}</p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="add" role="tabpanel">
                                <div class="product__details-add">
                                    <ul>
                                        <li><span>Weight</span></li>
                                        <li><span>.25 KG</span></li>
                                        <li><span>Dimention</span></li>
                                        <li><span>62 × 56 × 12 cm</span></li>
                                        <li><span>Size</span></li>
                                        <li><span>XL, XXL, LG, SM, MD</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="review" role="tabpanel">
                                <div class="product__details-review">
                                    <div class="postbox__comments">
                                        <div class="postbox__comment-title mb-30">
                                            <h3>Reviews (32)</h3>
                                        </div>
                                        <div class="latest-comments mb-30">
                                            <ul>
                                                <li>
                                                    <div class="comments-box">
                                                        <div class="comments-avatar">
                                                            <img src="assets/img/blog/comments/avater-1.png" alt="">
                                                        </div>
                                                        <div class="comments-text">
                                                            <div class="avatar-name">
                                                                <h5>Siarhei Dzenisenka</h5>
                                                                <span> - 3 months ago </span>
                                                                <a class="reply" href="#">Leave Reply</a>
                                                            </div>
                                                            <div class="user-rating">
                                                                <ul>
                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for <span>“lorem ipsum”</span> will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="children">
                                                    <div class="comments-box">
                                                        <div class="comments-avatar">
                                                            <img src="assets/img/blog/comments/avater-2.png" alt="">
                                                        </div>
                                                        <div class="comments-text">
                                                            <div class="avatar-name">
                                                                <h5>Julias Roy</h5>
                                                                <span> - 6 months ago </span>
                                                                <a class="reply" href="#">Leave Reply</a>
                                                            </div>
                                                            <div class="user-rating">
                                                                <ul>
                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for <span>“lorem ipsum”</span> will uncover many web sites still in their infancy. </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="comments-box">
                                                        <div class="comments-avatar">
                                                            <img src="assets/img/blog/comments/avater-3.png" alt="">
                                                        </div>
                                                        <div class="comments-text">
                                                            <div class="avatar-name">
                                                                <h5>Arista Williamson</h5>
                                                                <span> - 6 months ago </span>
                                                                <a class="reply" href="#">Leave Reply</a>
                                                            </div>
                                                            <div class="user-rating">
                                                                <ul>
                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                                    <li><a href="#"><i class="fal fa-star"></i></a></li>
                                                                </ul>
                                                            </div>
                                                            <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for <span>“lorem ipsum”</span> will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose.</p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="post-comments-form mb-100">
                                        <div class="post-comments-title mb-30">
                                            <h3>Your Review</h3>
                                            <div class="post-rating">
                                                <span>Your Rating :</span>
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fal fa-star"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fal fa-star"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fal fa-star"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fal fa-star"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="fal fa-star"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <form id="contacts-form" class="conatct-post-form" action="#">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="contact-icon p-relative contacts-name">
                                                        <input type="text" placeholder="Name">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6">
                                                    <div class="contact-icon p-relative contacts-name">
                                                        <input type="email" placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="contact-icon p-relative contacts-email">
                                                        <input type="text" placeholder="Subject">
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <div class="contact-icon p-relative contacts-message">
                                                        <textarea name="comments" id="comments" cols="30" rows="10" placeholder="Comments"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12">
                                                    <button class="os-btn os-btn-black" type="submit">Post comment</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection