@extends('page_user.index')
@section('content')
<div class="hero-wrap js-fullheight" style="background-image: url('resource/images/bg_1.jpg');">
    <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Hotel</span></p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Hotels</h1>
                </div>
            </div>
        </div>
    </div>
        
    <section class="ftco-section">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="row">
                        @foreach($hotels as $hotel)
                            <div class="col-sm col-md-6 col-lg-4 ftco-animate">
                                <div class="destination">
                                    <a href="{{ route('hotel_detail', $hotel->id) }}" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{ config('image.source') }}/{{ $hotel->image }});">
                                        <div class="icon d-flex justify-content-center align-items-center">
                                            <span class="icon-link"></span>
                                        </div>
                                    </a>
                                    <div class="text p-3">
                                        <div class="d-flex">
                                            <div class="one">
                                                <h3 style="height: 80px; overflow: hidden;"><a href="{{ route('hotel_detail', $hotel->id) }}">@if (session('lang') == 'vi'){{ $hotel->name_vi }} @else {{ $hotel->name_en }} @endif</a></h3>
                                                <p class="rate">
                                                    @for ($i = 0; $i < $hotel->standard; $i++)
                                                    <i class="icon-star"></i>
                                                    @endfor
                                                    <span>{{ $hotel->standard }}</span>
                                                </p>
                                            </div>
                                            <div class="two">
                                                {{-- <span class="price per-price">$40<br><small>/night</small></span> --}}
                                            </div>
                                        </div>
                                        <p style="height: 165px; overflow: hidden;">@if (session('lang') == 'vi'){{ $hotel->note_vi }} @else {{ $hotel->note_en }} @endif</p>
                                        <hr>
                                        <p class="bottom-area d-flex">
                                            <span><i class="icon-map-o"></i> @if (session('lang') == 'vi'){{ $hotel->address_vi }} @else {{ $hotel->address_en }} @endif</span> 
                                            <span class="ml-auto"><a href="{{ route('hotel_detail', $hotel->id) }}">{{ __('text.detail')}}</a></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="row mt-5">
                        <div class="col text-center">
                            <div class="block-27">
                                <ul>
                                    <li>{{ $hotels->links() }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> <!-- .col-md-8 -->
            </div>
        </div>
    </section>
    <section class="ftco-section-parallax">
        <div class="parallax-img d-flex align-items-center">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
                        <h2>Subcribe to our Newsletter</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
                        <div class="row d-flex justify-content-center mt-5">
                            <div class="col-md-8">
                                <form action="#" class="subscribe-form">
                                    <div class="form-group d-flex">
                                        <input type="text" class="form-control" placeholder="Enter email address">
                                        <input type="submit" value="Subscribe" class="submit px-3">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
