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
                    @foreach($products as $k=>$v)
                        <div class="offers_item rating_4">
                            <div class="row">
                                <div class="col-lg-1 temp_col"></div>
                                <div class="col-lg-3 col-1680-4">
                                    <div class="offers_image_container">
                                        <div class="offers_image_background" style="background-image:url({{ asset('uploads/'.$v->featured_img) }})"></div>
                                        <div class="offer_name"><a href="single_listing.html">{{ $v->name }}</a></div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="offers_content">
                                        @if($v->show_price==1)
                                        <div class="offers_price">{{ $v->currency_code ." ". $v->price }}<span></span></div>
                                        @else
                                        <div class="offers_price">Negotiable price<span></span></div>
                                        @endif
                                        <div class="rating_r rating_r_{{ $v->rating }} offers_rating" data-rating="{{ $v->rating }}">
                                            <i></i>
                                            <i></i>
                                            <i></i>
                                            <i></i>
                                            <i></i>
                                        </div>
                                        <p class="offers_text">{{ strip_tags(substr($v->desc, 0, 200)) . "..." }}</p>
                                        <div class="offers_icons">
                                            <ul class="offers_icons_list">
                                                <li class="offers_icons_item"><img src="{{ asset('vendor/theme-travelix/images/post.png') }}" alt=""></li>
                                                <li class="offers_icons_item"><img src="{{ asset('vendor/theme-travelix/images/compass.png') }}" alt=""></li>
                                                <li class="offers_icons_item"><img src="{{ asset('vendor/theme-travelix/images/bicycle.png') }}" alt=""></li>
                                                <li class="offers_icons_item"><img src="{{ asset('vendor/theme-travelix/images/sailboat.png') }}" alt=""></li>
                                            </ul>
                                        </div>
                                        <div class="button book_button"><a href="{{ url('/product/'.$v->id) }}">more<span></span><span></span><span></span></a></div>                         
                                        <div class="offer_reviews">
                                            <div class="offer_reviews_content">
                                                <div class="offer_reviews_title">very good</div>
                                                <div class="offer_reviews_subtitle">100 reviews</div>
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>

</div>
@endsection

@section('javascript')
<script>
    $(document).ready(function(){
        console.log("all packages");
    });
</script>
@parent
@stop