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

<div id="thongtinchitiettour" class="newlayout">
    <div class="container">
        <div class="row thongtincoban" style="margin-bottom: 30px">
            <div class="col-lg-7 col-md-12 col-sm-12 hidden-xs" style="overflow:hidden">
                <div id="slider" class="flexslider">
                    
                <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 400%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                            <li class="flex-active-slide" data-thumb-alt="" style="width: 940px; margin-right: 0px; float: left; display: block;">
                                <img src="/FileUploads/TourImage/11012018_mocchau-doichemocsuong.jpg" alt="_1" draggable="false">
                            </li>
                            <li data-thumb-alt="" style="width: 940px; margin-right: 0px; float: left; display: block;">
                                <img src="/FileUploads/TourImage/11012018_sonla_thacdaiyem.jpg" alt="_2" draggable="false">
                            </li>
                    </ul></div><ol class="flex-control-nav flex-control-paging"><li><a href="#" class="flex-active">1</a></li><li><a href="#">2</a></li></ol><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev flex-disabled" href="#" tabindex="-1">Previous</a></li><li class="flex-nav-next"><a class="flex-next" href="#">Next</a></li></ul></div>
                <div id="carousel" class="flexslider" style="margin-top: -70px">
                    
                <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 400%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                            <li class="flex-active-slide" style="width: 70px; margin-right: 0px; float: left; display: block;">
                                <img src="/FileUploads/TourImage/11012018_mocchau-doichemocsuong.jpg" alt="_1" draggable="false">
                            </li>
                            <li style="width: 70px; margin-right: 0px; float: left; display: block;">
                                <img src="/FileUploads/TourImage/11012018_sonla_thacdaiyem.jpg" alt="_2" draggable="false">
                            </li>
                    </ul></div><ol class="flex-control-nav flex-control-paging"></ol><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev flex-disabled" href="#" tabindex="-1">Previous</a></li><li class="flex-nav-next"><a class="flex-next flex-disabled" href="#" tabindex="-1">Next</a></li></ul></div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 thongtinchung">
                <div class="thongtin">
                    <div class="row tour-info-right-frame1">
                        <div class="col-xs-12">
                            <div style="font-weight: bold;font-size:17.5px;line-height: 22px;">
                                MỘC CHÂU - SƠN LA 3N2Đ
                            </div>
                        </div>
                    </div>
                    <div class="row tour-info-right-frame2">
                        <div class="col-xs-12">
                                                                                    <div class="row" style="margin-bottom: 16px;margin-top: 15px">
                                <div class="col-md-4 col-sm-4 col-xs-4">Ngày khởi hành:</div>
                                <div class="col-md-4 col-sm-4 col-xs-4">Liên hệ</div>
                            </div>
                                                        <div class="row" style="margin-bottom: 16px;margin-top: 15px">
                                <div class="col-md-4 col-sm-4 col-xs-5">Thời gian:</div>
                                <div class="col-md-8 col-sm-8 col-xs-7">Liên hệ</div>
                            </div>
                            <div class="row" style="margin-bottom: 16px;margin-top: 15px">
                                <div class="col-md-4 col-sm-4 col-xs-5">Nơi khởi hành:</div>
                                <div class="col-md-8 col-sm-8 col-xs-7">Hà Nội</div>
                            </div>
                            <div class="row" style="margin-bottom: 16px;margin-top: 15px">
                                <div class="col-md-4 col-sm-4 col-xs-5">Tần suất:</div>
                                <div class="col-md-8 col-sm-8 col-xs-7">Hàng tuần</div>
                            </div>
                                                        <div class="row" style="margin-bottom: 16px;margin-top: 15px">
                                <div class="col-md-4 col-sm-4 col-xs-5">Nơi tập trung:</div>
                                <div class="col-md-8 col-sm-8 col-xs-7">03 Hai Bà Trưng - Hà Nội</div>
                            </div>
                                                                                </div>
                    </div>
                    <div class="row tour-info-right-frame3">
                        <div class="col-xs-12 text-center">
                            <div class="f-left" style="margin-bottom: 10px;width:100%">
                                <div class="f-left olt1">
                                    <div style="font-size: 18px;margin-bottom: 5px;color:#fc7700;border-bottom: 1px solid #ccc;padding-bottom: 5px;margin-top: 3px">
