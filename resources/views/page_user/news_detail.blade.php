@extends('page_user.index')
@section('content')
<div class="hero-wrap js-fullheight" style="background-image: url('resource/images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>News</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Tips &amp; Articles</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ftco-animate">
                    <h2 class="mb-3">{{ $news->title_vi }}</h2>
                    <p>
                        <img src="{{ config('image.source') }}/{{ $news->image }}" alt="" class="img-fluid">
                    </p>
                    <div class="content">
                        @markdown($news->content_vi)
                    </div>
                   {{--  <div class="tag-widget post-tag-container mb-5 mt-5">
                        <div class="tagcloud">
                            <a href="#" class="tag-cloud-link">Life</a>
                            <a href="#" class="tag-cloud-link">Sport</a>
                            <a href="#" class="tag-cloud-link">Tech</a>
                            <a href="#" class="tag-cloud-link">Travel</a>
                        </div>
                    </div> --}}

                    <div style="font-size: 18px; color: #cc6666"><i>@if($news->user_id != null){{ $news->user->name }} @else Admin @endif</i></div>
                    <div class="pt-5 mt-5">
                        <h3 class="mb-5">{{ count($comments) }} Comments</h3>
                        @if(count($comments) > 0)
                            <ul class="comment-list">
                                @foreach($comments as $comment)
                                    <li class="comment">
                                        <div class="vcard bio">
                                            <img src="resource/images/person_1.jpg" alt="Image placeholder">
                                        </div>
                                        <div class="comment-body">
                                            <h3>{{ $comment->user->name }}</h3>
                                            <div class="meta">{{ $comment->created_at }}</div>
                                            <p>{{ $comment->content }}</p>
                                        </div>
                                     </li>
                                @endforeach
                            </ul>
                        @endif
                      <!-- END comment-list -->
                        @if(Auth::check())
                        <div class="comment-form-wrap pt-5">
                            <h3 class="mb-5">{{ __('text.Leave_a_comment') }}</h3>
                            <form action="{{ route('comment', $news->id) }}" method="POST" class="p-5 bg-light">
                                @csrf
                                <div class="form-group">
                                    <label for="message">{{ __('text.Message') }}</label>
                                    <textarea name="content" id="message" cols="30" rows="10" class="form-control" required="required"></textarea>
                                    <p class="help is-danger" style="color: red">{{ $errors->first('content') }}</p>
                                </div>
                                <div class="form-group">
                                    <button class="btn py-3 px-4 btn-primary">{{ __('text.Post_Comment') }}</button>
                                </div>
                                <input type="hidden" name="news_id" value="{{ $news->id }}">
                            </form>
                        </div>
                        @endif
                    </div>
                </div>
          <div class="col-md-4 sidebar ftco-animate">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon icon-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
            {{-- <div class="sidebar-box ftco-animate">
              <div class="categories">
                <h3>Categories</h3>
                <li><a href="#">Tour <span>(12)</span></a></li>
                <li><a href="#">Hotel <span>(22)</span></a></li>
                <li><a href="#">Coffee <span>(37)</span></a></li>
                <li><a href="#">Drinks <span>(42)</span></a></li>
                <li><a href="#">Foods <span>(14)</span></a></li>
                <li><a href="#">Travel <span>(140)</span></a></li>
              </div>
            </div> --}}

            <div class="sidebar-box ftco-animate">
                <h3>{{ __('text.Recent_News') }}</h3>
                @foreach($news_recent as $news)
                <div class="block-21 mb-4 d-flex">
                    <a class="blog-img mr-4" style="background-image: url({{ config('image.source') }}/{{ $news->image }});"></a>
                    <div class="text">
                        <h3 class="heading"><a href="{{ route('news_detail', $news->id) }}">{{ $news->title_vi }}</a></h3>
                        <div class="meta">
                            <div><a><span class="icon-calendar"></span>{{ $news->updated_at }}</a></div>
                            <div><a><span class="icon-person"></span> @if($news->user_id != null){{ $news->user->name }} @else Admin @endif</a></div>
                            <div><a href="{{ route('news_detail', $news->id) }}"><span class="icon-chat"></span> {{ count($news->comments) }}</a></div>
                        </div>
                    </div>
                </div>
                @endforeach
           {{--  <div class="sidebar-box ftco-animate">
              <h3>Tag Cloud</h3>
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">dish</a>
                <a href="#" class="tag-cloud-link">menu</a>
                <a href="#" class="tag-cloud-link">food</a>
                <a href="#" class="tag-cloud-link">sweet</a>
                <a href="#" class="tag-cloud-link">tasty</a>
                <a href="#" class="tag-cloud-link">delicious</a>
                <a href="#" class="tag-cloud-link">desserts</a>
                <a href="#" class="tag-cloud-link">drinks</a>
              </div>
            </div> --}}

            {{-- <div class="sidebar-box ftco-animate">
              <h3>Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            </div> --}}
          </div>

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
