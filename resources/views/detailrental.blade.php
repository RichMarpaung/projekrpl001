@extends('template.master')
@section('body')
    <!-- shop-details -->
    <section class="shop-details  pb_150">
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
                            <h2>{{ $product->name }}</h2>

                            <h3>${{ $product->price }}</h3>
                            <div class="text-box mb_40">
                                <p>
                                    {{ $product->description }}
                                </p>
                            </div>
                            <form action="{{ route('order.confirmation') }}" method="POST">
                                @csrf
                                <input type="hidden" name="user_id" value="1"> <!-- User ID -->
                                <input type="hidden" name="product_id" value="{{ $product->id }}"> <!-- Product ID -->

                            <ul class="addto-cart-box mb_40">
                                <li class="item-date">
                                    <label for="start_date">Start Date:</label>
                                    <input type="date" id="start_date" name="start_date" required>
                                </li>
                                <li class="item-date">
                                    <label for="end_date">End Date:</label>
                                    <input type="date" id="end_date" name="end_date" required>
                                </li>
                            </ul>

                            </ul><ul class="addto-cart-box mb_40">
                                <li class="cart-btn mb_40">
                                    <button type="submit" class="theme-btn btn-one">Book Now</button>
                                </li>


                            </ul>

                            <ul class="discription-box mb_30 clearfix">

                                <li><strong>Transmissoin :</strong>{{ $product->transmission }}</li>
                                <li><strong>Fuel :</strong>{{ $product->fuel }}</li>
                                <li><strong>Seat :</strong>{{ $product->seats }}</li>
                                <li><strong>Availability :</strong><span class="product-stock"><img
                                            src="assets/images/icons/icon-5.png" alt=""> {{ $product->stock }}</span></li>
                            </ul>
                        </form>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    let today = new Date().toISOString().split('T')[0]; // Format: YYYY-MM-DD
                    document.getElementById('start_date').value = today;
                });
            </script>
@endsection
