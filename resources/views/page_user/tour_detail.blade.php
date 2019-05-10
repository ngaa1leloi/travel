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
                            <div class="hotel-img" style="background-image: url({{ config('image.source') }}/{{ $tour->image }});"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 hotel-single mt-4 mb-5 ftco-animate">
                    <span></span>
                    <h2>@if (session('lang') == 'vi'){{ $tour->name_vi }} @else {{ $tour->name_en }} @endif</h2>
                    <p class="rate mb-5">
                        <span class="loc"><a href="{{ route('hotel_detail', '$tour->hotel->id') }}"><i class="icon-map"></i>{{ $tour->hotel->name_vi }}</a></span>
                        <span class="star">
                            @for($i = 0; $i < $tour->hotel->standard; $i++)
                                <i class="icon-star"></i>
                            @endfor
                        </span>
                    </p>
                    <p>{{ $tour->process_vi }}</p>
                    <p class="ml-auto"><a style="background: #08c299;color: #fff;-webkit-border-radius: 4px;-moz-border-radius: 4px;-ms-border-radius: 4px;border-radius: 4px;padding: 3px 5px;" href="@if($tour->status == 0){{ route('booking_tour', $tour->id) }} @else {{ route('booking_buffet_tour', $tour->id) }} @endif">{{ __('text.book_now') }}</a></p>
                           
                </div>
               
               {{--  <div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
                    <h4 class="mb-4">Our Rooms</h4>
                    <div class="row">
                        <div class="col-md-4">
                                    <div class="destination">
                                        <a href="hotel-single.html" class="img img-2" style="background-image: url(images/room-4.jpg);"></a>
                                        <div class="text p-3">
                                            <div class="d-flex">
                                                <div class="one">
                                                    <h3><a href="hotel-single.html">Hotel, Italy</a></h3>
                                                    <p class="rate">
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star-o"></i>
                                                        <span>8 Rating</span>
                                                    </p>
                                                </div>
                                                <div class="two">
                                                    <span class="price per-price">$40<br><small>/night</small></span>
                                                </div>
                                            </div>
                                            <p>Far far away, behind the word mountains, far from the countries</p>
                                            <hr>
                                            <p class="bottom-area d-flex">
                                                <span><i class="icon-map-o"></i> Miami, Fl</span> 
                                                <span class="ml-auto"><a href="#">Book Now</a></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="destination">
                                        <a href="hotel-single.html" class="img img-2" style="background-image: url(images/room-5.jpg);"></a>
                                        <div class="text p-3">
                                            <div class="d-flex">
                                                <div class="one">
                                                    <h3><a href="hotel-single.html">Hotel, Italy</a></h3>
                                                    <p class="rate">
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star-o"></i>
                                                        <span>8 Rating</span>
                                                    </p>
                                                </div>
                                                <div class="two">
                                                    <span class="price per-price">$40<br><small>/night</small></span>
                                                </div>
                                            </div>
                                            <p>Far far away, behind the word mountains, far from the countries</p>
                                            <hr>
                                            <p class="bottom-area d-flex">
                                                <span><i class="icon-map-o"></i> Miami, Fl</span> 
                                                <span class="ml-auto"><a href="#">Book Now</a></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="destination">
                                        <a href="hotel-single.html" class="img img-2" style="background-image: url(images/room-6.jpg);"></a>
                                        <div class="text p-3">
                                            <div class="d-flex">
                                                <div class="one">
                                                    <h3><a href="hotel-single.html">Hotel, Italy</a></h3>
                                                    <p class="rate">
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star"></i>
                                                        <i class="icon-star-o"></i>
                                                        <span>8 Rating</span>
                                                    </p>
                                                </div>
                                                <div class="two">
                                                    <span class="price per-price">$40<br><small>/night</small></span>
                                                </div>
                                            </div>
                                            <p>Far far away, behind the word mountains, far from the countries</p>
                                            <hr>
                                            <p class="bottom-area d-flex">
                                                <span><i class="icon-map-o"></i> Miami, Fl</span> 
                                                <span class="ml-auto"><a href="#">Book Now</a></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                    </div>
                </div>
                <div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
                    <h4 class="mb-5">Check Availability &amp; Booking</h4>
                    <div class="fields">
                        <div class="row">
                            <div class="col-md-6">
                              <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                <input type="text" class="form-control checkin_date" placeholder="Date from">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                <input type="text" class="form-control checkout_date" placeholder="Date to">
                              </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                <div class="select-wrap one-third">
                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                <select name="" id="" class="form-control" placeholder="Guest">
                                  <option value="0">Guest</option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                </select>
                              </div>
                              </div>
                          </div>
                          <div class="col-md-6">
                                <div class="form-group">
                                <div class="select-wrap one-third">
                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                <select name="" id="" class="form-control" placeholder="Children">
                                  <option value="0">Children</option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                </select>
                              </div>
                              </div>
                          </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <input type="submit" value="Check Availability" class="btn btn-primary py-3">
                              </div>
                          </div>
                      </div>
                    </div>
                </div>
                <div class="col-md-12 hotel-single ftco-animate mb-5 mt-4">
                    <h4 class="mb-4">Review &amp; Ratings</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <form method="post" class="star-rating">
                                          <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1">
                                                    <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i> 100 Ratings</span></p>
                                                </label>
                                          </div>
                                          <div class="form-check">
                                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                          <label class="form-check-label" for="exampleCheck1">
                                               <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i> 30 Ratings</span></p>
                                          </label>
                                          </div>
                                          <div class="form-check">
                                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                          <label class="form-check-label" for="exampleCheck1">
                                            <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 5 Ratings</span></p>
                                         </label>
                                          </div>
                                          <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                          <label class="form-check-label" for="exampleCheck1">
                                            <p class="rate"><span><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 0 Ratings</span></p>
                                          </label>
                                          </div>
                                          <div class="form-check">
                                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                          <label class="form-check-label" for="exampleCheck1">
                                            <p class="rate"><span><i class="icon-star"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i><i class="icon-star-o"></i> 0 Ratings</span></p>
                                            </label>
                                          </div>
                                        </form>
                        </div>
                    </div>
                </div> --}}
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
                                    @if ($value->date != null)
                                    <p class="days"><span>{{ $value->date }}</span></p>
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
