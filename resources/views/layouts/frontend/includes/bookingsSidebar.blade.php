<div class="sidebar">
    <div class="logo_details">
      <i class="bx bxl-audible icon"></i>
      <div class="logo_name">Duck Inc.</div>
      <i class="bx bx-menu" id="btn"></i>
    </div>
    <ul class="nav-list">
      <li>
        <i class="bx bx-search"></i>
        <input type="text" placeholder="بحث...">
         <span class="tooltip">بحث</span>
      </li>
      <li>
        <a href="{{route('bookings')}}">
          <i class="bx bx-grid-alt"></i>
          <span class="link_name">لوحة التحكم</span>
        </a>
        <span class="tooltip">لوحة التحكم</span>
      </li>
      <li>
        <a href="{{route('trips')}}">
          <i class="bx bx-folder"></i>
          <span class="link_name">الرحلات</span>
        </a>
        <span class="tooltip">الرحلات</span>
      </li>

      <li>
        <a href="{{route('message')}}">
          <i class="bx bx-chat"></i>
          <span class="link_name">الرسائل</span>
        </a>
        <span class="tooltip">الرسائل</span>
      </li>

      <li class="profile">
        <a href="{{ route('home') }}" class="bx bx-log-out" id="log_out"></a>
      </li>
    </ul>
</div>
