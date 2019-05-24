@extends('page_user.index')
@section('content')
<div class="hero-wrap js-fullheight" style="background-image: url('resource/images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{ route('home') }}">{{ __('text.Home') }}</a></span> <span></span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{ __('text.Contact') }}</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section contact-section ftco-degree-bg">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4">{{ __('text.Contact_Information') }}</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span>{{ __('text.address') }}:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
          </div>
          <div class="col-md-3">
            <p><span>{{ __('text.phone') }}:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
          </div>
          <div class="col-md-3">
            <p><span>{{ __('text.email') }}:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
          </div>
          <div class="col-md-3">
            <p><span>{{ __('text.Website') }}</span> <a href="">yoursite.com</a></p>
          </div>
        </div>
        <div class="row block-9"  style="background: #eeeeee;padding-left: 200px;padding-bottom: 40px; padding-top: 50px">
          <div class="col-md-10 order-md-last pr-md-5">
            <form action="{{ route('store_contact') }}" method="POST">
            	@csrf
              <div class="form-group">
                <input type="text" class="form-control" placeholder="{{ __('text.Your_Name') }}" name="name">
                <p class="help is-danger" style="color: red">{{ $errors->first('name') }}</p>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="{{ __('text.Your_Email') }}" name="email">
                <p class="help is-danger" style="color: red">{{ $errors->first('email') }}</p>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="{{ __('text.Your_Phone') }}" name="phone">
                <p class="help is-danger" style="color: red">{{ $errors->first('phone') }}</p>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="{{ __('text.Subject') }}" name="subject">
                <p class="help is-danger" style="color: red">{{ $errors->first('subject') }}</p>
              </div>
              <div class="form-group">
                <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="{{ __('text.Message') }}"></textarea>
                <p class="help is-danger" style="color: red">{{ $errors->first('message') }}</p>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          {{-- <div class="col-md-6">
          	<div id="map" class="maps navbar-collapse collapse">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.400097552718!2d105.7795971510368!3d21.016671285936134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454aad38b5685%3A0xd5e1b0d5abacb8f6!2sAwesome+Academy!5e0!3m2!1sen!2s!4v1507091655099" width="1086" height="407" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div> --}}
          </div>

      </div>
    </section>

	{{-- <section class="ftco-section-parallax">
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
    </section> --}}
 @endsection
 
