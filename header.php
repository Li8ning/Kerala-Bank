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
    <link rel="shortcut icon" type="image/jpg" href="./assets/svg/KB-1-logo.svg"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/208eb39700.js" crossorigin="anonymous"></script>
    <title><?=$title;?></title>
</head>
<body class="av-font-noto-sans-jp">

    <!-- Header -->
    <header class="py-2 sticky-top">
        <div class="container-fluid container-xxl px-xl-4 px-xxl-0">
            <div class="row">
                <nav class="navbar navbar-expand-lg main-nav-menu">
                    <div class="col-3 col-sm-2 site-logo">
                        <a class="main-title navbar-brand me-auto me-lg-0" href="./">
                            <img src="./assets/svg/kblogo-web2-light.svg" alt="Kerala Bank" class="at-top light-img img-fluid">
                        </a>
                    </div>
                    <div class="col-8 col-sm-10 align-self-lg-start">
                        <!-- Top Bar -->
                        <div class="col-12">
                            <ul class="nav justify-content-end align-items-center av-font-i">
                                <li class="nav-item rounded-pill lang-btn">
                                    <a class="nav-link fw-bold" aria-current="page" href="#">മലയാളം</a>
                                </li>
                                <li class="nav-item av-font-func av-font-ii d-none d-lg-block">
                                    <button id="av-decrease-font" class="btn av-font-ii disabled text-decoration-none fw-bold" aria-current="page">A-</button>
                                    <button id="av-default-font" class="btn av-font-ii text-decoration-none fw-bold" aria-current="page">A</button>
                                    <button id="av-increase-font" class="btn av-font-ii text-decoration-none fw-bold" aria-current="page">A+</button>
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
                            <div class="collapse navbar-collapse" id="av-main-nav">
                                <ul class="navbar-nav ms-auto mt-3 mb-2 mb-lg-0 align-items-end align-items-lg-center">
                                    <li class="nav-item menu-links dropdown">
                                        <a class="nav-link dropdown-toggle av-font-ii" href="./about.php" id="about-dropdown" aria-expanded="false">About Us</a>
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
                                        <form class="d-flex justify-content-center pb-1">
                                            <div class="search">
                                                <input class="search_input" type="text">
                                                <a class="search_icon"><i class="fa fa-search"></i></a>
                                            </div>
                                        </form>
                                    </li>
                                    <li class="nav-item ms-2 notification dropdown pb-1">
                                        <button class="btn av-badge dropdown-toggle" aria-expanded="false" id="kb-notification" data-bs-toggle="dropdown" data-bs-reference="parent" type="button"><i class="far fa-bell"></i></button>
                                        <ul class="dropdown-menu dropdown-menu-end mt-3" aria-labelledby="kb-notification">
                                            <li class="dropdown-item py-3">
                                                <a href="" class="text-decoration-none unread-notification av-font-i d-flex text-wrap">
                                                    <svg width="54" height="25" viewBox="0 0 30 25" class="align-self-center" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g class="nav-toggle">
                                                            <path d="M7.91791 4.0186C7.91791 1.85187 6.16426 0.0904236 3.98778 0.0904236C1.81909 0.0904236 0.0693359 1.85381 0.0693359 4.0186C0.0693359 6.17949 1.82104 7.94289 3.98778 7.94289C6.16426 7.94289 7.91791 6.17949 7.91791 4.0186Z" fill="#800000"/>
                                                            <path d="M0.118164 14.151C0.118164 15.6942 1.36326 16.9374 2.90258 16.9374C4.44189 16.9374 5.69478 15.6942 5.69478 14.151C5.69673 12.6058 4.44384 11.3549 2.90258 11.3549C1.36326 11.3549 0.118164 12.6039 0.118164 14.151Z" fill="#800000"/>
                                                            <path d="M14.8823 0.14679C12.7175 0.14679 10.958 1.90824 10.958 4.07497C10.958 6.24756 12.7175 7.99926 14.8823 7.99926C17.0529 7.99926 18.8105 6.24561 18.8105 4.07497C18.8105 1.90824 17.0529 0.14679 14.8823 0.14679Z" fill="#800000"/>
                                                            <path d="M10.9036 11.3568C9.35839 11.3568 8.11914 12.6058 8.11914 14.1529C8.11914 15.6961 9.35839 16.9392 10.9036 16.9392C12.4507 16.9392 13.6919 15.6961 13.6919 14.1529C13.6919 12.6058 12.4507 11.3568 10.9036 11.3568Z" fill="#800000"/>
                                                            <path d="M21.8193 4.07497C21.8193 6.24756 23.5808 7.99926 25.7436 7.99926C27.9182 7.99926 29.6757 6.24561 29.6757 4.07497C29.6738 1.90824 27.9182 0.14679 25.7436 0.14679C23.5808 0.14679 21.8193 1.90824 21.8193 4.07497Z" fill="#800000"/>
                                                            <path d="M18.9035 11.3568C17.3642 11.3568 16.1055 12.6058 16.1055 14.1529C16.1055 15.6961 17.3642 16.9392 18.9035 16.9392C20.4467 16.9392 21.6977 15.6961 21.6977 14.1529C21.6977 12.6058 20.4487 11.3568 18.9035 11.3568Z" fill="#800000"/>
                                                            <path d="M24.0938 14.151C24.0938 15.6942 25.3408 16.9374 26.8782 16.9374C28.4253 16.9374 29.6762 15.6942 29.6762 14.151C29.6762 12.6058 28.4253 11.3549 26.8782 11.3549C25.3408 11.3549 24.0938 12.6039 24.0938 14.151Z" fill="#800000"/>
                                                            <path d="M0 22.364C0 23.7747 1.14377 24.9048 2.5428 24.9048C3.94572 24.9048 5.07975 23.7747 5.07975 22.364C5.07975 20.9649 3.94572 19.8231 2.5428 19.8231C1.14377 19.8231 0 20.9649 0 22.364Z" fill="#800000"/>
                                                            <path d="M8.1377 22.364C8.1377 23.7747 9.27173 24.9048 10.6805 24.9048C12.0717 24.9048 13.2116 23.7747 13.2116 22.364C13.2135 20.9649 12.0717 19.8231 10.6805 19.8231C9.27367 19.8231 8.1377 20.9649 8.1377 22.364Z" fill="#800000"/>
                                                            <path d="M16.2764 22.364C16.2764 23.7747 17.4201 24.9048 18.8075 24.9048C20.2123 24.9048 21.3522 23.7747 21.3522 22.364C21.3522 20.9649 20.2123 19.8231 18.8075 19.8231C17.4182 19.8231 16.2764 20.9649 16.2764 22.364Z" fill="#800000"/>
                                                            <path d="M24.4043 22.364C24.4043 23.7747 25.5383 24.9048 26.9413 24.9048C28.3461 24.9048 29.4724 23.7747 29.4724 22.364C29.4724 20.9649 28.3461 19.8231 26.9413 19.8231C25.5383 19.8231 24.4043 20.9649 24.4043 22.364Z" fill="#800000"/>
                                                        </g>
                                                    </svg>
                                                    <span class="ms-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est id suspendisse ac nulla.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est id suspendisse ac nulla.</span>                                                    
                                                </a>                                                
                                            </li>
                                            <li class="ps-0"><hr class="dropdown-divider"></li>
                                            <li class="dropdown-item py-3">
                                                <a href="" class="text-decoration-none unread-notification av-font-i d-flex text-wrap">
                                                    <svg width="54" height="25" viewBox="0 0 30 25" class="align-self-center" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g class="nav-toggle">
                                                            <path d="M7.91791 4.0186C7.91791 1.85187 6.16426 0.0904236 3.98778 0.0904236C1.81909 0.0904236 0.0693359 1.85381 0.0693359 4.0186C0.0693359 6.17949 1.82104 7.94289 3.98778 7.94289C6.16426 7.94289 7.91791 6.17949 7.91791 4.0186Z" fill="#800000"/>
                                                            <path d="M0.118164 14.151C0.118164 15.6942 1.36326 16.9374 2.90258 16.9374C4.44189 16.9374 5.69478 15.6942 5.69478 14.151C5.69673 12.6058 4.44384 11.3549 2.90258 11.3549C1.36326 11.3549 0.118164 12.6039 0.118164 14.151Z" fill="#800000"/>
                                                            <path d="M14.8823 0.14679C12.7175 0.14679 10.958 1.90824 10.958 4.07497C10.958 6.24756 12.7175 7.99926 14.8823 7.99926C17.0529 7.99926 18.8105 6.24561 18.8105 4.07497C18.8105 1.90824 17.0529 0.14679 14.8823 0.14679Z" fill="#800000"/>
                                                            <path d="M10.9036 11.3568C9.35839 11.3568 8.11914 12.6058 8.11914 14.1529C8.11914 15.6961 9.35839 16.9392 10.9036 16.9392C12.4507 16.9392 13.6919 15.6961 13.6919 14.1529C13.6919 12.6058 12.4507 11.3568 10.9036 11.3568Z" fill="#800000"/>
                                                            <path d="M21.8193 4.07497C21.8193 6.24756 23.5808 7.99926 25.7436 7.99926C27.9182 7.99926 29.6757 6.24561 29.6757 4.07497C29.6738 1.90824 27.9182 0.14679 25.7436 0.14679C23.5808 0.14679 21.8193 1.90824 21.8193 4.07497Z" fill="#800000"/>
                                                            <path d="M18.9035 11.3568C17.3642 11.3568 16.1055 12.6058 16.1055 14.1529C16.1055 15.6961 17.3642 16.9392 18.9035 16.9392C20.4467 16.9392 21.6977 15.6961 21.6977 14.1529C21.6977 12.6058 20.4487 11.3568 18.9035 11.3568Z" fill="#800000"/>
                                                            <path d="M24.0938 14.151C24.0938 15.6942 25.3408 16.9374 26.8782 16.9374C28.4253 16.9374 29.6762 15.6942 29.6762 14.151C29.6762 12.6058 28.4253 11.3549 26.8782 11.3549C25.3408 11.3549 24.0938 12.6039 24.0938 14.151Z" fill="#800000"/>
                                                            <path d="M0 22.364C0 23.7747 1.14377 24.9048 2.5428 24.9048C3.94572 24.9048 5.07975 23.7747 5.07975 22.364C5.07975 20.9649 3.94572 19.8231 2.5428 19.8231C1.14377 19.8231 0 20.9649 0 22.364Z" fill="#800000"/>
                                                            <path d="M8.1377 22.364C8.1377 23.7747 9.27173 24.9048 10.6805 24.9048C12.0717 24.9048 13.2116 23.7747 13.2116 22.364C13.2135 20.9649 12.0717 19.8231 10.6805 19.8231C9.27367 19.8231 8.1377 20.9649 8.1377 22.364Z" fill="#800000"/>
                                                            <path d="M16.2764 22.364C16.2764 23.7747 17.4201 24.9048 18.8075 24.9048C20.2123 24.9048 21.3522 23.7747 21.3522 22.364C21.3522 20.9649 20.2123 19.8231 18.8075 19.8231C17.4182 19.8231 16.2764 20.9649 16.2764 22.364Z" fill="#800000"/>
                                                            <path d="M24.4043 22.364C24.4043 23.7747 25.5383 24.9048 26.9413 24.9048C28.3461 24.9048 29.4724 23.7747 29.4724 22.364C29.4724 20.9649 28.3461 19.8231 26.9413 19.8231C25.5383 19.8231 24.4043 20.9649 24.4043 22.364Z" fill="#800000"/>
                                                        </g>
                                                    </svg>
                                                    <span class="ms-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est id suspendisse ac nulla.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est id suspendisse ac nulla.</span>                                                    
                                                </a>                                                
                                            </li>
                                            <li class="ps-0"><hr class="dropdown-divider"></li>
                                            <li class="dropdown-item py-3">
                                                <a href="" class="text-decoration-none unread-notification av-font-i d-flex text-wrap">
                                                    <svg width="54" height="25" viewBox="0 0 30 25" class="align-self-center" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g class="nav-toggle">
                                                            <path d="M7.91791 4.0186C7.91791 1.85187 6.16426 0.0904236 3.98778 0.0904236C1.81909 0.0904236 0.0693359 1.85381 0.0693359 4.0186C0.0693359 6.17949 1.82104 7.94289 3.98778 7.94289C6.16426 7.94289 7.91791 6.17949 7.91791 4.0186Z" fill="#800000"/>
                                                            <path d="M0.118164 14.151C0.118164 15.6942 1.36326 16.9374 2.90258 16.9374C4.44189 16.9374 5.69478 15.6942 5.69478 14.151C5.69673 12.6058 4.44384 11.3549 2.90258 11.3549C1.36326 11.3549 0.118164 12.6039 0.118164 14.151Z" fill="#800000"/>
                                                            <path d="M14.8823 0.14679C12.7175 0.14679 10.958 1.90824 10.958 4.07497C10.958 6.24756 12.7175 7.99926 14.8823 7.99926C17.0529 7.99926 18.8105 6.24561 18.8105 4.07497C18.8105 1.90824 17.0529 0.14679 14.8823 0.14679Z" fill="#800000"/>
                                                            <path d="M10.9036 11.3568C9.35839 11.3568 8.11914 12.6058 8.11914 14.1529C8.11914 15.6961 9.35839 16.9392 10.9036 16.9392C12.4507 16.9392 13.6919 15.6961 13.6919 14.1529C13.6919 12.6058 12.4507 11.3568 10.9036 11.3568Z" fill="#800000"/>
                                                            <path d="M21.8193 4.07497C21.8193 6.24756 23.5808 7.99926 25.7436 7.99926C27.9182 7.99926 29.6757 6.24561 29.6757 4.07497C29.6738 1.90824 27.9182 0.14679 25.7436 0.14679C23.5808 0.14679 21.8193 1.90824 21.8193 4.07497Z" fill="#800000"/>
                                                            <path d="M18.9035 11.3568C17.3642 11.3568 16.1055 12.6058 16.1055 14.1529C16.1055 15.6961 17.3642 16.9392 18.9035 16.9392C20.4467 16.9392 21.6977 15.6961 21.6977 14.1529C21.6977 12.6058 20.4487 11.3568 18.9035 11.3568Z" fill="#800000"/>
                                                            <path d="M24.0938 14.151C24.0938 15.6942 25.3408 16.9374 26.8782 16.9374C28.4253 16.9374 29.6762 15.6942 29.6762 14.151C29.6762 12.6058 28.4253 11.3549 26.8782 11.3549C25.3408 11.3549 24.0938 12.6039 24.0938 14.151Z" fill="#800000"/>
                                                            <path d="M0 22.364C0 23.7747 1.14377 24.9048 2.5428 24.9048C3.94572 24.9048 5.07975 23.7747 5.07975 22.364C5.07975 20.9649 3.94572 19.8231 2.5428 19.8231C1.14377 19.8231 0 20.9649 0 22.364Z" fill="#800000"/>
                                                            <path d="M8.1377 22.364C8.1377 23.7747 9.27173 24.9048 10.6805 24.9048C12.0717 24.9048 13.2116 23.7747 13.2116 22.364C13.2135 20.9649 12.0717 19.8231 10.6805 19.8231C9.27367 19.8231 8.1377 20.9649 8.1377 22.364Z" fill="#800000"/>
                                                            <path d="M16.2764 22.364C16.2764 23.7747 17.4201 24.9048 18.8075 24.9048C20.2123 24.9048 21.3522 23.7747 21.3522 22.364C21.3522 20.9649 20.2123 19.8231 18.8075 19.8231C17.4182 19.8231 16.2764 20.9649 16.2764 22.364Z" fill="#800000"/>
                                                            <path d="M24.4043 22.364C24.4043 23.7747 25.5383 24.9048 26.9413 24.9048C28.3461 24.9048 29.4724 23.7747 29.4724 22.364C29.4724 20.9649 28.3461 19.8231 26.9413 19.8231C25.5383 19.8231 24.4043 20.9649 24.4043 22.364Z" fill="#800000"/>
                                                        </g>
                                                    </svg>
                                                    <span class="ms-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est id suspendisse ac nulla.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est id suspendisse ac nulla.</span>                                                    
                                                </a>                                                
                                            </li>
                                            <li class="ps-0"><hr class="dropdown-divider"></li>
                                            <li class="dropdown-item py-3">
                                                <a href="" class="text-decoration-none read-notification av-font-i d-flex text-wrap">
                                                    <svg width="54" height="25" viewBox="0 0 30 25" class="align-self-center" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g class="nav-toggle-gray">
                                                            <path d="M7.91791 4.0186C7.91791 1.85187 6.16426 0.0904236 3.98778 0.0904236C1.81909 0.0904236 0.0693359 1.85381 0.0693359 4.0186C0.0693359 6.17949 1.82104 7.94289 3.98778 7.94289C6.16426 7.94289 7.91791 6.17949 7.91791 4.0186Z" fill="#9F9F9F"/>
                                                            <path d="M0.118164 14.151C0.118164 15.6942 1.36326 16.9374 2.90258 16.9374C4.44189 16.9374 5.69478 15.6942 5.69478 14.151C5.69673 12.6058 4.44384 11.3549 2.90258 11.3549C1.36326 11.3549 0.118164 12.6039 0.118164 14.151Z" fill="#9F9F9F"/>
                                                            <path d="M14.8823 0.14679C12.7175 0.14679 10.958 1.90824 10.958 4.07497C10.958 6.24756 12.7175 7.99926 14.8823 7.99926C17.0529 7.99926 18.8105 6.24561 18.8105 4.07497C18.8105 1.90824 17.0529 0.14679 14.8823 0.14679Z" fill="#9F9F9F"/>
                                                            <path d="M10.9036 11.3568C9.35839 11.3568 8.11914 12.6058 8.11914 14.1529C8.11914 15.6961 9.35839 16.9392 10.9036 16.9392C12.4507 16.9392 13.6919 15.6961 13.6919 14.1529C13.6919 12.6058 12.4507 11.3568 10.9036 11.3568Z" fill="#9F9F9F"/>
                                                            <path d="M21.8193 4.07497C21.8193 6.24756 23.5808 7.99926 25.7436 7.99926C27.9182 7.99926 29.6757 6.24561 29.6757 4.07497C29.6738 1.90824 27.9182 0.14679 25.7436 0.14679C23.5808 0.14679 21.8193 1.90824 21.8193 4.07497Z" fill="#9F9F9F"/>
                                                            <path d="M18.9035 11.3568C17.3642 11.3568 16.1055 12.6058 16.1055 14.1529C16.1055 15.6961 17.3642 16.9392 18.9035 16.9392C20.4467 16.9392 21.6977 15.6961 21.6977 14.1529C21.6977 12.6058 20.4487 11.3568 18.9035 11.3568Z" fill="#9F9F9F"/>
                                                            <path d="M24.0938 14.151C24.0938 15.6942 25.3408 16.9374 26.8782 16.9374C28.4253 16.9374 29.6762 15.6942 29.6762 14.151C29.6762 12.6058 28.4253 11.3549 26.8782 11.3549C25.3408 11.3549 24.0938 12.6039 24.0938 14.151Z" fill="#9F9F9F"/>
                                                            <path d="M0 22.364C0 23.7747 1.14377 24.9048 2.5428 24.9048C3.94572 24.9048 5.07975 23.7747 5.07975 22.364C5.07975 20.9649 3.94572 19.8231 2.5428 19.8231C1.14377 19.8231 0 20.9649 0 22.364Z" fill="#9F9F9F"/>
                                                            <path d="M8.1377 22.364C8.1377 23.7747 9.27173 24.9048 10.6805 24.9048C12.0717 24.9048 13.2116 23.7747 13.2116 22.364C13.2135 20.9649 12.0717 19.8231 10.6805 19.8231C9.27367 19.8231 8.1377 20.9649 8.1377 22.364Z" fill="#9F9F9F"/>
                                                            <path d="M16.2764 22.364C16.2764 23.7747 17.4201 24.9048 18.8075 24.9048C20.2123 24.9048 21.3522 23.7747 21.3522 22.364C21.3522 20.9649 20.2123 19.8231 18.8075 19.8231C17.4182 19.8231 16.2764 20.9649 16.2764 22.364Z" fill="#9F9F9F"/>
                                                            <path d="M24.4043 22.364C24.4043 23.7747 25.5383 24.9048 26.9413 24.9048C28.3461 24.9048 29.4724 23.7747 29.4724 22.364C29.4724 20.9649 28.3461 19.8231 26.9413 19.8231C25.5383 19.8231 24.4043 20.9649 24.4043 22.364Z" fill="#9F9F9F"/>
                                                        </g>
                                                    </svg>
                                                    <span class="ms-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est id suspendisse ac nulla.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est id suspendisse ac nulla.</span>                                                    
                                                </a>                                                
                                            </li>
                                            <li class="ps-0"><hr class="dropdown-divider"></li>
                                            <li class="dropdown-item py-3">
                                                <a href="" class="text-decoration-none read-notification av-font-i d-flex text-wrap">
                                                    <svg width="54" height="25" viewBox="0 0 30 25" class="align-self-center" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g class="nav-toggle-gray">
                                                            <path d="M7.91791 4.0186C7.91791 1.85187 6.16426 0.0904236 3.98778 0.0904236C1.81909 0.0904236 0.0693359 1.85381 0.0693359 4.0186C0.0693359 6.17949 1.82104 7.94289 3.98778 7.94289C6.16426 7.94289 7.91791 6.17949 7.91791 4.0186Z" fill="#9F9F9F"/>
                                                            <path d="M0.118164 14.151C0.118164 15.6942 1.36326 16.9374 2.90258 16.9374C4.44189 16.9374 5.69478 15.6942 5.69478 14.151C5.69673 12.6058 4.44384 11.3549 2.90258 11.3549C1.36326 11.3549 0.118164 12.6039 0.118164 14.151Z" fill="#9F9F9F"/>
                                                            <path d="M14.8823 0.14679C12.7175 0.14679 10.958 1.90824 10.958 4.07497C10.958 6.24756 12.7175 7.99926 14.8823 7.99926C17.0529 7.99926 18.8105 6.24561 18.8105 4.07497C18.8105 1.90824 17.0529 0.14679 14.8823 0.14679Z" fill="#9F9F9F"/>
                                                            <path d="M10.9036 11.3568C9.35839 11.3568 8.11914 12.6058 8.11914 14.1529C8.11914 15.6961 9.35839 16.9392 10.9036 16.9392C12.4507 16.9392 13.6919 15.6961 13.6919 14.1529C13.6919 12.6058 12.4507 11.3568 10.9036 11.3568Z" fill="#9F9F9F"/>
                                                            <path d="M21.8193 4.07497C21.8193 6.24756 23.5808 7.99926 25.7436 7.99926C27.9182 7.99926 29.6757 6.24561 29.6757 4.07497C29.6738 1.90824 27.9182 0.14679 25.7436 0.14679C23.5808 0.14679 21.8193 1.90824 21.8193 4.07497Z" fill="#9F9F9F"/>
                                                            <path d="M18.9035 11.3568C17.3642 11.3568 16.1055 12.6058 16.1055 14.1529C16.1055 15.6961 17.3642 16.9392 18.9035 16.9392C20.4467 16.9392 21.6977 15.6961 21.6977 14.1529C21.6977 12.6058 20.4487 11.3568 18.9035 11.3568Z" fill="#9F9F9F"/>
                                                            <path d="M24.0938 14.151C24.0938 15.6942 25.3408 16.9374 26.8782 16.9374C28.4253 16.9374 29.6762 15.6942 29.6762 14.151C29.6762 12.6058 28.4253 11.3549 26.8782 11.3549C25.3408 11.3549 24.0938 12.6039 24.0938 14.151Z" fill="#9F9F9F"/>
                                                            <path d="M0 22.364C0 23.7747 1.14377 24.9048 2.5428 24.9048C3.94572 24.9048 5.07975 23.7747 5.07975 22.364C5.07975 20.9649 3.94572 19.8231 2.5428 19.8231C1.14377 19.8231 0 20.9649 0 22.364Z" fill="#9F9F9F"/>
                                                            <path d="M8.1377 22.364C8.1377 23.7747 9.27173 24.9048 10.6805 24.9048C12.0717 24.9048 13.2116 23.7747 13.2116 22.364C13.2135 20.9649 12.0717 19.8231 10.6805 19.8231C9.27367 19.8231 8.1377 20.9649 8.1377 22.364Z" fill="#9F9F9F"/>
                                                            <path d="M16.2764 22.364C16.2764 23.7747 17.4201 24.9048 18.8075 24.9048C20.2123 24.9048 21.3522 23.7747 21.3522 22.364C21.3522 20.9649 20.2123 19.8231 18.8075 19.8231C17.4182 19.8231 16.2764 20.9649 16.2764 22.364Z" fill="#9F9F9F"/>
                                                            <path d="M24.4043 22.364C24.4043 23.7747 25.5383 24.9048 26.9413 24.9048C28.3461 24.9048 29.4724 23.7747 29.4724 22.364C29.4724 20.9649 28.3461 19.8231 26.9413 19.8231C25.5383 19.8231 24.4043 20.9649 24.4043 22.364Z" fill="#9F9F9F"/>
                                                        </g>
                                                    </svg>
                                                    <span class="ms-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est id suspendisse ac nulla.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est id suspendisse ac nulla.</span>                                                    
                                                </a>                                                
                                            </li>
                                            <li class="ps-0"><hr class="dropdown-divider"></li>
                                            <li class="dropdown-item py-3">
                                                <a href="" class="text-decoration-none read-notification av-font-i d-flex text-wrap">
                                                    <svg width="54" height="25" viewBox="0 0 30 25" class="align-self-center" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g class="nav-toggle-gray">
                                                            <path d="M7.91791 4.0186C7.91791 1.85187 6.16426 0.0904236 3.98778 0.0904236C1.81909 0.0904236 0.0693359 1.85381 0.0693359 4.0186C0.0693359 6.17949 1.82104 7.94289 3.98778 7.94289C6.16426 7.94289 7.91791 6.17949 7.91791 4.0186Z" fill="#9F9F9F"/>
                                                            <path d="M0.118164 14.151C0.118164 15.6942 1.36326 16.9374 2.90258 16.9374C4.44189 16.9374 5.69478 15.6942 5.69478 14.151C5.69673 12.6058 4.44384 11.3549 2.90258 11.3549C1.36326 11.3549 0.118164 12.6039 0.118164 14.151Z" fill="#9F9F9F"/>
                                                            <path d="M14.8823 0.14679C12.7175 0.14679 10.958 1.90824 10.958 4.07497C10.958 6.24756 12.7175 7.99926 14.8823 7.99926C17.0529 7.99926 18.8105 6.24561 18.8105 4.07497C18.8105 1.90824 17.0529 0.14679 14.8823 0.14679Z" fill="#9F9F9F"/>
                                                            <path d="M10.9036 11.3568C9.35839 11.3568 8.11914 12.6058 8.11914 14.1529C8.11914 15.6961 9.35839 16.9392 10.9036 16.9392C12.4507 16.9392 13.6919 15.6961 13.6919 14.1529C13.6919 12.6058 12.4507 11.3568 10.9036 11.3568Z" fill="#9F9F9F"/>
                                                            <path d="M21.8193 4.07497C21.8193 6.24756 23.5808 7.99926 25.7436 7.99926C27.9182 7.99926 29.6757 6.24561 29.6757 4.07497C29.6738 1.90824 27.9182 0.14679 25.7436 0.14679C23.5808 0.14679 21.8193 1.90824 21.8193 4.07497Z" fill="#9F9F9F"/>
                                                            <path d="M18.9035 11.3568C17.3642 11.3568 16.1055 12.6058 16.1055 14.1529C16.1055 15.6961 17.3642 16.9392 18.9035 16.9392C20.4467 16.9392 21.6977 15.6961 21.6977 14.1529C21.6977 12.6058 20.4487 11.3568 18.9035 11.3568Z" fill="#9F9F9F"/>
                                                            <path d="M24.0938 14.151C24.0938 15.6942 25.3408 16.9374 26.8782 16.9374C28.4253 16.9374 29.6762 15.6942 29.6762 14.151C29.6762 12.6058 28.4253 11.3549 26.8782 11.3549C25.3408 11.3549 24.0938 12.6039 24.0938 14.151Z" fill="#9F9F9F"/>
                                                            <path d="M0 22.364C0 23.7747 1.14377 24.9048 2.5428 24.9048C3.94572 24.9048 5.07975 23.7747 5.07975 22.364C5.07975 20.9649 3.94572 19.8231 2.5428 19.8231C1.14377 19.8231 0 20.9649 0 22.364Z" fill="#9F9F9F"/>
                                                            <path d="M8.1377 22.364C8.1377 23.7747 9.27173 24.9048 10.6805 24.9048C12.0717 24.9048 13.2116 23.7747 13.2116 22.364C13.2135 20.9649 12.0717 19.8231 10.6805 19.8231C9.27367 19.8231 8.1377 20.9649 8.1377 22.364Z" fill="#9F9F9F"/>
                                                            <path d="M16.2764 22.364C16.2764 23.7747 17.4201 24.9048 18.8075 24.9048C20.2123 24.9048 21.3522 23.7747 21.3522 22.364C21.3522 20.9649 20.2123 19.8231 18.8075 19.8231C17.4182 19.8231 16.2764 20.9649 16.2764 22.364Z" fill="#9F9F9F"/>
                                                            <path d="M24.4043 22.364C24.4043 23.7747 25.5383 24.9048 26.9413 24.9048C28.3461 24.9048 29.4724 23.7747 29.4724 22.364C29.4724 20.9649 28.3461 19.8231 26.9413 19.8231C25.5383 19.8231 24.4043 20.9649 24.4043 22.364Z" fill="#9F9F9F"/>
                                                        </g>
                                                    </svg>
                                                    <span class="ms-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est id suspendisse ac nulla.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Est id suspendisse ac nulla.</span>                                                    
                                                </a>                                                
                                            </li>
                                            <li class="ps-0"><hr class="dropdown-divider"></li>
                                            <li class="text-center ps-0 py-2"><a href="" class="text-decoration-none fw-bold av-font-ii text-center all-notification">See All</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item ms-1 pb-1">
                                        <button class="btn"><i class="fas fa-phone-alt"></i></button>
                                    </li>
                                    <li class="nav-item ms-1 pb-1">
                                        <button class="btn"><i class="far fa-envelope"></i></button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Desktop Main Nav bar End-->
                        <!-- OffCanvas Mobile Nav Bar -->
                        <div class="col-12 mt-3 mob-nav d-flex align-items-center justify-content-end d-lg-none">
                            <form class="d-flex justify-content-center me-1 me-sm-3">
                                <div class="search">
                                    <input class="search_input" type="text">
                                    <a class="search_icon"><i class="fa fa-search"></i></a>
                                </div>
                            </form>
                            <a class="btn av-badge mob-noti"><i class="far fa-bell"></i></a>                       
                            <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#av-mob-main-nav" aria-controls="av-mob-main-nav">
                                <svg width="30" height="25" viewBox="0 0 30 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g class="nav-toggle">
                                        <path d="M7.91791 4.0186C7.91791 1.85187 6.16426 0.0904236 3.98778 0.0904236C1.81909 0.0904236 0.0693359 1.85381 0.0693359 4.0186C0.0693359 6.17949 1.82104 7.94289 3.98778 7.94289C6.16426 7.94289 7.91791 6.17949 7.91791 4.0186Z" fill="#800000"/>
                                        <path d="M0.118164 14.151C0.118164 15.6942 1.36326 16.9374 2.90258 16.9374C4.44189 16.9374 5.69478 15.6942 5.69478 14.151C5.69673 12.6058 4.44384 11.3549 2.90258 11.3549C1.36326 11.3549 0.118164 12.6039 0.118164 14.151Z" fill="#800000"/>
                                        <path d="M14.8823 0.14679C12.7175 0.14679 10.958 1.90824 10.958 4.07497C10.958 6.24756 12.7175 7.99926 14.8823 7.99926C17.0529 7.99926 18.8105 6.24561 18.8105 4.07497C18.8105 1.90824 17.0529 0.14679 14.8823 0.14679Z" fill="#800000"/>
                                        <path d="M10.9036 11.3568C9.35839 11.3568 8.11914 12.6058 8.11914 14.1529C8.11914 15.6961 9.35839 16.9392 10.9036 16.9392C12.4507 16.9392 13.6919 15.6961 13.6919 14.1529C13.6919 12.6058 12.4507 11.3568 10.9036 11.3568Z" fill="#800000"/>
                                        <path d="M21.8193 4.07497C21.8193 6.24756 23.5808 7.99926 25.7436 7.99926C27.9182 7.99926 29.6757 6.24561 29.6757 4.07497C29.6738 1.90824 27.9182 0.14679 25.7436 0.14679C23.5808 0.14679 21.8193 1.90824 21.8193 4.07497Z" fill="#800000"/>
                                        <path d="M18.9035 11.3568C17.3642 11.3568 16.1055 12.6058 16.1055 14.1529C16.1055 15.6961 17.3642 16.9392 18.9035 16.9392C20.4467 16.9392 21.6977 15.6961 21.6977 14.1529C21.6977 12.6058 20.4487 11.3568 18.9035 11.3568Z" fill="#800000"/>
                                        <path d="M24.0938 14.151C24.0938 15.6942 25.3408 16.9374 26.8782 16.9374C28.4253 16.9374 29.6762 15.6942 29.6762 14.151C29.6762 12.6058 28.4253 11.3549 26.8782 11.3549C25.3408 11.3549 24.0938 12.6039 24.0938 14.151Z" fill="#800000"/>
                                        <path d="M0 22.364C0 23.7747 1.14377 24.9048 2.5428 24.9048C3.94572 24.9048 5.07975 23.7747 5.07975 22.364C5.07975 20.9649 3.94572 19.8231 2.5428 19.8231C1.14377 19.8231 0 20.9649 0 22.364Z" fill="#800000"/>
                                        <path d="M8.1377 22.364C8.1377 23.7747 9.27173 24.9048 10.6805 24.9048C12.0717 24.9048 13.2116 23.7747 13.2116 22.364C13.2135 20.9649 12.0717 19.8231 10.6805 19.8231C9.27367 19.8231 8.1377 20.9649 8.1377 22.364Z" fill="#800000"/>
                                        <path d="M16.2764 22.364C16.2764 23.7747 17.4201 24.9048 18.8075 24.9048C20.2123 24.9048 21.3522 23.7747 21.3522 22.364C21.3522 20.9649 20.2123 19.8231 18.8075 19.8231C17.4182 19.8231 16.2764 20.9649 16.2764 22.364Z" fill="#800000"/>
                                        <path d="M24.4043 22.364C24.4043 23.7747 25.5383 24.9048 26.9413 24.9048C28.3461 24.9048 29.4724 23.7747 29.4724 22.364C29.4724 20.9649 28.3461 19.8231 26.9413 19.8231C25.5383 19.8231 24.4043 20.9649 24.4043 22.364Z" fill="#800000"/>
                                    </g>
                                </svg>
                            </button>
                            <div class="offcanvas offcanvas-end" tabindex="-1" id="av-mob-main-nav">
                                <div class="offcanvas-header pt-4">
                                    <button type="button" class="btn rounded-circle text-reset ms-auto" data-bs-dismiss="offcanvas"><i class="fas fa-times"></i></button>
                                </div>
                                <div class="offcanvas-body p-0 pt-4">
                                    <div class="accordion" id="kb-accordion-mob">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="menu-heading-1">
                                            <a href="./about.php" class="accordion-button text-decoration-none av-font-ii collapsed" data-bs-target="#menu-collapse-1">
                                               About Us
                                            </a>
                                            </h2>
                                            <div id="menu-collapse-1" class="accordion-collapse collapse" aria-labelledby="menu-heading-1" data-bs-parent="#kb-accordion-mob">
                                                <div class="accordion-body">
                                                    <ul class="list-unstyled ms-3 mb-0">
                                                        <li class="pt-2"><a href="" class="av-font-ii text-decoration-none">Vision & Mission</a></li>
                                                        <li class="pt-2"><a href="" class="av-font-ii text-decoration-none">KB Overview</a></li>
                                                        <li class="pt-2"><a href="" class="av-font-ii text-decoration-none">History of Kerala Bank</a></li>
                                                        <li class="pt-2"><a href="" class="av-font-ii text-decoration-none">Shriram Committee Report</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="menu-heading-2">
                                                <a href="./" class="accordion-button text-decoration-none av-font-ii collapsed" data-bs-target="#menu-collapse-2">
                                                    Careers
                                                </a>
                                            </h2>
                                            <div id="menu-collapse-2" class="accordion-collapse collapse" aria-labelledby="menu-heading-2" data-bs-parent="#kb-accordion-mob">
                                                <!-- Menu items go inside below element -->
                                            <!-- <div class="accordion-body"></div> -->
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="menu-heading-3">
                                                <a href="./" class="accordion-button text-decoration-none av-font-ii collapsed" data-bs-target="#menu-collapse-3">
                                                Media Room
                                                </a>
                                            </h2>
                                            <div id="menu-collapse-3" class="accordion-collapse collapse" aria-labelledby="menu-heading-3" data-bs-parent="#kb-accordion-mob">
                                            <!-- <div class="accordion-body"></div> -->
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="menu-heading-4">
                                            <a href="./" class="accordion-button text-decoration-none av-font-ii collapsed" data-bs-target="#menu-collapse-4">
                                               FAQ
                                            </a>
                                            </h2>
                                            <div id="menu-collapse-4" class="accordion-collapse collapse" aria-labelledby="menu-heading-4" data-bs-parent="#kb-accordion-mob">
                                            <!-- <div class="accordion-body"></div> -->
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="menu-heading-5">
                                            <a href="./" class="accordion-button text-decoration-none av-font-ii collapsed" data-bs-target="#menu-collapse-5">
                                               Tenders
                                            </a>
                                            </h2>
                                            <div id="menu-collapse-5" class="accordion-collapse collapse" aria-labelledby="menu-heading-5" data-bs-parent="#kb-accordion-mob">
                                            <!-- <div class="accordion-body"></div> -->
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="menu-heading-6">
                                            <a href="./" class="accordion-button text-decoration-none av-font-ii collapsed" data-bs-target="#menu-collapse-6">
                                               Contact Us
                                            </a>
                                            </h2>
                                            <div id="menu-collapse-6" class="accordion-collapse collapse" aria-labelledby="menu-heading-6" data-bs-parent="#kb-accordion-mob">
                                            <!-- <div class="accordion-body"></div> -->
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="menu-heading-7">
                                            <a href="./" class="accordion-button text-decoration-none av-font-ii collapsed" data-bs-target="#menu-collapse-7">
                                               Employee Corner
                                            </a>
                                            </h2>
                                            <div id="menu-collapse-7" class="accordion-collapse collapse" aria-labelledby="menu-heading-7" data-bs-parent="#kb-accordion-mob">
                                            <!-- <div class="accordion-body"></div> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="offcanvas-body-bottom ms-3 mt-3">
                                        <div class="col-12 contact-col mb-4">
                                            <button class="btn"><i class="fas fa-phone-alt"></i></button>
                                            <button class="btn"><i class="far fa-envelope"></i></button>
                                        </div>
                                        <div class="col-12 social-col mb-4">
                                            <a class="btn social-btn me-1"><img src="./assets/svg/fb.svg" alt=""></a>
                                            <a class="btn social-btn me-1"><img src="./assets/svg/instagram.svg" alt=""></a>
                                            <a class="btn social-btn me-1"><img src="./assets/svg/twitter.svg" alt=""></a>
                                            <a class="btn social-btn me-1"><img src="./assets/svg/youtube.svg" alt=""></a>
                                            <a class="btn social-btn"><img src="./assets/svg/linkedin.svg" alt=""></a>
                                        </div>
                                    </div>
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