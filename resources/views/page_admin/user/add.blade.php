@extends('page_admin.index')
@section('content')
<div class="main-content-container container-fluid px-4">
    <form action="admin/scenic/store" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="row" style="margin-top: 5px;">
      <div class="col-sm-12 col-md-6">
        <strong class="text-muted d-block mb-2" style="font-size: 18px">Scenic</strong>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1" style="color: #007bff">Tên địa danh</span>
              </div>
              <input type="text" class="form-control" placeholder="Tên địa danh" aria-label="Username" aria-describedby="basic-addon1" name="name_vi"> </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <select id="inputState" name="place" class="form-control">
                @foreach($places as $place)
                    <option value="{{ $place->id }}">{{ $place->name_vi }}</option>
                @endforeach
              </select>
            </div>
          </div>          
      </div>
      <div class="col-sm-12 col-md-6" style="margin-top: 24px">
        <strong class="text-muted d-block mb-2"></strong>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1" style="color: #007bff">Scenic name: </span>
              </div>
              <input type="text" class="form-control" placeholder="Scenic name" aria-label="Username" aria-describedby="basic-addon1" name="name_en"> </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1" style="color: #007bff">Hình ảnh</span>
              </div>
              <input type="file" class="form-control" placeholder="" name="image"> </div>
          </div>
      </div>
    </div>
    <div class="form-group">
        <label>Mô tả</label>
        <textarea name="description_vi" class="form-control" placeholder="Mô tả"></textarea>
    </div>
    <div class="form-group">
        <label>Description</label>
        <textarea name="description_en" class="form-control" placeholder="Description"></textarea>
    </div>
    <button type="submit" class="mb-2 btn btn-primary mr-2">Add</button>
    </form>
@endsection
