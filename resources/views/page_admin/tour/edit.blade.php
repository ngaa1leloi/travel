@extends('page_admin.index')
@section('content')
<div class="main-content-container container-fluid px-4" style="padding: 10px">
    <form id="demoForm" action="admin/tour/update/{{ $tour->id }}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="row">
      <div class="col-sm-12 col-md-6">
        <strong class="text-muted d-block mb-2">Cập nhật tua</strong>
        
        @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Tên tua TV</span>
              </div>
              <input type="text" class="form-control" value="{{ $tour->name_vi }}" placeholder="Tên tua" aria-label="Username" aria-describedby="basic-addon1" name="name_vi"> </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Nơi đến</span>
              </div>
              <select id="inputState" name="place" class="form-control">
                @foreach($places as $cate)
                    <option value="{{ $cate->id }}" @if ($cate->id == $tour->place_id) selected="selected" @endif>{{ $cate->name_vi }}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Nơi xuất phát TV</span>
              </div>
              <input type="text" class="form-control" value="{{ $tour->departure_vi }}" placeholder="Địa điểm xuất phát" aria-label="Username" aria-describedby="basic-addon1" name="departure_vi"> </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Loại tua</span>
              </div>
              <select id="inputState" name="category" class="form-control">
                @foreach($categories as $cate)
                    <option value="{{ $cate->id }}" @if ($cate->id == $tour->category_id) selected="selected" @endif>{{ $cate->name_vi }}</option>
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
                <span class="input-group-text" id="basic-addon1">Khách sạn</span>
              </div>
              <select id="inputState" name="hotel" class="form-control">
                @foreach($hotels as $cate)
                    <option value="{{ $cate->id }}" @if ($cate->id == $tour->hotel_id) selected="selected" @endif>{{ $cate->name_vi }}</option>
                @endforeach
              </select>
            </div>
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
        <strong class="text-muted d-block mb-2" style="margin-top: 28px"></strong>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Tên tua TA </span>
              </div>
              <input type="text" class="form-control" value="{{ $tour->name_en }}" placeholder="Tên tua" aria-label="Username" aria-describedby="basic-addon1" name="name_en"> </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Nơi xuất phát TA </span>
              </div>
              <input type="text" class="form-control" value="{{ $tour->departure_en }}" placeholder="Địa điểm xuất phát" aria-label="Username" aria-describedby="basic-addon1" name="departure_en"> </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Ngày đi </span>
              </div>
              <input type="date" class="form-control" value="{{ $tour->start_date }}" name="start_date"> </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Ngày về </span>
              </div>
              <input type="date" class="form-control" value="{{ $tour->end_date }}" name="end_date"> </div>
          </div>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Giờ khởi hành </span>
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
          <div class="form-row">
            <div class="form-group col-md-12">
              <div class="input-group-prepend">
                <label>Trạng thái</label>
              </div>
              <input type="radio" name="status"  value="1" @if($tour->status == 1) checked="checked" @endif/><span>Tua tự chọn</span>
              <input type="radio" name="status"  value="0" @if($tour->status == 0) checked="checked"  @endif/> <span>Tua đã có lịch</span>
            </div>
          </div>
      </div>
    </div>
    <div class="form-group">
        <label>Lịch trình TV</label>
        <textarea name="process_vi" class="form-control" placeholder="lịch trình">{{ $tour->process_vi }}</textarea>
    </div>
    <div class="form-group">
        <label>Lịch trình TA</label>
        <textarea name="process_en" class="form-control" placeholder="lịch trình">{{ $tour->process_en }}</textarea>
    </div>
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            @foreach ($errors->all() as $err)
            {{ $err }}<br>
            @endforeach
        </div>
        @endif

    <button type="submit" class="mb-2 btn btn-primary mr-2">Sửa</button>
    </form>
@endsection
 @section('script')

<script type="text/javascript">
    @if(session('message'))       
        $.notify("{{ session('message') }}", "success");
    @endif
</script>
@endsection

