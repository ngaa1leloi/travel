@extends('page_admin.index')
@section('content')

<form action="admin/booking/search-booking" method="GET">
        <div class="row" style="margin: 10px">
            <div class="col-sm-6 col-md-3">
                <strong class="text-muted d-block mb-2" style="font-size: 18px">Tìm kiếm</strong>
                
                <div class="form-group">
                    <span>Tên tua</span>
                    <select id="" name="tour" class="form-control">
                        @foreach($tours as $tour)
                            <option value="{{ $tour->id }}">{{ $tour->name_vi }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <strong class="text-muted d-block mb-2" style="margin-top: 32px"></strong>
                
                <div class="form-group">
                    <span>Trạng thái</span>
                    <select id="" name="status" class="form-control">
                        <option value="0">Chưa thanh toán</option>
                        <option value="1">Đã thanh toán</option>
                        <option value="2">Đang tiến hành</option>
                        <option value="3">Kết thúc</option>
                    </select>
                </div>
            </div>
            {{-- <div class="col-sm-6 col-md-2">
                <strong class="text-muted d-block mb-2" style="margin-top: 32px"></strong>
                
                <div class="form-group">
                    <span>Ngày đi</span>
                    <input type="date" name="start_date" class="form-control">
                </div>
            </div>
            <div class="col-sm-6 col-md-2">
                <strong class="text-muted d-block mb-2" style="margin-top: 32px"></strong>
                
                <div class="form-group">
                    <span>Ngày về</span>
                    <input type="date" name="end_date" class="form-control">
                </div>
            </div>
             --}}
            <div class="col-sm-6 col-md-2">
                <strong class="text-muted d-block mb-2" style="margin-top: 55px"></strong>
                <button type="submit" class="mb-2 btn btn-primary mr-2">Tìm</button>
            </div>
        </div>
    
    </form>

<div class="row">
    <div class="col">
        <div class="card card-small mb-4">
            <div class="card-header border-bottom">
                <span class="m-0" style="font-size: 18px;">Đơn đặt tua</span>
                
            </div>
            <div class="card-body p-0 pb-3 text-center">
                <table class="table mb-0">
                    <thead class="bg-light">
                        <tr>
                            <th scope="col" class="border-0">STT</th>
                            <th scope="col" class="border-0">Tên tua</th>
                            <th scope="col" class="border-0">Tên khách hàng</th>
                            <th scope="col" class="border-0">SĐT</th>
                            <th scope="col" class="border-0">Email</th>
                            <th scope="col" class="border-0">Địa chỉ</th>
                            <th scope="col" class="border-0">Chú thích</th>
                            <th scope="col" class="border-0">Người lớn</th>
                            <th scope="col" class="border-0">Trẻ em</th>
                            <th scope="col" class="border-0">Trẻ nhỏ</th>
                            <th scope="col" class="border-0">Số tiền</th>
                            <th scope="col" class="border-0">HT thanh toán</th>
                            <th scope="col" class="border-0">Trạng thái</th>
                            <th scope="col" class="border-0">Edit</th>
                            <th scope="col" class="border-0">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $page = $bookings->currentPage();?>
                        @foreach($bookings as $key => $booking)
                        <?php $price = $booking->tour()->withTrashed()->first()->price ?>
                        <tr>
                            <th>{{ ($page -1) * 10 + $key + 1 }}</th>
                            <td>{{ $booking->tour()->withTrashed()->first()->name_vi }}</td>
                            <td>{{ $booking->name }}</td>
                            <td>{{ $booking->phone }}</td>
                            <td>{{ $booking->email }}</td>
                            <td>{{ $booking->address }}</td>
                            <td>{{ $booking->note }}</td>
                            <td>{{ $booking->quantity_adult }}</td>
                            <td>{{ $booking->quantity_child }}</td>
                            <td>{{ $booking->quantity_baby }}</td>
                            <td>{{ number_format($booking->quantity_adult * $price +  $booking->quantity_child  * $price * 0.7 + $booking->quantity_baby * $price * 0.3) }}đ</td>
                            <td> @if($booking->payment == 0)Tiền mặt @elseif($booking->payment == 1) Chuyển khoản @elseif($booking->payment == 2) Quét mã MOMO @endif</td>
                            <td> @if($booking->status == 0)Chưa thanh toán @elseif($booking->status == 1) Đã thanh toán @elseif($booking->status == 2) Đang tiến hành @elseif($booking->status == 3) Kết thúc @endif</td>
                            <td><span class="text-danger">
                                <a href="{{ route('edit_tour', $booking->id) }}"><i class="material-icons">more_vert</i></a>
                              </span></td>
                            <td><span class="text-danger">
                                <a href="{{ route('delete_tour', $booking->id) }}" onclick="return myFunction();"><i style="color: red" class="material-icons">clear</i></a></span></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $bookings->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
<script>
  function myFunction() {
      if(!confirm("Are You Sure to delete this"))
      event.preventDefault();
  }
 </script>
