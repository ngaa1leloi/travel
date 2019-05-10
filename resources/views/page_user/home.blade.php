@extends('page_user.index')
@section('content')
<div class="hero-wrap js-fullheight" style="background-image: url('resource/images/logo.jpg');">
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

    <section class="ftco-section justify-content-end ftco-search">
        <div class="container-wrap ml-auto">
            <div class="row no-gutters">
          <div class="col-md-12 nav-link-wrap">
            <div class="nav nav-pills justify-content-center text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">{{ __('text.Tours') }}</a>

              <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">{{ __('text.Hotels') }}</a>

            </div>
          </div>
          <div class="col-md-12 tab-wrap">
            
            <div class="tab-content p-4 px-5" id="v-pills-tabContent">

              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
                <form action="{{ route('filter') }}" method="GET" class="search-destination">
                    <div class="row">
                        <div class="col-md align-items-end">
                            <div class="form-group">
                                <label for="#">{{ __('text.departure') }}</label>
                                <div class="form-field">
                                    <div class="icon"><span class="icon-my_location"></span></div>
                                    <input type="text" name="departure" class="form-control" placeholder="From">
                                  </div>
                              </div>
                        </div>
                        <div class="col-md align-items-end">
                            <div class="form-group">
                                <label for="#">{{ __('text.destination') }}</label>
                                <div class="form-field">
                                    <div class="icon"><span class="icon-map-marker"></span></div>
                                    <input type="text" name="name" class="form-control" placeholder="Where">
                                  </div>
                              </div>
                        </div>
                        <div class="col-md align-items-end">
                            <div class="form-group">
                                <label for="#">{{ __('text.date_from') }}</label>
                                <div class="form-field">
                                    <div class="icon"><span class="icon-map-marker"></span></div>
                                    <input type="date" name="date-from" class="form-control" placeholder="{{ __('text.date_from') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md align-items-end">
                            <div class="form-group">
                                <label for="#">{{ __('text.date_to') }}</label>
                                <div class="form-field">
                                    <div class="icon"><span class="icon-map-marker"></span></div>
                                    <input type="date" class="form-control" placeholder="{{ __('text.date_to') }}" name="date-to">
                                  </div>
                              </div>
                        </div>
                        <div class="col-md align-items-end">
                            <div class="form-group">
                                <label for="#">{{ __('text.Price') }}</label>
                                <div class="form-field">
                                    <div class="select-wrap">
                                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                  <select name="price" id="" class="form-control">
                                    <option value="1">{{ __('text.under_1') }}</option>
                                    <option value="2">{{ __('text.from_1_to_2') }}</option>
                                    <option value="3">{{ __('text.from_2_to_4') }}</option>
                                    <option value="4">{{ __('text.from_4_to_7') }}</option>
                                    <option value="5">{{ __('text.over_7') }}</option>
                                  </select>
                                </div>
                                  </div>
                              </div>
                        </div>
                        <div class="col-md align-self-end">
                            <div class="form-group">
                                <div class="form-field">
                                    <input type="submit" value="Search" class="form-control btn btn-primary">
                                  </div>
                              </div>
                        </div>
                    </div>
                </form>
              </div>

              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-performance-tab">
                <form action="#" class="search-destination">
                    <div class="row">
                        <div class="col-md align-items-end">
                            <div class="form-group">
                                <label for="#">Check In</label>
                                <div class="form-field">
                                    <div class="icon"><span class="icon-map-marker"></span></div>
                                    <input type="text" class="form-control checkin_date" placeholder="Check In">
                                  </div>
                              </div>
                        </div>
                        <div class="col-md align-items-end">
                            <div class="form-group">
                                <label for="#">Check Out</label>
                                <div class="form-field">
                                    <div class="icon"><span class="icon-map-marker"></span></div>
                                    <input type="text" class="form-control checkout_date" placeholder="From">
                                  </div>
                              </div>
                        </div>
                        <div class="col-md align-items-end">
                            <div class="form-group">
                                <label for="#">Guest</label>
                                <div class="form-field">
                                    <div class="select-wrap">
                                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                  <select name="" id="" class="form-control">
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                    <option value="">4</option>
                                    <option value="">5</option>
                                  </select>
                                </div>
                                  </div>
                              </div>
                        </div>
                        <div class="col-md align-self-end">
                            <div class="form-group">
                                <div class="form-field">
                                    <input type="submit" value="Search" class="form-control btn btn-primary">
                                  </div>
                              </div>
                        </div>
                    </div>
                </form>
              </div>

              <div class="tab-pane fade" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-effect-tab">
                <form action="#" class="search-destination">
                    <div class="row">
                        <div class="col-md align-items-end">
                            <div class="form-group">
                                <label for="#">Where</label>
                                <div class="form-field">
                                    <div class="icon"><span class="icon-map-marker"></span></div>
                                    <input type="text" class="form-control" placeholder="Where">
                                  </div>
                              </div>
                        </div>
                        <div class="col-md align-items-end">
                            <div class="form-group">
                                <label for="#">Check In</label>
                                <div class="form-field">
                                    <div class="icon"><span class="icon-map-marker"></span></div>
                                    <input type="text" class="form-control checkin_date" placeholder="Check In">
                                  </div>
                              </div>
                        </div>
                        <div class="col-md align-items-end">
                            <div class="form-group">
                                <label for="#">Check Out</label>
                                <div class="form-field">
                                    <div class="icon"><span class="icon-map-marker"></span></div>
                                    <input type="text" class="form-control checkout_date" placeholder="From">
                                  </div>
                              </div>
                        </div>
                        <div class="col-md align-self-end">
                            <div class="form-group">
                                <div class="form-field">
                                    <input type="submit" value="Search" class="form-control btn btn-primary">
                                  </div>
                              </div>
                        </div>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="intro ftco-animate">
                        <h3><span>01</span> Travel</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="intro ftco-animate">
                        <h3><span>02</span> Experience</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="intro ftco-animate">
                        <h3><span>03</span> Relax</h3>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">See our latest vacation ideas</h2>
          </div>
        </div>
        <div class="row">
            <div class="col-md-4 ftco-animate">
                <a href="#" class="destination-entry img" style="background-image: url(resource/images/destination-1.jpg);">
                    <div class="text text-center">
                        <h3>Beachfront Scape</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-4 ftco-animate">
                <a href="#" class="destination-entry img" style="background-image: url(resource/images/destination-2-1.jpg);">
                    <div class="text text-center">
                        <h3>Group Holidays</h3>
                    </div>
                </a>
            </div>
            <div class="col-md-4 ftco-animate">
                <a href="#" class="destination-entry img" style="background-image: url(resource/images/destination-3.jpg);">
                    <div class="text text-center">
                        <h3>City Breaks</h3>
                    </div>
                </a>
            </div>
        </div>
        </div>
    </section>
    
    <section class="ftco-about d-md-flex">
        <div class="one-half img" style="background-image: url(resource/images/about.jpg);"></div>
        <div class="one-half ftco-animate">
        <div class="heading-section ftco-animate ">
          <h2 class="mb-4">The Best Travel Agency</h2>
        </div>
        <div>
            <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn’t take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their.</p>
        </div>
        </div>
    </section>

    <section class="ftco-section services-section bg-light">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block">
                        <div class="icon"><span class="flaticon-yatch"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Special Activities</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>      
                </div>
                <div class="col-md-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block">
                        <div class="icon"><span class="flaticon-around"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Travel Arrangements</h3>
                            <p>A small river named Duden flows by their place and supplies.</p>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </section>
    
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2 class="mb-4">{{ __('LAST-MINUTE TOURS') }}</h2>
                </div>
            </div>          
        </div>
        <div class="container-fluid">
            <div class="row">
                {{-- 4 tours --}}
                @foreach($tours as $key => $value)
                @if($key % 2 == 0)
                <div class="col-sm col-md-6 col-lg ftco-animate">
                    <div class="destination">
                        <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{ config('image.source') }}/{{ $value->image }});">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-link"></span>
                            </div>
                        </a>
                        <div class="text p-3">
                            <div class="d-flex">
                                <div class="one">
                                    <h3><a href="{{ route('tour_detail', $value->id) }}">@if (session('lang') == 'vi'){{ $value->name_vi }} @else {{ $value->name_en }} @endif</a></h3>
                                    
                                </div>
                                <div class="two">
                                    <span class="price">{{ number_format($value->price) }}đ</span>
                                </div>
                            </div>
                            <p>{{ $value->quantity_person }}</p>
                            <p class="days"><span>{{ $value->date }}</span></p>
                            <hr>
                            <p class="bottom-area d-flex">
                                <span><i class="icon-map-o"></i> {{ __('text.departure') }}: @if (session('lang') == 'vi'){{ $value->departure_vi }} @else {{ $value->departure_en }} @endif</span> 
                                <span class="ml-auto"><a href="{{ route('booking_tour', $value->id) }}">{{ __('text.book_now') }}</a></span>
                            </p>
                        </div>
                    </div>
                </div>
                @else
                <div class="col-sm col-md-6 col-lg ftco-animate">
                    <div class="destination d-md-flex flex-column-reverse">
                        <a href="#" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{ config('image.source') }}/{{ $value->image }});">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-link"></span>
                            </div>
                        </a>
                        <div class="text p-3">
                            <div class="d-flex">
                                <div class="one">
                                    <h3><a href="{{ route('tour_detail', $value->id) }}">@if (session('lang') == 'vi'){{ $value->name_vi }} @else {{ $value->name_en }} @endif</a></h3>
                                    
                                </div>
                                <div class="two">
                                    <span class="price">{{ number_format($value->price) }}đ</span>
                                </div>
                            </div>
                            <p>{{ $value->quantity_person }}</p>
                            <p class="days"><span>{{ $value->date }}</span></p>
                            <hr>
                            <p class="bottom-area d-flex">
                                <span><i class="icon-map-o"></i> {{ __('text.departure') }}: @if (session('lang') == 'vi'){{ $value->departure_vi }} @else {{ $value->departure_en }} @endif</span> 
                                <span class="ml-auto"><a href="{{ route('booking_tour', $value->id) }}">{{ __('text.book_now') }}</a></span>
                            </p>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2 class="mb-4">{{ __('text.TOUR_FREE_EASY') }}</h2>
                </div>
            </div>          
        </div>
        <div class="container-fluid">
            <div class="row">
                {{-- 4 tours --}}
                @foreach($buffet_tours as $key => $value)
                @if($key % 2 == 0)
                <div class="col-sm col-md-6 col-lg ftco-animate">
                    <div class="destination">
                        <a href="{{ route('tour_detail', $value->id) }}" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{ config('image.source') }}/{{ $value->image }});">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-link"></span>
                            </div>
                        </a>
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
                            <p>{{ $value->quantity_person }}</p>
                            @if ($value->date != null)
                            <p class="days"><span>{{ $value->date }}</span></p>
                            @else
                            <p class="days"><span>{{ __('text.Date') }}:<a href="{{ route('tour_detail', $value->id) }}">{{ __('text.Contact') }}</a></span></p>
                            @endif
                            <hr>
                            <p class="bottom-area d-flex">
                                <span><i class="icon-map-o"></i> {{ __('text.departure') }}: @if (session('lang') == 'vi') {{ $value->departure_vi }} @else {{ $value->departure_en }} @endif</span> 
                                <span class="ml-auto"><a href="{{ route('booking_tour', $value->id) }}">{{ __('book_now') }}</a></span>
                            </p>
                        </div>
                    </div>
                </div>
                @else
                <div class="col-sm col-md-6 col-lg ftco-animate">
                    <div class="destination d-md-flex flex-column-reverse">
                        <a href="{{ route('tour_detail', $value->id) }}" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{ config('image.source') }}/{{ $value->image }});">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-link"></span>
                            </div>
                        </a>
                        <div class="text p-3">
                            <div class="d-flex">
                                <div class="one">
                                    <h3><a href="{{ route('tour_detail', $value->id) }}">@if (session('lang') == 'vi'){{ $value->name_vi }} @else {{ $value->name_en }} @endif</a></h3>
                                    {{-- <p class="rate">
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star"></i>
                                        <i class="icon-star-o"></i>
                                        <span>8 Rating</span>
                                    </p> --}}
                                </div>
                                <div class="two">
                                    @if ($value->price != 0)
                                    <span class="price">{{ number_format($value->price) }}đ</span>
                                    @else 
                                    <span class="price">{{ __('text.Price') }}:<a href="{{ route('tour_detail', $value->id) }}">{{ __('text.Contact') }}</a></span>
                                    @endif
                                </div>
                            </div>
                            <p>{{ $value->quantity_person }}</p>
                            @if ($value->date != null)
                            <p class="days"><span>{{ $value->date }}</span></p>
                            @else
                            <p class="days"><span>{{ __('text.Date') }}:<a href="{{ route('tour_detail', $value->id) }}">{{ __('text.Contact') }}</a></span></p>
                            @endif
                            <hr>
                            <p class="bottom-area d-flex">
                                <span><i class="icon-map-o"></i> {{ __('text.departure') }}: @if (session('lang') == 'vi') {{ $value->departure_vi }} @else {{ $value->departure_en }} @endif</span> 
                                <span class="ml-auto"><a href="{{ route('booking_tour', $value->id) }}">{{ __('text.book_now') }}</a></span>
                            </p>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </section>

     <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Most Popular Places</h2>
                </div>
            </div>          
        </div>
        <div class="container-fluid">
            <div class="row">
                {{-- 4 tours --}}
                @foreach($places as $place => $value)
                @if($key % 2 == 0)
                <div class="col-sm col-md-6 col-lg ftco-animate">
                    <div class="destination">
                        <a href="{{ route('scenic', $value->slug) }}" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{ config('image.source') }}/{{ $value->scenics()->firstOrFail()->image }});">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-link"></span>
                            </div>
                        </a>
                        <div class="text p-3">
                            <div class="d-flex">
                                <div class="one">
                                    <h3><a href="{{ route('scenic', $value->slug) }}">@if (session('lang') == 'vi'){{ $value->name_vi }} @else {{ $value->name_en }} @endif</a></h3>
                                    
                                </div>
                                <div class="two">
                                    <span class="price"></span>
                                </div>
                            </div>
                            <p>@if (session('lang') == 'vi'){{ $value->description_vi }} @else {{ $value->description_en }} @endif</p>
                            <p class="days"><span></span></p>
                            <hr>
                            <p class="bottom-area d-flex">
                                <span><i class="icon-map-o"></i> </span> 
                                <span class="ml-auto"><a href="{{ route('scenic', $value->slug) }}">{{ __('text.detail') }}</a></span>
                            </p>
                        </div>
                    </div>
                </div>
                @else
                <div class="col-sm col-md-6 col-lg ftco-animate">
                    <div class="destination d-md-flex flex-column-reverse">
                        <a href="{{ route('scenic', $value->slug) }}" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{ config('image.source') }}/{{ $value->image }});">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-link"></span>
                            </div>
                        </a>
                        <div class="text p-3">
                            <div class="d-flex">
                                <div class="one">
                                    <h3><a href="{{ route('scenic', $value->slug) }}">@if (session('lang') == 'vi'){{ $value->name_vi }} @else {{ $value->name_en }} @endif</a></h3>
                                    
                                </div>
                                <div class="two">
                                    
                                </div>
                            </div>
                            <p>@if (session('lang') == 'vi'){{ $value->description_vi }} @else {{ $value->description_en }} @endif</p>
                            <p class="days"></p>
                            <hr>
                            <p class="bottom-area d-flex">
                                <span><i class="icon-map-o"></i></span> 
                                <span class="ml-auto"><a href="{{ route('scenic', $value->slug) }}">{{ __('text.detail') }}</a></span>
                            </p>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(resource/images/bg_1.jpg);" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="row">
                  <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                      <div class="text">
                        <strong class="number" data-number="100000">0</strong>
                        <span>Happy Customers</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                      <div class="text">
                        <strong class="number" data-number="40000">0</strong>
                        <span>Destination Places</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                      <div class="text">
                        <strong class="number" data-number="87000">0</strong>
                        <span>Hotels</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 text-center">
                      <div class="text">
                        <strong class="number" data-number="56400">0</strong>
                        <span>Restaurant</span>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
        </div>
    </section>


    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2 class="mb-4"><strong>Popular</strong> Hotels</h2>
                </div>
            </div>          
        </div>
        <div class="container-fluid">
            <div class="row">
                {{-- lay 5 hotels --}}
                @foreach($hotels as $key => $value)
                @if($key % 2 == 0)
                <div class="col-sm col-md-6 col-lg ftco-animate">
                    <div class="destination">
                        <a href="{{ route('hotel_detail', $value->id) }}" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{ config('image.source') }}/{{ $value->image }});">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-link"></span>
                            </div>
                        </a>
                        <div class="text p-3">
                            <div class="d-flex">
                                <div class="one">@if (session('lang') == 'vi'){{ $value->name_vi }} @else {{ $value->name_en }} @endif</a></h3>
                                    <p class="rate">
                                        @for ( $i = 0; $i < $value->standard; $i++)
                                        <i class="icon-star"></i>
                                        @endfor
                                        <span>{{ $value->standard }}</span>
                                    </p>
                                </div>
                                <div class="two">
                                    <span class="price per-price"><br><small></small></span>
                                </div>
                            </div>
                             <p>@if (session('lang') == 'vi'){{ $value->address_vi }} @else {{ $value->address_en }} @endif</p>
                            
                            <hr>
                            <p class="bottom-area d-flex">
                                <span><i class="icon-map-o"></i></span> 
                                <span class="ml-auto"><a href="{{ route('hotel_detail', $value->id) }}">{{ __('text.detail') }}</a></span>
                            </p>
                        </div>
                    </div>
                </div>
                @else
                <div class="col-sm col-md-6 col-lg ftco-animate">
                    <div class="destination d-md-flex flex-column-reverse">
                        <a href="{{ route('hotel_detail', $value->id) }}" class="img img-2 d-flex justify-content-center align-items-center" style="background-image: url({{ config('image.source') }}/{{ $value->image }});">
                            <div class="icon d-flex justify-content-center align-items-center">
                                <span class="icon-link"></span>
                            </div>
                        </a>
                        <div class="text p-3">
                            <div class="d-flex">
                                <div class="one">
                                    <h3><a href="{{ route('hotel_detail', $value->id) }}">@if (session('lang') == 'vi'){{ $value->name_vi }} @else {{ $value->name_en }} @endif</a></h3>
                                    <p class="rate">
                                        @for ( $i = 0; $i < $value->standard; $i++)
                                        <i class="icon-star"></i>
                                        @endfor
                                        <span>{{ $value->standard }}</span>
                                    </p>
                                </div>
                                <div class="two">
                                    <span class="price per-price"><br><small></small></span>
                                </div>
                            </div>
                            <p>@if (session('lang') == 'vi'){{ $value->address_vi }} @else {{ $value->address_en }} @endif</p>
                            <hr>
                            <p class="bottom-area d-flex">
                                <span><i class="icon-map-o"></i> </span> 
                                <span class="ml-auto"><a href="{{ route('hotel_detail', $value->id) }}">{{ __('text.detail') }}</a></span>
                            </p>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </section>

   {{--  <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-4">Our satisfied customer says</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(resource/images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Mark Web</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(resource/images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Mark Web</p>
                    <span class="position">Interface Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(resource/images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Mark Web</p>
                    <span class="position">UI Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(resource/images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Mark Web</p>
                    <span class="position">Web Developer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(resource/images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Mark Web</p>
                    <span class="position">System Analyst</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2>{{ __('text.news_and_tips') }}</h2>
                </div>
            </div>
            <div class="row d-flex">
                {{-- 3 news --}}
                @foreach($news as $new)
                <div class="col-md-4 d-flex ftco-animate">
                    <div class="blog-entry align-self-stretch">
                        <a href="{{ route('news_detail', $new->slug) }}" class="block-20" style="background-image: url({{ config('image.source') }}/{{ $new->image }});">
                        </a>
                        <div class="text">
                            <span class="tag"></span>
                            <h3 class="heading mt-3"><a href="{{ route('news_detail', $new->slug) }}">@if (session('lang') == 'vi'){{ $new->title_vi }} @else {{ $new->title_en }} @endif</a></h3>
                            <div class="meta mb-3">
                                <div><a>{{ $new->updated_at }}</a></div>
                                <div><a href="#">Admin</a></div>
                                <div><a href="{{ route('news_detail', $new->slug) }}" class="meta-chat"><span class="icon-chat"></span>{{ count($new->comments) }}</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
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
