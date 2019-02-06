@extends('index')
@section('content')

<div class="offers">
    
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 class="section_title">All packages</h2>
            </div>
        </div>
        <div class="row">            
            <div class="col-lg-12">
                <!-- Offers Grid -->

                <div class="offers_grid">

                    <!-- Offers Item -->

                    <div class="offers_item rating_4">
                        <div class="row">
                            <div class="col-lg-1 temp_col"></div>
                            <div class="col-lg-3 col-1680-4">
                                <div class="offers_image_container">
                                    <!-- Image by https://unsplash.com/@kensuarez -->
                                    <div class="offers_image_background" style="background-image:url({{ asset('vendor/theme-travelix/images/offer_1.jpg') }})"></div>
                                    <div class="offer_name"><a href="single_listing.html">grand castle</a></div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="offers_content">
                                    <div class="offers_price">$70<span>per night</span></div>
                                    <div class="rating_r rating_r_4 offers_rating" data-rating="4">
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                    </div>
                                    <p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Lorem ipsum dolor sit amet.</p>
                                    <div class="offers_icons">
                                        <ul class="offers_icons_list">
                                            <li class="offers_icons_item"><img src="{{ asset('vendor/theme-travelix/images/post.png') }}" alt=""></li>
                                            <li class="offers_icons_item"><img src="{{ asset('vendor/theme-travelix/images/compass.png') }}" alt=""></li>
                                            <li class="offers_icons_item"><img src="{{ asset('vendor/theme-travelix/images/bicycle.png') }}" alt=""></li>
                                            <li class="offers_icons_item"><img src="{{ asset('vendor/theme-travelix/images/sailboat.png') }}" alt=""></li>
                                        </ul>
                                    </div>
                                    <div class="button book_button"><a href="#">book<span></span><span></span><span></span></a></div>
                                    <div class="offer_reviews">
                                        <div class="offer_reviews_content">
                                            <div class="offer_reviews_title">very good</div>
                                            <div class="offer_reviews_subtitle">100 reviews</div>
                                        </div>
                                        <div class="offer_reviews_rating text-center">8.1</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Offers Item -->

                    <div class="offers_item rating_3">
                        <div class="row">
                            <div class="col-lg-1 temp_col"></div>
                            <div class="col-lg-3 col-1680-4">
                                <div class="offers_image_container">
                                    <!-- Image by https://unsplash.com/@thoughtcatalog -->
                                    <div class="offers_image_background" style="background-image:url({{ asset('vendor/theme-travelix/images/offer_5.jpg') }})"></div>
                                    <div class="offer_name"><a href="single_listing.html">eurostar hotel</a></div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="offers_content">
                                    <div class="offers_price">$50<span>per night</span></div>
                                    <div class="rating_r rating_r_3 offers_rating" data-rating="3">
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                    </div>
                                    <p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Lorem ipsum dolor sit amet.</p>
                                    <div class="offers_icons">
                                        <ul class="offers_icons_list">
                                            <li class="offers_icons_item"><img src="{{ asset('vendor/theme-travelix/images/post.png') }}" alt=""></li>
                                            <li class="offers_icons_item"><img src="{{ asset('vendor/theme-travelix/images/compass.png') }}" alt=""></li>
                                            <li class="offers_icons_item"><img src="{{ asset('vendor/theme-travelix/images/bicycle.png') }}" alt=""></li>
                                            <li class="offers_icons_item"><img src="{{ asset('vendor/theme-travelix/images/sailboat.png') }}" alt=""></li>
                                        </ul>
                                    </div>
                                    <div class="button book_button"><a href="#">book<span></span><span></span><span></span></a></div>
                                    <div class="offer_reviews">
                                        <div class="offer_reviews_content">
                                            <div class="offer_reviews_title">very good</div>
                                            <div class="offer_reviews_subtitle">100 reviews</div>
                                        </div>
                                        <div class="offer_reviews_rating text-center">8.1</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Offers Item -->

                    <div class="offers_item rating_5">
                        <div class="row">
                            <div class="col-lg-1 temp_col"></div>
                            <div class="col-lg-3 col-1680-4">
                                <div class="offers_image_container">
                                    <!-- Image by https://unsplash.com/@mindaugas -->
                                    <div class="offers_image_background" style="background-image:url({{ asset('vendor/theme-travelix/images/offer_6.jpg') }})"></div>
                                    <div class="offer_name"><a href="single_listing.html">grand castle</a></div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="offers_content">
                                    <div class="offers_price">$110<span>per night</span></div>
                                    <div class="rating_r rating_r_5 offers_rating"  data-rating="5">
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                    </div>
                                    <p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Lorem ipsum dolor sit amet.</p>
                                    <div class="offers_icons">
                                        <ul class="offers_icons_list">
                                            <li class="offers_icons_item"><img src="{{ asset('vendor/theme-travelix/images/post.png') }}" alt=""></li>
                                            <li class="offers_icons_item"><img src="{{ asset('vendor/theme-travelix/images/compass.png') }}" alt=""></li>
                                            <li class="offers_icons_item"><img src="{{ asset('vendor/theme-travelix/images/bicycle.png') }}" alt=""></li>
                                            <li class="offers_icons_item"><img src="{{ asset('vendor/theme-travelix/images/sailboat.png') }}" alt=""></li>
                                        </ul>
                                    </div>
                                    <div class="button book_button"><a href="#">book<span></span><span></span><span></span></a></div>
                                    <div class="offer_reviews">
                                        <div class="offer_reviews_content">
                                            <div class="offer_reviews_title">very good</div>
                                            <div class="offer_reviews_subtitle">100 reviews</div>
                                        </div>
                                        <div class="offer_reviews_rating text-center">8.1</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Offers Item -->

                    <div class="offers_item rating_4">
                        <div class="row">
                            <div class="col-lg-1 temp_col"></div>
                            <div class="col-lg-3 col-1680-4">
                                <div class="offers_image_container">
                                    <!-- Image by https://unsplash.com/@rktkn -->
                                    <div class="offers_image_background" style="background-image:url({{ asset('vendor/theme-travelix/images/offer_7.jpg') }})"></div>
                                    <div class="offer_name"><a href="single_listing.html">eurostar hotel</a></div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="offers_content">
                                    <div class="offers_price">$50<span>per night</span></div>
                                    <div class="rating_r rating_r_4 offers_rating" data-rating="4">
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                    </div>
                                    <p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Lorem ipsum dolor sit amet.</p>
                                    <div class="offers_icons">
                                        <ul class="offers_icons_list">
                                            <li class="offers_icons_item"><img src="{{ asset('vendor/theme-travelix/images/post.png') }}" alt=""></li>
                                            <li class="offers_icons_item"><img src="{{ asset('vendor/theme-travelix/images/compass.png') }}" alt=""></li>
                                            <li class="offers_icons_item"><img src="{{ asset('vendor/theme-travelix/images/bicycle.png') }}" alt=""></li>
                                            <li class="offers_icons_item"><img src="{{ asset('vendor/theme-travelix/images/sailboat.png') }}" alt=""></li>
                                        </ul>
                                    </div>
                                    <div class="button book_button"><a href="#">book<span></span><span></span><span></span></a></div>
                                    <div class="offer_reviews">
                                        <div class="offer_reviews_content">
                                            <div class="offer_reviews_title">very good</div>
                                            <div class="offer_reviews_subtitle">100 reviews</div>
                                        </div>
                                        <div class="offer_reviews_rating text-center">8.1</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Offers Item -->

                    <div class="offers_item rating_3">
                        <div class="row">
                            <div class="col-lg-1 temp_col"></div>
                            <div class="col-lg-3 col-1680-4">
                                <div class="offers_image_container">
                                    <!-- Image by https://unsplash.com/@itsnwa -->
                                    <div class="offers_image_background" style="background-image:url({{ asset('vendor/theme-travelix/images/offer_8.jpg') }})"></div>
                                    <div class="offer_name"><a href="single_listing.html">grand castle</a></div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="offers_content">
                                    <div class="offers_price">$90<span>per night</span></div>
                                    <div class="rating_r rating_r_3 offers_rating" data-rating="3">
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                    </div>
                                    <p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Lorem ipsum dolor sit amet.</p>
                                    <div class="offers_icons">
                                        <ul class="offers_icons_list">
                                            <li class="offers_icons_item"><img src="{{ asset('vendor/theme-travelix/images/post.png') }}" alt=""></li>
                                            <li class="offers_icons_item"><img src="{{ asset('vendor/theme-travelix/images/compass.png') }}" alt=""></li>
                                            <li class="offers_icons_item"><img src="{{ asset('vendor/theme-travelix/images/bicycle.png') }}" alt=""></li>
                                            <li class="offers_icons_item"><img src="{{ asset('vendor/theme-travelix/images/sailboat.png') }}" alt=""></li>
                                        </ul>
                                    </div>
                                    <div class="button book_button"><a href="#">book<span></span><span></span><span></span></a></div>
                                    <div class="offer_reviews">
                                        <div class="offer_reviews_content">
                                            <div class="offer_reviews_title">very good</div>
                                            <div class="offer_reviews_subtitle">100 reviews</div>
                                        </div>
                                        <div class="offer_reviews_rating text-center">8.1</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

</div>
@endsection