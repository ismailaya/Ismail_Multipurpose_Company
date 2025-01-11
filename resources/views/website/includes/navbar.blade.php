<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <!-- <a class="navbar-brand pl-4" href="#"><img src="assets/images/name.png?v=1.0000" alt=""></a> -->
    <button class="navbar-toggler ml-4 float-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
        aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse custom_nav_setting" id="navbarTogglerDemo03">
        <ul class="navbar-nav">
            <li class="nav-item"><a href="{{route('home')}}" class="nav-link">Nyumbani</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Kuhusu sisi
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{route('historia')}}">Historia</a>
                    <a class="dropdown-item" href="{{route('wasifu')}}">Wasifu</a>
                    <a class="dropdown-item" href="{{route('dira-na-dhamira')}}">Dira, dhamira na mikakati</a>
                    <a class="dropdown-item" href="{{route('muundo')}}">Muundo wa kiutawala</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Utawala
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{route('idara')}}">Idara</a>
                    <a class="dropdown-item" href="{{route('vitengo')}}">Vitengo</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Manispaa
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="https://www.zmc.go.tz/" target="_blank">Manispaa ya mjini</a>
                    <a class="dropdown-item" href="https://www.magharibiamc.go.tz/" target="_blank">Manispaa ya
                        magharibi A</a>
                    <a class="dropdown-item" href="https://mjinimagharibi.go.tz" target="_blank">Manispaa ya
                        magharibi B</a>

                </div>
            </li>
            <li class="nav-item"><a href="{{route('huduma')}}" class="nav-link">Huduma zetu</a></li>
            <li class="nav-item"><a href="{{route('machapisho')}}" class="nav-link">Machapisho</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Madiwani
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{route('madiwani')}}">Orodha ya madiwani</a>
                    <a class="dropdown-item" href="{{route('kamati')}}">Kamati za kudumu</a>
                    <a class="dropdown-item" href="{{route('bodi')}}">Bodi za usimamizi</a>
                    <!-- <a class="dropdown-item" href="ratiba-ya-vikao-vya-sheria.php">Ratiba ya vikao vya sheria</a> -->
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Kituo cha habari
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{route('taarifa-kwa-vyombo-vya-habari')}}">Taarifa kwa vyombo vya
                        habari</a>
                    <a class="dropdown-item" href="{{route('picha')}}">Maktaba ya picha</a>
                    <a class="dropdown-item" href="{{route('video')}}">Maktaba ya video</a>
                    <a class="dropdown-item" href="{{route('matukio')}}">Matukio</a>
                </div>
            </li>
            <li class="nav-item"><a href="{{route('mawasiliano')}}" class="nav-link">Mawasiliano</a></li>
        </ul>
    </div>
</nav>