@extends('page_admin.index')
@section('content')
<div class="row">
    <div class="col">
        <div class="card card-small mb-4">
            <div class="card-header border-bottom">
                <h6 class="m-0">Tours</h6>
            </div>
            <div class="card-body p-0 pb-3 text-center">
                <table class="table mb-0">
                    <thead class="bg-light">
                        <tr>
                            <th scope="col" class="border-0">Tên tua</th>
                            <th scope="col" class="border-0">Điểm xuất phát</th>
                            <th scope="col" class="border-0">Lịch trình</th>
                            <th scope="col" class="border-0">Thể loại</th>
                            <th scope="col" class="border-0">Hình ảnh</th>
                            <th scope="col" class="border-0">Ngày</th>
                            <th scope="col" class="border-0">Thời gian</th>
                            <th scope="col" class="border-0">Số chỗ</th>
                            <th scope="col" class="border-0">Giá vé</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tours as $tour)
                        <tr>
                            <td>{{ $tour->name_vi }}</td>
                            <td>{{ $tour->departure_vi }}</td>
                            <td>{{ $tour->process_vi }}</td>
                            <td>{{ $tour->category }}</td>
                            <td><img style="width: 200px; height: 150px" src="source_admin/images/{{ $tour->image }}"></td>
                            <td>{{ $tour->date }}</td>
                            <td>{{ $tour->time }}</td>
                            <td>{{ $tour->quantity_person }}</td>
                            <td>{{ $tour->price }}</td>
                            <td><span class="text-danger">
                                <a href="{{ route('edit_tour', $tour->id) }}"><i class="material-icons">more_vert</i></a>
                              </span></td>
                            <td><span class="text-danger">
                                <a href="{{ route('delete_tour', $tour->id) }}"><i style="color: red" class="material-icons">clear</i></a></span></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