Giá                                    </div>
                                    <div style="font-size: 12px;">
                                        <span>
                                            Liên hệ
                                        </span>
                                    </div>
                                </div>
                                    <a href="/dat-tour/moc-chau-son-la-3n2d" class="f-left ort1 dattour">
                                        Liên hệ ngay
                                    </a>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row thongtinchitiet" style="margin-bottom: 30px;">
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 border-right noidungchuongtrinh">
                

	<title></title>

<br>
<span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif"><strong>Chương trình tour:</strong><br>
<br>
<strong>Ngày 1: HÀ NỘI – CAO NGUYÊN MỘC CHÂU (ĂN TRƯA, TỐI)</strong><br>
Sáng 06h30<br>
Xe ô tô và hướng dẫn viên của Vietravel đón Quý khách tại số 3 Hai Bà Trưng - Hà Nội khởi hành đi Sơn La. Trên đường dừng chân ăn sáng tại Lương Sơn, Hòa Bình (chi phí tự túc).<br>
Trên đường đến <strong><em>thị trấn Mộc Châu</em></strong> tại Km 64, 2 bên đường có đào, mận, mơ trĩu cây… đoàn dừng chân chụp khung cảnh lãng mạn. Tới Cao nguyên Mộc Châu, Quý khách ăn trưa sau đó về khách sạn làm thủ tục nhận phòng.<br>
Chiều<br>
Quý khách tham quan <strong><em>Hang Dơi</em></strong>, rừng thông, <strong><em>khu du lịch bản Áng</em></strong>, động Mộc Xuân Hương. Sau đó, Quý khách theo sự hướng dẫn của nhân viên Nông trường chè Mộc Sương Quý khách sẽ có cơ hội tham quan, chụp ảnh những đồi chè xanh mướt một màu, trải dài ngút tầm mắt, cung cấp cho thị trường những loại chè ngon nổi tiếng. Đây là điểm du lịch mà du khách không thể không ghé thăm khi đến với Cao nguyên Mộc Châu. Sau một ngày khám phá và trải nghiệm, Quý khách dùng bữa tối với các món ăn mang hương sắc của vùng Cao nguyên. Nghỉ đêm tại Mộc Châu.<br>
<img alt="" src="https://travel.com.vn/Images/tour/tfd_140909_Doi%20che%20Moc%20Suong.jpg" style="height:435px; width:650px"><br>
<strong>Ngày 2: MỘC CHÂU – SƠN LA ( ĂN SÁNG, TRƯA, TỐI)</strong><br>
Sáng<br>
Quý khách dậy sớm, đón chào ánh nắng bình minh trên cao nguyên xinh đẹp để có một ngày mới bắt đầu thật sảng khoái. Sau bữa sáng tại khách sạn, Quý khách làm thủ tục trả phòng lên xe đi Sơn La. Đoàn đến Sơn La, ăn trưa, nhận phòng khách sạn nghỉ ngơi.<br>
Chiều<br>
Đoàn khởi hành thăm <strong><em>Thủy điện Sơn La</em></strong> – công trình thủy điện lớn nhất Đông Nam Á, trên đường ghé thăm và thắp hương <strong><em>Đền vua Lê Thái Tông</em></strong>.<br>
Quý khách thăm quan và tắm khoáng nóng tại <strong><em>Bản Mòng</em></strong>, sau khi ngâm mình trong nước nóng để xua tan mệt mỏi, Quý khách thưởng thức các đặc sản như cơm lam, gà nướng, cá pỉnh tộp, thịt bò khô... thực đơn mang đậm bản sắc Tây Bắc. Quý khách trở về khách sạn nghỉ ngơi và ăn tối. Nghỉ đêm tại Sơn La.<br>
<br>
<strong>Ngày 3: SƠN LA – HÀ NỘI (ĂN SÁNG, TRƯA)</strong><br>
Sáng<br>
Sau khi ăn sáng, trả phòng khách sạn.<br>
Đoàn tham quan <strong><em>di tích nhà tù Sơn La</em></strong> - Nơi đã từng giam giữ những chiến sỹ cách mạng, thăm bảo tàng dân tộc, chụp hình lưu niệm tại Cây Đào Tô Hiệu. Đoàn lên xe trở về Hà Nội, trên đường về đoàn dừng thăm và chụp ảnh kỷ niệm các di tích lịch sử đi qua như: Ngã Ba Cò Nòi...<br>
Trưa<br>
Về đến thị trấn Mộc Châu, đoàn dừng nghỉ ăn trưa ở Mộc Châu, thăm quan <strong><em>Thác Dải Yếm</em></strong>. Quý khách mua sắm các đặc sản như: sữa tươi, bánh sữa, chè Mộc Châu... Đoàn lên xe tiếp tục khởi hành về Hà Nội.<br>
Về tới Hà Nội, chia tay và hẹn gặp lại Quý khách!<br>
&nbsp;<img alt="" src="https://travel.com.vn/Images/tour/tfd_140909_Thac%20Dai%20Yem.jpg" style="height:365px; width:650px"><br>
<em>Chương trình và điểm tham quan có thể linh động thay đổi theo điều kiện thời tiết thực tế nhưng vẫn đảm bảo các điểm tham quan theo chương trình.</em><br>
<br>
<strong><u>Giá tour tham khảo:</u></strong></span></span>
<table border="1" cellpadding="0" cellspacing="0">
	<tbody>
		<tr>
			<td style="width:202px"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif"><strong>Loại khách</strong></span></span></td>
			<td style="width:98px"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif"><strong>Việt Nam</strong></span></span></td>
			<td style="width:98px"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif"><strong>Việt kiều</strong></span></span></td>
			<td style="width:101px"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif"><strong>Nước ngoài</strong></span></span></td>
			<td style="width:92px"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif"><strong>Land tour</strong></span></span></td>
		</tr>
		<tr>
			<td style="width:202px"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">Giá người lớn<br>
			(Từ 12 tuổi trở lên)</span></span></td>
			<td style="width:98px"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">2,450,000 đ</span></span></td>
			<td style="width:98px"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">2,450,000 đ</span></span></td>
			<td style="width:101px"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">2,450,000 đ</span></span></td>
			<td style="width:92px"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">0 đ</span></span></td>
		</tr>
		<tr>
			<td style="width:202px"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">Giá trẻ em<br>
			(Từ 5 tuổi đến dưới 12 tuổi)</span></span></td>
			<td style="width:98px"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">1,225,000 đ</span></span></td>
			<td style="width:98px"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">1,225,000 đ</span></span></td>
			<td style="width:101px"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">1,225,000 đ</span></span></td>
			<td style="width:92px"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">0 đ</span></span></td>
		</tr>
		<tr>
			<td style="width:202px"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">Giá trẻ nhỏ<br>
			(Từ 2 tuổi đến dưới 5 tuổi)</span></span></td>
			<td style="width:98px"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">0 đ</span></span></td>
			<td style="width:98px"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">0 đ</span></span></td>
			<td style="width:101px"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">0 đ</span></span></td>
			<td style="width:92px"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">0 đ</span></span></td>
		</tr>
		<tr>
			<td style="width:202px"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">Em bé<br>
			(Dưới 2 tuổi)</span></span></td>
			<td style="width:98px"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">0 đ</span></span></td>
			<td style="width:98px"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">0 đ</span></span></td>
			<td style="width:101px"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">0 đ</span></span></td>
			<td style="width:92px"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">0 đ</span></span></td>
		</tr>
		<tr>
			<td style="width:202px"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">Phụ thu phòng đơn</span></span><br>
			&nbsp;</td>
			<td style="width:98px"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">700,000 đ</span></span></td>
			<td style="width:98px"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">700,000 đ</span></span></td>
			<td style="width:101px"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">700,000 đ</span></span></td>
			<td style="width:92px"><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">0 đ</span></span></td>
		</tr>
	</tbody>
