@extends('index')
@section('content')
<div class="offers">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 class="section_title">Our best offers</h2>
            </div>
        </div>
        <div class="row offers_items">

            <!-- Offers Item -->
            <div class="col-lg-6 offers_col">
                <div class="offers_item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="offers_image_container">
                                <!-- Image by https://unsplash.com/@kensuarez -->
                                <div class="offers_image_background" style="background-image:url({{ asset('vendor/theme-travelix/images/offer_1.jpg') }})"></div>
                                <div class="offer_name"><a href="#">grand castle</a></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="offers_content">
                                <div class="offers_price">$70<span>per night</span></div>
                                <div class="rating_r rating_r_4 offers_rating">
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                </div>
                                <p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>
                                <div class="offers_icons">
                                    <ul class="offers_icons_list">
                                        <li class="offers_icons_item"><img src="{{ asset('vendor/theme-travelix/images/post.png') }}" alt=""></li>
                                        <li class="offers_icons_item"><img src="{{ asset('vendor/theme-travelix/images/compass.png') }}" alt=""></li>
                                        <li class="offers_icons_item"><img src="{{ asset('vendor/theme-travelix/images/bicycle.png') }}" alt=""></li>
                                        <li class="offers_icons_item"><img src="{{ asset('vendor/theme-travelix/images/sailboat.png') }}" alt=""></li>
                                    </ul>
                                </div>
                                <div class="offers_link"><a href="offers.html">read more</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Offers Item -->
            <div class="col-lg-6 offers_col">
                <div class="offers_item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="offers_image_container">
                                <!-- Image by Egzon Bytyqi -->
                                <div class="offers_image_background" style="background-image:url({{ asset('vendor/theme-travelix/images/offer_2.jpg') }})"></div>
                                <div class="offer_name"><a href="#">turkey hills</a></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="offers_content">
                                <div class="offers_price">$50<span>per night</span></div>
                                <div class="rating_r rating_r_4 offers_rating">
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                </div>
                                <p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>
                                <div class="offers_icons">
                                    <ul class="offers_icons_list">
                                    <li class="offers_icons_item"><img src="{{ asset('vendor/theme-travelix/images/post.png') }}" alt=""></li>
                                        <li class="offers_icons_item"><img src="{{ asset('vendor/theme-travelix/images/compass.png') }}" alt=""></li>
                                        <li class="offers_icons_item"><img src="{{ asset('vendor/theme-travelix/images/bicycle.png') }}" alt=""></li>
                                        <li class="offers_icons_item"><img src="{{ asset('vendor/theme-travelix/images/sailboat.png') }}" alt=""></li>
                                    </ul>
                                </div>
                                <div class="offers_link"><a href="offers.html">read more</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Offers Item -->
            <div class="col-lg-6 offers_col">
                <div class="offers_item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="offers_image_container">
                                <!-- Image by https://unsplash.com/@nevenkrcmarek -->
                                <div class="offers_image_background" style="background-image:url({{ asset('vendor/theme-travelix/images/offer_3.jpg') }})"></div>
                                <div class="offer_name"><a href="#">island dream</a></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="offers_content">
                                <div class="offers_price">$90<span>per night</span></div>
                                <div class="rating_r rating_r_4 offers_rating">
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                </div>
                                <p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>
                                <div class="offers_icons">
                                    <ul class="offers_icons_list">
                                        <li class="offers_icons_item"><img src="{{ asset('vendor/theme-travelix/images/post.png') }}" alt=""></li>
                                        <li class="offers_icons_item"><img src="{{ asset('vendor/theme-travelix/images/compass.png') }}" alt=""></li>
                                        <li class="offers_icons_item"><img src="{{ asset('vendor/theme-travelix/images/bicycle.png') }}" alt=""></li>
                                        <li class="offers_icons_item"><img src="{{ asset('vendor/theme-travelix/images/sailboat.png') }}" alt=""></li>
                                    </ul>
                                </div>
                                <div class="offers_link"><a href="offers.html">read more</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Offers Item -->
            <div class="col-lg-6 offers_col">
                <div class="offers_item">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="offers_image_container">
                                <!-- Image by https://unsplash.com/@mantashesthaven -->
                                <div class="offers_image_background" style="background-image:url({{ asset('vendor/theme-travelix/images/offer_4.jpg') }})"></div>
                                <div class="offer_name"><a href="#">travel light</a></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="offers_content">
                                <div class="offers_price">$30<span>per night</span></div>
                                <div class="rating_r rating_r_4 offers_rating">
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                </div>
                                <p class="offers_text">Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor.</p>
                                <div class="offers_icons">
                                    <ul class="offers_icons_list">
                                        <li class="offers_icons_item"><img src="{{ asset('vendor/theme-travelix/images/post.png') }}" alt=""></li>
                                        <li class="offers_icons_item"><img src="{{ asset('vendor/theme-travelix/images/compass.png') }}" alt=""></li>
                                        <li class="offers_icons_item"><img src="{{ asset('vendor/theme-travelix/images/bicycle.png') }}" alt=""></li>
                                        <li class="offers_icons_item"><img src="{{ asset('vendor/theme-travelix/images/sailboat.png') }}" alt=""></li>
                                    </ul>
                                </div>
                                <div class="offers_link"><a href="offers.html">read more</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Testimonials -->

