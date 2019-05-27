@extends('page_admin.index')
@section('content')
<div class="main-content-container container-fluid px-4">
    <form action="admin/hotel/update/{{ $hotel->id }}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="row" style="margin-top: 5px">
      <div class="col-sm-12 col-md-6">
        <strong class="text-muted d-block mb-2" style="font-size: 18px">Sửa khách sạn</strong>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Tên khách sạn TV</span>
              </div>
              <input type="text" class="form-control" placeholder="Tên khách sạn" aria-label="Username" aria-describedby="basic-addon1" value="{{ $hotel->name_vi }}" name="name_vi"> </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Địa chỉ TV</span>
              </div>
              <input type="text" class="form-control" placeholder="Địa chỉ" aria-label="Username" aria-describedby="basic-addon1" name="address_vi" value="{{ $hotel->address_vi }}"> </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Số điện thoại</span>
              </div>
              <input type="text" class="form-control" value="0{{ $hotel->phone }}" placeholder="" name="phone"> </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Hình ảnh</span>
              </div>
              <input type="file" class="form-control" placeholder="" name="image"> </div>
              <img style="width: 200px" src="{{ config('image.source') }}/{{ $hotel->image }}">
          </div>
      </div>
      <div class="col-sm-12 col-md-6">
        <strong class="text-muted d-block mb-2" style="margin-top: 32px"></strong>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Tên khách sạn TA</span>
              </div>
              <input type="text" class="form-control" placeholder="Hotel name" aria-label="Username" aria-describedby="basic-addon1" name="name_en" value="{{ $hotel->name_en }}"> </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Địa chỉ TA</span>
              </div>
              <input type="text" class="form-control" placeholder="Address" aria-label="Username" aria-describedby="basic-addon1" name="address_en" value="{{ $hotel->address_en }}"> </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Tiêu chuẩn</span>
              </div>
              <input type="text" class="form-control" name="standard" value="{{ $hotel->standard }}"> </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Website</span>
              </div>
              <input type="text" class="form-control" name="website" value="{{ $hotel->website }}"> </div>
          </div>
         
      </div>
    </div>
    <div class="form-group">
        <label>Ghi chú TV</label>
        <textarea name="note_vi" class="form-control" placeholder="ghi chú">{{ $hotel->note_vi }}</textarea>
    </div>
    <div class="form-group">
        <label>Ghi chú TA</label>
        <textarea name="note_en" class="form-control" placeholder="note">{{ $hotel->note_en }}</textarea>
    </div>
     @if (count($errors) > 0)
        <div class="alert alert-danger">
            @foreach ($errors->all() as $err)
            {{ $err }}<br>
            @endforeach
        </div>
        @endif

        @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
    <button type="submit" class="mb-2 btn btn-primary mr-2">Sửa</button>
    </form>
@endsection
