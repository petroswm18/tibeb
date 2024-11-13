<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Explore Courses with tibeb</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/favicon.png">

    <!-- CSS
	============================================ -->
    <link rel="stylesheet" href="../assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/vendor/slick.css">
    <link rel="stylesheet" href="../assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="../assets/css/plugins/sal.css">
    <link rel="stylesheet" href="../assets/css/plugins/feather.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="../assets/css/plugins/euclid-circulara.css">
    <link rel="stylesheet" href="../assets/css/plugins/swiper.css">
    <link rel="stylesheet" href="../assets/css/plugins/odometer.css">
    <link rel="stylesheet" href="../assets/css/plugins/animation.css">
    <link rel="stylesheet" href="../assets/css/plugins/bootstrap-select.min.css">
    <link rel="stylesheet" href="../assets/css/plugins/jquery-ui.css">
    <link rel="stylesheet" href="../assets/css/plugins/magnigy-popup.min.css">
    <link rel="stylesheet" href="../assets/css/plugins/plyr.css">
    <link rel="stylesheet" href="../assets/css/style.css">

	<style>
	/* Custom quarter star */
.fa-star-quarter:before {
    content: "\f005";  /* full star */
    background: linear-gradient(90deg, #ffc107 25%, transparent 25%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

/* Custom three-quarter star */
.fa-star-three-quarters:before {
    content: "\f005";  /* full star */
    background: linear-gradient(90deg, #ffc107 75%, transparent 75%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.star-yellow {
    color: #ffc107; /* Bootstrap's warning yellow */
}


.button-container {
    display: flex;
    overflow-x: auto;
    white-space: nowrap;
    padding: 10px;
    gap: 15px;
    scroll-behavior: smooth; /* Smooth scrolling */
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px 10px;
    transition: background-color 0.3s ease-in-out;
}

.button-container:hover {
    
}

.button-container::-webkit-scrollbar {
    height: 8px;
}

.button-container::-webkit-scrollbar-thumb {
    background-color: #888;
    border-radius: 10px;
}

.button-container::-webkit-scrollbar-thumb:hover {
    background-color: #555;
}

@keyframes pulse {
    0% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.1);
    }
    100% {
        transform: scale(1);
    }
}

.button-container button:nth-child(odd) {
    animation: pulse 1.5s infinite;
}


.slider {
    position: relative;
    width: 100%;
    max-width: 900px;
    height: 400px;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
    perspective: 1000px; /* 3D perspective */
}

.cardzzs {
    display: flex;
    transition: transform 0.8s cubic-bezier(0.25, 0.8, 0.25, 1); /* Smoother transition */
    will-change: transform;
}

.cardzz {
    position: relative;
    width: 250px;
    height: 350px;
    margin: 0 15px;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    border-radius: 15px;
    box-shadow: 0 30px 50px rgba(0, 0, 0, 0.5);
    transition: transform 0.6s ease, opacity 0.6s, box-shadow 0.6s ease;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    flex-shrink: 0;
    z-index: 1;
    position: relative;
    backface-visibility: hidden; /* Hide backface during 3D rotation */
    transform-style: preserve-3d;
}

/* Active cardzz styling with bigger size, stronger shadow, and 3D rotation */
.cardzz.active {
    transform: scale(1.2) rotateY(0deg); /* 3D effect */
    z-index: 10;
    opacity: 1;
    box-shadow: 0 40px 70px rgba(0, 0, 0, 0.6);
    transition: transform 0.8s ease-in-out, opacity 0.6s;
}

/* Left and right cardzzs with smaller size, rotation, and reduced opacity */
.cardzz.left {
    transform: scale(0.85) rotateY(-25deg); /* 3D rotation for left cardzz */
    opacity: 0.6;
}

.cardzz.right {
    transform: scale(0.85) rotateY(25deg); /* 3D rotation for right cardzz */
    opacity: 0.6;
}

/* Complex gradient overlay with multi-layer effects */
.cardzz::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(0, 0, 0, 0.7) 0%, rgba(255, 255, 255, 0) 70%),
                radial-gradient(circle at top right, rgba(255, 255, 255, 0.3) 0%, rgba(0, 0, 0, 0.8) 100%);
    border-radius: 15px;
    z-index: 1;
    pointer-events: none;
    mix-blend-mode: overlay;
}

/* Added a soft glow effect around active cardzzs */
.cardzz.active::before {
    background: linear-gradient(135deg, rgba(255, 255, 255, 0.4) 0%, rgba(255, 255, 255, 0) 100%);
    box-shadow: 0 0 20px rgba(255, 255, 255, 0.5), 0 0 40px rgba(255, 255, 255, 0.3);
}

/* cardzz content centered with glassmorphism effect */
.cardzz-content {
    position: relative;
    color: white;
    z-index: 2;
    font-size: 2rem;
    font-weight: bold;
    text-align: center;
    text-shadow: 3px 3px 8px rgba(0, 0, 0, 0.9);
    backdrop-filter: blur(10px); /* Stronger glass-like effect */
    padding: 20px;
    border-radius: 10px;
    background: rgba(255, 255, 255, 0.1);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.6);
    border: 1px solid rgba(255, 255, 255, 0.3); /* Subtle border for glass effect */
}

/* Parallax scrolling effect */
.slider:before {
    content: '';
    position: absolute;
    width: 200%;
    height: 200%;
    top: -100%;
    left: -100%;
    z-index: -1;
    transform: scale(1.5) translate(20px, -20px);
    transition: transform 1s ease;
}

.slider:hover:before {
    transform: scale(1.2) translate(-20px, 20px); /* Parallax shift on hover */
}

