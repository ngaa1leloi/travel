@extends('page_admin.index')
@section('content')
<div class="main-content-container container-fluid px-4">
    <form action="admin/hotel/store" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="row" style="margin-top: 5px">
      <div class="col-sm-12 col-md-6">
        <strong class="text-muted d-block mb-2" style="font-size: 18px">Hotels</strong>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Tên khách sạn</span>
              </div>
              <input type="text" class="form-control" placeholder="Tên khách sạn" aria-label="Username" aria-describedby="basic-addon1" name="name_vi"> </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Địa chỉ</span>
              </div>
              <input type="text" class="form-control" placeholder="Địa chỉ" aria-label="Username" aria-describedby="basic-addon1" name="address_vi"> </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <select id="inputState" name="scenic" class="form-control">
                @foreach($scenics as $scenic)
                    <option value="{{ $scenic->id }}">{{ $scenic->name_vi }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Số điện thoại</span>
              </div>
              <input type="text" class="form-control" placeholder="" name="phone"> </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Hình ảnh</span>
              </div>
              <input type="file" class="form-control" placeholder="" name="image"> </div>
          </div>
      </div>
      <div class="col-sm-12 col-md-6">
        <strong class="text-muted d-block mb-2" style="margin-top: 32px"></strong>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Hotel name: </span>
              </div>
              <input type="text" class="form-control" placeholder="Hotel name" aria-label="Username" aria-describedby="basic-addon1" name="name_en"> </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Address: </span>
              </div>
              <input type="text" class="form-control" placeholder="Address" aria-label="Username" aria-describedby="basic-addon1" name="address_en"> </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Standard: </span>
              </div>
              <input type="text" class="form-control" name="standard"> </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Website: </span>
              </div>
              <input type="text" class="form-control" name="website"> </div>
          </div>
          {{-- <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Số người</span>
              </div>
              <input type="text" class="form-control" placeholder="" name="quantity_person"> </div>
          </div> --}}
      </div>
    </div>
    <div class="form-group">
        <label>Ghi chú</label>
        <textarea name="note_vi" class="form-control" placeholder="ghi chú"></textarea>
    </div>
    <div class="form-group">
        <label>Note</label>
        <textarea name="note_en" class="form-control" placeholder="note"></textarea>
    </div>
    <button type="submit" class="mb-2 btn btn-primary mr-2">Add</button>
    </form>
@endsection
