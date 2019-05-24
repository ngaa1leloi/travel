@extends('page_user.index')
@section('content')
    <div class="hero-wrap js-fullheight" style="background-image: url('resource/images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{ route('home') }}">{{ __('text.Home') }}</a></span> <span>{{ __('text.Tours') }}</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{ __('text.Tours') }}</h1>
          </div>
        </div>
      </div>
    </div>
        
    <section class="ftco-section">
      <div class="container">
        <div class="row">
            <div class="col-lg-3 sidebar order-md-last ftco-animate">
                <div class="sidebar-wrap ftco-animate">
                    <h3 class="heading mb-4">{{ __('text.Find_Tour') }}</h3>
                    <form action="{{ route('filter') }}" method="GET">
                        <div class="fields">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="{{ __('text.departure') }}" name="departure">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="{{ __('text.destination') }}" name="name">
                      </div>
                      {{-- <div class="form-group">
                        <div class="select-wrap one-third">
                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                        <select name="" id="" class="form-control" placeholder="Keyword search">
                          <option value="">Select Location</option>
                          <option value="">San Francisco USA</option>
                          <option value="">Berlin Germany</option>
                          <option value="">Lodon United Kingdom</option>
                          <option value="">Paris Italy</option>
                        </select>
                      </div>
                      </div> --}}
                      <div class="form-group">
                        <input type="text" id="checkin_date" class="form-control checkin_date" placeholder="{{ __('text.date_from') }}">
                      </div>
                      <div class="form-group">
                        <input type="text" id="checkout_date" class="form-control checkout_date" placeholder="{{ __('text.date_to') }}">
                      </div>
                      <div class="form-group">
                        <div class="range-slider">
                            <span>
                                <input type="number" value="25000" min="0" max="120000"/>   -
                                <input type="number" value="50000" min="0" max="120000"/>
                            </span>
                            <input value="1000" min="0" max="120000" step="500" type="range"/>
                            <input value="50000" min="0" max="120000" step="500" type="range"/>
                            </svg>
                        </div>
                      </div>
                      <div class="form-group">
                        <input type="submit" value="Search" class="btn btn-primary py-3 px-5">
                      </div>
                    </div>
                </form>
                </div>
          </div><!-- END-->
          <div class="col-lg-9">
            <div class="row">
                @foreach($tours as $tour)
                    <div class="col-sm col-md-6 col-lg-4 ftco-animate">
                        <div class="destination">
                            <a href="{{ route('tour_detail', $tour->id) }}" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{ config('image.source') }}/{{ $tour->image }});">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="icon-link"></span>
                                </div>
                            </a>
                            <div class="text p-3" style="height: 200px">
                                <div class="d-flex">
                                    <div class="one" style="height: 50px; overflow: hidden;">
                                        <h3><a href="{{ route('tour_detail', $tour->id) }}">@if (session('lang') == 'vi'){{ $tour->name_vi }} @else {{ $tour->name_en }} @endif</a></h3>
                                       
                                    </div>
                                    <div class="two" style="height: 50px;">
                                        @if($tour->price != 0)
                                        <span class="price" style="font-size: 15px">{{ number_format($tour->price) }}đ</span>
                                        @else
                                        <span style="font-size: 14px;">{{ __('text.Price') }}:<a href="{{ route('tour_detail', $tour->id) }}">{{ __('text.Contact') }}</a></span>
                                        @endif
                                    </div>
                                </div>
                                <p style="height: 50px;">@if($tour->quantity_person != 0){{ __('text.Seat_Availability') }}: {{ $tour->quantity_person }}@endif</p>
                                <p class="days">
                                    @if($tour->start_date != null)
                                        <span class="price">{{ __('text.Date') }}: {{ $tour->start_date }}</span>
                                    @else
                                        <span class="price">{{ __('text.Date') }}:<a href="{{ route('tour_detail', $tour->id) }}"> {{ __('text.Contact') }}</a></span>
                                    @endif
                                    @if($tour->time != null)
                                    <span>{{ $tour->time }}</span>
                                    @endif
                                </p>
                                <hr>
                                <p class="bottom-area d-flex">
                                    <span style="height: 50px;"><i class="icon-map-o"></i> {{ __('text.departure') }}: @if (session('lang') == 'vi') {{ $tour->departure_vi }} @else {{ $tour->departure_en }} @endif</span> 
                                    <p class="ml-auto"><a style="    background: #08c299;color: #fff;-webkit-border-radius: 4px;-moz-border-radius: 4px;-ms-border-radius: 4px;border-radius: 4px;padding: 3px 5px;" href="{{ route('booking_tour', $tour->id) }}">{{ __('text.book_now') }}</a></p>
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
                        <li>{{ $tours->links() }}</li>
                      </ul>
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