/* Navigation Arrows */
.arrow {
    position: absolute;
    top: 50%;
    width: 40px;
    height: 40px;
    background-color: rgba(0, 0, 0, 0.5);
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    transform: translateY(-50%);
    transition: background-color 0.3s, transform 0.3s ease;
    z-index: 100;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5); /* Arrow shadow */
}

.arrow:hover {
    background-color: rgba(0, 0, 0, 0.8);
    transform: translateY(-50%) scale(1.1);
}

.arrow-left {
    left: -50px;
}

.arrow-right {
    right: -50px;
}

.arrow::before {
    content: '';
    display: inline-block;
    width: 12px;
    height: 12px;
    border-width: 2px;
    border-style: solid;
    border-color: white;
}

.arrow-left::before {
    border-width: 2px 0 0 2px;
    transform: rotate(-45deg);
}

.arrow-right::before {
    border-width: 0 2px 2px 0;
    transform: rotate(45deg);
}

/* MOBILE RESPONSIVENESS */
@media (max-width: 768px) {
    .slider {
        max-width: 100%;
        height: 300px;
    }

    .cardzz {
        width: 200px;
        height: 280px;
        margin: 0 10px;
    }

    .cardzz.active {
        transform: scale(1.15);
    }

    .arrow {
        width: 30px;
        height: 30px;
    }

    .arrow-left {
        left: -30px;
    }

    .arrow-right {
        right: -30px;
    }
}

@media (max-width: 480px) {
    .slider {
        max-width: 100%;
        height: 250px;
    }

    .cardzz {
        width: 150px;
        height: 210px;
        margin: 0 5px;
    }

    .cardzz.active {
        transform: scale(1.1);
    }

    .arrow {
        width: 25px;
        height: 25px;
    }

    .arrow-left {
        left: -20px;
    }

    .arrow-right {
        right: -20px;
    }
}


.responsive-text {
    font-family: Arial, sans-serif;
    font-size: 1.3vw; /* Responsive font size relative to viewport width */
    font-weight: bold;
    background: red;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: inline-block;
     max-width: 100%;
}

@media (max-width: 768px) {
    .responsive-text {
        font-size: 2vw; /* Larger font size on smaller screens */
    }
}

@media (min-width: 1200px) {
    .responsive-text {
        font-size: 1.2vw; /* Smaller font size on larger screens */
    }
}








/* ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^  */


  /* General Styling */


/* Breadcrumbs Styling */
.breadcrumbs {
    margin: 15px 0;
    font-size: 1.2em;
    overflow-x: auto;
    white-space: nowrap;
    padding: 10px;
}
.breadcrumbs a {
    color: #2980b9;
    text-decoration: none;
    margin: 0 5px;
    display: inline-block;
    transition: color 0.3s ease;
    font-weight: 500;
}
.breadcrumbs a:hover {
    color: #2c3e50;
    text-decoration: underline;
}

