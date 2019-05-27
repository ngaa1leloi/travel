@extends('page_user.index')
@section('content')
<div class="hero-wrap js-fullheight" style="background-image: url('resource/images/nha.jpg');">
    <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
                <div class="col-md-9 ftco-animate mb-5 pb-5 text-center text-md-left" data-scrollax=" properties: { translateY: '70%' }">
                <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Discover <br>A new Place</h1>
                <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Find great places to stay, eat, shop, or visit from local experts</p>
                </div>
            </div>
        </div>
    </div>
    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="single-slider owl-carousel">
                        <div class="item">
                            <div class="hotel-img" style="background-image: url({{ config('image.source') }}/{{ $hotel->image }});"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 hotel-single mt-4 mb-5 ftco-animate">
                    <span></span>
                    <h2>@if (session('lang') == 'vi'){{ $hotel->name_vi }} @else {{ $hotel->name_en }} @endif</h2>
                    <p class="rate mb-5">
                        <span class="loc"><a><i class="icon-map"></i>@if (session('lang') == 'vi'){{ $hotel->address_vi }} @else {{ $hotel->address_en }} @endif</a></span>
                        <span class="star">
                            @for($i = 0; $i < $hotel->standard; $i++)
                                <i class="icon-star"></i>
                            @endfor
                        </span>
                    </p>
                    <p>0{{ $hotel->phone }}</p>
                    <p>Website: {{ $hotel->website }}</p>
                   
                    
                    <p>@if (session('lang') == 'vi'){{ $hotel->note_vi }}@else {{ $hotel->note_en }} @endif</p>
                    
                           
                </div>
               
                <div class="col-md-12 hotel-single ftco-animate mb-5 mt-5">
                    <h4 class="mb-4">Related Tours</h4>
                    <div class="row">
                        @foreach($relate_tours as $value)
                        <div class="col-md-4">
                            <div class="destination">
                                <a href="{{ route('tour_detail', $value->id) }}" class="img img-2" style="background-image: url({{ config('image.source') }}/{{ $value->image }});"></a>
                                <div class="text p-3">
                                    <div class="d-flex">
                                        <div class="one">
                                            <h3><a href="{{ route('tour_detail', $value->id) }}">@if (session('lang') == 'vi'){{ $value->name_vi }} @else {{ $value->name_en }} @endif</a></h3>
                                            
                                        </div>
                                        <div class="two">
                                            @if ($value->price != 0)
                                                <span class="price">{{ number_format($value->price) }}đ</span>
                                            @else 
                                            <span class="price">{{ __('text.Price') }}:<a href="{{ route('tour_detail', $value->id) }}">{{ __('text.Contact') }}</a></span>
                                            @endif
                                        </div>
                                    </div>
                                    @if($value->quantity_person != 0)
                                    <p>{{ $value->quantity_person }}</p>
                                    @endif
                                    @if ($value->start_date != null)
                                    <p class="days"><span>{{ $value->start_date }}</span></p>
                                    @else
                                    <p class="days"><span>{{ __('text.Date') }}:<a href="{{ route('tour_detail', $value->id) }}">{{ __('text.Contact') }}</a></span></p>
                                    @endif
                                    <hr>
                                    <p class="bottom-area d-flex">
                                        <span><i class="icon-map-o"></i> {{ __('text.departure') }}: @if (session('lang') == 'vi') {{ $value->departure_vi }} @else {{ $value->departure_en }} @endif</span> 
                                        <p class="ml-auto"><a style="background: #08c299;color: #fff;-webkit-border-radius: 4px;-moz-border-radius: 4px;-ms-border-radius: 4px;border-radius: 4px;padding: 3px 5px;" href="@if($value->status == 0){{ route('booking_tour', $value->id) }} @else {{ route('booking_buffet_tour', $value->id) }} @endif">{{ __('text.book_now') }}</a></p>
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
          </div> <!-- .col-md-8 -->
        </div>
      </div>
    </section> <!-- .section -->

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
