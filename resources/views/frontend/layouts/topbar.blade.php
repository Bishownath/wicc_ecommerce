<div class="backdrop"></div>
<a class="backtop fas fa-arrow-up" href="#"></a>
<div class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-5">
                <div class="header-top-welcome">
                    <p>Welcome to Ecomart in Your Dream Online Store!</p>
                </div>
            </div>
            <div class="col-md-5 col-lg-3">
                <div class="header-top-select">
                    <div class="header-select">
                        <i class="icofont-world"></i><select class="select">
                            <option value="english" selected>english</option>
                            <option value="bangali">bangali</option>
                            <option value="arabic">arabic</option>
                        </select>
                    </div>
                    <div class="header-select">
                        <i class="icofont-money"></i><select class="select">
                            <option value="english" selected>doller</option>
                            <option value="bangali">pound</option>
                            <option value="arabic">taka</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-7 col-lg-4">
                <ul class="header-top-list">
                    <li><a href="offer.html">offers</a></li>
                    <li><a href="faq.html">need help</a></li>
                    <li><a href="contact.html">contact us</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<header class="header-part">
    <div class="container">
        <div class="header-content">
            <div class="header-media-group">
                <button class="header-user">
                    <img src="{{ asset('assets/images/user.png') }}" alt=" user" /></button><a href="index.html"><img
                        src="{{ asset('assets/images/logo.png') }}" alt=" logo" /></a><button
                    class="header-src"><i class="fas fa-search"></i></button>
            </div>
            <a href="index.html" class="header-logo"><img src="{{ asset('assets/images/logo.png') }} " alt="
                        logo" /></a><a href="login.html" class="header-widget" title="My Account"><img
                    src="{{ asset('assets/images/user.png') }} " alt=" user" /><span>join</span></a>
            <form class="header-form">
                <input type="text" placeholder="Search anything..." /><button>
                    <i class="fas fa-search"></i>
                </button>
            </form>
            <div class="header-widget-group">
                <a href="compare.html" class="header-widget" title="Compare List"><i
                        class="fas fa-random"></i><sup>0</sup></a><a href="wishlist.html" class="header-widget"
                    title="Wishlist"><i class="fas fa-heart"></i><sup>0</sup></a><button
                    class="header-widget header-cart" title="Cartlist">
                    <i class="fas fa-shopping-basket"></i><sup>9+</sup><span>total
                        price<small>$345.00</small></span>
                </button>
            </div>
        </div>
    </div>