/* Category Button Styling with Animations */
.category-button {
    padding: 15px 30px;
    margin: 10px;
    background: linear-gradient(145deg, #3498db, #2980b9);
    color: white;
    border: none;
    border-radius: 50px;
    font-size: 1.2em;
    cursor: pointer;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    position: relative;
    overflow: hidden;
    z-index: 1;
    width: 100%;
    max-width: 300px;
    box-sizing: border-box;
}

.category-button::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 300%;
    height: 300%;
    background: 
    radial-gradient(circle at 30% 30%,  #0a62e2, transparent 50%), 
    radial-gradient(circle at 70% 70%, #8d1ee4, transparent 50%), 
    linear-gradient(120deg,  #0a62e2 0%, #f9a8d4 20%, #fbc2eb 40%, #089015 60%, #e23305 80%, #8d1ee4 100%);

background-blend-mode: overlay, overlay, overlay, overlay, screen, soft-light;

    transition: width 0.3s ease, height 0.3s ease, top 0.3s ease, left 0.3s ease;
    border-radius: 50%;
    z-index: -1;
    transform: translate(-50%, -50%);
}

.category-button:hover::before {
    width: 0;
    height: 0;
    top: 50%;
    left: 50%;
}

.category-button:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

/* Back Button Styling */
.back-button {
    display: inline-block;
    padding: 10px 20px;
    margin: 20px auto;
    background-color: #e74c3c;
    color: white;
    border: none;
    border-radius: 25px;
    cursor: pointer;
    font-size: 1.1em;
    transition: all 0.3s ease;
    width: 90%;
    max-width: 250px;
}

.back-button:hover {
    background-color: #c0392b;
    transform: scale(1.05);
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
}

/* Category Container Styling */
.category-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin-top: 20px;
    gap: 10px;
}

.back-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin-top: 20px;
    gap: 10px;
}

.category-container.fade-in {
    opacity: 0;
    animation: fadeInUp 0.5s forwards;
}

/* Loading Text Styling */
.loading {
    font-size: 1.5em;
    color: #7f8c8d;
    animation: blink 1.5s infinite;
}

/* Keyframes for Animations */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes blink {
    0%, 100% {
        opacity: 1;
    }
    50% {
        opacity: 0.5;
    }
}

/* Media Queries for Mobile Devices */
@media (max-width: 768px) {
    
    h2 {
        font-size: 1.5em;
    }

    .category-button {
        font-size: 1em;
        padding: 12px 24px;
        margin: 8px;
    }

    .back-button {
        font-size: 1em;
        padding: 8px 16px;
    }

    .breadcrumbs {
        font-size: 1em;
        margin: 10px 0;
    }

    .loading {
        font-size: 1.2em;
    }
}

@media (max-width: 480px) {
    h2 {
        font-size: 1.3em;
    }

    .category-button {
        font-size: 0.9em;
        padding: 10px 20px;
    }

    .back-button {
        font-size: 0.9em;
        padding: 6px 12px;
    }
}



	</style>
	
</head>

<body class="rbt-header-sticky">
    <div id="my_switcher" class="my_switcher">
        <ul>
            <li>
                <a href="javascript: void(0);" data-theme="light" class="setColor light">
                    <img src="../assets/images/about/sun-01.svg" alt="Sun images"><span title="Light Mode"> Light</span>
                </a>
            </li>
            <li>
                <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
                    <img src="../assets/images/about/vector.svg" alt="Vector Images"><span title="Dark Mode"> Dark</span>
                </a>
            </li>
        </ul>
    </div>

    <!-- Start Header Area -->
    <header class="rbt-header rbt-header-10">
        <div class="rbt-sticky-placeholder"></div>

        <!-- Start Header Top  -->
        <!-- End Header Top  -->
        <div class="rbt-header-wrapper header-space-betwween header-sticky">
            <div class="container-fluid">
                <div class="mainbar-row rbt-navigation-center align-items-center">
                    <div class="header-left rbt-header-content">
                        <div class="header-info">
                            <div class="logo logo-dark">
                                <a href="#">
                                    <img src="../assets/images/logo/logo.jfif" alt="Education Logo Images">
                                </a>
                            </div>

                            <div class="logo d-none logo-light">
                                <a href="#">
                                    <img src="../assets/images/logo/logo.jfif" alt="Education Logo Images">
                                </a>
                            </div>
                        </div>
                        <div class="header-info">
                            <div class="rbt-category-menu-wrapper rbt-category-update">

                                <div class="rbt-category-btn">
                                    <div class="rbt-offcanvas-trigger md-size icon">
                                        <span class="d-none d-xl-block">
                                    <i class="feather-grid"></i>
                                </span>
                                        <i title="Category" class="feather-grid d-block d-xl-none"></i>
                                    </div>
                                    <span class="category-text d-none d-xl-block">Category</span>
                                </div>

                                <!-- Start category Area  -->
                                <!-- End category Area  -->

                            </div>
                        </div>
                    </div>

                    <div class="header-right">
					
					   <ul class="quick-access">
						 <li class="account-access rbt-user-wrapper d-none d-xl-block">
                                <a href="../account"><i class="feather-user"></i>Account Details</a>
                            </li>
                        </ul>

                        <!-- Navbar Icons -->
                       <div class="rbt-btn-wrapper d-none d-xl-block">
                            <a class="rbt-btn rbt-marquee-btn marquee-auto btn-border-gradient radius-round btn-sm hover-transform-none" href="tel:+251923442133">
                                <span data-text="Enroll Now">Enroll Now</span>
                            </a>
                        </div>

                        <!-- Start Mobile-Menu-Bar -->
                        <div class="mobile-menu-bar d-block d-xl-none">
                            <div class="hamberger">
                                <button class="hamberger-button rbt-round-btn">
                                    <i class="feather-menu"></i>
                                </button>
                            </div>
                        </div>
                        <!-- Start Mobile-Menu-Bar -->

                    </div>
                </div>
            </div>
            <!-- Start Search Dropdown  -->
            <!-- End Search Dropdown  -->
        </div>
        <!-- Start Side Vav -->
        <!-- End Side Vav -->
        <a class="rbt-close_side_menu" href="javascript:void(0);"></a>

    </header>

    <!-- Mobile Menu Section -->
    <div class="popup-mobile-menu">
        <div class="inner-wrapper">
            <div class="inner-top">
                <div class="content">
                    <div class="logo">
                        <div class="logo logo-dark">
                            <a href="#">
                                <img src="../assets/images/logo/logo.jfif" alt="Education Logo Images">
                            </a>
                        </div>

                        <div class="logo d-none logo-light">
                            <a href="#">
                                <img src="../assets/images/logo/logo.jfif" alt="Education Logo Images">
                            </a>
                        </div>
                    </div>
                    <div class="rbt-btn-close">
                        <button class="close-button rbt-round-btn"><i class="feather-x"></i></button>
                    </div>
                </div>
               
            </div>

            
            <div class="mobile-menu-bottom">
                <div class="rbt-btn-wrapper mb--20">
                    <a class="rbt-btn btn-border-gradient radius-round btn-sm hover-transform-none w-100 justify-content-center text-center" href="tel:+251923442133">
                        <span>Enroll Now</span>
                    </a>
                </div>

                <div class="social-share-wrapper">
                    <span class="rbt-short-title d-block">Find With Us</span>
                    <ul class="social-icon social-default transparent-with-border justify-content-start mt--20">
                        <li><a href="https://www.facebook.com/">
                                <i class="feather-facebook"></i>
                            </a>
                        </li>
                        <li><a href="https://www.twitter.com/">
                                <i class="feather-twitter"></i>
                            </a>
                        </li>
                        <li><a href="https://www.instagram.com/">
                                <i class="feather-instagram"></i>
                            </a>
                        </li>
                        <li><a href="https://www.linkdin.com/">
                                <i class="feather-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <!-- Start Side Vav -->
    
    <!-- End Side Vav -->
    <a class="close_side_menu" href="javascript:void(0);"></a>

    <div class="rbt-page-banner-wrapper">
        <!-- Start Banner BG Image  -->
        <div class="rbt-banner-image"></div>
        <!-- End Banner BG Image  -->
        <div class="rbt-banner-content">
            <!-- Start Banner Content Top  -->
            <div class="rbt-banner-content-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Start Breadcrumb Area  -->
                            <ul class="page-list">
                                <li class="rbt-breadcrumb-item"><a href="#">Home</a></li>
                                <li>
                                    <div class="icon-right"><i class="feather-chevron-right"></i></div>
                                </li>
                                <li class="rbt-breadcrumb-item active">Explore Courses</li>
                            </ul>
                            <!-- End Breadcrumb Area  -->

                            <div id="mct" class=" title-wrapper">
                                <h1 class="title mb--0">Explore Courses</h1>
                                <a href="#" class="rbt-badge-2">
                                    <div class="image">🎉</div> Begginer to advanced
                                </a>
                            </div>

                            <p id="mct1" class="description">Courses crafted by experts in the fields </p>
							
							
							<div class="addto-cart-btn mt--20">
                                    <a class="rbt-btn btn-gradient hover-icon-reverse" href="../account">
                                        <span class="icon-reverse-wrapper">
                                            <span class="btn-text">View account details</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        </span>
                                    </a>
                                </div>
							
							
							
							
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Banner Content Top  -->
            <!-- Start Course Top  -->
            <div class="rbt-course-top-wrapper mt--40">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-5 col-md-12">
                            <div class="rbt-sorting-list d-flex flex-wrap align-items-center">
                                <div class="rbt-short-item">
                                    <span class="course-index"></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-7 col-md-12">
                            <div class="rbt-sorting-list d-flex flex-wrap align-items-center justify-content-start justify-content-lg-end">
                                <div class="rbt-short-item">
                                    <div class="rbt-search-style me-0">
                                        <input id="finput" type="text" placeholder="Search a course topic">
                                        <button id="fsearch" type="submit" class="rbt-search-btn rbt-round-btn">
                                            <i class="feather-search"></i>
                                        </button>
                                    </div>
                                </div>

                                <div class="rbt-short-item">
                                    <div class="view-more-btn text-start text-sm-end">
                                        <button style="display:none;" class="discover-filter-button discover-filter-activation rbt-btn btn-white btn-md radius-round">Filter<i class="feather-filter"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Start Filter Toggle  -->
                    <div class="default-exp-wrapper default-exp-expand">
                        <div class="filter-inner">
                            <div class="filter-select-option">
                                <div class="filter-select rbt-modern-select">
                                    <span class="select-label d-block">Short By</span>
                                    <select>
                                        <option>Default</option>
                                        <option>Latest</option>
                                        <option>Popularity</option>
                                        <option>Trending</option>
                                        <option>Price: low to high</option>
                                        <option>Price: high to low</option>
                                    </select>
                                </div>
                            </div>

                            <div class="filter-select-option">
                                <div class="filter-select rbt-modern-select">
                                    <span class="select-label d-block">Short By Author</span>
                                    <select data-live-search="true" title="Select Author" multiple data-size="7" data-actions-box="true" data-selected-text-format="count > 2">
                                        <option data-subtext="Experts">Janin Afsana</option>
                                        <option data-subtext="Experts">Joe Biden</option>
                                        <option data-subtext="Experts">Fatima Asrafy</option>
                                        <option data-subtext="Experts">Aysha Baby</option>
                                        <option data-subtext="Experts">Mohamad Ali</option>
                                        <option data-subtext="Experts">Jone Li</option>
                                        <option data-subtext="Experts">Alberd Roce</option>
                                        <option data-subtext="Experts">Zeliski Noor</option>
                                    </select>
                                </div>
                            </div>

                            <div class="filter-select-option">
                                <div class="filter-select rbt-modern-select">
                                    <span class="select-label d-block">Short By Offer</span>
                                    <select>
                                        <option>Free</option>
                                        <option>Paid</option>
                                        <option>Premium</option>
                                    </select>
                                </div>
                            </div>

                            <div class="filter-select-option">
                                <div class="filter-select rbt-modern-select">
                                    <span class="select-label d-block">Short By Category</span>
                                    <select data-live-search="true">
                                        <option>Web Design</option>
                                        <option>Graphic</option>
                                        <option>App Development</option>
                                        <option>Figma Design</option>
                                    </select>
                                </div>
                            </div>

                            <div class="filter-select-option">
                                <div class="filter-select">
                                    <span class="select-label d-block">Price Range</span>

                                    <div class="price_filter s-filter clear">
                                        <form action="#" method="GET">
                                            <div id="slider-range"></div>
                                            <div class="slider__range--output">
                                                <div class="price__output--wrap">
                                                    <div class="price--output">
                                                        <span>Price :</span><input type="text" id="amount">
                                                    </div>
                                                    <div class="price--filter">
                                                        <a class="rbt-btn btn-gradient btn-sm" href="#">Filter</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Filter Toggle  -->

                    <div class="row mt--60">
					     
						
						 <div class="col-lg-12">
                            <div class="slider">
    <div class="arrow arrow-left"></div>
    <div class="cardzzs" id="cardzm">
        
        
    </div>
    <div class="arrow arrow-right"></div>
</div>
                        </div>
						
						
                        <div class="col-lg-12">
						<br><br>
                            <div   id="catg" class="rbt-portfolio-filter filter-button-default messonry-button text-start justify-content-start">
                               
                            </div>
							
							
							

    <!-- Breadcrumbs Navigation -->
    <div style="display:none;" class="breadcrumbs" id="breadcrumbs"></div>

    <!-- Category Buttons Container -->
    <div id="category-container" class="category-container"></div>

    <!-- Back Button -->
	
	<div class="back-container">
    <button id="back-button" class="back-button" style="display: none;" onclick="goBack()">Back</button></div>

    <!-- Loading Text -->
    <p id="loading" class="loading" style="display: none;">Loading...</p>
							
							
							
                        </div>
						
                    </div>


                </div>
            </div>
            <!-- End Course Top  -->
        </div>
    </div>
<br>





<div class="rbt-splash-coding-quality-area bg-color-white rbt-section-gapBottom">
        <div class="wrapper">
            <div class="container">
                 <div class="row mb--60">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <span class="subtitle bg-secondary-opacity">All in One Platform For Learning</span>
                            <h2 class="title"><strong class="theme-gradient">Interactive Modern Courses </strong></h2>
                        </div>
                    </div>
                </div>
                <div id="courselist" class="row g-5">
                    
                </div>
				<div id="loading-spinner" style="display: none;">Loading more Courses...</div>
            </div>
        </div>
    </div>








    <div class="rbt-section-overlayping-top rbt-section-gapBottom masonary-wrapper-activation">
        <div class="container">
            <!-- Start Card Area -->
            <div class="row row--15">
                <div class="col-lg-15">
                    <div class="rbt-course-grid-column grid-metro2" id="quizlist">
                     
                    </div>
					
                    <!-- End Card Area -->
                </div>
            </div>
        </div>
    </div>

    <div class="rbt-separator-mid">
        <div class="container">
            <hr class="rbt-separator m-0">
        </div>
    </div>
    <!-- Start Footer aera -->
    <!-- End Footer aera -->
    <div class="rbt-progress-parent">
        <svg class="rbt-back-circle svg-inner" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- JS
============================================ -->
    <!-- Modernizer JS -->
    <script src="../assets/js/vendor/modernizr.min.js"></script>
    <!-- jQuery JS -->
    <script src="../assets/js/vendor/jquery.js"></script>
    <!-- Bootstrap JS -->
    <script src="../assets/js/vendor/bootstrap.min.js"></script>
    <!-- sal.js -->
    <script src="../assets/js/vendor/sal.js"></script>
    <!-- Dark Mode Switcher -->
    <script src="../assets/js/vendor/js.cookie.js"></script>
    <script src="../assets/js/vendor/jquery.style.switcher.js"></script>
    <script src="../assets/js/vendor/swiper.js"></script>
    <script src="../assets/js/vendor/jquery-appear.js"></script>
    <script src="../assets/js/vendor/odometer.js"></script>
    <script src="../assets/js/vendor/backtotop.js"></script>
    <script src="../assets/js/vendor/isotop.js"></script>
    <script src="../assets/js/vendor/imageloaded.js"></script>

    <script src="../assets/js/vendor/wow.js"></script>
    <script src="../assets/js/vendor/waypoint.min.js"></script>
    <script src="../assets/js/vendor/easypie.js"></script>
    <script src="../assets/js/vendor/text-type.js"></script>
    <script src="../assets/js/vendor/jquery-one-page-nav.js"></script>
    <script src="../assets/js/vendor/bootstrap-select.min.js"></script>
    <script src="../assets/js/vendor/jquery-ui.js"></script>
    <script src="../assets/js/vendor/magnify-popup.min.js"></script>
    <script src="../assets/js/vendor/paralax-scroll.js"></script>
    <script src="../assets/js/vendor/paralax.min.js"></script>
    <script src="../assets/js/vendor/countdown.js"></script>
    <script src="../assets/js/vendor/plyr.js"></script>
    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>
    <script>
	
	var grab;
	
	
	function getRand() {
        const numbers = [10, 8, 7, 3, 15, 12, 16, 17];
        
        const randomIndex = Math.floor(Math.random() * numbers.length);
        
        const selectedNumber = numbers[randomIndex];
        
        return selectedNumber;
   }
	
	
/*
	
	fetch('../api/?action=getCategories', {
    method: 'GET',
    headers: {
        'Authorization': 'Bearer YOUR_JWT_TOKEN'
    }
})
.then(response => response.json())
.then(function(data){
	var dat=data.categories;
	var agg='';
	for(var i=0;i<dat.length;i++){
		var fd=i+1;
		agg+='<a data-filter=".cat--'+fd+'" href="../courses/?keyword='+dat[i].category+'" target="_blank"><span class="filter-text">'+dat[i].category+'</span><span class="course-number">'+dat[i].quiz_count+'</span></button>';
	}
	document.getElementById("catg").innerHTML=agg;
})
.catch(error => console.error('Error:', error));


*/
	

	
	function listar(arr,v){
		rate="";
		var strs="";
		var passed=arr.difficulty;
			if(arr.passing_rate!=null){
			   passed=Math.round(arr.passing_rate)+"% passed quiz"
			}
		if(arr.average_rating!=null){
			rate=0;
			var ratt=Math.round(arr.average_rating*10)/10;
			if(ratt!=1){
		       rate="&nbsp; &nbsp; "+ratt+" stars";
			}
			else{
				rate="&nbsp; &nbsp; "+ratt+" star";
			}
			strs=generateStars(ratt);
		}
		var coll="";
		if(arr.collection!=null && arr.collection!=""){
			coll='<div class="rbt-author-meta mb--10"> '+arr.category+' </div> <div class="rbt-author-info"><a class="rbt-btn-link" href="./?collection='+arr.collection+'">view collection : '+arr.collection+' <i class="feather-arrow-right"></i></a></div>';
		}
		else{
			coll='<div class="rbt-author-meta mb--10"> </div> <div class="rbt-author-info">'+arr.category+'</div>';
		}
        var prm="";
        if(arr.is_premium==1){
		   prm+='<a href="#"><span class="rbt-badge-card">Premium</span></a>&nbsp;&nbsp;';
		}
		if(arr.youtubeid!=""){
		   prm+='<a href="#"><span class="rbt-badge-card">With Video</span></a>';
		}
		
	   return '<div class="maso-item cat--'+v+'"> <div class="rbt-card variation-01 rbt-hover card-list-2"> <div class="rbt-card-img"> <a href="../details/?id='+arr.code+'" target="_blank"> <img src="'+arr.img+'" > </a> </div> <div class="rbt-card-body"> <div class="rbt-card-top"> <div class="rbt-review"> <div> '+strs+' </div> <span class="rating-count"> '+rate+'</span> </div> <div class="rbt-bookmark-btn"> <a class="rbt-round-btn" title="Bookmark" href="#"><i class="feather-bookmark"></i></a> </div> </div> <h4 class="rbt-card-title"><a href="../details/?id='+arr.code+'" target="_blank">'+arr.title+' '+prm+'</a> </h4> <ul class="rbt-meta"> <li><i class="feather-book"></i>'+arr.num_questions+' Questions</li> <li><i class="feather-users"></i>'+passed+'</li> </ul> <p class="rbt-card-text"></p> '+coll+'  <div class="rbt-card-bottom"> <div class="rbt-price"> <span class="current-price">'+arr.attempts+'</span>&nbsp;&nbsp;attempts </div> <a class="rbt-btn-link" href="../details/?id='+arr.code+'" target="_blank">Start Quiz<i class="feather-arrow-right"></i></a> </div> </div> </div> </div>';
	}
	
	function list(arr,v){
		rate="";
		var strs="";
		var passed=arr.difficulty;
			if(arr.passing_rate!=null){
			   passed=Math.round(arr.passing_rate)+"% passed quiz"
			}
		
		var coll="";
		if(arr.collection!=null && arr.collection!=""){
			coll='<div class="rbt-author-meta mb--10"> '+arr.category+' </div> <div class="rbt-author-info"><a class="rbt-btn-link" href="./?collection='+arr.collection+'">view collection : '+arr.collection+' <i class="feather-arrow-right"></i></a></div>';
		}
		else{
			coll='<div class="rbt-author-meta mb--10"> </div> <div class="rbt-author-info">'+arr.category+'</div>';
		}
        var prm="";
        if(arr.premium==1){
		   prm+='<a href="#"><span class="rbt-badge-card">Premium</span></a>&nbsp;&nbsp;';
		}
		var ds1;
		if(arr.quiz_count==1){
		 ds1='<b>'+arr.quiz_count+'</b> Lesson';
		}
		else{
		 ds1='<b>'+arr.quiz_count+'</b> Lessons';	
		}
		
		var ds2;
		if(arr.users_in_progress==1){
		 ds2='<b>'+arr.users_in_progress+'</b> student currently taking this course';
		}
		else{
		 ds2='<b>'+arr.users_in_progress+'</b> students currently taking this course';	
		}
		
		var ds3;
		if(arr.users_completed==1){
		 ds3='<b>'+arr.users_completed+'</b> student completed this course';
		}
		else{
		 ds3='<b>'+arr.users_completed+'</b> students completed this course';	
		}
		
		
	   return '<div class="col-lg-4 col-md-6 col-12 sal-animate" data-sal-delay="200" data-sal="slide-up" data-sal-duration="800">  <div class="top-features-box h-100 text-center bg-gradient-'+getRand()+'"> <div class="inner"> <a href="../list/?id='+arr.course_title_code+'" target="_blank"> <div class="content"> <span class="pre-title text-uppercase">'+arr.category+' Course</span> <h4 class="title">'+arr.title+' <br> '+prm+'</h4> </div> </a><div class="thumbnail"> </div> <ul class="rbt-meta" > <li style="color:white;"><i class="feather-book"></i>'+ds1+'</li> <li style="color:white;"><i class="feather-users"></i>'+ds2+'</li> <li style="color:white;"><i class="feather-users"></i>'+ds3+'</li></ul> <div class="rbt-badge-group"> '+shortenText(arr.description)+' </div> <br><br> <a class="rbt-btn-link" href="../list/?id='+arr.course_title_code+'" target="_blank" style="color:white;"><b>START COURSE</b><i class="feather-arrow-right"></i></a>  </div> <div class="shape-image"> <img src="../assets//images/splash/icons/sun-shadow-right-2.png" alt="Shape Images"> </div> </div> </div>';
	   
	   
	   
	   
	   
	}
	
	
function shortenText(longText, maxLength = 100) {
    // If the text is within the max length, return it with inline white color styling
    if (longText.length <= maxLength) {
        return `<span style="color: white;">${longText}</span>`;
    }

    // Create the shortened text with a "View More" link and icon, styled inline
    const shortText = longText.substring(0, maxLength) + '... ';
    return `
        <span class="text-content" style="color: white;">${shortText}</span>
        <span class="view-all" style="color: white; cursor: pointer; text-decoration: none;" 
              onclick="toggleText(this)" data-full-text="${longText}" data-short-text="${shortText}">
            View More <i class="fas fa-angle-down"></i>
        </span>`;
}

// Function to toggle between shortened and full text
function toggleText(element) {
    const fullText = element.getAttribute('data-full-text');
    const shortText = element.getAttribute('data-short-text');
    const isExpanded = element.textContent.includes('Show Less');

    // Find the previous sibling with the text-content class
    const textElement = element.previousElementSibling;

    // Toggle the text and the link's content
    textElement.innerHTML = isExpanded ? shortText : `<span style="color: white;">${fullText}</span>`;
    element.innerHTML = isExpanded
        ? 'View More <i class="fas fa-angle-down"></i>'
        : 'Show Less <i class="fas fa-angle-up"></i>';
}
	
	function getQueryParameter(name) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(name);
    }
	
	const collectionParam = getQueryParameter('collection');

    if (collectionParam && collectionParam!="") {
		document.getElementById('mct').innerHTML='<h1 class="title mb--0">Quiz collections for '+collectionParam+'</h1>';
		document.getElementById('mct1').style.display = 'none';
	}
	
	
	