</table>
<span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif"> &nbsp;<br>
<br>
<strong><u>Giá bao gồm</u></strong><strong><u>: (Giá tour có thể thay đổi)</u></strong></span></span>

<ul>
	<li><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">Xe vận chuyển chỗ đời mới theo suốt chương trình.</span></span></li>
	<li><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">Khách sạn tiêu chuẩn tại địa phương.</span></span></li>
	<li><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">Ăn 05 bữa chính, 02 bữa sáng tại khách sạn.</span></span></li>
	<li><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">Hướng dẫn viên chuyên nghiệp, tận tình.</span></span></li>
	<li><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">Vé thắng cảnh vào cửa một lần tại các điểm thăm quan.</span></span></li>
	<li><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">Quà tặng mũ Vietravel.</span></span></li>
	<li><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">Nước suối trên xe 01 chai 0,5l/khách/ngày.</span></span></li>
	<li><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">Khăn lạnh trên xe 01 khăn/khách/ngày.</span></span></li>
	<li><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">Bảo hiểm du lịch mức chi trả tối đa 50.000.000đ/vụ.</span></span></li>
	<li><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">Thuế VAT theo quy định của nhà nước.</span></span></li>
</ul>
<span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif"> <strong><u>Giá không bao gồm:</u></strong></span></span>

