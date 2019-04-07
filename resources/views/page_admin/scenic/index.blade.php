@extends('page_admin.index')
@section('content')
<div class="row">
    <div class="col">
        <div class="card card-small mb-4">
            <div class="card-header border-bottom">
                <span class="m-0" style="font-size: 18px;">Scenics</span>
                <span class="mb-2 btn btn-info mr-2" style="float: right;"><a href="{{ route('create_scenic') }}">New scenic</a></span>
            </div>
            <div class="card-body p-0 pb-3 text-center">
                <table class="table mb-0">
                    <thead class="bg-light">
                        <tr>
                            <th scope="col" class="border-0">Tên địa danh</th>
                            <th scope="col" class="border-0">Mô tả</th>
                            <th scope="col" class="border-0">Địa điểm</th>
                            <th scope="col" class="border-0">Hình ảnh</th>
                            <th scope="col" class="border-0">Edit</th>
                            <th scope="col" class="border-0">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($scenics as $scenic)
                        <tr>
                            <td>{{ $scenic->name_vi }}</td>
                            <td>{{ $scenic->description_vi }}</td>
                            <td>{{ $scenic->place->name_vi }}</td>
                            <td><img style="width: 200px; height: 150px" src="source_admin/images/{{ $scenic->image }}"></td>
                            <td><span class="text-danger">
                                <a href="{{ route('edit_scenic', $scenic->id) }}"><i class="material-icons">more_vert</i></a>
                              </span></td>
                            <td><span class="text-danger">
                                <a href="{{ route('delete_scenic', $scenic->id) }}"><i style="color: red" class="material-icons">clear</i></a></span></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