function generateStars(rating) {
    let starHtml = '';

    // Round rating to the nearest 0.5
    const roundedRating = Math.round(rating * 2) / 2;

    const fullStars = Math.floor(roundedRating);
    const halfStar = roundedRating % 1 !== 0;
    const emptyStars = 5 - fullStars - (halfStar ? 1 : 0);
    
    // Add full stars
    for (let i = 0; i < fullStars; i++) {
        starHtml += '<i class="fa fa-star star-yellow"></i>';
    }

    // Add half star if applicable
    if (halfStar) {
        starHtml += '<i class="fa fa-star-half-alt star-yellow"></i>';
    }

    // Add empty stars
    for (let i = 0; i < emptyStars; i++) {
        starHtml += '<i class="far fa-star star-yellow"></i>';
    }
    console.log(starHtml);
    return starHtml;
}



let offset = 0;
const limit = 10;
let isLoading = false;
var dj=[];

  function loadQuizzes() {
	  
	    if (isLoading) return;

    isLoading = true;
    document.getElementById('loading-spinner').style.display = 'block';
	  
	  var cpp= window.location.search.replaceAll("?","&")
		
    fetch(`../api/?action=getCoursesWithQuizCounts&limit=${limit}&offset=${offset}`+cpp)
      .then(response => response.json())
      .then(data => {
        var quizContainer = document.getElementById('courselist');
        var xc=1;
		
		grab=data;
		fetchC1Categories();
		
        // Append quizzes to the container
        data.courses.forEach(quiz => {
			
			if(!dj.includes(quiz.course_title_code)){
				dj.push(quiz.course_title_code);
		        quizContainer.innerHTML = quizContainer.innerHTML + list(quiz,xc);
		        xc++;
			}
        });

        // Update the offset for next load
        offset += limit;

        // Hide the load more button if no more quizzes
         if (!data.has_more) {
          document.getElementById('loading-spinner').style.display = 'none';
          window.removeEventListener('scroll', handleScroll);
        } else {
          isLoading = false;
          document.getElementById('loading-spinner').style.display = 'none';
        }
      })
      .catch(error => {
        console.error('Error loading quizzes:', error);
        isLoading = false;
        document.getElementById('loading-spinner').style.display = 'none';
      });
  }
  
   function handleScroll() {
    const scrollTop = window.scrollY || document.documentElement.scrollTop;
    const windowHeight = window.innerHeight;
    const fullHeight = document.documentElement.scrollHeight;

    if (scrollTop + windowHeight >= fullHeight - 50) {  // Load more when near bottom
      loadQuizzes();
    }
  }
  
  document.getElementById("fsearch").onclick = function() {
	  
	  var inp= document.getElementById("finput").value;
	  if(inp!=""){
	  window.location.href=window.location.href.split('?')[0].replaceAll("#","")+"?keyword="+inp;
	  }
  };


  // Initial load
  loadQuizzes();

  // Load more button event
  window.addEventListener('scroll', handleScroll);
  
  
  
  
  
  
  
  fetch(`../api/?action=getQuizzes&limit=10&offset=0`)
      .then(response => response.json())
      .then(data => {
        var quizContainer = document.getElementById('cardzm');
        var xc=1;
		
        
		
		var fcc="";
		
        // Append quizzes to the container
        data.quizzes.forEach(quiz => {
			
		  fcc+=`<a class="responsive-text" href="../details/?id=`+quiz.code+`" target="_blank"><div onclick="location.href='../details/?id=`+quiz.code+`';" class="cardzz" style="background-image: url('`+quiz.img+`');">
            <div class="cardzz-content">
                            
           
        <a class="responsive-text" href="../details/?id=`+quiz.code+`" target="_blank">`+quiz.title+`</a>
  
                            
                        </div>
        </div></a>`;
			
			
		        
			
        });
		
		quizContainer.innerHTML = fcc;
		        xc++;
				 const cardzzs = document.querySelectorAll('.cardzz');
const cardzzsContainer = document.querySelector('.cardzzs');
const leftArrow = document.querySelector('.arrow-left');
const rightArrow = document.querySelector('.arrow-right');
const totalcardzzs = cardzzs.length;
let currentIndex = 0; // Start with the first cardzz
let autoSwipeInterval;

// Function to update the cardzz positions
// Function to update the cardzz positions
function updatecardzzs() {
    const cardzzWidth = cardzzs[0].offsetWidth;
    const gap = parseInt(window.getComputedStyle(cardzzs[0]).marginRight);

    // Loop through each cardzz to set its position and appearance
    cardzzs.forEach((cardzz, i) => {
        cardzz.classList.remove('left', 'active', 'right');
        cardzz.style.transition = 'transform 0.3s ease, opacity 0.3s ease, box-shadow 0.3s ease'; // Smooth transitions
		cardzz.style.display = 'flex'; // Ensure flexbox is applied
        cardzz.style.flexDirection = 'column'; // Keep children centered in column direction
        cardzz.style.justifyContent = 'center'; // Vertical centering

        if (i === currentIndex) {
            // Active cardzz (center)
            cardzz.classList.add('active');
            cardzz.style.transform = 'scale(1.2)';
            cardzz.style.opacity = '1';
            cardzz.style.boxShadow = '0 20px 40px rgba(0, 0, 0, 0.3)';
            cardzz.style.display = 'block';
        } else if (i === (currentIndex - 1 + totalcardzzs) % totalcardzzs) {
            // Left cardzz
            cardzz.classList.add('left');
            cardzz.style.transform = 'scale(0.85)';
            cardzz.style.opacity = '0.8';
            cardzz.style.display = 'block';
        } else if (i === (currentIndex + 1) % totalcardzzs) {
            // Right cardzz
            cardzz.classList.add('right');
            cardzz.style.transform = 'scale(0.85)';
            cardzz.style.opacity = '0.8';
            cardzz.style.display = 'block';
        } else {
            // Hide non-adjacent cardzzs
            cardzz.style.transform = 'scale(0)';
            cardzz.style.opacity = '0';
            cardzz.style.display = 'none';
        }
    });

    // Special case for wrapping around


}

// Move to the next cardzz
function moveToNextcardzz() {
    // Move to the next cardzz and wrap back to the first if at the end
    if (currentIndex === totalcardzzs - 1) {
        currentIndex = 0; // Wrap to the first cardzz
    } else {
        currentIndex++; // Move to the next cardzz
    }
    updatecardzzs(); // Update cardzz positions
}

// Move to the previous cardzz
function moveToPrevcardzz() {
    // Move to the previous cardzz and wrap back to the last if at the beginning
    if (currentIndex === 0) {
        currentIndex = totalcardzzs - 1; // Wrap to the last cardzz
    } else {
        currentIndex--; // Move to the previous cardzz
    }
    updatecardzzs(); // Update cardzz positions
}


// Event listeners for arrows
rightArrow.addEventListener('click', () => {
    moveToNextcardzz();
    resetAutoSwipe();
});

leftArrow.addEventListener('click', () => {
    moveToPrevcardzz();
    resetAutoSwipe();
});

// Pause autoplay on hover
cardzzsContainer.addEventListener('mouseover', () => {
    clearInterval(autoSwipeInterval);
});

cardzzsContainer.addEventListener('mouseleave', () => {
    autoSwipe();
});

// Auto swipe function
function autoSwipe() {
    autoSwipeInterval = setInterval(moveToNextcardzz, 3000);
}

// Reset auto swipe
function resetAutoSwipe() {
    clearInterval(autoSwipeInterval);
    autoSwipe();
}

// Touch swipe support for mobile
let startX;
cardzzsContainer.addEventListener('touchstart', (e) => {
    startX = e.touches[0].clientX;
});

cardzzsContainer.addEventListener('touchmove', (e) => {
    const deltaX = e.touches[0].clientX - startX;
    if (deltaX > 50) {
        moveToPrevcardzz();
        resetAutoSwipe();
    } else if (deltaX < -50) {
        moveToNextcardzz();
        resetAutoSwipe();
    }
});

// Initial setup and mobile responsiveness
window.addEventListener('resize', updatecardzzs);

				updatecardzzs();
                autoSwipe();

       
      })
      .catch(error => {
        console.error('Error loading quizzes:', error);
       
      });
  
  
  
  
  
  
  
  
 
