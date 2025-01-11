<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo text-white" href="{{route('dashboard')}}">ZCC</a>
        <a class="sidebar-brand brand-logo-mini text-white" href="">ZCC</a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle " src="manage/assets/images/faces-clipart/pic-1.png" alt="">
                        <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">{{auth()->user()->name}}</h5>
                        <span>{{auth()->user()->email}}</span>
                    </div>
                </div>
            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('dashboard')}}">
                <span class="menu-icon">
                    <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Nyumbani</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('admin-huduma')}}">
                <span class="menu-icon">
                    <i class="mdi mdi-playlist-play"></i>
                </span>
                <span class="menu-title">Huduma Zetu</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('admin-machapisho')}}">
                <span class="menu-icon">
                    <i class="mdi mdi-playlist-play"></i>
                </span>
                <span class="menu-title">Machapisho</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('admin-slideshow')}}">
                <span class="menu-icon">
                    <i class="mdi mdi-playlist-play"></i>
                </span>
                <span class="menu-title">Slaidi za Tovuti</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#kuhusu-sisi" aria-expanded="false" aria-controls="kuhusu-sisi">
                <span class="menu-icon">
                    <i class="mdi mdi-laptop"></i>
                </span>
                <span class="menu-title">Kuhusu sisi</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="kuhusu-sisi">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin-mawasiliano')}}">Mawasiliano</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin-socials')}}">Mitandao ya kijamii</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin-historia')}}">Historia</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin-wasifu')}}">Wasifu</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin-dira-dhamira-mikakati')}}">Dira dhamira na mikakati</a>
                    <!-- <li class="nav-item"> <a class="nav-link" href="{{route('admin-muundo')}}">Muundo wa kiutawala</a> -->
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#utawala" aria-expanded="false" aria-controls="utawala">
                <span class="menu-icon">
                    <i class="mdi mdi-laptop"></i>
                </span>
                <span class="menu-title">Utawala</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="utawala">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin-idara')}}">Idara</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin-vitengo')}}">Vitengo</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#madiwani" aria-expanded="false" aria-controls="madiwani">
                <span class="menu-icon">
                    <i class="mdi mdi-laptop"></i>
                </span>
                <span class="menu-title">Madiwani</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="madiwani">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin-orodha-ya-madiwani')}}">Orodha ya madiwani</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin-kamati-za-kudumu')}}">Kamati za kudumu</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin-bodi-za-usimamizi')}}">Bodi za usimamizi</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#kituo-cha-habari" aria-expanded="false" aria-controls="kituo-cha-habari">
                <span class="menu-icon">
                    <i class="mdi mdi-laptop"></i>
                </span>
                <span class="menu-title">Kituo cha habari</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="kituo-cha-habari">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin-taarifa-kwa-vyombo')}}">Taarifa kwa vyombo</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin-picha')}}">Picha</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin-video')}}">Video</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin-matukio')}}">Matukio</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>