<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">

        <a class="navbar-brand" href="#">
            <p1><b>Bootstrap</b></p1>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-4 mb-lg-0">
                @auth

                    <li class="nav-item">
                        <a class="nav-link" href="#">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">الرحلات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">الحجوزات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">لوحة التحكم</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">تسجيل الخروج</a>
                    </li>
                @else
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('login') }}">تسجيل الدخول</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('signup') }}">إنشاء حساب</a>
                    </li>
                @endauth
            </ul>

            <span class="navbar-text">
                @auth
                    {{ auth()->user()->name }}
                @endauth
            </span>

        </div>
    </div>
</nav>
