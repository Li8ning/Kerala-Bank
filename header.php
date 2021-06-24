<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="Kerala's Own Bank" />
    <meta property="og:description" content="Kerala Bank" />
    <meta property="og:url" content="https://test2.thepunditreport.com/kerala-bank/" />
    <meta property="og:image" content="./assets/img/kblogo-web2.png" />
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="shortcut icon" type="image/jpg" href="./assets/svg/letter 1 logo.svg"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/208eb39700.js" crossorigin="anonymous"></script>
    <title><?=$title;?></title>
</head>
<body class="av-font-noto-sans-jp">

    <!-- Header -->
    <header class="py-2">
        <div class="container-fluid container-xxl px-xl-4 px-xxl-0">
            <div class="row">
                <nav class="navbar navbar-expand-lg main-nav-menu">
                    <div class="col-2 pt-lg-3">
                        <a class="main-title navbar-brand me-auto me-lg-0" href="./">
                            <img src="./assets/img/kblogo-web2.png" alt="Kerala Bank" class="light-img img-fluid">
                            <img src="./assets/img/kblogo-web2.png" alt="Kerala Bank" class="dark-img img-fluid d-none">
                        </a>
                    </div>
                    <div class="col-10 align-self-lg-start">
                        <!-- Top Bar -->
                        <div class="col-12">
                            <ul class="nav justify-content-end align-items-center av-font-color-i av-font-i">
                                <li class="nav-item rounded-pill lang-btn">
                                    <a class="nav-link av-font-color-i fw-bold" aria-current="page" href="#">മലയാളം</a>
                                </li>
                                <li class="nav-item av-font-func av-font-ii d-none d-lg-block">
                                    <button id="av-decrease-font" class="btn av-font-ii disabled av-font-color-i text-decoration-none fw-bold" aria-current="page">A-</button>
                                    <button id="av-default-font" class="btn av-font-ii av-font-color-i text-decoration-none fw-bold" aria-current="page">A</button>
                                    <button id="av-increase-font" class="btn av-font-ii av-font-color-i text-decoration-none fw-bold" aria-current="page">A+</button>
                                </li>
                                <li class="nav-item">
                                    <form class="nav-link d-flex py-0 pe-0">
                                        <input type="checkbox" class="checkbox" id="chk" />
                                        <label class="label chkbox-label" for="chk">
                                            <div class="ball"></div>
                                        </label>
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <!-- Top Bar End -->
                        <!-- Desktop Main Nav bar -->
                        <div class="col-12 d-none d-lg-block">
                            <!-- <button class="navbar-toggler float-end" type="button" data-bs-toggle="collapse" data-bs-target="#av-main-nav" aria-controls="av-main-nav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"><img src="./assets/svg/nav-toggle.svg" alt="navbar toggle"/></span>
                            </button> -->
                            <div class="collapse navbar-collapse" id="av-main-nav">
                                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-end align-items-lg-center">
                                    <li class="nav-item menu-links dropdown">
                                        <a class="nav-link dropdown-toggle av-font-ii" href="#" id="about-dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">About Us</a>
                                        <ul class="dropdown-menu" aria-labelledby="about-dropdown">
                                            <li><a class="dropdown-item av-font-ii" href="#">Vision & Mission</a></li>
                                            <li><a class="dropdown-item av-font-ii" href="#">KB Overview</a></li>
                                            <li><a class="dropdown-item av-font-ii" href="#">History of Kerala Bank</a></li>
                                            <li><a class="dropdown-item av-font-ii" href="#">Shriram Committee Report</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link av-font-ii" href="#">Careers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link av-font-ii" href="#">Media Room</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link av-font-ii" href="#">FAQ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link av-font-ii" href="#">Tenders</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link av-font-ii" href="">Contact Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link av-font-ii" href="#">Employee Corner</a>
                                    </li>
                                    <li class="nav-item">
                                        <form class="d-flex justify-content-center my-4">
                                            <div class="search">
                                                <input class="search_input" type="text">
                                                <a class="search_icon"><i class="fa fa-search"></i></a>
                                            </div>
                                        </form>
                                    </li>
                                    <li class="nav-item ms-2 notification dropdown">
                                        <button class="btn av-badge dropdown-toggle" aria-expanded="false" id="kb-notification" data-bs-toggle="dropdown" data-bs-reference="parent" type="button"><i class="far fa-bell"></i></button>
                                        <ul class="dropdown-menu dropdown-menu-end mt-3" aria-labelledby="kb-notification">
                                            <li class="dropdown-item py-3">
                                                <a href="" class="text-decoration-none unread-notification av-font-i d-flex text-wrap">
                                                    <img src="./assets/svg/nav-toggle.svg" alt="" width="23px">
                                                    <span class="ms-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est id suspendisse ac nulla.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est id suspendisse ac nulla.</span>                                                    
                                                </a>                                                
                                            </li>
                                            <li class="ps-0"><hr class="dropdown-divider"></li>
                                            <li class="dropdown-item py-3">
                                                <a href="" class="text-decoration-none unread-notification av-font-i d-flex text-wrap">
                                                    <img src="./assets/svg/nav-toggle.svg" alt="" width="23px">
                                                    <span class="ms-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est id suspendisse ac nulla.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est id suspendisse ac nulla.</span>                                                    
                                                </a>                                                
                                            </li>
                                            <li class="ps-0"><hr class="dropdown-divider"></li>
                                            <li class="dropdown-item py-3">
                                                <a href="" class="text-decoration-none unread-notification av-font-i d-flex text-wrap">
                                                    <img src="./assets/svg/nav-toggle.svg" alt="" width="23px">
                                                    <span class="ms-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est id suspendisse ac nulla.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est id suspendisse ac nulla.</span>                                                    
                                                </a>                                                
                                            </li>
                                            <li class="ps-0"><hr class="dropdown-divider"></li>
                                            <li class="dropdown-item py-3">
                                                <a href="" class="text-decoration-none read-notification av-font-i d-flex text-wrap">
                                                    <img src="./assets/svg/notification-list-icon-gray.svg" alt="" width="23px">
                                                    <span class="ms-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est id suspendisse ac nulla.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est id suspendisse ac nulla.</span>                                                    
                                                </a>                                                
                                            </li>
                                            <li class="ps-0"><hr class="dropdown-divider"></li>
                                            <li class="dropdown-item py-3">
                                                <a href="" class="text-decoration-none read-notification av-font-i d-flex text-wrap">
                                                    <img src="./assets/svg/notification-list-icon-gray.svg" alt="" width="23px">
                                                    <span class="ms-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est id suspendisse ac nulla.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est id suspendisse ac nulla.</span>                                                    
                                                </a>                                                
                                            </li>
                                            <li class="ps-0"><hr class="dropdown-divider"></li>
                                            <li class="dropdown-item py-3">
                                                <a href="" class="text-decoration-none read-notification av-font-i d-flex text-wrap">
                                                    <img src="./assets/svg/notification-list-icon-gray.svg" alt="" width="23px">
                                                    <span class="ms-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est id suspendisse ac nulla.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est id suspendisse ac nulla.</span>                                                    
                                                </a>                                                
                                            </li>
                                            <li class="ps-0"><hr class="dropdown-divider"></li>
                                            <li class="text-center ps-0 py-2"><a href="" class="text-decoration-none fw-bold av-font-ii text-center av-font-color-iv all-notification">See All</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item ms-1">
                                        <button class="btn"><i class="fas fa-phone-alt"></i></button>
                                    </li>
                                    <li class="nav-item ms-1">
                                        <button class="btn"><i class="far fa-envelope"></i></button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Desktop Main Nav bar End-->
                        <!-- OffCanvas Mobile Nav Bar -->
                        <div class="col-12 d-lg-none">
                            <button class="btn float-end" type="button" data-bs-toggle="offcanvas" data-bs-target="#av-mob-main-nav" aria-controls="av-mob-main-nav">
                                <img src="./assets/svg/nav-toggle.svg" alt="navbar toggle"/>
                            </button>
                            <div class="offcanvas offcanvas-start" tabindex="-1" id="av-mob-main-nav">
                                <div class="offcanvas-body">
                                    <button type="button" class="btn-close float-end text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                    <ul class="list-unstyled outer-menu">
                                        <li class="dropdown">
                                            <a class="av-font-color-i text-decoration-none dropdown-toggle av-font-ii" href="#" id="about-dropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">About Us</a>
                                            <ul class="dropdown-menu" aria-labelledby="about-dropdown">
                                                <li><a class="dropdown-item av-font-ii" href="#">Vision & Mission</a></li>
                                                <li><a class="dropdown-item av-font-ii" href="#">KB Overview</a></li>
                                                <li><a class="dropdown-item av-font-ii" href="#">History of Kerala Bank</a></li>
                                                <li><a class="dropdown-item av-font-ii" href="#">Shriram Committee Report</a></li>
                                            </ul>
                                        </li>
                                        <li class="">
                                            <a class="av-font-color-i text-decoration-none av-font-ii" href="#">Careers</a>
                                        </li>
                                        <li class="">
                                            <a class="av-font-color-i text-decoration-none av-font-ii" href="#">Media Room</a>
                                        </li>
                                        <li class="">
                                            <a class="av-font-color-i text-decoration-none av-font-ii" href="#">FAQ</a>
                                        </li>
                                        <li class="">
                                            <a class="av-font-color-i text-decoration-none av-font-ii" href="#">Tenders</a>
                                        </li>
                                        <li class="">
                                            <a class="av-font-color-i text-decoration-none av-font-ii" href="">Contact Us</a>
                                        </li>
                                        <li class="">
                                            <a class="av-font-color-i text-decoration-none av-font-ii" href="#">Employee Corner</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- OffCanvas Mobile Nav Bar End-->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header End -->