<ul>
	<li><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">Chi phí đồ uống &amp; các chi phí cá nhân phát sinh khác trong chương trình.</span></span></li>
	<li><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">Phụ thu phòng đơn.</span></span></li>
</ul>
<span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif"> <strong><u>Phụ thu:</u></strong><br>
• Trẻ em dưới 5 tuổi: không thu phí dịch vụ, bố mẹ tự lo cho bé và thanh toán các chi phí phát sinh (đối với các dịch vụ tính phí theo chiều cao…). Hai người lớn chỉ được kèm 1 trẻ em dưới 5 tuổi, trẻ em thứ 2 sẽ đóng phí theo qui định dành cho độ tuổi từ 5 đến dưới 11 tuổi và phụ thu phòng đơn.<br>
• Trẻ em từ 5 - dưới 11 tuổi: phải mua 50% vé tour trọn gói bao gồm phương tiện vận chuyển, ăn uống theo chương trình, vé tham quan đối với các điểm tính phí theo độ tuổi/chiều cao (lưu ý bé ngủ chung với cha mẹ). Hai người lớn chỉ được kèm 1 trẻ em từ 5 - dưới 11 tuổi, em thứ hai trở lên phải mua 1 suất giường đơn.&nbsp;<br>
• Trẻ em 11 tuổi trở lên: phải mua vé tour trọn gói như người lớn bao gồm phương tiện vận chuyển, khách sạn, ăn uống theo chương trình, vé tham quan theo qui định các điểm tham quan.<br>
• Lưu ý: trong trường hợp Quý khách có nhu cầu tự mua vé tham quan, chúng tôi sẵn sàng tư vấn để Quý khách chọn mua tour F&amp;E hoặc tour theo nhóm riêng, theo dạng tour này Quý khách có thể tự chọn các dịch vụ theo nhu cầu.<br>
<br>
<strong><em><u>Điều kiện: </u></em></strong></span></span>

<ul>
	<li><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">Thanh toán 100% không hoàn, không hủy, không đổi.</span></span></li>
	<li><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">Đăng ký trước 5 ngày</span></span></li>