</header>
<nav class="navbar-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="navbar-content">
                    <ul class="navbar-list">
                        <li class="navbar-item">
                            <a class="navbar-link" href="{{ url('/') }}">home</a>
                        </li>
                        {{-- <li class="navbar-item dropdown-megamenu">
                            <a class="navbar-link dropdown-arrow" href="#">shop</a>
                            <div class="megamenu">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <div class="megamenu-wrap">
                                                <h5 class="megamenu-title">shop pages</h5>
                                                <ul class="megamenu-list">
                                                    <li>
                                                        <a href="shop-5column.html">shop 5 column</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-4column.html">shop 4 column</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-3column.html">shop 3 column</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-2column.html">shop 2 column</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-1column.html">shop 1 column</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="megamenu-wrap">
                                                <h5 class="megamenu-title">product pages</h5>
                                                <ul class="megamenu-list">
                                                    <li>
                                                        <a href="product-tab.html">product single tab</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-grid.html">product single grid</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-video.html">product single video</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-simple.html">product single simple</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="megamenu-wrap">
                                                <h5 class="megamenu-title">user action</h5>
                                                <ul class="megamenu-list">
                                                    <li><a href="wishlist.html">wishlist</a></li>
                                                    <li><a href="compare.html">compare</a></li>
                                                    <li><a href="checkout.html">checkout</a></li>
                                                    <li>
                                                        <a href="orderlist.html">order history</a>
                                                    </li>
                                                    <li><a href="invoice.html">order invoice</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="megamenu-wrap">
                                                <h5 class="megamenu-title">other pages</h5>
                                                <ul class="megamenu-list">
                                                    <li>
                                                        <a href="all-category.html">all Category</a>
                                                    </li>
                                                    <li><a href="brand-list.html">brand list</a></li>
                                                    <li>
                                                        <a href="brand-single.html">brand single</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li> --}}
                        <li class="navbar-item dropdown-megamenu">
                            <a class="navbar-link dropdown-arrow" href="#">category</a>
                            <div class="megamenu">
                                <div class="container megamenu-scroll">
                                    <div class="row row-cols-5">
                                        <div class="col">
                                            <div class="megamenu-wrap">
                                                {{-- @foreach ($categories as $category)
                                                    <h5 class="megamenu-title">{{ $category->name }}</h5>
                                                    <ul class="megamenu-list">
                                                        @foreach ($subCategories as $subCategory)
                                                            <li><a href="#">{{ $subCategory->name }}</a></li>
                                                        @endforeach

                                                    </ul>
                                                @endforeach --}}
                                            </div>
                                        </div>
                                        {{-- <div class="col">
                                            <div class="megamenu-wrap">
                                                <h5 class="megamenu-title">fruits</h5>
                                                <ul class="megamenu-list">
                                                    <li><a href="#">Apple</a></li>
                                                    <li><a href="#">orange</a></li>
                                                    <li><a href="#">banana</a></li>
                                                    <li><a href="#">strawberrie</a></li>
                                                    <li><a href="#">watermelon</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="megamenu-wrap">
                                                <h5 class="megamenu-title">dairy farms</h5>
                                                <ul class="megamenu-list">
                                                    <li><a href="#">Butter</a></li>
                                                    <li><a href="#">Cheese</a></li>
                                                    <li><a href="#">Milk</a></li>
                                                    <li><a href="#">Eggs</a></li>
                                                    <li><a href="#">cream</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="megamenu-wrap">
                                                <h5 class="megamenu-title">seafoods</h5>
                                                <ul class="megamenu-list">
                                                    <li><a href="#">Lobster</a></li>
                                                    <li><a href="#">Octopus</a></li>
                                                    <li><a href="#">Shrimp</a></li>
                                                    <li><a href="#">Halabos</a></li>
                                                    <li><a href="#">Maeuntang</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="megamenu-wrap">
                                                <h5 class="megamenu-title">diet foods</h5>
                                                <ul class="megamenu-list">
                                                    <li><a href="#">Salmon</a></li>
                                                    <li><a href="#">Avocados</a></li>
                                                    <li><a href="#">Leafy Greens</a></li>
                                                    <li><a href="#">Boiled Potatoes</a></li>
                                                    <li><a href="#">Cottage Cheese</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="megamenu-wrap">
                                                <h5 class="megamenu-title">fast foods</h5>
                                                <ul class="megamenu-list">
                                                    <li><a href="#">burger</a></li>
                                                    <li><a href="#">milkshake</a></li>
                                                    <li><a href="#">sandwich</a></li>
                                                    <li><a href="#">doughnut</a></li>
                                                    <li><a href="#">pizza</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="megamenu-wrap">
                                                <h5 class="megamenu-title">drinks</h5>
                                                <ul class="megamenu-list">
                                                    <li><a href="#">cocktail</a></li>
                                                    <li><a href="#">hard soda</a></li>
                                                    <li><a href="#">shampain</a></li>
                                                    <li><a href="#">Wine</a></li>
                                                    <li><a href="#">barley</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="megamenu-wrap">
                                                <h5 class="megamenu-title">meats</h5>
                                                <ul class="megamenu-list">
                                                    <li><a href="#">Meatball</a></li>
                                                    <li><a href="#">Sausage</a></li>
                                                    <li><a href="#">Poultry</a></li>
                                                    <li><a href="#">chicken</a></li>
                                                    <li><a href="#">Cows</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="megamenu-wrap">
                                                <h5 class="megamenu-title">fishes</h5>
                                                <ul class="megamenu-list">
                                                    <li><a href="#">scads</a></li>
                                                    <li><a href="#">pomfret</a></li>
                                                    <li><a href="#">groupers</a></li>
                                                    <li><a href="#">anchovy</a></li>
                                                    <li><a href="#">mackerel</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="megamenu-wrap">
                                                <h5 class="megamenu-title">dry foods</h5>
                                                <ul class="megamenu-list">
                                                    <li><a href="#">noodles</a></li>
                                                    <li><a href="#">Powdered milk</a></li>
                                                    <li><a href="#">nut & yeast</a></li>
                                                    <li><a href="#">almonds</a></li>
                                                    <li><a href="#">pumpkin</a></li>
                                                </ul>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="navbar-item dropdown">
                            <a class="navbar-link dropdown-arrow" href="#">pages</a>
                            <ul class="dropdown-position-list">
                                <li><a href="faq.html">faqs</a></li>
                                <li><a href="offer.html">offers</a></li>
                                <li><a href="profile.html">my profile</a></li>
                                <li><a href="{{ route('vendors.apply') }}">Vendor Apply</a></li>

                            </ul>
                        </li>
                        <li class="navbar-item dropdown">
                            <a class="navbar-link dropdown-arrow" href="#">authentic</a>
                            <ul class="dropdown-position-list">
                                <li><a href="{{ route('login') }}">login</a></li>
                                <li><a href="{{ route('vendors.login') }}">vendor login</a></li>
                                <li><a href="register.html">register</a></li>
                                <li><a href="reset-password.html">reset password</a></li>
                                <li><a href="change-password.html">change password</a></li>
                            </ul>
                        </li>
                        <li class="navbar-item dropdown">
                            <a class="navbar-link dropdown-arrow" href="#">blogs</a>
                            <ul class="dropdown-position-list">
                                <li><a href="blog-grid.html">blog grid</a></li>
                                <li><a href="blog-standard.html">blog standard</a></li>
                                <li><a href="blog-details.html">blog details</a></li>
                                <li><a href="blog-author.html">blog author</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="navbar-info-group">
                        <div class="navbar-info">
                            <i class="icofont-ui-touch-phone"></i>
                            <p><small>call us</small><span>(+880) 183 8288 389</span></p>
                        </div>
                        <div class="navbar-info">
                            <i class="icofont-ui-email"></i>
                            <p><small>email us</small><span>support@example.com</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
