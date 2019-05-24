@extends('page_admin.index')
@section('content')
<div class="row">
    <div class="col">
        <div class="card card-small mb-4">
            <div class="card-header border-bottom">
                <span class="m-0" style="font-size: 18px;">Danh sách tua</span>
                <span class="mb-2 btn btn-info mr-2" style="float: right;"><a href="{{ route('create_tour') }}">Thêm tua</a></span>
            </div>
            @if (session('success'))
                <div class="alert alert-success">
                   {{ session('success') }}
                </div>
            @endif
            <div class="card-body p-0 pb-3 text-center">
                <table class="table mb-0">
                    <thead class="bg-light">
                        <tr>
                            <th scope="col" class="border-0">Tên tua</th>
                            <th scope="col" class="border-0">Điểm xuất phát</th>
                            <th scope="col" class="border-0">Lịch trình</th>
                            <th scope="col" class="border-0">Thể loại</th>
                            <th scope="col" class="border-0">Hình ảnh</th>
                            <th scope="col" class="border-0">Khách sạn</th>
                            <th scope="col" class="border-0">Ngày đi</th>
                            <th scope="col" class="border-0">Ngày về</th>
                            <th scope="col" class="border-0">Thời gian</th>
                            <th scope="col" class="border-0">Số chỗ</th>
                            <th scope="col" class="border-0">Giá vé</th>
                            <th scope="col" class="border-0">Trạng thái</th>
                            <th scope="col" class="border-0">Edit</th>
                            <th scope="col" class="border-0">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tours as $tour)
                        <tr>
                            <td>{{ $tour->name_vi }}</td>
                            <td>{{ $tour->departure_vi }}</td>
                            <td><p style="height: 150px; overflow: hidden;">{{ $tour->process_vi }}</p></td>
                            <td>{{ $tour->category->name_vi }}</td>
                            <td><img style="width: 200px; height: 150px" src="source_admin/images/{{ $tour->image }}"></td>
                            <td>{{ $tour->hotel()->withTrashed()->first()->name_vi }}</td>
                            <td>{{ $tour->start_date }}</td>
                            <td>{{ $tour->end_date }}</td>
                            <td>{{ $tour->time }}</td>
                            <td>{{ $tour->quantity_person }}</td>
                            <td>{{ $tour->price }}</td>
                            <td>{{ ($tour->status == 0) ? 'đã có lịch' : 'tự chọn' }}</td>
                            <td><span class="text-danger">
                                <a href="{{ route('edit_tour', $tour->id) }}"><i class="material-icons">more_vert</i></a>
                              </span></td>
                            <td><span class="text-danger">
                                <a href="{{ route('delete_tour', $tour->id) }}" onclick="return myFunction();" ><i style="color: red" class="material-icons">clear</i></a></span></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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
 @section('script')

<script type="text/javascript">
    @if(session('message'))       
        $.notify("{{ session('message') }}", "success");
    @endif
</script>
@endsection
