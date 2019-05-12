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
            <input type="hidden" name="tour_id" value="{{ $tour->id }}">
            <div class="col-xs-12 book-thongtinlienlac">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label>{{ __('text.name') }} <span style="color: #cd2c24">*</span></label>
                            <div>
                                <input class="form-control input-lg" id="contact_name" name="name" required="required" type="text" value="">
                                <p class="help is-danger" style="color: red">{{ $errors->first('name') }}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>{{ __('text.phone') }} <span style="color: #cd2c24">*</span></label>
                            <div>
                                <input class="form-control input-lg" id="mobilephone" name="phone" required="required" type="text" value="">
                                <p class="help is-danger" style="color: red">{{ $errors->first('phone') }}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>{{ __('text.address') }}</label>
                            <div>
                                <textarea class="form-control input-lg" cols="20" id="address" name="address" rows="4"></textarea>
                                <p class="help is-danger" style="color: red">{{ $errors->first('address') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label>{{ __('text.email') }} <span style="color: #cd2c24">*</span></label>
                            <div>
                                <input class="form-control input-lg" id="email" name="email" required="required" type="email" value="">
                                <p class="help is-danger" style="color: red">{{ $errors->first('email') }}</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3 col-sm-2 mg-bot15">
                                    <label>{{ __('text.adult') }}</label>
                                    <div>
                                        <input class="form-control input-lg" id="quantity_adult" name="quantity_adult" type="text" value="1" onkeyup="getPrice({{ $tour->price }})">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-2 mg-bot15">
                                    <label>{{ __('text.child') }}</label>
                                    <div>
                                        <input class="form-control input-lg" id="quantity_child" name="quantity_child" type="text" value="0" onkeyup="getPrice({{ $tour->price }})">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 mg-bot15">
                                    <label>{{ __('text.baby') }}</label>
                                    <div>
                                        <input class="form-control input-lg" id="quantity_baby" name="quantity_baby" type="text" value="0" onkeyup="getPrice({{ $tour->price }})">
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3 mg-bot15">
                                    <label>{{ __('text.total') }}:</label>
                                    <div>
                                        <input class="form-control input-lg" id="result" name="quantity_baby" type="text" value="{{ number_format($tour->price) }}đ" disabled="disabled">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>{{ __('text.note') }}</label>
                            <div>
                                <textarea class="form-control input-lg" cols="20" id="note" name="note" rows="4"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label><span style="color: #cd2c24">{{ __('text.note') }}:</span> </label>
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
            <h3 style="text-align: center;">XIN QUÝ KHÁCH VUI LÒNG CHỌN HÌNH THỨC THANH TOÁN</h3>
            <div class="col-xs-12 book-hinhthucthanhtoan" style="margin-bottom: 30px">
                <div style="border:1px solid #ccc;padding: 20px 30px 20px 30px">
                    <div class="radio">
                        <label style="display:;"><input type="radio" class="chkPayment" name="payment" value="0" checked="checked"><label class="lb_r"> Tiền mặt</label></label>
                    </div>
                    <div class="radio">
                        <label style="display:;"><input type="radio" class="chkPayment" name="payment" value="1"><label class="lb_r"> Chuyển khoản</label></label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" class="chkPayment" name="payment" value="2"><label class="lb_r"> ATM / Internet Banking</label></label>
                    </div>
                    
                    {{-- <div class="row " style="padding-bottom: 10px; display: none;" id="divCard">
                        <div style="margin-top: 5px; margin-left: 35px; font-weight: bold; color: #d57575;">
                            Quý khách vui lòng chọn loại thẻ
                            
                        </div>
                        <div style="padding:15px; margin:0px 15px;">
                            <input id="cardType" name="cardType" type="hidden" value="visa">
                            <div card="visa" onclick="ChonLoaiThe('visa')" class="card_type f-left" style="margin-left:5px; cursor:pointer;height: 32px;">
                                <img src="/Content/themeOrange/img/thevisa.png" alt="visa">
                            </div>
                            <div card="mastercard" onclick="ChonLoaiThe('mastercard')" class="card_type f-left mg-left" style="margin-left:5px; cursor:pointer;height: 32px;">
                                <img src="/Content/themeOrange/img/master.png" alt="master">
                            </div>
                            <div card="jcb" onclick="ChonLoaiThe('jcb')" class="card_type f-left mg-left" style="margin-left:5px; cursor:pointer;height: 32px;">
                                <img src="/Content/themeOrange/img/jcb.png" alt="jcb">
                            </div>
                            <div card="amex" onclick="ChonLoaiThe('amex')" class="card_type f-left mg-left" style="margin-left:5px; cursor:pointer;height: 32px;">
                                <img src="/Content/themeOrange/img/amex.png" alt="amex">
                            </div>
                        </div>
                    </div> --}}
                    <div class="radio">
                        <label><input type="radio" class="chkPayment" name="payment" value="3"><label class="lb_r"> Thanh toán bằng quét QRCode</label></label>
                    </div>
                  {{--   <div class="row " style="padding-bottom:10px;display:none;" id="divVNPay">
                        <div style="margin-top: 5px; margin-left: 35px; font-weight: bold; color: #d57575;">
                            Thẻ tín dụng (VISA/MASTER/JCB) / Thẻ ATM - Dịch vụ của VNPay
                        </div>
                    </div>
                    
                    <div style="border:1px solid #ccc;padding: 20px 30px 20px 30px;text-align: justify;word-wrap: break-word;height: 150px;overflow-y: scroll;line-height: 22px">
                        <div id="conditionPayment">
                
                    <title></title>
                
                
                    <p>
                        Quý khách vui lòng thanh toán tại bất kỳ đại lý nào của Vietravel trong và ngoài nước. <a href="https://travel.com.vn/lien-he.aspx" target="_blank">Chi tiết</a></p>
                
             
                </div>
                    </div>
                    --}}
                </div>
            </div>
            <div class="form-group">
                <input type="submit" value="{{ __('text.book_now') }}" class="btn btn-primary py-3 px-5">
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
    <script language="javascript">
        function formatNumber(num) {
            return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,') + 'đ'
        }

      function getPrice(x)
      {
        let a = document.getElementById("quantity_adult");
        let b = document.getElementById("quantity_child");
        let c = document.getElementById("quantity_baby");

        let result = document.getElementById("result");
         
        let tong = parseInt(a.value) * x + parseInt(b.value) * x * 0.7 + parseInt(c.value) * x * 0.3;
         
        if (!isNaN(tong)){
          result.value = formatNumber(tong);
        }
      }
    </script>
    @endsection
