<?php
$title = 'About Us';
include('header.php');?>

<div class="about-us-page">
    <!-- Breadcrumb -->
    <section class="container-fluid container-xxl px-xl-4 px-xxl-0 mt-4 av-font-noto-sans-jp breadcrumb-section av-font-i">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./" class="text-decoration-none">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">About Us</li>
            </ol>
        </nav>
    </section>
    <!-- Breadcrumb End-->

    <!-- Hero Section -->
    <section class="container-fluid container-xxl px-xl-4 px-xxl-0 hero-section mt-4">
        <div class="row align-items-center">
            <div id="kb-hero-slider" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#kb-hero-slider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#kb-hero-slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#kb-hero-slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="">
                            <img src="./assets/img/slider-1.jpg" class="d-block w-100" alt="">
                        </a>                            
                    </div>
                    <div class="carousel-item">
                        <a href="">
                            <img src="./assets/img/slider-1.jpg" class="d-block w-100" alt="">
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="">
                            <img src="./assets/img/slider-1.jpg" class="d-block w-100" alt="">
                        </a>
                    </div>
                </div>
                <button class="carousel-control-prev slider-controls" type="button" data-bs-target="#kb-hero-slider" data-bs-slide="prev">
                    <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg" class="carousel-control-prev-icon" aria-hidden="true">
                        <path d="M22.9999 42.1668C33.5854 42.1668 42.1666 33.5856 42.1666 23.0002C42.1666 12.4147 33.5854 3.8335 22.9999 3.8335C12.4145 3.8335 3.83325 12.4147 3.83325 23.0002C3.83325 33.5856 12.4145 42.1668 22.9999 42.1668Z" fill="#FF0000"/>
                        <path d="M22.9999 15.3335L15.3333 23.0002L22.9999 30.6668" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M30.6666 23H15.3333" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next slider-controls" type="button" data-bs-target="#kb-hero-slider" data-bs-slide="next">
                    <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg" class="carousel-control-prev-icon" aria-hidden="true">
                        <path d="M23 3.83317C12.4145 3.83317 3.83329 12.4144 3.83329 22.9998C3.83329 33.5853 12.4145 42.1665 23 42.1665C33.5854 42.1665 42.1666 33.5853 42.1666 22.9998C42.1666 12.4144 33.5854 3.83317 23 3.83317Z" fill="#FF0000"/>
                        <path d="M23 30.6665L30.6666 22.9998L23 15.3332" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M15.3333 23L30.6666 23" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Us Details -->
    <section class="about-us-details container-fluid container-xxl px-xl-4 px-xxl-0">
        <div class="row">
            <div class="col-12 col-lg-8 left-col">
                <h4 class="av-font-vii">About <span>Us</span></h4>
                <p class="av-font-ii mt-3">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Posuere scelerisque sed et elementum mattis neque commodo justo, imperdiet. Nunc amet, ut in neque, duis malesuada velit velit a. Bibendum est sed amet quisque mi, et in. Eget sed etiam nunc dui vitae euismod fermentum. Nullam faucibus a gravida proin. Massa ante ut arcu facilisis ipsum vitae ullamcorper vitae laoreet. In pulvinar pellentesque aliquet sit in in eget faucibus in.<br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Posuere scelerisque sed et elementum mattis neque commodo justo, imperdiet. Nunc amet, ut in neque, duis malesuada velit velit a. Bibendum est sed amet quisque mi, et in. Eget sed etiam nunc dui vitae euismod fermentum. Nullam faucibus a gravida proin. Massa ante ut arcu facilisis ipsum vitae ullamcorper vitae laoreet. In pulvinar pellentesque aliquet sit in in eget faucibus in.<br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Posuere scelerisque sed et elementum mattis neque commodo justo, imperdiet. Nunc amet, ut in neque, duis malesuada velit velit a. Bibendum est sed amet quisque mi, et in. Eget sed etiam nunc dui vitae euismod fermentum. Nullam faucibus a gravida proin. Massa ante ut arcu facilisis ipsum vitae ullamcorper vitae laoreet. In pulvinar pellentesque aliquet sit in in eget faucibus in.
                </p>
            </div>
            <div class="col-12 col-lg-4 right-col">
                <div class="sidebar">
                    <div class="row row-title av-font-iv justify-content-center py-3 m-auto">
                        Top Schemes
                    </div>
                    <div class="row pt-3 m-auto schemes">
                        <div class="col-4 align-self-center text-center p-0">
                            <a href="" class="scheme-img"><img src="./assets/img/schemes-1.jpg" alt="" class="img-fluid rounded-circle"></a>
                        </div>
                        <div class="col-8 align-self-center p-0">
                            <a href="" class="scheme-details text-decoration-none">
                                <h6 class="scheme-title m-0 av-font-iii">Home Loans</h6>
                                <span class="scheme-content av-font-ii">consectetur adipiscing elit. elit elit Euismod ut vulputate </span>
                            </a>
                        </div>           
                    </div>
                    <div class="row pt-3 m-auto schemes">
                        <div class="col-4 align-self-center text-center p-0">
                            <a href="" class="scheme-img"><img src="./assets/img/schemes-2.jpg" alt="" class="img-fluid rounded-circle"></a>
                        </div>
                        <div class="col-8 align-self-center p-0">
                            <a href="" class="scheme-details text-decoration-none">
                                <h6 class="scheme-title m-0 av-font-iii">Car Loans</h6>
                                <span class="scheme-content av-font-ii">consectetur adipiscing elit. Euismod ut vulputate </span>
                            </a>
                        </div>           
                    </div>
                    <div class="row pt-3 m-auto schemes">
                        <div class="col-4 align-self-center text-center p-0">
                            <a href="" class="scheme-img"><img src="./assets/img/schemes-3.jpg" alt="" class="img-fluid rounded-circle"></a>
                        </div>
                        <div class="col-8 align-self-center p-0">
                            <a href="" class="scheme-details text-decoration-none">
                                <h6 class="scheme-title m-0 av-font-iii">Agri Loans</h6>
                                <span class="scheme-content av-font-ii">consectetur adipiscing elit. Euismod ut vulputate </span>
                            </a>
                        </div>           
                    </div>
                    <div class="row pt-3 m-auto all-scheme-link">
                        <div class="col text-center">
                            <a href="" class="btn av-font-ii fw-bold">See All Products</a>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Details End-->

    <!-- Loans Section -->
    <section class="container-fluid container-xxl px-xl-4 px-xxl-0 loan-section">
        <div class="row justify-content-center justify-content-md-between">
            <div class="col-lg-5 d-none d-lg-block newsletter-col text-center">
                <svg width="83" height="44" viewBox="0 0 83 44" fill="none" class="img-fluid mb-2 mt-3" xmlns="http://www.w3.org/2000/svg">
                    <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="39" y="0" width="44" height="43">
                        <rect x="50.0093" y="0.000244141" width="33.643" height="33.643" transform="rotate(18.0198 50.0093 0.000244141)" fill="white"/>
                    </mask>
                    <g mask="url(#mask0)" id="env-1">
                        <path d="M74.9345 14.0057C76.4008 14.4827 77.2103 16.0727 76.7333 17.539L71.5296 33.5354C71.0526 35.0018 69.4626 35.8112 67.9963 35.3342L46.6677 28.396C45.2014 27.919 44.3919 26.329 44.8689 24.8627L50.0726 8.86626C50.5496 7.39993 52.1396 6.59047 53.6059 7.06747L74.9345 14.0057Z" stroke="#FFE5BF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M76.7334 17.5385L60.3676 22.5333L50.0728 8.86572" stroke="#FFE5BF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </g>
                    <mask id="mask1" mask-type="alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="44" height="44">
                        <rect y="12.9148" width="33.643" height="33.643" transform="rotate(-22.5739 0 12.9148)" fill="white"/>
                    </mask>
                    <g mask="url(#mask1)" id="env-2">
                        <path d="M28.0399 7.33105C29.4638 6.73913 31.113 7.41978 31.7049 8.84361L38.1623 24.3763C38.7542 25.8002 38.0736 27.4494 36.6497 28.0414L15.9394 36.6512C14.5156 37.2431 12.8664 36.5624 12.2744 35.1386L5.81707 19.6059C5.22515 18.182 5.9058 16.5328 7.32963 15.9409L28.0399 7.33105Z" stroke="#FFE5BF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M31.7048 8.8432L22.5276 23.2851L5.81689 19.6055" stroke="#FFE5BF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </g>
                    <mask id="mask2" mask-type="alpha" maskUnits="userSpaceOnUse" x="25" y="6" width="34" height="35">
                        <rect x="25.3013" y="6.60059" width="33.643" height="33.643" fill="white"/>
                    </mask>
                    <g mask="url(#mask2)" id="env-3">
                        <path d="M53.3363 12.2085C54.8783 12.2085 56.1399 13.4701 56.1399 15.0121V31.8336C56.1399 33.3756 54.8783 34.6372 53.3363 34.6372H30.9076C29.3657 34.6372 28.1041 33.3756 28.1041 31.8336V15.0121C28.1041 13.4701 29.3657 12.2085 30.9076 12.2085H53.3363Z" stroke="#FFE5BF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="#800000"/>
                        <path d="M56.1399 15.0115L42.122 24.824L28.1041 15.0115" stroke="#FFE5BF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </g>
                </svg>
                <p class="sub-title av-font-iv mb-1">Subscribe To Our Newsletter</p>
                <h4 class="av-font-vii col-title fw-bold mb-3">Stay Updated</h4>
                <form class="px-3">
                    <input type="email" class="form-control mb-3" id="kb-newsletter-field-desk" placeholder="Enter Your Email" value="demo@gmail.com">
                    <button type="submit" class="btn mb-3 px-5 fw-bold av-font-ii">Subscribe Now</button>
                </form>
            </div>
            <div class="col-12 col-md-6 col-lg-3 loan-col mb-4 mb-md-0 px-lg-0 agri-loan d-flex align-items-end">
                <div class="mb-3 px-3 w-100 text-center">
                    <h1 class="av-font-viii fw-bold text-start">
                        Agri Loans
                    </h1>
                    <a href="" class="btn px-4 text-decoration-none av-font-ii fw-bold">Apply Now</a>
                </div>                
            </div>
            <div class="col-12 col-md-6 col-lg-3 loan-col px-lg-0 vehicle-loan d-flex align-items-end">
                <div class="mb-3 px-3 w-100 text-center">
                    <h1 class="av-font-viii fw-bold text-start">
                        Vehicle Loans
                    </h1>
                    <a href="" class="btn px-4 text-decoration-none av-font-ii fw-bold">Apply Now</a>
                </div>                
            </div>
        </div>
    </section>
    <!-- Loans Section End-->

    <!-- Subscribe section for tab and below -->
    <div class="row d-lg-none loan-section w-100 mt-5 mx-0">
        <div class="col-12 newsletter-col text-center">
            <svg width="83" height="44" viewBox="0 0 83 44" fill="none" class="img-fluid mb-2 mt-3" xmlns="http://www.w3.org/2000/svg">
                <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="39" y="0" width="44" height="43">
                    <rect x="50.0093" y="0.000244141" width="33.643" height="33.643" transform="rotate(18.0198 50.0093 0.000244141)" fill="white"/>
                </mask>
                <g mask="url(#mask0)" id="env-1">
                    <path d="M74.9345 14.0057C76.4008 14.4827 77.2103 16.0727 76.7333 17.539L71.5296 33.5354C71.0526 35.0018 69.4626 35.8112 67.9963 35.3342L46.6677 28.396C45.2014 27.919 44.3919 26.329 44.8689 24.8627L50.0726 8.86626C50.5496 7.39993 52.1396 6.59047 53.6059 7.06747L74.9345 14.0057Z" stroke="#FFE5BF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M76.7334 17.5385L60.3676 22.5333L50.0728 8.86572" stroke="#FFE5BF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </g>
                <mask id="mask1" mask-type="alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="44" height="44">
                    <rect y="12.9148" width="33.643" height="33.643" transform="rotate(-22.5739 0 12.9148)" fill="white"/>
                </mask>
                <g mask="url(#mask1)" id="env-2">
                    <path d="M28.0399 7.33105C29.4638 6.73913 31.113 7.41978 31.7049 8.84361L38.1623 24.3763C38.7542 25.8002 38.0736 27.4494 36.6497 28.0414L15.9394 36.6512C14.5156 37.2431 12.8664 36.5624 12.2744 35.1386L5.81707 19.6059C5.22515 18.182 5.9058 16.5328 7.32963 15.9409L28.0399 7.33105Z" stroke="#FFE5BF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M31.7048 8.8432L22.5276 23.2851L5.81689 19.6055" stroke="#FFE5BF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </g>
                <mask id="mask2" mask-type="alpha" maskUnits="userSpaceOnUse" x="25" y="6" width="34" height="35">
                    <rect x="25.3013" y="6.60059" width="33.643" height="33.643" fill="white"/>
                </mask>
                <g mask="url(#mask2)" id="env-3">
                    <path d="M53.3363 12.2085C54.8783 12.2085 56.1399 13.4701 56.1399 15.0121V31.8336C56.1399 33.3756 54.8783 34.6372 53.3363 34.6372H30.9076C29.3657 34.6372 28.1041 33.3756 28.1041 31.8336V15.0121C28.1041 13.4701 29.3657 12.2085 30.9076 12.2085H53.3363Z" stroke="#FFE5BF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="#800000"/>
                    <path d="M56.1399 15.0115L42.122 24.824L28.1041 15.0115" stroke="#FFE5BF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </g>
            </svg>
            <p class="sub-title av-font-iv mb-1">Subscribe To Our Newsletter</p>
            <h4 class="av-font-vii col-title fw-bold mb-3">Stay Updated</h4>
            <form class="px-3">
                <input type="email" class="form-control mb-3" id="kb-newsletter-field-mob" placeholder="Enter Your Email" value="demo@gmail.com">
                <button type="submit" class="btn mb-3 px-5 fw-bold av-font-ii">Subscribe Now</button>
            </form>
        </div>
    </div>
    <!-- Subscribe section for tab and below End-->
</div>




<script>
    var active_link = $('#av-main-nav .nav-item .nav-link');
    active_link.each(function(){
        if($(this).text()=='About Us'){
            $(this).addClass('active');
        }
    });
</script>


<?php
include('footer.php');?>