</ul>
<span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif"> <strong><em><u>Các điều kiện khi đăng ký tour:</u></em></strong><br>
<br>
- Qúy khách có thể gọi điện, gửi email hoặc đến văn phòng trực tiếp để đăng ký tour với chúng tôi. Sau khi đăng ký, quý khách vui lòng đến văn phòng để thanh toán tổng giá trị tour. Nếu sau 1 ngày quý khách không đến, chúng tôi sẽ không cam đoan giữ được chỗ cho Qúy khách.<br>
CÁC LƯU Ý KHÁC<br>
- Khi đăng ký tour du lịch, Quý khách vui lòng đọc kỹ chương trình, giá tour, các khoản bao gồm cũng như không bao gồm trong chương trình, các điều kiện hủy tour trên biên nhận đóng tiền. Trong trường hợp Quý khách không trực tiếp đến đăng ký tour mà do người khác đến đăng ký thì Quý khách vui lòng tìm hiểu kỹ chương trình từ người đăng ký cho mình.<br>
- Quý khách từ 70 tuổi yêu cầu ký cam kết sức khỏe với Công ty.&nbsp;<br>
- Quý khách đi tour cần&nbsp;đem theo CMND (còn hạn 12 năm)/ Passport (Hộ chiếu)/ Giấy khai sinh bản chính (trẻ em). Trẻ em không đi cùng cha mẹ phải có giấy cam kết (hoặc giấy chứng thuận) của cha hoặc mẹ có xác nhận của chính quyền địa phương cho người dẫn trẻ em đi. Riêng khách Việt Kiều phải mang theo đầy đủ Passport (Hộ Chiếu) hoặc thẻ xanh kèm theo Visa và giấy tái xuất nhập Việt Nam.&nbsp;<br>
- Giá vé, giờ bay có thể thay đổi theo Hãng Hàng Không. Trong trường hợp Quý khách cung cấp tên sai vui lòng chịu phí hoàn vé và phải mua lại vé mới theo quy định của Hãng Hàng Không (nếu chuyến bay còn chỗ).&nbsp;<br>
- &nbsp;Giờ nhận phòng khách sạn: sau 14:00 giờ và trả phòng trước 12:00 giờ.&nbsp;<br>
- Quý khách vui lòng tập trung tại điểm hẹn trước giờ bay 02 tiếng và tại sân bay trước 1h30.&nbsp;<br>
- Khách có nhu cầu cần xuất hóa đơn vui lòng cung cấp thông tin xuất hóa đơn cho nhân viên bán tour ngay lúc đăng ký hoặc trễ nhất trong vòng một tuần sau khi kết thúc chương trình du lịch.&nbsp;<br>
- Quý khách mang thai xin vui lòng báo cho nhân viên bán tour ngay tại thời điểm đăng ký để được tư vấn thêm thông tin.<br>
&nbsp;- Do các chuyến bay phụ thuộc vào các hãng Hàng Không nên trong một số trường hợp giờ bay có thể thay đổi mà không được báo trước.<br>
- Tùy vào tình hình thực tế, thứ tự các điểm tham quan trong chương trình có thể thay đổi nhưng vẫn đảm bảo đầy đủ các điểm tham quan như lúc đầu.</span></span><br>
&nbsp;
<div><span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif"><strong>Mọi chi tiết vui lòng liên hệ:</strong><br>
<strong>KHỐI KHÁCH LẺ - DU LỊCH TỰ CHỌN</strong><br>
CÔNG TY DU LỊCH VIETRAVEL<br>
190 Pasteur, Phường 6, Q.3, Tp. Hồ Chí Minh<br>
Tel: (028) 38228898 Ext: </span></span>542, 626, 637, 259, 593, 511, 535, 530, 161, 529<br>
<span style="font-size:14px"><span style="font-family:tahoma,geneva,sans-serif">Hoặc liên hệ hotline 0938 301 279<br>
Website: fe.travel.com.vn<br>
Và các trung tâm, chi nhánh, văn phòng đăng ký du lịch trên toàn quốc.<br>
<strong>VIETRAVEL KÍNH CHÚC QUÝ KHÁCH MỘT CHUYẾN DU LỊCH VUI VẺ</strong></span></span></div>



            </div>
            <div class="col-lg-3 col-md-3 hidden-sm hidden-xs">
                <div style="margin-right: 15px; margin-top: 15px; margin-bottom: 20px">
                    <img src="/Content/themeOrange/img/support.jpg" class="img-responsive" alt="support">
                    <div style="position: absolute; top: 30px; left: 30px">
                        <p style="font-weight: bold; color: #fc7700; font-size: 23px; padding-bottom: 10px; border-bottom: 1px solid #fc7700">1900 1839</p>
                        <p style="color: #000; margin-top: 10px; font-weight: bold; font-size: 12.5px">cước 1000đ/phút</p>
                    </div>
                </div>
                <div style="margin-bottom: 20px; margin-right: 15px;" class="tourlienquan">
                    <div style="font-weight: bold; text-transform: uppercase; font-size: 18px; color: #333; padding-bottom: 10px;">Các tour tương tự</div>
                    <div id="theogia" style="margin-bottom:15px;">
                        <div class="row">
                                <div class="col-xs-12 mg-bot20">
                                    <a href="/du-lich/ho-ba-be-chua-phat-tich-truc-lam-thac-ban-gioc" title="HỒ BA BỂ - CHÙA PHẬT TÍCH TRÚC LÂM THÁC BẢN GIỐC 4N3Đ" class="hvr-rectangle-out">
                                        <img src="/FileUploads/Tour/sl_171208_tfd_20160218_thac-ban-gioc.jpg" class="img-responsive pic" alt="HỒ BA BỂ - CHÙA PHẬT TÍCH TRÚC LÂM THÁC BẢN GIỐC 4N3Đ">
                                    </a>
                                    <div class="dottable-2line loai-tourname is-truncated" style="padding-top: 10px; overflow-wrap: break-word;">
... </div>
                                </div>
                              
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
