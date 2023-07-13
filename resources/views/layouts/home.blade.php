@extends('templates.MasterTemplate')

@section('title', 'Home')

@section('body')
    <!-- TOP NOTIFICATION -->
    @include('partials.dynamic.top_notification')

    <div class="body_wrapper">

        <!-- BANNER -->
        <div class="top_banner">
            <div class="top_banner_image">
                <img src="{{ asset('images/products/home/banner.png') }}" alt="top banner image">
                <div class="top_banner_image_description">Summer is here, and it's time to get out and <span>enjoy the sun!</span></div>
            </div>
            <div class="top_banner_information">
                <div class="top_banner_description">
                    The best way to beat the heat is to buy new clothes, but if you're not sure where to start, we've got you covered. <br>
                    Here are some of our favorite products that will make you look amazing in the summer:
                </div>
                <div class="visit_button">Summer Shop</div>
            </div>
        </div>

        <!-- FEATURED -->
        <div id="featured">
            <div class="subtitle">Featured</div>
            <div class="card_container">
                <div class="featured_cards">
                    <div class="featured_cards_image">
                        <img src="{{ asset('images/products/home/featured1.jpg') }}" alt="featured cards image">
                    </div>
                    <div class="featured_cards_info">
                        <div class="featured_cards_title">Exclusive Nike Shoes : Your early access to the season’s latest collection is here.</div>
                        <div class="visit_button">Shop</div>
                    </div>
                </div>
                <div class="featured_cards">
                    <div class="featured_cards_image">
                        <img src="{{ asset('images/products/home/featured2.jpg') }}" alt="featured cards image">

                    </div>
                    <div class="featured_cards_info">
                        <div class="featured_cards_title">Best of Hats</div>
                        <div class="visit_button">Shop</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- EXCLUSIVE SALES -->
        <div id="exclusive_sales">
            <div class="subtitle">Don’t Miss Exclusive sales</div>
            <div id="exclusive_sales_body">
                <div id="exclusive_sales_image">
                    <img src="{{ asset('images/products/home/exclusiveSale.jpg') }}" alt="exclusive_sales_image">
                </div>
                <div id="exclusive_sales_description">
                    We've got you covered this summer when it comes to shopping for gifts!<br><br> Whether you're looking for something for yourself or a friend, we've got everything from the best cookbooks to the hottest tech gadgets. Our gift guide is designed to help you find exactly what you're looking for—and if it's not on our list, we're totally willing to help you find it!
                </div>
                <div class="visit_button">Explore Gifts</div>
            </div>
        </div>

        <!-- WORK OUT -->
        <div id="workout">
            <div class="subtitle">Work-Out Outfits</div>
            <div class="card_container">

                <div class="workout_card">
                    <div class="workout_card_image">
                        <img src="{{ asset('images/products/home/workout1.jpg') }}" alt="workout_card_image">
                    </div>
                    <div class="workout_card_button">
                        <div class="visit_button">Men's</div>
                    </div>
                </div>
                <div class="workout_card">
                    <div class="workout_card_image">
                        <img src="{{ asset('images/products/home/workout2.jpg') }}" alt="workout_card_image">
                    </div>
                    <div class="workout_card_button">
                        <div class="visit_button">Women's</div>
                    </div>
                </div>
                <div class="workout_card">
                    <div class="workout_card_image">
                        <img src="{{ asset('images/products/home/workout3.jpg') }}" alt="workout_card_image">
                    </div>
                    <div class="workout_card_button">
                        <div class="visit_button">Kids'</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- MORE DESIGN -->
        <div id="more_design">
            <div class="subtitle">More from Design Studio of Eureka</div>
            <div class="card_container">

                <div class="more_design_card">
                    <div class="more_design_card_image">
                        <img src="{{ asset('images/products/home/moreDesign1.jpg') }}" alt="more_design_card_image">
                    </div>
                    <div class="more_design_card_button">
                        <div class="visit_button">Men's</div>
                    </div>
                </div>
                <div class="more_design_card">
                    <div class="more_design_card_image">
                        <img src="{{ asset('images/products/home/moreDesign2.jpg') }}" alt="more_design_card_image">
                    </div>
                    <div class="more_design_card_button">
                        <div class="visit_button">Women's</div>
                    </div>
                </div>
                <div class="more_design_card">
                    <div class="more_design_card_image">
                        <img src="{{ asset('images/products/home/moreDesign3.jpg') }}" alt="more_design_card_image">
                    </div>
                    <div class="more_design_card_button">
                        <div class="visit_button">Kids'</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- BOTTOM NAV -->
        @include('partials.dynamic.bottom_nav')
    </div>
@stop