@extends('templates.MasterTemplate')

@section('title', 'Exploring')

@section('body')
    <!-- TOP NOTIFICATION -->
    @include('partials.dynamic.top_notification')

    <div class="body_wrapper">
        <div id="exploring_header">
            <div id="exploring_title">Summer Shoes (58)</div>
            <div id="exploring_action">
                <div class="exploring_option">Hide Filters</div>
                <div class="exploring_option">Sort By</div>
            </div>
        </div>
        <div id="exploring_body_container">
            <div id="exploring_filters">
                <div id="shoes_type">
                    <ul>
                        <li>Shoes</li>
                        <li>Sports Bras</li>
                        <li>Tops & T-Shirts</li>
                        <li>Hoodies & Sweatshirts</li>
                        <li>Jackets</li>
                        <li>Trousers & Tights</li>
                        <li>Shorts</li>
                        <li>Socks</li>
                        <li>Accessories & Equipment</li>
                    </ul>
                </div>
                <div id="gender">
                    <div class="filter_title">Gender</div>
                    <div class="filter_body">
                        <div class="filter_element">
                            <input type="checkbox" class="checkbox_filter">
                            <label>Men</label>
                        </div>
                        <div class="filter_element">
                            <input type="checkbox" class="checkbox_filter">
                            <label>Women</label>
                        </div>
                        <div class="filter_element">
                            <input type="checkbox" class="checkbox_filter">
                            <label>Unisex</label>
                        </div>
                    </div>
                </div>
                <div id="kids">
                    <div class="filter_title">Kids</div>
                    <div class="filter_body">
                        <div class="filter_element">
                            <input type="checkbox" class="checkbox_filter">
                            <label>Boys</label>
                        </div>
                        <div class="filter_element">
                            <input type="checkbox" class="checkbox_filter">
                            <label>Girls</label>
                        </div>
                    </div>
                </div>
                <div id="price">
                    <div class="filter_title">Shop by Price</div>
                    <div class="filter_body">
                        <div class="filter_element">
                            <input type="checkbox" class="checkbox_filter">
                            <label>$100.00 - $500.00</label>
                        </div>
                        <div class="filter_element">
                            <input type="checkbox" class="checkbox_filter">
                            <label>Over $500.00</label>
                        </div>
                    </div>
                </div>
                <div id="color">
                    <div class="filter_title">Colour</div>
                    <div id="color_select">
                        <div class="single_color"></div>
                        <div class="single_color"></div>
                        <div class="single_color"></div>
                    </div>
                </div>
            </div>
            <div id="exploring_products">
                <!-- ROW -->
                <div class="product_row">
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
                    <div class="product_card">
                        <div class="product_card_image">
                            <img src="{{ asset('images/products/exploring/item3.png') }}" alt="card_image">
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
                

                <div class="product_row">
                    <div class="product_card">
                        <div class="product_card_image">
                            <img src="{{ asset('images/products/exploring/item4.png') }}" alt="card_image">
                        </div>
                        <div class="product_card_detail">
                            <span>Sustainable Materials</span>
                            <span>JKILO Shoe Tank</span>
                            <span>Power Shoe </span>
                            <span>2 Colours</span>
                            <span>USD: $285</span>
                        </div>
                    </div>
                    <div class="product_card">
                        <div class="product_card_image">
                            <img src="{{ asset('images/products/exploring/item5.png') }}" alt="card_image">
                        </div>
                        <div class="product_card_detail">
                            <span>Sustainable Materials</span>
                            <span>JKILO Shoe Tank</span>
                            <span>Power Shoe </span>
                            <span>2 Colours</span>
                            <span>USD: $285</span>
                        </div>
                    </div>
                    <div class="product_card">
                        <div class="product_card_image">
                            <img src="{{ asset('images/products/exploring/item6.png') }}" alt="card_image">
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


                <div class="product_row">
                    <div class="product_card">
                        <div class="product_card_image">
                            <img src="{{ asset('images/products/exploring/item7.png') }}" alt="card_image">
                        </div>
                        <div class="product_card_detail">
                            <span>Sustainable Materials</span>
                            <span>JKILO Shoe Tank</span>
                            <span>Power Shoe </span>
                            <span>2 Colours</span>
                            <span>USD: $285</span>
                        </div>
                    </div>
                    <div class="product_card">
                        <div class="product_card_image">
                            <img src="{{ asset('images/products/exploring/item8.png') }}" alt="card_image">
                        </div>
                        <div class="product_card_detail">
                            <span>Sustainable Materials</span>
                            <span>JKILO Shoe Tank</span>
                            <span>Power Shoe </span>
                            <span>2 Colours</span>
                            <span>USD: $285</span>
                        </div>
                    </div>
                    <div class="product_card">
                        <div class="product_card_image">
                            <img src="{{ asset('images/products/exploring/item9.png') }}" alt="card_image">
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
            </div>
        
        </div>
        
        <!-- BOTTOM NAV -->
        @include('partials.dynamic.bottom_nav')
            

    </div>
@stop