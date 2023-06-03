<?php  ?>

<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="icon" href="{{ url('/assets/images/logo/logo.png') }}">
    <!-- Page Title  -->
    <title><?php echo ( isset($title) ? $title : "SIRDADU") ?></title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href=" {{ url('/assets/css/dashlite.css?ver=3.1.0') }}">
    <link id="skin-default" rel="stylesheet" href="{{ url('/assets/css/theme.css?ver=3.1.0') }}">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <script src="https://kit.fontawesome.com/31149d48b0.js" crossorigin="anonymous"></script>
        
    <style> body {
        font-family: Arial, Helvetica, sans-serif;
    }</style>

</head>

<body class="nk-body bg-white npc-default has-aside ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main">
            <!-- wrap @s -->
            <div class="nk-wrap">
                <nav class="nk-header nk-header-fixed is-light">
                    <div class="container-lg wide-xl">
                        <div class="nk-header-wrap">
                            <div class="nk-header-brand">
                                <a href="/" class="logo-link">
                                    <img class="logo-light logo-img" src="{{ url('/assets/images/logo/logo.png') }}"  alt="logo">
                                    <img class="logo-dark logo-img" src="{{ url('/assets/images/logo/logo.png') }}" alt="logo-dark">
                                </a>


                            </div><!-- .nk-header-brand -->
                            <div class="nk-header-menu">
                                <ul class="nk-menu nk-menu-main">

                                    <!-- Visi Misi -->
                                    <li class="nk-menu-item" >
                                        <a href="/visi-misi" class="nk-menu-link">
                                            <span class="nk-menu-text">Visi Misi</span>
                                        </a>
                                    </li><!-- .nk-menu-item -->

                                    <!-- Profil -->
                                    <li class="nk-menu-item" >
                                        <a href="/profil" class="nk-menu-link">
                                            <span class="nk-menu-text">Profil</span>
                                        </a>
                                    </li><!-- .nk-menu-item -->

                                    <!-- Layanan -->
                                    <li class="nk-menu-item" >
                                        <a href="/layanan" class="nk-menu-link">
                                            <span class="nk-menu-text">Layanan</span>
                                        </a>
                                    </li>

                                    <li class="nk-menu-item has-sub">
                                        <a href="#" class="nk-menu-link nk-menu-toggle">
                                            <span class="nk-menu-text">Struktur Organisasi</span>
                                        </a>
                                        <ul class="nk-menu-sub">
                                            <li class="nk-menu-item">
                                                <a href="#" class="nk-menu-link"><span class="nk-menu-text">UPTD PUSKESMAS</span></a>
                                            </li>
                                            <li class="nk-menu-item">
                                                <a href="#" class="nk-menu-link"><span class="nk-menu-text">ADMEN</span></a>
                                            </li>
                                            <li class="nk-menu-item">
                                                <a href="#" class="nk-menu-link"><span class="nk-menu-text">MUTU</span></a>
                                            </li>
                                            <li class="nk-menu-item">
                                                <a href="#" class="nk-menu-link"><span class="nk-menu-text">PENINGKATAN MUTU</span></a>
                                            </li>
                                            <li class="nk-menu-item">
                                                <a href="#" class="nk-menu-link"><span class="nk-menu-text">AUDIT INTERNAL</span></a>
                                            </li>
                                            <li class="nk-menu-item">
                                                <a href="#" class="nk-menu-link"><span class="nk-menu-text">PENANGANAN PENGADUAN MASYARAKAT</span></a>
                                            </li>

                                            <li class="nk-menu-item">
                                                <a href="#" class="nk-menu-link"><span class="nk-menu-text">KESELAMATAN PASIEN</span></a>
                                            </li>
                                            
                                            <li class="nk-menu-item">
                                                <a href="#" class="nk-menu-link"><span class="nk-menu-text">PENCEGAHAN DAN PENGENDALIAN INFEKSI</span></a>
                                            </li>

                                            <li class="nk-menu-item">
                                                <a href="#" class="nk-menu-link"><span class="nk-menu-text">MANAJEMEN RESIKO</span></a>
                                            </li>

                                            <li class="nk-menu-item">
                                                <a href="#" class="nk-menu-link"><span class="nk-menu-text">MFK & K3</span></a>
                                            </li>

                                            <li class="nk-menu-item">
                                                <a href="#" class="nk-menu-link"><span class="nk-menu-text">MUTU</span></a>
                                            </li>

                                        </ul><!-- .nk-menu-sub -->
                                    </li><!-- .nk-menu-item -->
                                    <li class="nk-menu-item">
                                        <a href="/kontak" class="nk-menu-link">
                                            <span class="nk-menu-text">Hubungi Kami</span>
                                        </a>
                                    </li><!-- .nk-menu-item -->
                                    
                                </ul><!-- .nk-menu -->
                            </div><!-- .nk-header-menu -->

                            <?php 
                            
                            /**
                             * Cek jika ada session, jika sudah maka tampilkan login
                             * jika belum tampilkan tombol login
                             */
                            if (session()->has('is_login') == True) {
                               echo '
                                <div class="nk-header-tools">
                                    <ul class="nk-quick-nav">
                                        <li class="dropdown language-dropdown d-none d-sm-block me-n1">
                                            <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                                                <div class="quick-icon border border-light">
                                                    <img class="icon" src="./images/flags/english-sq.png" alt="">
                                                </div>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-s1">
                                                <ul class="language-list">
                                                    <li>
                                                        <a href="#" class="language-item">
                                                            <img src="./images/flags/english.png" alt="" class="language-flag">
                                                            <span class="language-name">English</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="language-item">
                                                            <img src="./images/flags/spanish.png" alt="" class="language-flag">
                                                            <span class="language-name">Español</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="language-item">
                                                            <img src="./images/flags/french.png" alt="" class="language-flag">
                                                            <span class="language-name">Français</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="language-item">
                                                            <img src="./images/flags/turkey.png" alt="" class="language-flag">
                                                            <span class="language-name">Türkçe</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li><!-- .dropdown -->
                                        <li class="dropdown notification-dropdown">
                                            <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                                                <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em></div>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end dropdown-menu-s1">
                                                <div class="dropdown-head">
                                                    <span class="sub-title nk-dropdown-title">Notifications</span>
                                                    <a href="#">Mark All as Read</a>
                                                </div>
                                                <div class="dropdown-body">
                                                    <div class="nk-notification">
                                                        <div class="nk-notification-item dropdown-inner">
                                                            <div class="nk-notification-icon">
                                                                <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                            </div>
                                                            <div class="nk-notification-content">
                                                                <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                                                <div class="nk-notification-time">2 hrs ago</div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-notification-item dropdown-inner">
                                                            <div class="nk-notification-icon">
                                                                <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                            </div>
                                                            <div class="nk-notification-content">
                                                                <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                                                <div class="nk-notification-time">2 hrs ago</div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-notification-item dropdown-inner">
                                                            <div class="nk-notification-icon">
                                                                <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                            </div>
                                                            <div class="nk-notification-content">
                                                                <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                                                <div class="nk-notification-time">2 hrs ago</div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-notification-item dropdown-inner">
                                                            <div class="nk-notification-icon">
                                                                <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                            </div>
                                                            <div class="nk-notification-content">
                                                                <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                                                <div class="nk-notification-time">2 hrs ago</div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-notification-item dropdown-inner">
                                                            <div class="nk-notification-icon">
                                                                <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                            </div>
                                                            <div class="nk-notification-content">
                                                                <div class="nk-notification-text">You have requested to <span>Widthdrawl</span></div>
                                                                <div class="nk-notification-time">2 hrs ago</div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-notification-item dropdown-inner">
                                                            <div class="nk-notification-icon">
                                                                <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                            </div>
                                                            <div class="nk-notification-content">
                                                                <div class="nk-notification-text">Your <span>Deposit Order</span> is placed</div>
                                                                <div class="nk-notification-time">2 hrs ago</div>
                                                            </div>
                                                        </div>
                                                    </div><!-- .nk-notification -->
                                                </div><!-- .nk-dropdown-body -->
                                                <div class="dropdown-foot center">
                                                    <a href="#">View All</a>
                                                </div>
                                            </div>
                                        </li><!-- .dropdown -->
                                        <li class="dropdown user-dropdown">
                                            <a href="#" class="dropdown-toggle me-lg-n1" data-bs-toggle="dropdown">
                                                <div class="user-toggle">
                                                    <div class="user-avatar sm">
                                                        <em class="icon ni ni-user-alt"></em>
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-end dropdown-menu-s1">
                                                <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                    <div class="user-card">
                                                        <div class="user-avatar">
                                                            <span>AB</span>
                                                        </div>
                                                        <div class="user-info">
                                                            <span class="lead-text">Abu Bin Ishtiyak</span>
                                                            <span class="sub-text">info@softnio.com</span>
                                                        </div>
                                                        <div class="user-action">
                                                            <a class="btn btn-icon me-n2" href="html/user-profile-setting.html"><em class="icon ni ni-setting"></em></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="dropdown-inner">
                                                    <ul class="link-list">
                                                        <li><a href="html/user-profile-regular.html"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                                        <li><a href="html/user-profile-setting.html"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                                        <li><a href="html/user-profile-activity.html"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                                                        <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="dropdown-inner">
                                                    <ul class="link-list">
                                                        <li><a href="/logout"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li><!-- .dropdown -->
                                    </ul><!-- .nk-quick-nav -->
                                </div><!-- .nk-header-tools -->';
                            }else{
                                echo '
                                <div class="nk-header-tools">
                                    <ul class="nk-quick-nav">
                                        <li class="dropdown language-dropdown d-none d-sm-block me-n1">
                                            <a href="#" class="dropdown-toggle nk-quick-nav-icon" data-bs-toggle="dropdown">
                                                <div style="font-size: 15px">
                                                    <span>Login</span> 
                                                </div>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-s1">
                                                <ul class="language-list">
                                                    <li>
                                                        <a href="/login/tata_usaha" class="language-item">
                                                            <span class="language-name">Tata Usaha</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/login/poli" class="language-item">
                                                            <span class="language-name">Poli</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/login/kia" class="language-item">
                                                            <span class="language-name">KIA</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/login/lab" class="language-item">
                                                            <span class="language-name">Lab</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="/login/ukm" class="language-item">
                                                            <span class="language-name">UKM</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li><!-- .dropdown -->
                                    </ul><!-- .nk-quick-nav -->
                                </div><!-- .nk-header-tools -->
                                ';
                            }

                            ?>

                            <li class="d-lg-none">
                                <a href="#" class="toggle nk-quick-nav-icon me-n1" data-target="sideNav"><em class="icon ni ni-menu"></em></a>
                            </li>

                        </div><!-- .nk-header-wrap -->
                    </div><!-- .container-fliud -->
                </nav>
            
            <div class="nk-content">
                <div class="container wide-xl">
                    <div class="nk-content-inner">
                        
                        <!-- PORT MOBILE MENU -->
                        
                        <?php 
                            $device_detect = device_detect();

                            if($device_detect != 'computer'){
                                echo '
                                <div class="nk-aside" data-content="sideNav" data-togle data-toggle-overlay="false" data-toggle-screen="lg" data-toggle-body="false">
                                <div class="nk-sidebar-menu" data-simplebar>
                                    <ul class="nk-menu nk-menu-main">
                                        
                                        <!-- Visi Misi -->

                                        <li class="nk-menu-item">
                                            <a href="/visi-misi" class="nk-menu-link">
                                                <span class="nk-menu-text">Visi Misi</span>
                                            </a>
                                        </li><!-- .nk-menu-item -->

                                        <!-- Profil -->
                                        <li class="nk-menu-item">
                                            <a href="/profil" class="nk-menu-link">
                                                <span class="nk-menu-text">Profil</span>
                                            </a>
                                        </li><!-- .nk-menu-item -->

                                        <!-- Layanan -->
                                        <li class="nk-menu-item">
                                            <a href="/layanan" class="nk-menu-link">
                                                <span class="nk-menu-text">Layanan</span>
                                            </a>
                                        </li><!-- .nk-menu-item -->
                                        
                                        <!-- Struktur Organisasi -->
                                        <li class="nk-menu-item has-sub">
                                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                                <span class="nk-menu-text">Struktur Organisasi</span>
                                            </a>
                                            <ul class="nk-menu-sub">
                                                <li class="nk-menu-item">
                                                    <a href="/uptd" class="nk-menu-link"><span class="nk-menu-text">UPTD PUSKESMAS</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="#" class="nk-menu-link"><span class="nk-menu-text">ADMEN</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="#" class="nk-menu-link"><span class="nk-menu-text">MUTU</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="#" class="nk-menu-link"><span class="nk-menu-text">PENINGKATAN MUTU</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="#" class="nk-menu-link"><span class="nk-menu-text">AUDIT INTERNAL</span></a>
                                                </li>
                                                <li class="nk-menu-item">
                                                    <a href="#" class="nk-menu-link"><span class="nk-menu-text">PENANGANAN PENGADUAN MASYARAKAT</span></a>
                                                </li>

                                                <li class="nk-menu-item">
                                                    <a href="#" class="nk-menu-link"><span class="nk-menu-text">KESELAMATAN PASIEN</span></a>
                                                </li>
                                                
                                                <li class="nk-menu-item">
                                                    <a href="#" class="nk-menu-link"><span class="nk-menu-text">PENCEGAHAN DAN PENGENDALIAN INFEKSI</span></a>
                                                </li>

                                                <li class="nk-menu-item">
                                                    <a href="#" class="nk-menu-link"><span class="nk-menu-text">MANAJEMEN RESIKO</span></a>
                                                </li>

                                                <li class="nk-menu-item">
                                                    <a href="#" class="nk-menu-link"><span class="nk-menu-text">MFK & K3</span></a>
                                                </li>

                                                <li class="nk-menu-item">
                                                    <a href="#" class="nk-menu-link"><span class="nk-menu-text">MUTU</span></a>
                                                </li>

                                            </ul><!-- .nk-menu-sub -->
                                        </li><!-- .nk-menu-item -->

                                    <!-- Hubungi Kami -->
                                    <li class="nk-menu-item">
                                        <a href="/kontak" class="nk-menu-link">
                                            <span class="nk-menu-text">Hubungi Kami</span>
                                        </a>
                                    </li><!-- .nk-menu-item -->

                                    <li class="nk-menu-item has-sub">
                                        <a href="#" class="nk-menu-link nk-menu-toggle">
                                            <span class="nk-menu-text">Login</span>
                                        </a>
                                        <ul class="nk-menu-sub">
                                            <li class="nk-menu-item">
                                                <a href="/login/tata_usaha" class="nk-menu-link">
                                                    <span class="nk-menu-text">Tata Usaha
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="nk-menu-item">
                                                <a href="/login/poli" class="nk-menu-link">
                                                    <span class="nk-menu-text">Poli</span>
                                                </a>
                                            </li>
                                            <li class="nk-menu-item">
                                                <a href="/login/kia" class="nk-menu-link">
                                                    <span class="nk-menu-text">KIA</span>
                                                </a>
                                            </li>
                                            <li class="nk-menu-item">
                                                <a href="/login/lab" class="nk-menu-link">
                                                    <span class="nk-menu-text">Lab</span>
                                                </a>
                                            </li>
                                            <li class="nk-menu-item">
                                                <a href="/login/ukm" class="nk-menu-link">
                                                    <span class="nk-menu-text">UKM</span>
                                                </a>
                                            </li>
                                        </ul><!-- .nk-menu-sub -->
                                    </li><!-- .nk-menu-item -->
                                    </ul>

                
                                
                                </div><!-- .nk-sidebar-menu -->
                                <div class="nk-aside-close">
                                    <a href="#" class="toggle" data-target="sideNav"><em class="icon ni ni-cross"></em></a>
                                </div><!-- .nk-aside-close -->
                                </div><!-- .nk-aside -->
                                ';
                            }
                        ?>

                        

                        <div class="nk-content-body">