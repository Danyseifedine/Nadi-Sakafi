    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><img src="{{ asset('img/logo.png') }}" width="80" height="80" alt="">
            </h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse d navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ route('landing') }}"
                    class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">الرئيسية</a>
                <a href="{{ route('about_us') }}"
                    class="nav-item nav-link {{ request()->is('about_us') ? 'active' : '' }}  ">من نحن</a>
                <a href="{{ route('all.activities') }}"
                    class="nav-item nav-link {{ request()->is('activities') ? 'active' : '' }}  ">النشاطات</a>
                <a href="{{ route('medical_center') }}"
                    class="nav-item nav-link {{ request()->is('medical_center') ? 'active' : '' }}  ">القصم الطبي</a>
            </div>
            @guest
                <a href="{{ route('register') }}" class="btn btn-primary py-4 px-4 px-lg-5 d-none d-lg-block">التسجيل</a>
            @endguest
            @auth
                <span class="nav-item nav-link">مرحباً، {{ Auth::user()->name }}</span>
                <a href="{{ route('dashboard.home') }}" class="btn btn-primary py-4 px-4 px-lg-5 d-none d-lg-block">لوحة التحكم</a>
                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-primary py-4 px-4 px-lg-5 d-none d-lg-block">تسجيل الخروج</button>
                </form>
            @endauth
        </div>
    </nav>
    <!-- Navbar End -->
