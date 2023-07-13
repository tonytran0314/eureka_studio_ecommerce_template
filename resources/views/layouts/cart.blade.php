@extends('templates.MasterTemplate')

@section('title', 'Shopping Cart')

@section('body')

    <div class="body_wrapper">
        <div id="cart_container">
            <div id="cart_left_column">

                <div class="column_title">Shopping Cart</div>
                
                <div id="empty_cart_notification">There are no items in your shopping cart. <a href="{{ route('home') }}">Go Shopping ?</a></div>

                <div id="cart_item_container">
                    <!-- Item -->
                    <div class="cart_item">
                        <div class="cart_item_image">
                            <img src="" alt="cart item image" id="cart_item_image">
                        </div>
                        <div class="cart_item_detail">
                            <div class="cart_item_name">Name</div>
                            <div class="cart_item_price">Price</div>
                            <div class="cart_item_edit">
                                <div class="quantity_edit">
                                    <div class="minus">-</div>
                                    <div class="quantity">1</div>
                                    <div class="plus">+</div>
                                </div>
                                <div class="delete"><i class="fa fa-trash"></i></div>
                            </div>
                        </div>
                    </div>
                    <!-- / Item -->
                </div>

            </div>
            <div id="cart_right_column">
                <div class="column_title">Summary</div>
                <div id="receipt_items">
                    <div class="receipt_row">
                        <div id="total">Subtotal</div>
                        <div id="total_number">$350.00</div>
                    </div>
                    <div class="receipt_row">
                        <div id="total">Estimated Delivery</div>
                        <div id="total_number">Free</div>
                    </div>
                </div>
                <div id="total_container">
                    <div class="receipt_row">
                        <div id="total">Total</div>
                        <div id="total_number">$350.00</div>
                    </div>
                </div>
                <div id="checkout_button">Checkout</div>
            </div>
        </div>
    </div>

    <!-- BOTTOM NAV -->
    @include('partials.dynamic.bottom_nav')
@stop