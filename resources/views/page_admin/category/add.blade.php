@extends('page_admin.index')
@section('content')
<div class="main-content-container container-fluid px-4">
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle"></span>
            <h3 class="page-title">Add New Place</h3>
        </div>
    </div>
    <form action="admin/place/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-10 col-md-12">
                <div class="card card-small mb-3">
                    <div class="card-body">
                        <label>Tên</label>
                        <input name="name_vi" class="form-control form-control-lg mb-3" type="text" placeholder="Tên địa điểm">
                        <label>Mô tả</label>
                        <textarea class="form-control form-control-lg mb-3" id="description_vi" name="description_vi"></textarea>
                        <label>Place Name</label>
                        <input name="name_en" class="form-control form-control-lg mb-3" type="text" placeholder="Place Name">
                        <label>Description</label>
                        <textarea class="form-control form-control-lg mb-3" id="description_en" name="description_en"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="mb-2 btn btn-primary mr-2">Add</button>
    </form>
</div>
@endsection
