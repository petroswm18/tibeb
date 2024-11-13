<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Explore Quizzes with tibeb</title>
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




/*      ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^    */

/* Breadcrumb container styling */
.breadcrumb-container {
    display: flex;
    justify-content: center;
    margin: 20px 0;
    font-size: 1.2rem;
    color: #555;
    font-family: Arial, sans-serif;
}

/* Styling for individual breadcrumb elements */
.breadcrumb {
    margin: 0 5px;
    position: relative;
    cursor: pointer;
    transition: color 0.3s ease;
}

/* Arrow after breadcrumbs */
.breadcrumb:after {
    content: '>';
    margin-left: 5px;
    color: #999;
}

/* Last breadcrumb without arrow */
.breadcrumb:last-child:after {
    content: '';
}

/* Hover effect on breadcrumbs */
.breadcrumb:hover {
    color: #3498db;
}

/* Styling for last category heading */
.last-category-heading {
    text-align: center;
    font-size: 2.5rem;
    font-weight: 700;
    margin-top: 10px;
    color: #333;
    text-transform: uppercase;
    animation: zoomIn 0.5s ease;
}

/* Zoom-in animation for last category heading */
@keyframes zoomIn {
    0% {
        transform: scale(0.8);
        opacity: 0;
    }
    100% {
        transform: scale(1);
        opacity: 1;
    }
}

/* Breadcrumb hover underline effect */
.breadcrumb:hover::after {
    content: ' ';
    height: 2px;
    width: 100%;
    position: absolute;
    bottom: -3px;
    left: 0;
    background-color: #3498db;
}

/* Responsive styling */
@media (max-width: 768px) {
    .breadcrumb-container {
        font-size: 1rem;
    }
    .last-category-heading {
        font-size: 2rem;
    }
}
@media (max-width: 480px) {
    .breadcrumb-container {
        font-size: 0.9rem;
    }
    .last-category-heading {
        font-size: 1.5rem;
    }
}



/* Base Styling */
.button-container {
  width: 100%;
  text-align: center;
  margin: 10px 0;
}

.button-wrapper {
  display: flex;
  flex-wrap: wrap;
  overflow: hidden;
  max-height: 80px; /* Initial height limit */
  transition: max-height 0.3s ease;
}

.button-wrapper.expanded {
      max-height: 9000px; /* Adjust to show all buttons */
}



.toggle-button {
  background: none;
  border: none;
  color: blue;
  cursor: pointer;
  margin-top: 10px;
  font-size: 16px;
}

/* Mobile Optimization */
@media (max-width: 600px) {
  .button-wrapper {
    max-height: 114px; /* Increase height slightly for mobile */
  }

 

  .toggle-button {
    font-size: 14px;
  }
}

@media (max-width: 400px) {
  .button-wrapper {
    max-height: 114px; /* Further adjust for smaller screens */
  }


  .toggle-button {
    font-size: 12px;
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
                                <li class="rbt-breadcrumb-item active">Explore Quizzes</li>
                            </ul>
                            <!-- End Breadcrumb Area  -->

                            <div id="mct" class=" title-wrapper">
                                <h1 class="title mb--0">Explore Quizzes</h1>
                                <a href="#" class="rbt-badge-2">
                                    <div class="image">🎉</div> 1000+ Quizzes
                                </a>
                            </div>

                            <p id="mct1" class="description">Quizzes that help beginners become true unicorns. </p>
							
							
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
                                        <input id="finput" type="text" placeholder="Search a quiz topic">
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
						   <div class="button-container">
                            <div class="button-wrapper">
                            <div id="catg" class="rbt-portfolio-filter filter-button-default messonry-button text-start justify-content-start">
                               
                            </div>
                            </div>
							<br>
							 <button id="tgb" class="rbt-btn btn-gradient hover-icon-reverse" onclick="toggleButtons()">See More ▼</button>
                            </div>
                        </div><br><br>
						<div class="col-lg-12">
                               <div class="breadcrumb-container"></div>
                               
                        </div>
                    </div>


                </div>
            </div>
            <!-- End Course Top  -->
        </div>
    </div>
<br>
    <div class="rbt-section-overlayping-top rbt-section-gapBottom masonary-wrapper-activation">
        <div class="container">
            <!-- Start Card Area -->
            <div class="row row--15">
                <div class="col-lg-15">
                    <div class="rbt-course-grid-column grid-metro2" id="quizlist">
                     
                    </div>
					<div id="loading-spinner" style="display: none;">Loading more quizzes...</div>
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
	
	

function getUrlParameter(name) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(name);
}

const details = getUrlParameter('details');

// If 'details' exists in the URL, split it into categories and display
if (details) {
   displayCategoryBreadcrumbs(details);
}
else{
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
		agg+='<a data-filter=".cat--'+fd+'" href="../explore/?category='+dat[i].category+'" target="_blank"><span class="filter-text">'+dat[i].category+'</span><span class="course-number">'+dat[i].quiz_count+'</span></button>';
	}
	document.getElementById("catg").innerHTML=agg;
})
.catch(error => console.error('Error:', error));

}

	

	
	function list(arr,v){
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
		
    fetch(`../api/?action=getQuizzes&limit=${limit}&offset=${offset}`+cpp)
      .then(response => response.json())
      .then(data => {
        var quizContainer = document.getElementById('quizlist');
        var xc=1;
		
		
		
		
        // Append quizzes to the container
        data.quizzes.forEach(quiz => {
			
			if(!dj.includes(quiz.code)){
				dj.push(quiz.code);
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
  
  
  // Function to display category path as breadcrumbs and last category as heading
function displayCategoryBreadcrumbs(categoryPath) {
	categoryPath=categoryPath.split(":");
    const breadcrumbContainer = document.querySelector('.breadcrumb-container');
    const lastCategoryHeading = document.getElementById('mct');
    
    // Clear previous breadcrumbs and heading
    breadcrumbContainer.innerHTML = '';
    lastCategoryHeading.innerHTML = '';

    // Create breadcrumbs
	 const breadcrumb = document.createElement('ul');
	 breadcrumb.className = 'page-list';
    categoryPath.forEach((category, index) => {
        
        breadcrumb.innerHTML += `<li class="rbt-breadcrumb-item"><b>${category}</b></li>`;
		
		
        
        // Add arrow between breadcrumbs, except for the last one
        if (index < categoryPath.length - 1) {
            breadcrumb.innerHTML += ` <li>
                                    <div class="icon-right"><i class="feather-chevron-right"></i></div>
                                </li> `;
        }

        // Append to breadcrumb container
        breadcrumbContainer.appendChild(breadcrumb);
    });

    // Display the last category as a heading
    const lastCategory = categoryPath[categoryPath.length - 1];
    lastCategoryHeading.innerHTML = `<h1 class="title mb--0">`+lastCategory+`</h1>`;
	document.querySelector('.button-container').style.display="none";
}



  // Initial load
  loadQuizzes();

  // Load more button event
  window.addEventListener('scroll', handleScroll);
  
  
  
  function toggleButtons() {
  const buttonWrapper = document.querySelector('.button-wrapper');
  const toggleButton = document.getElementById('tgb');
  
  buttonWrapper.classList.toggle('expanded');
  
  if (buttonWrapper.classList.contains('expanded')) {
    toggleButton.innerHTML = 'See Less ▲';
	
	
  } else {
    toggleButton.innerHTML = 'See More ▼';
  }
}



	</script>
</body>

</html>