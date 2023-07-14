<div id="header_wrapper">
    <div id="header">
        <div id="logo">
            <a href="{{ route('home') }}"><img src="{{ asset('images/logo/logo.png') }}" alt="logo"></a>
        </div>
        <div id="menu">
            <div id="nav_bar">
                <ul>
                    <li><a href="{{ route('men') }}">Men</a></li>
                    <li><a href="{{ route('women') }}">Women</a></li>
                    <li><a href="{{ route('selection') }}">Selection</a></li>
                    <li><a href="{{ route('exploring') }}">Exploring</a></li>
                    <li><a href="#">Sale</a></li>
                </ul>
            </div>
            <div id="user_action">
                <div id="search_bar">
                    <div id="search_icon">
                        <img src="{{ asset('images/icons/searchIcon.png') }}" alt="search icon">
                    </div>
                    <input type="text" placeholder="Search">
                </div>
                <div id="purchase_action">
                    <div id="wishlist_icon"><a href="{{ route('login') }}"><img src="{{ asset('images/icons/login.png') }}" alt="wishlist icon"></a></div>
                    <div id="cart_icon"><a href="{{ route('cart') }}"><img src="{{ asset('images/icons/cartIcon.png') }}" alt="cart icon"></a></div>
                </div>
            </div>
        </div>
        <div id="collapsed_menu">
            <i class="fa fa-bars"></i>
            <div id="dropdown">
                <ul>
                    <li><a href="{{ route('men') }}">Men</a></li>
                    <li><a href="{{ route('women') }}">Women</a></li>
                    <li><a href="{{ route('selection') }}">Selection</a></li>
                    <li><a href="{{ route('exploring') }}">Exploring</a></li>
                </ul>
                <div id="user_action_dropdown">
                    <a href="{{ route('login') }}">
                        <img src="{{ asset('images/icons/login.png') }}" alt="login icon">
                    </a>
                    <a href="{{ route('cart') }}">
                        <img src="{{ asset('images/icons/cartIcon.png') }}" alt="cart icon">
                    <a>                    
                </div>
            </div>
        </div>
    </div>
</div>