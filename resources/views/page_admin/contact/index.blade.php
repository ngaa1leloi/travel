@extends('page_admin.index')
@section('content')

    <form action="admin/booking/search-booking-custom" method="GET">
        <div class="row" style="margin: 10px">
            <div class="col-sm-6 col-md-3">
                <strong class="text-muted d-block mb-2" style="font-size: 18px">Tìm kiếm</strong>
                
                <div class="form-group">
                    <span>Tên tua</span>
                    <select id="" name="tour" class="form-control">
                        
                    </select>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <strong class="text-muted d-block mb-2" style="margin-top: 32px"></strong>
                
                <div class="form-group">
                    <span>Trạng thái</span>
                    <select id="" name="status" class="form-control">
                        <option value="0">Chưa xếp tua</option>
                        <option value="1">Đã xếp tua</option>
                        <option value="2">Chưa thanh toán</option>
                        <option value="3">Đã thanh toán</option>
                        <option value="4">Đang tiến hành</option>
                        <option value="5">Kết thúc</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-6 col-md-2">
                <strong class="text-muted d-block mb-2" style="margin-top: 32px"></strong>
                
                <div class="form-group">
                    <span>Ngày đi</span>
                    <input type="date" name="start_date" class="form-control">
                </div>
            </div>
            <div class="col-sm-6 col-md-2">
                <strong class="text-muted d-block mb-2" style="margin-top: 32px"></strong>
                
                <div class="form-group">
                    <span>Ngày về</span>
                    <input type="date" name="end_date" class="form-control">
                </div>
            </div>
            
            <div class="col-sm-6 col-md-2">
                <strong class="text-muted d-block mb-2" style="margin-top: 55px"></strong>
                <button type="submit" class="mb-2 btn btn-primary mr-2">Search</button>
            </div>
        </div>
    
    </form>

<div class="row">
    <div class="col">
        <div class="card card-small mb-4">
            <div class="card-header border-bottom">
                <span class="m-0" style="font-size: 18px;">Contacts</span>
                <span class="mb-2 btn btn-info mr-2" style="float: right;"><a href="{{ route('create_tour') }}"></a></span>
            </div>

            <div class="card-body p-0 pb-3 text-center">
                <table class="table mb-0">
                    <thead class="bg-light">
                        <tr>
                            <th scope="col" class="border-0">STT</th>
                            <th scope="col" class="border-0">Tên</th>
                            <th scope="col" class="border-0">SĐT</th>
                            <th scope="col" class="border-0">Email</th>
                            <th scope="col" class="border-0">Tiêu đề</th>
                            <th scope="col" class="border-0">Nội dung</th>
                            <th scope="col" class="border-0">Edit</th>
                            <th scope="col" class="border-0">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contacts as $key => $contact)
                        <tr>
                            <th>{{ $key + 1 }}</th>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->phone }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->subject }}</td>
                            <td>{{ $contact->message }}</td>
                            <td><span class="text-danger">
                                <a href="{{ route('edit_tour', $contact->id) }}"><i class="material-icons">more_vert</i></a>
                              </span></td>
                            <td><span class="text-danger">
                                <a href="{{ route('delete_tour', $contact->id) }}" onclick="return myFunction();"><i style="color: red" class="material-icons">clear</i></a></span></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <li>{{ $contacts->links() }}</li>
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
