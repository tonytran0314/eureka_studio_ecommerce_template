@extends('templates.MasterTemplate')

@section('title', 'Men')

@section('body')
    <!-- TOP NOTIFICATION -->
    @include('partials.dynamic.top_notification')

    <div class="body_wrapper">
        <!-- BANNER -->
        <div class="top_banner">
            <div class="top_banner_image">
                <img src="{{ asset('images/products/men/banner.jpg') }}" alt="top banner image">
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
                <div class="exclusive_shoes_name">Exclusive Shoes</div>
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
                            <img src="{{ asset('images/products/exploring/item2.png') }}" alt="card_image">
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

        <!-- MEN DRESS -->
        <div class="three_columns_section_container">
            <div class="section_header">Men Dress</div>
            <div class="three_columns_section_body">
                <!-- Card -->
                <div class="three_columns_card">
                    <div class="three_columns_card_image">
                        <img src="{{ asset('images/products/men/dress1.jpg') }}" alt="card image">
                    </div>
                    <div class="visit_button">Shop Suites</div>
                </div>
                <!-- / Card -->

                <!-- Card -->
                <div class="three_columns_card">
                    <div class="three_columns_card_image">
                        <img src="{{ asset('images/products/men/dress2.jpg') }}" alt="card image">
                    </div>
                    <div class="visit_button">Shop Summer</div>
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

        <!-- MEN SHOES -->
        <!-- <div class="two_columns_section_container">
            <div class="section_header">Men Shoes</div>
            <div class="two_columns_section_body">
                <div class="two_columns_card">
                    <div class="two_columns_card_image">
                        <img src="{{ asset('images/products/men/shoes2.jpg') }}" alt="card image">
                    </div>
                    <div class="two_columns_card_content">
                        <div class="two_columns_card_description">Exclusive Nike Shoes : Your early access to the season’s latest collection is here.</div>
                        <div class="visit_button">Shop</div>
                    </div>
                </div>
                <div class="two_columns_card">
                    <div class="two_columns_card_image">
                        <img src="{{ asset('images/products/men/shoes2.jpg') }}" alt="card image">
                    </div>
                    <div class="two_columns_card_content">
                        <div class="two_columns_card_description">Exclusive Nike Shoes : Your early access to the season’s latest collection is here.</div>
                        <div class="visit_button">Shop</div>
                    </div>
                </div>
            </div>
        </div> -->



    </div>
@stop