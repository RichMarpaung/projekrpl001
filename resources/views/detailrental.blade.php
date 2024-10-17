@extends('template.master')
@section('body')
    <!-- page-title -->
    <section class="page-title centred pt_190 pb_190">
        <div class="bg-layer" style="background-image: url({{ asset('assets/images/background/page-title.jpg') }});"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>Product Details</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.html">Home</a></li>
                    <li>Product Details</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- page-title end -->


    <!-- shop-details -->
    <section class="shop-details pt_150 pb_150">
        <div class="auto-container">
            <div class="product-details-content mb_90">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image-slider mr_20">
                            <div class="bxslider">
                                <div class="slider-content">
                                    <div class="image-inner">
                                        <div class="image-box">
                                            <figure class="image"><a href="{{ asset('assets/images/shop/shop-details-1.png') }}"
                                                    class="lightbox-image" data-fancybox="gallery"><img
                                                        src="{{asset('assets/images/shop/shop-details-1.png')  }}" alt=""></a>
                                            </figure>
                                        </div>
                                        <div class="slider-pager">
                                            <ul class="thumb-box">
                                                <li>
                                                    <a class="active" data-slide-index="0" href="#">
                                                        <figure><img src="assets/images/shop/thumb-1.png" alt="">
                                                        </figure>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a data-slide-index="1" href="#">
                                                        <figure><img src="assets/images/shop/thumb-2.png" alt="">
                                                        </figure>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a data-slide-index="2" href="#">
                                                        <figure><img src="assets/images/shop/thumb-3.png" alt="">
                                                        </figure>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-content">
                                    <div class="image-inner">
                                        <div class="image-box">
                                            <figure class="image"><a href="assets/images/shop/shop-details-1.png"
                                                    class="lightbox-image" data-fancybox="gallery"><img
                                                        src="assets/images/shop/shop-details-1.png" alt=""></a>
                                            </figure>
                                        </div>
                                        <div class="slider-pager">
                                            <ul class="thumb-box">
                                                <li>
                                                    <a class="active" data-slide-index="0" href="#">
                                                        <figure><img src="assets/images/shop/thumb-1.png" alt="">
                                                        </figure>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a data-slide-index="1" href="#">
                                                        <figure><img src="assets/images/shop/thumb-2.png" alt="">
                                                        </figure>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a data-slide-index="2" href="#">
                                                        <figure><img src="assets/images/shop/thumb-3.png" alt="">
                                                        </figure>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="slider-content">
                                    <div class="image-inner">
                                        <div class="image-box">
                                            <figure class="image"><a href="assets/images/shop/shop-details-1.png"
                                                    class="lightbox-image" data-fancybox="gallery"><img
                                                        src="assets/images/shop/shop-details-1.png" alt=""></a>
                                            </figure>
                                        </div>
                                        <div class="slider-pager">
                                            <ul class="thumb-box">
                                                <li>
                                                    <a class="active" data-slide-index="0" href="#">
                                                        <figure><img src="assets/images/shop/thumb-1.png" alt="">
                                                        </figure>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a data-slide-index="1" href="#">
                                                        <figure><img src="assets/images/shop/thumb-2.png" alt="">
                                                        </figure>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a data-slide-index="2" href="#">
                                                        <figure><img src="assets/images/shop/thumb-3.png" alt="">
                                                        </figure>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content-box ml_20">
                            <h2>Golf Cart Bag</h2>
                            <ul class="rating mb_18">
                                <li><i class="icon-22"></i></li>
                                <li><i class="icon-22"></i></li>
                                <li><i class="icon-22"></i></li>
                                <li><i class="icon-22"></i></li>
                                <li><i class="icon-22"></i></li>
                                <li><span>(08 Reviews)</span></li>
                            </ul>
                            <h3>$20:70</h3>
                            <div class="text-box mb_40">
                                <p>Lorem ipsum dolor sit amet consectetur. Fringilla quisque magna varius sit lectus. Libero
                                    scelerisque amet id arcu feugiat mi tellus velit. Dignissim pulvinar aenean diam tempus
                                    arcu fames vestibulum.</p>
                            </div>
                            <ul class="addto-cart-box mb_40">
                                <li class="item-quantity"><input class="quantity-spinner" type="text" value="1"
                                        name="quantity"></li>
                                <li class="cart-btn"><button type="button" class="theme-btn btn-one">Buy Now</button>
                                </li>
                            </ul>
                            <ul class="discription-box mb_30 clearfix">
                                <li><strong>Brand :</strong>CardiMax</li>
                                <li><strong>Product SKU :</strong>#KKLW30</li>
                                <li><strong>Category :</strong>se-601b 6-channel ecg machine</li>
                                <li><strong>Availability :</strong><span class="product-stock"><img
                                            src="assets/images/icons/icon-5.png" alt=""> In Stock</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="discription-box mb_50">
                <div class="group-title mb_25">
                    <h3>Description</h3>
                </div>
                <div class="text-box">
                    <p>Lorem ipsum dolor sit amet consectetur. Fringilla quisque magna varius sit lectus. Libero scelerisque
                        amet id arcu feugiat mi tellus velit. Dignissim pulvinar aenean diam tempus arcu fames vestibulum.
                        Elit tincidunt placerat malesuada pellentesque id viverra auctor quis massa. Bibendum aliquam
                        adipiscing tortor varius. Integer pretium pretium pellentesque varius justo est morbi vel aliquet.
                        Enim accumsan consequat eget gravida a ultrices vel aliquet.</p>
                    <p>Nulla id tellus ante turpis odio malesuada. In sit feugiat duis tellus sit pulvinar adipiscing. Purus
                        urna est interdum ut odio purus. Commodo eros congue sed aliquam. Eu sit sagittis elementum tellus
                        ut integer. Elementum leo arcu augue euismod morbi lectus integer. Ornare tempor mattis vel
                        habitasse gravida.</p>
                </div>
            </div>
            <div class="feature-box mb_50">
                <div class="group-title mb_25">
                    <h3>Features</h3>
                </div>
                <ul class="feature-list clearfix">
                    <li>Provides sufficient buoyancy to keep the wearer afloat in the water.</li>
                    <li>Adjustable straps for a secure and comfortable fit, preventing the jacket</li>
                    <li>Ensure the life jacket has adequate buoyancy to keep the wearer afloat.</li>
                </ul>
            </div>
            <div class="specification-content">
                <div class="group-title mb_25">
                    <h3>Specification</h3>
                </div>
                <ul class="specification-list clearfix">
                    <li><strong>Weight</strong>0.5 KG</li>
                    <li><strong>Size</strong>XL</li>
                    <li><strong>Brand</strong>Polo</li>
                    <li><strong>Condition</strong>Brand New</li>
                    <li><strong>Part Number</strong>#001KKM</li>
                    <li><strong>Made in</strong>Polant</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- shop-details end -->
@endsection
