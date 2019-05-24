@extends('page_user.index')
@section('content')
<div class="hero-wrap js-fullheight" style="background-image: url('resource/images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{ route('home') }}">{{ __('text.Home') }}</a></span> </p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"></h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section contact-section ftco-degree-bg">
        <h2 style="text-align: center; color: #0033cc">{{ __('text.thankyou') }}</h2>
      <div class="container">
        <form >
            
            <input type="hidden" name="tour_id" value="{{ $booking_tour->id }}">
            <div class="col-md-12 mb-5">
            <h2 class="h4">{{ __('text.confirm') }}</h2>
            </div>
            <div class="col-xs-12 book-thongtinlienlac" style="background: #eeeeee;padding: 18px;" >
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label>{{ __('text.name_tour') }}</label>
                            <div>
                                <input class="form-control input-lg" id="contact_name" name="name" disabled type="text" value="@if (session('lang') == 'vi'){{ $booking_tour->tour->name_vi }} @else {{ $booking_tour->tour->name_en }} @endif">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>{{ __('text.departure') }}</label>
                            <div>
                                <input class="form-control input-lg" id="mobilephone" name="phone" type="text" value="@if (session('lang') == 'vi'){{ $booking_tour->tour->departure_vi }} @else {{ $booking_tour->tour->departure_en }} @endif" disabled>
                            </div>
                        </div>
                       {{--  <div class="form-group">
                            <label>{{ __('text.Price') }}</label>
                            <div>
                                <input class="form-control input-lg" id="mobilephone" name="price" type="text" value="{{ $booking_tour->price }}" disabled>
                            </div>
                        </div> --}}
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label>{{ __('text.date_from') }}</label>
                            <div>
                                <input class="form-control input-lg" name="date_from" type="date" value="{{ $booking_tour->tour->start_date }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>{{ __('text.date_to') }}</label>
                            <div>
                                <input class="form-control input-lg" name="date_from" type="date" value="{{ $booking_tour->tour->end_date }}">
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
            <div class="col-md-12 mb-5" style="margin-top: 20px">
            <h2 class="h4">{{ __('text.info_contact') }}</h2>
            </div>
            <div class="col-xs-12 book-thongtinlienlac" style="background: #eeeeee;padding: 18px;">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label>{{ __('text.name') }}</label>
                            <div>
                                <input class="form-control input-lg" id="contact_name" name="name" type="text" value="{{ $booking_tour->name }}" disabled="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>{{ __('text.phone') }}</label>
                            <div>
                                <input class="form-control input-lg" id="mobilephone" name="phone" type="text" value="{{ $booking_tour->phone }}" disabled="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>{{ __('text.address') }}</label>
                            <div>
                                <input class="form-control input-lg" id="mobilephone" name="phone" type="text" value="{{ $booking_tour->address }}" disabled="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label>{{ __('text.email') }}</label>
                            <div>
                                <input class="form-control input-lg" id="email" name="email" type="email" value="{{ $booking_tour->email }}" disabled="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3 col-sm-2 mg-bot15">
                                    <label>{{ __('text.adult') }}</label>
                                    <div>
                                        <input class="form-control input-lg" id="quantity_adult" name="quantity_adult" type="text" value="{{ $booking_tour->quantity_adult }}" >
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-2 mg-bot15">
                                    <label>{{ __('text.child') }}</label>
                                    <div>
                                        <input class="form-control input-lg" id="quantity_child" name="quantity_child" type="text" value="{{ $booking_tour->quantity_child }}">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 mg-bot15">
                                    <label>{{ __('text.baby') }}</label>
                                    <div>
                                        <input class="form-control input-lg" id="quantity_baby" name="quantity_baby" type="text" value="{{ $booking_tour->quantity_baby }}">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 mg-bot15">
                                    <label>{{ __('text.total') }}:</label>
                                    <div>
                                        <input class="form-control input-lg" id="result" name="quantity_baby" type="text" value="{{ number_format($booking_tour->price) }}đ" disabled="disabled">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>{{ __('text.note') }}</label>
                            <div>
                                <input class="form-control input-lg" id="mobilephone" name="phone" type="text" value="{{ $booking_tour->note }}" disabled="">
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            Booking của quý khách đã được chúng tôi xác nhận thành công
            Thời hạn thanh toán:  3 ngay (Theo giờ Việt Nam)  (Nếu quá thời hạn trên mà quý khách chưa thanh toán, sẽ hủy booking này)
        
            <div class="form-group" style="margin-top: 10px">
                <a class="btn btn-primary py-3 px-5" href="{{ route('home') }}">{{ __('text.Home') }}</a>
            </div>
         </form>
      </div>
    </section>
@endsection

