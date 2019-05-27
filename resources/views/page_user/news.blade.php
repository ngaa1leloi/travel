@extends('page_user.index')
@section('content')
<div class="hero-wrap js-fullheight" style="background-image: url('resource/images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{ route('home') }}">Home</a></span> <span>News</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Tips &amp; Articles</h1>
          </div>
        </div>
      </div>
    </div>
    
    <section class="ftco-section bg-light">
      
      <div class="container">
          @if(Auth::check())
            <a class="btn py-3 px-4 btn-primary" style="margin-bottom: 10px;" href="{{ route('post') }}">Post</a>
          @endif
        <div class="row d-flex">
          @foreach($news as $new)
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="{{ route('news_detail', $new->slug) }}" class="block-20" style="background-image: url('{{ config('image.source') }}/{{ $new->image }}'); width: 340px">
              </a>
              <div class="text">
              	<span class="tag">Tips, Travel</span>
                <h3 class="heading mt-3" style=""><a href="{{ route('news_detail', $new->id) }}">{{ $new->title_vi }}</a></h3>
                <div class="meta mb-3">
                  <div><a>{{ $new->updated_at }}</a></div>
                  <div><a>@if($new->user_id != null){{ $new->user->name }} @else Admin @endif</a></div>
                  <div><a href="{{ route('news_detail', $new->id) }}" class="meta-chat"><span class="icon-chat"></span> {{ count($new->comments) }}</a></div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li>{{ $news->links() }}</li>
              </ul>
            </div>
          </div>
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
@section('script')


<script type="text/javascript">
    @if(session('message'))       
        $.notify("{{ session('message') }}", "success");
    @endif
</script>
@endsection
