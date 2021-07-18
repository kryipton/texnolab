<?php $lang = $this->session->userdata("lang")?>

<!-- Nav Bar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light" id="header-fix">
    <div class="container">
        <a style="color:#fff;" class="navbar-brand" href="<?=base_url("$lang/home")?>">Texnolab</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarColor03">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url("$lang/home")?>">Ana sehife</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Texno Lab </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?=base_url("$lang/about")?>">Haqqımızda</a>
                        <a class="dropdown-item" href="<?=base_url("$lang/contact")?>">Əlaqə</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Telimler </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="course.html">Telimler </a>
                        <a class="dropdown-item" href="course-detail.html">Mezunlar</a>
                    </div>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url("$lang/news")?>">Texno xeber</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Servis merkezi </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="team.html">Servis merkezi </a>
                        <a class="dropdown-item" href="team-detail.html">gallery </a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url("$lang/home")?>">Temir izleme</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url("$lang/home")?>">Shop</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
