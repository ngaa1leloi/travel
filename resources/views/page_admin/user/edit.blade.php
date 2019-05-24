@extends('page_admin.index')
@section('content')
<div class="main-content-container container-fluid px-4">
    <form action="admin/user/update/{{ $user->id }}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="row" style="margin-top: 5px;">
      <div class="col-sm-12 col-md-6">
        <strong class="text-muted d-block mb-2" style="font-size: 18px">Người dùng</strong>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1" style="color: #007bff">Tên người dùng</span>
              </div>
              <input type="text" class="form-control" value="{{ $user->name }}" aria-label="Username" aria-describedby="basic-addon1" name="name" disabled="disabled"> </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-12">
              <select id="inputState" name="role" class="form-control">
                
                  <option value="1" @if ($user->role == 1) selected="selected" @endif>Nhân viên</option>
                  <option value="2" @if ($user->role == 2) selected="selected" @endif>Người dùng</option>
              </select>
            </div>
          </div>          
      </div>
      <div class="col-sm-12 col-md-6" style="margin-top: 24px">
        <strong class="text-muted d-block mb-2"></strong>
          <div class="form-group">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1" style="color: #007bff">Email: </span>
              </div>
              <input type="text" class="form-control" value="{{ $user->email }}" placeholder="Scenic name" aria-label="Username" aria-describedby="basic-addon1" name="email" disabled="disabled"> </div>
          </div>
         
      </div>
    </div>
    
    <button type="submit" class="mb-2 btn btn-primary mr-2">Edit</button>
    </form>
@endsection
