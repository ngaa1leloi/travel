@extends('page_admin.index')
@section('content')
<div class="main-content-container container-fluid px-4">
    <form action="admin/tour/store" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="row" style="padding: 10px">
      <div class="col-sm-12 col-md-6">
        <strong class="text-muted d-block mb-2">Thêm tua</strong>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Tên tua TV</span>
              </div>
              <input type="text" class="form-control" placeholder="Tên tua" aria-label="Username" aria-describedby="basic-addon1" name="name_vi"> </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Nơi xuất phát TV</span>
              </div>
              <input type="text" class="form-control" placeholder="Địa điểm xuất phát" aria-label="Username" aria-describedby="basic-addon1" name="departure_vi"> </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Nơi đến</span>
              </div>
              <select id="inputState" name="place" class="form-control">
                @foreach($places as $cate)
                    <option value="{{ $cate->id }}">{{ $cate->name_vi }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Loại tua</span>
              </div>
              <select id="inputState" name="category" class="form-control">
                @foreach($categories as $cate)
                    <option value="{{ $cate->id }}">{{ $cate->name_vi }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text">Giá vé</span>
              </div>
              <input type="text" class="form-control" placeholder="" value="0" name="price"> </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Khách sạn</span>
              </div>
              <select id="inputState" name="hotel" class="form-control">
                @foreach($hotels as $cate)
                    <option value="{{ $cate->id }}">{{ $cate->name_vi }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Hình ảnh</span>
              </div>
              <input type="file" class="form-control" placeholder="" name="image"> </div>
          </div>
      </div>
      <div class="col-sm-12 col-md-6" style="padding-top: 20px">
        <strong class="text-muted d-block mb-2"></strong>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Tên tua TA </span>
              </div>
              <input type="text" class="form-control" placeholder="Tên tua" aria-label="Username" aria-describedby="basic-addon1" name="name_en"> </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Nơi xuất phát TA </span>
              </div>
              <input type="text" class="form-control" placeholder="Địa điểm xuất phát" aria-label="Username" aria-describedby="basic-addon1" name="departure_en"> </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Ngày đi </span>
              </div>
              <input type="date" class="form-control" name="start_date"> </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Ngày về </span>
              </div>
              <input type="date" class="form-control" name="end_date"> </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Giờ khởi hành </span>
              </div>
              <input type="time" class="form-control" name="time"> </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Số người</span>
              </div>
              <input type="text" class="form-control" placeholder="" value="0" name="quantity_person"> </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <div class="input-group-prepend">
                <label>Trạng thái</label>
              </div>
              <input type="radio" name="status"  value="1"/><span>Tua tự chọn</span>
              <input type="radio" name="status"  value="0"/> <span>Tua đã có lịch</span>
            </div>
          </div>
      </div>
    </div>
    <div class="form-group" style="margin-left: 10px; margin-right: 10px">
        <label>Lịch trình TV</label>
        <textarea name="process_vi" class="form-control" placeholder="lịch trình"></textarea>
    </div>
    <div class="form-group" style="margin-left: 10px; margin-right: 10px">
        <label>Lịch trình TA</label>
        <textarea name="process_en" class="form-control" placeholder="lịch trình"></textarea>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger" style="margin-left: 10px; margin-right: 10px">
            @foreach ($errors->all() as $err)
            {{ $err }}<br>
            @endforeach
        </div>
        @endif

        @if (session('message'))
        <div class="alert alert-success" style="margin-left: 10px; margin-right: 10px">
            {{ session('message') }}
        </div>
        @endif
    <button type="submit" class="mb-2 btn btn-primary mr-2" style="margin-left: 10px; margin-right: 10px">Thêm</button>
    </form>
@endsection
