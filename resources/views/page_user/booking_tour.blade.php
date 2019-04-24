@extends('page_user.index')
@section('content')
<div class="hero-wrap js-fullheight" style="background-image: url('resource/images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-9 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="index.html">Home</a></span> <span>Blog</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Booking Tour</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section contact-section ftco-degree-bg">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-5">
            <h2 class="h4">Tour Information</h2>
          </div>
          <div class="w-100"></div>

          <div class="col-md-3">
            <p><span>Ten tua:</span> {{ $tour->name_vi }}</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Xuat phat:</span> {{ $tour->departure_vi }}</p>
          </div>
          <div class="col-md-3">
            <p><span>Thoi gian:</span> {{ $tour->date }} {{ $tour->time }}</p>
          </div>
          <div class="col-md-3">
            <p><span>So cho con nhan:</span> {{ $tour->quantity_person }}</p>
          </div>
          <div class="col-md-3">
            <p><span>Gia tour:</span> {{ number_format($tour->price) }}đ</p>
          </div>
        </div>
        <p>Luu y gia ve cua tre em tu 5 den 12 tuoi bang 70% gia ve nguoi lon, tre em tu 2 den 5 tuoi bang 30%, duoi 2 tuoi duoc di kem nguoi lon</p>
        <form action="book-tour" method="POST">
            @csrf
        {{-- <div class="row block-9">
            
          <div class="col-md-6 order-md-last pr-md-5">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Name">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your phone">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="{{ __('address') }}"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" value="{{ __('book_now') }}" class="btn btn-primary py-3 px-5">
              </div>
          
          </div>

          <div class="col-md-6 order-md-last pr-md-5">
              <div class="form-group">
                <span>Nguoi lon: </span>
                <input type="text" class="form-control" placeholder="Your Name">
                <div class="row">
                                        <div class="col-md-3 col-sm-2 mg-bot15">
                                            <label>Người lớn</label>
                                            <div>
                                                <input class="form-control input-lg" id="adult" name="adult" type="text" value="1">
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-2 mg-bot15">
                                            <label>Trẻ em</label>
                                            <div>
                                                <input class="form-control input-lg" id="children11" name="children11" type="text" value="0">
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-3 mg-bot15">
                                            <label>Trẻ nhỏ</label>
                                            <div>
                                                <input class="form-control input-lg" id="children" name="children" type="text" value="0">
                                            </div>
                                        </div>
                                      
                                    </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Email">
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Subject">
              </div>
              <div class="form-group">
                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="{{ __('Note') }}"></textarea>
              </div>
              
          </div>
         
        </div> --}}
            <input type="hidden" name="tour_id" value="{{ $tour->id }}">
            <div class="col-xs-12 book-thongtinlienlac">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label>Họ tên <span style="color: #cd2c24">*</span></label>
                            <div>
                                <input class="form-control input-lg" id="contact_name" name="name" required="required" type="text" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Di động <span style="color: #cd2c24">*</span></label>
                            <div>
                                <input class="form-control input-lg" id="mobilephone" name="phone" onchange="CheckMobile();" onkeypress="return funCheckInt(event)" required="required" type="text" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Địa chỉ</label>
                            <div>
                                <textarea class="form-control input-lg" cols="20" id="address" name="address" rows="4"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label>Email <span style="color: #cd2c24">*</span></label>
                            <div>
                                <input class="form-control input-lg" id="email" name="email" required="required" type="email" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3 col-sm-2 mg-bot15">
                                    <label>Người lớn</label>
                                    <div>
                                        <input class="form-control input-lg" id="quantity_adult" name="quantity_adult" type="text" value="1">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-2 mg-bot15">
                                    <label>Trẻ em</label>
                                    <div>
                                        <input class="form-control input-lg" id="children11" name="quantity_child" type="text" value="0">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 mg-bot15">
                                    <label>Trẻ nhỏ</label>
                                    <div>
                                        <input class="form-control input-lg" id="children" name="quantity_baby" type="text" value="0">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Ghi chú</label>
                            <div>
                                <textarea class="form-control input-lg" cols="20" id="note" name="note" rows="4"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label><span style="color: #cd2c24">Ghi chú:</span> </label>
                            <div style="line-height: 22px">
                                <span class="bold">Người lớn sinh từ :</span> 29/04/1949 đến 29/04/2007
                                - 
                            <span class="bold">Trẻ em sinh từ :</span> 30/04/2007 đến 29/04/2014
                                - 
                            <span class="bold">Trẻ nhỏ sinh từ :</span> 30/04/2014 đến 29/04/2017
                                - 
                            <span class="bold">Em bé sinh từ :</span> 30/04/2017 đến 23/04/2019
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" value="{{ __('book_now') }}" class="btn btn-primary py-3 px-5">
            </div>
         </form>
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