<div class="testimonials">
    <div class="test_border"></div>
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 class="section_title">what our clients say about us</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                
                <!-- Testimonials Slider -->

                <div class="test_slider_container">
                    <div class="owl-carousel owl-theme test_slider">

                        <!-- Testimonial Item -->
                        <div class="owl-item">
                            <div class="test_item">
                                <div class="test_image"><img src="{{ asset('vendor/theme-travelix/images/test_1.jpg') }}" alt="https://unsplash.com/@anniegray"></div>
                                <div class="test_icon"><img src="{{ asset('vendor/theme-travelix/images/backpack.png') }}" alt=""></div>
                                <div class="test_content_container">
                                    <div class="test_content">
                                        <div class="test_item_info">
                                            <div class="test_name">carla smith</div>
                                            <div class="test_date">May 24, 2017</div>
                                        </div>
                                        <div class="test_quote_title">" Best holliday ever "</div>
                                        <p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial Item -->
                        <div class="owl-item">
                            <div class="test_item">
                                <div class="test_image"><img src="{{ asset('vendor/theme-travelix/images/test_2.jpg') }}" alt="https://unsplash.com/@tschax"></div>
                                <div class="test_icon"><img src="{{ asset('vendor/theme-travelix/images/island_t.png') }}" alt=""></div>
                                <div class="test_content_container">
                                    <div class="test_content">
                                        <div class="test_item_info">
                                            <div class="test_name">carla smith</div>
                                            <div class="test_date">May 24, 2017</div>
                                        </div>
                                        <div class="test_quote_title">" Best holliday ever "</div>
                                        <p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial Item -->
                        <div class="owl-item">
                            <div class="test_item">
                                <div class="test_image"><img src="{{ asset('vendor/theme-travelix/images/test_3.jpg') }}" alt="https://unsplash.com/@seefromthesky"></div>
                                <div class="test_icon"><img src="{{ asset('vendor/theme-travelix/images/kayak.png') }}" alt=""></div>
                                <div class="test_content_container">
                                    <div class="test_content">
                                        <div class="test_item_info">
                                            <div class="test_name">carla smith</div>
                                            <div class="test_date">May 24, 2017</div>
                                        </div>
                                        <div class="test_quote_title">" Best holliday ever "</div>
                                        <p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial Item -->
                        <div class="owl-item">
                            <div class="test_item">
                                <div class="test_image"><img src="{{ asset('vendor/theme-travelix/images/test_2.jpg') }}" alt=""></div>
                                <div class="test_icon"><img src="{{ asset('vendor/theme-travelix/images/island_t.png') }}" alt=""></div>
                                <div class="test_content_container">
                                    <div class="test_content">
                                        <div class="test_item_info">
                                            <div class="test_name">carla smith</div>
                                            <div class="test_date">May 24, 2017</div>
                                        </div>
                                        <div class="test_quote_title">" Best holliday ever "</div>
                                        <p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial Item -->
                        <div class="owl-item">
                            <div class="test_item">
                                <div class="test_image"><img src="{{ asset('vendor/theme-travelix/images/test_1.jpg') }}" alt=""></div>
                                <div class="test_icon"><img src="{{ asset('vendor/theme-travelix/images/backpack.png') }}" alt=""></div>
                                <div class="test_content_container">
                                    <div class="test_content">
                                        <div class="test_item_info">
                                            <div class="test_name">carla smith</div>
                                            <div class="test_date">May 24, 2017</div>
                                        </div>
                                        <div class="test_quote_title">" Best holliday ever "</div>
                                        <p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonial Item -->
                        <div class="owl-item">
                            <div class="test_item">
                                <div class="test_image"><img src="{{ asset('vendor/theme-travelix/images/test_3.jpg') }}" alt=""></div>
                                <div class="test_icon"><img src="{{ asset('vendor/theme-travelix/images/kayak.png') }}" alt=""></div>
                                <div class="test_content_container">
                                    <div class="test_content">
                                        <div class="test_item_info">
                                            <div class="test_name">carla smith</div>
                                            <div class="test_date">May 24, 2017</div>
                                        </div>
                                        <div class="test_quote_title">" Best holliday ever "</div>
                                        <p class="test_quote_text">Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa arcu, vitae cursus mi hendrerit nec.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Testimonials Slider Nav - Prev -->
                    <div class="test_slider_nav test_slider_prev">
                        <svg version="1.1" id="Layer_6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
                            <defs>
                                <linearGradient id='test_grad_prev'>
                                    <stop offset='0%' stop-color='#fa9e1b'/>
                                    <stop offset='100%' stop-color='#8d4fff'/>
                                </linearGradient>
                            </defs>
                            <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
                            M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
                            C22.545,2,26,5.541,26,9.909V23.091z"/>
                            <polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219 
                            11.042,18.219 "/>
                        </svg>
                    </div>
                    
                    <!-- Testimonials Slider Nav - Next -->
                    <div class="test_slider_nav test_slider_next">
                        <svg version="1.1" id="Layer_7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
                            <defs>
                                <linearGradient id='test_grad_next'>
                                    <stop offset='0%' stop-color='#fa9e1b'/>
                                    <stop offset='100%' stop-color='#8d4fff'/>
                                </linearGradient>
                            </defs>
                        <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
                        M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
                        C22.545,2,26,5.541,26,9.909V23.091z"/>
                        <polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554 
                        17.046,15.554 "/>
                        </svg>
                    </div>

                </div>
                
            </div>
        </div>

    </div>
</div>
@endsection