// Initial setup



  let breadcrumbs = [];
        let categoryHistory = []; // To track navigation history

        // Function to fetch and display C1 categories
        function fetchC1Categories() {
                showLoading(true);
                breadcrumbs = []; // Clear breadcrumbs
                categoryHistory = []; // Clear history
                updateBreadcrumbs(); // Update breadcrumbs
                renderCategoryButtons(grab.categories); // Render C1 categories
                showLoading(false);
        }

        // Function to fetch subcategories and display them
        function fetchSubCategories(categoryPath) {
            showLoading(true);
            fetch(`../api/?action=getQuizzes&limit=10&offset=0&details=${categoryPath}`) // Replace with your actual endpoint and filter
            .then(response => response.json())
            .then(data => {
                breadcrumbs.push(categoryPath); // Add to breadcrumbs
                categoryHistory.push(categoryPath); // Add to history
                updateBreadcrumbs(); // Update breadcrumbs

                if (data.subcategories && data.subcategories.length > 0) {
                    renderCategoryButtons(data.subcategories);
                } else {
                    window.open(`../explore/?details=${categoryPath}`, "_blank");
					fetchC1Categories();
                }
                showLoading(false);
            });
        }

        // Function to render category buttons
        function renderCategoryButtons(categories) {
            let container = document.getElementById('category-container');
            container.innerHTML = ''; // Clear container
            container.classList.remove('fade-in');
            
            setTimeout(() => {
                categories.forEach(category => {
                    let btn = document.createElement('button');
                    btn.innerHTML = category;
                    btn.className = 'category-button';
                    btn.onclick = () => fetchSubCategories(categoryHistory.length > 0 ? categoryHistory[categoryHistory.length - 1] + ':' + category : category);
                    container.appendChild(btn);
                });
                container.classList.add('fade-in');
                
                // Show back button if we are not at the root level
                if (categoryHistory.length > 0) {
                    document.getElementById('back-button').style.display = 'inline-block';
                } else {
                    document.getElementById('back-button').style.display = 'none';
                }
            }, 100); // Smooth transition delay
        }

        // Function to navigate back to the previous level
        function goBack() {
            categoryHistory.pop(); // Remove the last category from history
            if (categoryHistory.length === 0) {
                fetchC1Categories(); // Go back to C1 categories
            } else {
                fetchSubCategories(categoryHistory[categoryHistory.length - 1]);
            }
        }

        // Function to display loading state
        function showLoading(isLoading) {
            const loadingElem = document.getElementById('loading');
            loadingElem.style.display = isLoading ? 'block' : 'none';
        }

        // Function to update breadcrumbs navigation
        function updateBreadcrumbs() {
            let breadcrumbContainer = document.getElementById('breadcrumbs');
            breadcrumbContainer.innerHTML = ''; // Clear breadcrumbs
            
            breadcrumbs.forEach((crumb, index) => {
                let link = document.createElement('a');
                link.href = '#';
                link.innerHTML = crumb;
                link.onclick = (e) => {
                    e.preventDefault();
                    breadcrumbs = breadcrumbs.slice(0, index + 1); // Trim breadcrumbs
                    categoryHistory = categoryHistory.slice(0, index + 1); // Trim history
                    fetchSubCategories(breadcrumbs.join(':')); // Fetch up to this category level
                };
                breadcrumbContainer.appendChild(link);

                if (index < breadcrumbs.length - 1) {
                    breadcrumbContainer.innerHTML += ' > ';
                }
            });
        }

        




	</script>
</body>

</html>