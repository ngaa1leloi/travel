@extends('page_admin.index')
@section('content')
<div class="row">
    <div class="col">
        <div class="card card-small mb-4">
            <div class="card-header border-bottom">
                <span class="m-0" style="font-size: 18px;">News</span>
                <span class="mb-2 btn btn-info mr-2" style="float: right;"><a href="{{ route('create_news') }}">New post</a></span>
            </div>
            <div class="card-body p-0 pb-3 text-center">
                <table class="table mb-0">
                    <thead class="bg-light">
                        <tr>
                            <th scope="col" class="border-0">Tiêu đề</th>
                            <th scope="col" class="border-0">Nội dung</th>
                            <th scope="col" class="border-0">Hình ảnh</th>
                            <th scope="col" class="border-0">Trạng thái</th>
                            <th scope="col" class="border-0">Ngày viết</th>
                            <th scope="col" class="border-0">Edit</th>
                            <th scope="col" class="border-0">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($news as $new)
                        <tr>
                            <td>{{ $new->title_vi }}</td>
                            <td>{{ $new->content_vi }}</td>
                            <td><img style="width: 200px; height: 150px" src="source_admin/images/{{ $new->image }}"></td>
                            <td>@if ($new->status == 0) Draft @else Publish @endif</td>
                            <td>{{ $new->created_at }}</td>
                            <td><span class="text-danger">
                                <a href="{{ route('edit_news', $new->id) }}"><i class="material-icons">more_vert</i></a>
                              </span></td>
                            <td><span class="text-danger">
                                <a href="{{ route('delete_news', $new->id) }}"><i style="color: red" class="material-icons">clear</i></a></span></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
