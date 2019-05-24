<aside class="main-sidebar col-12 col-md-3 col-lg-2 px-0">
  <div class="main-navbar">
    <nav class="navbar align-items-stretch navbar-light bg-white flex-md-nowrap border-bottom p-0">
      <a class="navbar-brand w-100 mr-0" href="#" style="line-height: 25px;">
        <div class="d-table m-auto">
          <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 25px;" src="{{ asset('source_admin/images/shards-dashboards-logo.svg') }}" alt="Shards Dashboard">
          <span class="d-none d-md-inline ml-1">Travel Dashboard</span>
        </div>
      </a>
      <a class="toggle-sidebar d-sm-inline d-md-none d-lg-none">
        <i class="material-icons">&#xE5C4;</i>
      </a>
    </nav>
  </div>
  <form action="#" class="main-sidebar__search w-100 border-right d-sm-flex d-md-none d-lg-none">
    <div class="input-group input-group-seamless ml-3">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fas fa-search"></i>
        </div>
      </div>
      <input class="navbar-search form-control" type="text" placeholder="Search for something..." aria-label="Search"> </div>
  </form>
  <div class="nav-wrapper">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link active" href="index.html">
          <i class="material-icons">edit</i>
          <span>Trang quản trị</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{ route('index_tour') }}">
          <i class="material-icons">vertical_split</i>
          <span>Tua</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{ route('index_news') }}">
          <i class="material-icons">note_add</i>
          <span>Tin tức và bài viết</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{ route('index_place') }}">
          <i class="material-icons">view_module</i>
          <span>Điểm đến</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{ route('index_scenic') }}">
          <i class="material-icons">table_chart</i>
          <span>Địa danh</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{ route('index_hotel') }}">
          <i class="material-icons">table_chart</i>
          <span>Khách sạn</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{ route('index_user') }}">
          <i class="material-icons">person</i>
          <span>Thành viên</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{ route('index_contact') }}">
          <i class="material-icons">error</i>
          <span>Liên hệ</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{ route('index_booking') }}">
          <i class="material-icons">table_chart</i>
          <span>Đặt tua có lịch</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="{{ route('index_booking_custom') }}">
          <i class="material-icons">table_chart</i>
          <span>Đặt tua tự chọn</span>
        </a>
      </li>
    </ul>
  </div>
</aside>
