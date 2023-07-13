@extends('templates.MasterTemplate')

@section('title', 'Women')

@section('body')
    <!-- TOP NOTIFICATION -->
    @include('partials.dynamic.top_notification')

    <div class="body_wrapper">
        <!-- BANNER -->
        <div class="top_banner">
            <div class="top_banner_image">
                <img src="{{ asset('images/products/women/banner.jpg') }}" alt="top banner image">
                <div class="top_banner_image_description">Summer sale is live!<br><span> enjoy the shopping! </span></div>
            </div>
            <div class="top_banner_information">
                <div class="top_banner_description">
                    The best way to beat the heat is to buy new clothes, but if you're not sure where to start, we've got you covered. <br>
                    Here are some of our favorite products that will make you look amazing in the summer:
                </div>
                <div class="visit_button">Summer Shop</div>
            </div>
        </div>

        <!-- EXCLUSIVE SHOES -->
        <div class="exclusive_shoes_container">
            <div class="exclusive_shoes_header">
                <div class="exclusive_shoes_category">Summer sale</div>
                <div class="exclusive_shoes_name">Sport Sneakers</div>
                <div class="exclusive_shoes_description">Our greatest show of suits has always been when we come together.</div>
            </div>
            <div class="exclusive_shoes_body">
                <!-- ROW -->
                <div class="product_row">
                    <!-- / Card -->
                    <div class="product_card">
                        <div class="product_card_image">
                            <img src="{{ asset('images/products/exploring/item1.png') }}" alt="card_image">
                        </div>
                        <div class="product_card_detail">
                            <span>Sustainable Materials</span>
                            <span>JKILO Shoe Tank</span>
                            <span>Power Shoe </span>
                            <span>2 Colours</span>
                            <span>USD: $285</span>
                        </div>
                    </div>
                    
                    <!-- / Card -->
                    <div class="product_card">
                        <div class="product_card_image">
                            <img src="{{ asset('images/products/exploring/item1.png') }}" alt="card_image">
                        </div>
                        <div class="product_card_detail">
                            <span>Sustainable Materials</span>
                            <span>JKILO Shoe Tank</span>
                            <span>Power Shoe </span>
                            <span>2 Colours</span>
                            <span>USD: $285</span>
                        </div>
                    </div>

                </div>
                <!-- / ROW -->
            </div>
        </div>

        <!-- WOMEN DRESS -->
        <div class="three_columns_section_container">
            <div class="section_header">Women Outfit</div>
            <div class="three_columns_section_body">
                <!-- Card -->
                <div class="three_columns_card">
                    <div class="three_columns_card_image">
                        <img src="{{ asset('images/products/home/workout2.jpg') }}" alt="card image">
                    </div>
                    <div class="visit_button">Shop Sport</div>
                </div>
                <!-- / Card -->

                <!-- Card -->
                <div class="three_columns_card">
                    <div class="three_columns_card_image">
                        <img src="{{ asset('images/products/selection/detail2.jpg') }}" alt="card image">
                    </div>
                    <div class="visit_button">Shop Shoes</div>
                </div>
                <!-- / Card -->

                <!-- Card -->
                <div class="three_columns_card">
                    <div class="three_columns_card_image">
                        <img src="{{ asset('images/products/men/dress3.jpg') }}" alt="card image">
                    </div>
                    <div class="visit_button">Shop for Hike</div>
                </div>
                <!-- / Card -->
            </div>
        </div>

    </div>
@stop