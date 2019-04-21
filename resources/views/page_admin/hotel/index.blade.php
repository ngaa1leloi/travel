@extends('page_admin.index')
@section('content')
<div class="row">
    <div class="col">
        <div class="card card-small mb-4">
            <div class="card-header border-bottom">
                <span class="m-0" style="font-size: 18px;">Hotels</span>
                <span class="mb-2 btn btn-info mr-2" style="float: right;"><a href="{{ route('create_hotel') }}">New hotel</a></span>
            </div>
            <div class="card-body p-0 pb-3 text-center">
                <table class="table mb-0">
                    <thead class="bg-light">
                        <tr>
                            <th scope="col" class="border-0">Tên khách sạn</th>
                            <th scope="col" class="border-0">Địa chỉ</th>
                            <th scope="col" class="border-0">Số điện thoại</th>
                            <th scope="col" class="border-0">Website</th>
                            <th scope="col" class="border-0">Hình ảnh</th>
                            <th scope="col" class="border-0">Địa danh</th>
                            <th scope="col" class="border-0">Tiêu chuẩn</th>
                            <th scope="col" class="border-0">Ghi chú</th>
                            <th scope="col" class="border-0">Edit</th>
                            <th scope="col" class="border-0">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($hotels as $hotel)
                        <tr>
                            <td>{{ $hotel->name_vi }}</td>
                            <td>{{ $hotel->address_vi }}</td>
                            <td>{{ $hotel->phone }}</td>
                            <td>{{ $hotel->website }}</td>
                            <td><img style="width: 200px; height: 150px" src="source_admin/images/{{ $hotel->image }}"></td>
                            <td>{{ $hotel->scenic->name_vi }}</td>
                            <td>{{ $hotel->standard }}</td>
                            <td>{{ $hotel->note }}</td>
                            <td><span class="text-danger">
                                <a href="{{ route('edit_hotel', $hotel->id) }}"><i class="material-icons">more_vert</i></a>
                              </span></td>
                            <td><span class="text-danger">
                                <a href="{{ route('delete_hotel', $hotel->id) }}"><i style="color: red" class="material-icons">clear</i></a></span></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
