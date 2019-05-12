@extends('page_user.index')
@section('content')
<div class="hero-wrap js-fullheight" style="background-image: url('resource/images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{ route('home') }}">{{ __('text.Home') }}</a></span> <span></span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{ __('text.News') }}</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section contact-section ftco-degree-bg">
      <div class="container">
     
        <div class="row block-9">
          <div class="col-md-12 order-md-last pr-md-5">
            <form action="{{ route('post_news') }}" method="POST" enctype="multipart/form-data">
            	@csrf
              <div class="form-group">
                <input type="text" class="form-control" placeholder="{{ __('text.title') }}" name="title">
                <p class="help is-danger" style="color: red">{{ $errors->first('title') }}</p>
              </div>
              <div class="form-group">
                <input type="file" class="form-control" name="image">
                <p class="help is-danger" style="color: red">{{ $errors->first('image') }}</p>
              </div>
              <div class="form-group">
                <textarea name="content" id="content_news" cols="30" rows="7" class="" placeholder="{{ __('text.Content') }}"></textarea>
                <p class="help is-danger" style="color: red">{{ $errors->first('content') }}</p>
              </div>
              <div class="form-group">
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          
          </div>

          </div>

      </div>
    </section>
 @endsection
