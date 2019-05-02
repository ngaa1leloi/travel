@extends('page_admin.index')
@section('content')
<div class="main-content-container container-fluid px-4">
    <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
            <span class="text-uppercase page-subtitle">Blog Posts</span>
            <h3 class="page-title">Add New Post</h3>
        </div>
    </div>
    <form action="admin/news/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-9 col-md-12">
                <div class="card card-small mb-3">
                    <div class="card-body">
                        <label>Tiêu đề</label>
                        <input name="title_vi" class="form-control form-control-lg mb-3" type="text" placeholder="Your Post Title">
                        <label>Nội dung</label>
                        <textarea id="content_vi" name="content_vi"></textarea>
                        <label>Title</label>
                        <input name="title_en" class="form-control form-control-lg mb-3" type="text" placeholder="Your Post Title">
                        <label>Content</label>
                        <textarea id="content_en" name="content_en"></textarea>
                        <label>Image</label>
                        <input class="form-control form-control-lg mb-3" type="file" name="image">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12">
            <!-- Post Overview -->
                <div class='card card-small mb-3'>
                    <div class="card-header border-bottom">
                        <h6 class="m-0">Actions</h6>
                    </div>
                    <div class='card-body p-0'>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item p-3">
                                <span class="d-flex mb-2">
                                    <i class="material-icons mr-1">flag</i>
                                    <strong class="mr-1">Status:</strong> Draft
                                <a class="ml-auto" href="#">Edit</a>
                                </span>
                                <span class="d-flex mb-2">
                                    <i class="material-icons mr-1">visibility</i>
                                    <strong class="mr-1">Visibility:</strong>
                                    <strong class="text-success">Public</strong>
                                    <a class="ml-auto" href="#">Edit</a>
                                </span>
                                <span class="d-flex mb-2">
                                    <i class="material-icons mr-1">calendar_today</i>
                                    <strong class="mr-1">Schedule:</strong> Now
                                    <a class="ml-auto" href="#">Edit</a>
                                </span>
                                <span class="d-flex">
                                    <i class="material-icons mr-1">score</i>
                                    <strong class="mr-1">Readability:</strong>
                                    <strong class="text-warning">Ok</strong>
                                </span>
                            </li>
                            <li class="list-group-item d-flex px-3">
                                <input type="submit" name="save" value="Save Draft" class="btn btn-sm btn-outline-accent">
                                <input type="submit" name="publish" value="Publish" class="btn btn-sm btn-accent ml-auto">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
