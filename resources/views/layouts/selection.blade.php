@extends('templates.MasterTemplate')

@section('title', 'Selection')

@section('body')

    <div class="body_wrapper">
        <!-- PRODUCT DETAIL -->
        <div id="detail_container">
            <div id="detail_image_container">
                <div class="detail_image">
                    <img src="{{ asset('images/products/selection/detail1.jpg') }}" alt="detail image">
                </div>
                <div class="detail_image">
                    <img src="{{ asset('images/products/selection/detail2.jpg') }}" alt="detail image">
                </div>
            </div>
            <div id="detail_product_container">
                <div id="detail_product_title">Aerodyno DSEA98 Shoe</div>
                <div id="detail_product_price">$289.99</div>
                <div id="detail_product_color">White/Light grey</div>
                <div id="add_to_cart_button">Add</div>
            </div>
        </div>

        <!-- RELATED PRODUCTS -->
        <div id="related_container">
            <div id="related_header">Related Products</div>
            <div id="related_body">
                <!-- cards -->
                <div class="related_product_cards">
                    <div class="related_product_image">
                        <img src="{{ asset('images/products/selection/related1.jpg') }}" alt="related product">
                    </div>
                    <div class="related_product_detail">
                        <span>Sustainable Materials</span>
                        <span>JKILO Shoe Tank</span>
                        <span>Power Shoe </span>
                        <span>2 Colours</span>
                        <span>$165.50</span>
                    </div>
                </div>

                <!-- cards -->
                <div class="related_product_cards">
                    <div class="related_product_image">
                        <img src="{{ asset('images/products/selection/related2.jpg') }}" alt="related product">
                    </div>
                    <div class="related_product_detail">
                        <span>Sustainable Materials</span>
                        <span>JKILO Shoe Tank</span>
                        <span>Power Shoe </span>
                        <span>2 Colours</span>
                        <span>$165.50</span>
                    </div>
                </div>

                <!-- cards -->
                <div class="related_product_cards">
                    <div class="related_product_image">
                        <img src="{{ asset('images/products/selection/related3.jpg') }}" alt="related product">
                    </div>
                    <div class="related_product_detail">
                        <span>Sustainable Materials</span>
                        <span>JKILO Shoe Tank</span>
                        <span>Power Shoe </span>
                        <span>2 Colours</span>
                        <span>$165.50</span>
                    </div>
                </div>

            </div>
        </div>

        <!-- BOTTOM NAV -->
        @include ('partials.dynamic.bottom_nav')
    </div>
@stop