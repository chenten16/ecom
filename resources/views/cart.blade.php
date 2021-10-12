@extends('layouts.app')
@section('title', 'Cart')
@section('content')
<section class="cart-area pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                @if(count(Cart::instance('default')->content())>0)
                <div class="table-content table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="product-thumbnail">Images</th>
                                <th class="cart-product-name">Product</th>
                                <th class="product-price">Unit Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-subtotal">Total</th>
                                <th class="product-remove">Remove</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach (Cart::instance('default')->content() as $item)
                            <form action="{{ route('cart.destroy', [$item->rowId, 'default']) }}" method="POST" id="delete-item">
                                @csrf()
                                @method('DELETE')
                            </form>
                            <tr>
                                <td class="product-thumbnail"><a href="product-details.html"><img height="100" width="100" src="{{ productImage($item->model->image) }}" alt=""></a></td>
                                <td class="product-name"><a href="{{ route('shop.show', $item->model->slug) }}">{{ $item->model->name }}</a></td>
                                <td class="product-price"><span class="amount">${{ format($item->model->price) }}</span></td>
                                <td class="product-quantity">
                                    <div class="cart-plus-minus"><input type="text" value="1">
                                        <div class="dec qtybutton">-</div>
                                        <div class="inc qtybutton">+</div>
                                    </div>
                                </td>
                                <td class="product-subtotal"><span class="amount">${{ format($item->model->price) }}</span></td>
                                <td class="product-remove"><a href="#" onclick="document.getElementById('delete-item').submit(); return false;"><i class="fa fa-times"></i></a></td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

                <div class="row">
                    <div class="col-md-5 ml-auto">
                        <div class="cart-page-total">
                            <h2>Cart totals</h2>
                            <ul class="mb-20">
                                <li>Subtotal <span>${{ format(Cart::subtotal()) }}</span></li>
                                <li>Tax(21%) <span> ${{ format(Cart::tax()) }}</span></li>
                                <li>Total <span>${{ format(Cart::total()) }}</span></li>
                            </ul>
                            <a class="os-btn" href="{{ route('checkout.index') }}">Proceed to checkout</a>
                        </div>
                    </div>
                </div>
                @else
                <h1 class="text-center"><i class="fas fa-shopping-cart "></i></h1> 
                <h3 class="text-center">Empty Cart !</h3>
                @endif


            </div>
        </div>
    </div>
</section>
@endsection