@extends('template.landing')
@section('body')

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>
            <nav class="menu-box">
                <div class="nav-logo"><a href="index-2.html"><img src="assets/images/logo-3.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Chicago 12, Melborne City, USA</li>
                        <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="index-2.html"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="index-2.html"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="index-2.html"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="index-2.html"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="index-2.html"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End Mobile Menu -->


        <!-- page-title -->
        <section class="page-title centred pt_190 pb_190">
            <div class="bg-layer" style="background-image: url(assets/images/background/page-title.jpg);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Rental Kendaraan</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index-2.html">Home</a></li>
                        <li>Rental</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- shop-page-section -->
        <section class="shop-page-section pt_150 pb_150">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-12 col-sm-12 sidebar-side">
                        <div class="shop-sidebar mr_10">
                            <div class="sidebar-widget search-widget">
                                <div class="widget-title mb_20">
                                    <h3>Search</h3>
                                </div>
                                <div class="search-form">
                                    <form method="post" action="https://azim.hostlin.com/Golfer/shop.html">
                                        <div class="form-group">
                                            <input type="search" name="search-field" placeholder="Search..." required>
                                            <button type="submit"><i class="icon-4"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="sidebar-widget category-widget">
                                <div class="widget-title mb_20">
                                    <h3>Product Categories</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="category-list clearfix">
                                        <li><a href="shop-details.html">Accessories</a></li>
                                        <li><a href="shop-details.html">Bags</a></li>
                                        <li><a href="shop-details.html">Cups</a></li>
                                        <li><a href="shop-details.html">Cloth</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget filter-widget">
                                <div class="widget-title mb_20">
                                    <h3>Filter by Price</h3>
                                </div>
                                <div class="price-range-slider">
                                    <div id="slider-range" class="range-bar mb_30"></div>
                                    <div class="range-box">
                                        <p class="range-value">
                                            <span>Price:</span>
                                            <input type="text" id="amount" readonly>
                                        </p>
                                        <button type="button" class="theme-btn btn-one filter-btn">Filter</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12 col-sm-12 content-side">
                        <div class="our-shop">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                    <div class="shop-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/shop/shop-1.png" alt=""></figure>
                                                <ul class="option-list clearfix">
                                                    <li><button type="button"><i class="icon-18"></i></button></li>
                                                    <li><button type="button"><i class="icon-19"></i></button></li>
                                                </ul>
                                                <div class="cart-btn"><button type="button" class="theme-btn btn-one">Add to cart</button></div>
                                            </div>
                                            <div class="lower-content">
                                                <h3><a href="shop-details.html">Golf Cart Bag</a></h3>
                                                <span class="price">$20:70</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                    <div class="shop-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/shop/shop-2.png" alt=""></figure>
                                                <ul class="option-list clearfix">
                                                    <li><button type="button"><i class="icon-18"></i></button></li>
                                                    <li><button type="button"><i class="icon-19"></i></button></li>
                                                </ul>
                                                <div class="cart-btn"><button type="button" class="theme-btn btn-one">Add to cart</button></div>
                                            </div>
                                            <div class="lower-content">
                                                <h3><a href="shop-details.html">Men’s Running Shoe</a></h3>
                                                <span class="price">$19:20</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                    <div class="shop-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/shop/shop-3.png" alt=""></figure>
                                                <ul class="option-list clearfix">
                                                    <li><button type="button"><i class="icon-18"></i></button></li>
                                                    <li><button type="button"><i class="icon-19"></i></button></li>
                                                </ul>
                                                <div class="cart-btn"><button type="button" class="theme-btn btn-one">Add to cart</button></div>
                                            </div>
                                            <div class="lower-content">
                                                <h3><a href="shop-details.html">Fusion Golf Glove</a></h3>
                                                <span class="price">$30:00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                    <div class="shop-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/shop/shop-4.png" alt=""></figure>
                                                <ul class="option-list clearfix">
                                                    <li><button type="button"><i class="icon-18"></i></button></li>
                                                    <li><button type="button"><i class="icon-19"></i></button></li>
                                                </ul>
                                                <div class="cart-btn"><button type="button" class="theme-btn btn-one">Add to cart</button></div>
                                            </div>
                                            <div class="lower-content">
                                                <h3><a href="shop-details.html">Drive Golf Balls (White)</a></h3>
                                                <span class="price">$21:00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                    <div class="shop-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/shop/shop-5.png" alt=""></figure>
                                                <ul class="option-list clearfix">
                                                    <li><button type="button"><i class="icon-18"></i></button></li>
                                                    <li><button type="button"><i class="icon-19"></i></button></li>
                                                </ul>
                                                <div class="cart-btn"><button type="button" class="theme-btn btn-one">Add to cart</button></div>
                                            </div>
                                            <div class="lower-content">
                                                <h3><a href="shop-details.html">Golf Cart Bag</a></h3>
                                                <span class="price">$26:00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                    <div class="shop-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/shop/shop-6.png" alt=""></figure>
                                                <ul class="option-list clearfix">
                                                    <li><button type="button"><i class="icon-18"></i></button></li>
                                                    <li><button type="button"><i class="icon-19"></i></button></li>
                                                </ul>
                                                <div class="cart-btn"><button type="button" class="theme-btn btn-one">Add to cart</button></div>
                                            </div>
                                            <div class="lower-content">
                                                <h3><a href="shop-details.html">Men’s Running Shoe</a></h3>
                                                <span class="price">$12:00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                    <div class="shop-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/shop/shop-7.png" alt=""></figure>
                                                <ul class="option-list clearfix">
                                                    <li><button type="button"><i class="icon-18"></i></button></li>
                                                    <li><button type="button"><i class="icon-19"></i></button></li>
                                                </ul>
                                                <div class="cart-btn"><button type="button" class="theme-btn btn-one">Add to cart</button></div>
                                            </div>
                                            <div class="lower-content">
                                                <h3><a href="shop-details.html">Fusion Golf Glove</a></h3>
                                                <span class="price">$12:00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                    <div class="shop-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/shop/shop-8.png" alt=""></figure>
                                                <ul class="option-list clearfix">
                                                    <li><button type="button"><i class="icon-18"></i></button></li>
                                                    <li><button type="button"><i class="icon-19"></i></button></li>
                                                </ul>
                                                <div class="cart-btn"><button type="button" class="theme-btn btn-one">Add to cart</button></div>
                                            </div>
                                            <div class="lower-content">
                                                <h3><a href="shop-details.html">Men’s Running Shoe</a></h3>
                                                <span class="price">$10:00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                    <div class="shop-block-one">
                                        <div class="inner-box">
                                            <div class="image-box">
                                                <figure class="image"><img src="assets/images/shop/shop-9.png" alt=""></figure>
                                                <ul class="option-list clearfix">
                                                    <li><button type="button"><i class="icon-18"></i></button></li>
                                                    <li><button type="button"><i class="icon-19"></i></button></li>
                                                </ul>
                                                <div class="cart-btn"><button type="button" class="theme-btn btn-one">Add to cart</button></div>
                                            </div>
                                            <div class="lower-content">
                                                <h3><a href="shop-details.html">Drive Golf Balls (White)</a></h3>
                                                <span class="price">$21:00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination-wrapper pt_30 centred">
                    <ul class="pagination clearfix">
                        <li><a href="shop.html"><i class="icon-6"></i></a></li>
                        <li><a href="shop.html" class="current">1</a></li>
                        <li><a href="shop.html">2</a></li>
                        <li><a href="shop.html">3</a></li>
                        <li><a href="shop.html"><i class="icon-7"></i></a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- shop-page-section end -->


        <!-- cta-section -->
        <section class="cta-section alternat-2 centred bg-color-2 pt_140 pb_150">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-14.png);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <div class="sec-title light mb_40">
                        <span class="sub-title">our Facilities</span>
                        <h2>Take Your Game To The <br />Next Level.</h2>
                    </div>
                    <div class="btn-box">
                        <a href="signup.html" class="theme-btn btn-one">become a member</a>
                        <a href="contact.html" class="theme-btn btn-two">Contact Us</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- cta-section end -->


@endsection
