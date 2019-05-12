@extends('page_admin.index')
@section('content')
<div class="row">
    <div class="col">
        <div class="card card-small mb-4">
            <div class="card-header border-bottom">
                <span class="m-0" style="font-size: 18px;">Place</span>
                <span class="mb-2 btn btn-info mr-2" style="float: right;"><a href="{{ route('create_place') }}">New place</a></span>
            </div>
            <div class="card-body p-0 pb-3 text-center">
                <table class="table mb-0">
                    <thead class="bg-light">
                        <tr>
                            <th scope="col" class="border-0">Tên điểm đế́n</th>
                            <th scope="col" class="border-0">Mô tả</th>
                            <th scope="col" class="border-0">Edit</th>
                            <th scope="col" class="border-0">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($places as $place)
                        <tr>
                            <td>{{ $place->name_vi }}</td>
                            <td>{{ $place->description_vi }}</td>
                            <td><span class="text-danger">
                                <a href="{{ route('edit_place', $place->id) }}"><i class="material-icons">more_vert</i></a>
                              </span></td>
                            <td><span class="text-danger">
                                <a href="{{ route('delete_place', $place->id) }}" onclick="return myFunction();"><i style="color: red" class="material-icons">clear</i></a></span></td>
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
