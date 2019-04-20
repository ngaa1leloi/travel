@extends('page_admin.index')
@section('content')
<div class="main-content-container container-fluid px-4">
    <form action="admin/tour/update/{{ $tour->id }}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="row">
      <div class="col-sm-12 col-md-6">
        <strong class="text-muted d-block mb-2">Forms</strong>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Tên tua</span>
              </div>
              <input type="text" class="form-control" value="{{ $tour->name_vi }}" placeholder="Tên tua" aria-label="Username" aria-describedby="basic-addon1" name="name_vi"> </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Xuất phát</span>
              </div>
              <input type="text" class="form-control" value="{{ $tour->departure_vi }}" placeholder="Địa điểm xuất phát" aria-label="Username" aria-describedby="basic-addon1" name="departure_vi"> </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <select id="inputState" name="category" class="form-control">
                @foreach($categories as $cate)
                    <option value="{{ $cate->id }}" @if ($cate->id == $tour->category_id) selected="selected" @endif>{{ $cate->name }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Giá vé</span>
              </div>
              <input type="text" class="form-control" value="{{ $tour->price }}" placeholder="" name="price"> </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Hình ảnh</span>
              </div>
              <input type="file" class="form-control" placeholder="" name="image"></div>
              <img style="width: 200px" src="{{ config('image.source') }}/{{ $tour->image }}">
          </div>
      </div>
      <div class="col-sm-12 col-md-6">
        <strong class="text-muted d-block mb-2">Forms</strong>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Tour name: </span>
              </div>
              <input type="text" class="form-control" value="{{ $tour->name_en }}" placeholder="Tên tua" aria-label="Username" aria-describedby="basic-addon1" name="name_en"> </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Departure: </span>
              </div>
              <input type="text" class="form-control" value="{{ $tour->departure_en }}" placeholder="Địa điểm xuất phát" aria-label="Username" aria-describedby="basic-addon1" name="departure_en"> </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Date: </span>
              </div>
              <input type="date" class="form-control" value="{{ $tour->date }}" name="date"> </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Time: </span>
              </div>
              <input type="time" class="form-control" value="{{ $tour->time }}" name="time"> </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Số người</span>
              </div>
              <input type="text" class="form-control" value="{{ $tour->quantity_person }}" placeholder="" name="quantity_person"> </div>
          </div>
      </div>
    </div>
    <div class="form-group">
        <label>Lịch trình</label>
        <textarea name="process_vi" class="form-control" placeholder="lịch trình">{{ $tour->process_vi }}</textarea>
    </div>
    <div class="form-group">
        <label>Process</label>
        <textarea name="process_en" class="form-control" placeholder="Process">{{ $tour->process_en }}</textarea>
    </div>
    <button type="submit" class="mb-2 btn btn-primary mr-2">Edit</button>
    </form>
@endsection
