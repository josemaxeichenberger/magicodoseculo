<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Mágico do Século</title>
  <!-- Google Font Api KEY-->
  <meta name="google_font_api" content="AIzaSyBG58yNdAjc20_8jAvLNSVi9E4Xhwjau_k">
  
  <!-- Favicon -->
  <link rel="shortcut icon" href="./assets/identidade/002.png" />  
  <!-- Library / Plugin Css Build -->
  <link rel="stylesheet" href="./assets/css/core/libs.min.css" />
  
  <!-- font-awesome css -->
  <link rel="stylesheet" href="./assets/vendor/font-awesome/css/all.min.css" />
  
  <!-- Iconly css -->
  <link rel="stylesheet" href="./assets/vendor/iconly/css/style.css" />
  
  <!-- Animate css -->
  <link rel="stylesheet" href="./assets/vendor/animate.min.css" />
  
  
  
  
  
  
  <!-- Streamit Design System Css -->
  <link rel="stylesheet" href="./assets/css/streamit.min.css?v=5.2.1" />
  
  <!-- Custom Css -->
  <link rel="stylesheet" href="./assets/css/custom.min.css?v=5.2.1" />
  
  <!-- Rtl Css -->
  <link rel="stylesheet" href="./assets/css/rtl.min.css?v=5.2.1" />
  
  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300&display=swap" rel="stylesheet">
  
</head>

<body class=" custom-header-relative ">
  <span class="screen-darken"></span>
  <!-- loader Start -->
   <!-- loader Start -->
  <div class="loader simple-loader">
     <div class="loader-body">
        <img src="./assets/images/loader.gif" alt="loader" class="img-fluid " width="300">
      </div>
  </div>
  <!-- loader END -->  <!-- loader END -->
  <main class="main-content">
<?php include('./header.php') ?>
      <!--bread-crumb-->
      <!--bread-crumb-->

<section class="section-padding-bottom">
    <div class="profile-box">
        <div class="container-fluid">
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-2">
                <div class="d-flex align-items-center gap-3">
                    <div class="account-logo d-flex align-items-center position-relative">
                        <img src="./assets/images/pages/profile.webp" class="img-fluid object-cover rounded-3" alt="profile">
                        <i class="fa-regular fa-pen-to-square"></i>
                    </div>
                    <div>
                        <h6 class="font-size-18 text-capitalize text-white fw-500">admin</h6>
                        <span class="font-size-14 text-white fw-500">admin@admin.com</span>
                    </div>
                </div>
                <div class="iq-button">
                    <a href="pricing-plan.html" class="btn text-uppercase position-relative">
                        <span class="button-text">Subscription</span>
                        <i class="fa-solid fa-play"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="tabs">
        <div class="container-fluid">
            <div class="content-details iq-custom-tab-style-two">
                <ul class="d-flex justify-content-center nav nav-pills tab-header" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active show" data-bs-toggle="pill" href="#playlist" role="tab" aria-selected="true">Playlist</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="pill" href="#watchlist" role="tab" aria-selected="false">Watchlist</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="pill" href="#favorites" role="tab" aria-selected="false">Favorites</a>
                    </li>
                </ul>
                <div class="tab-content px-0">
                    <div id="playlist" class="tab-pane animated fadeInUp active show" role="tabpanel">
                        <div class="overflow-hidden">
                            <div class="d-flex align-items-center justify-content-between my-4">
                                <h5 class="main-title text-capitalize mb-0">My playlist</h5>
                            </div>
                            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
                                <div class="col mb-4">
                                    <div class="watchlist-warpper card-hover-style-two">
                                        <div class="block-images position-relative w-100">
                                            <div class="img-box">
                                                <a href="watchlist-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                                <img src="./assets/images/movies/playlist/01.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                            </div>
                                            <div class="card-description">
                                                <h5 class="text-capitalize fw-500"> <a href="">Play List 1</a> </h5>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="d-flex align-items-center gap-1 font-size-12">
                                                        <i class="fa-solid fa-earth-americas text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">Public</span>
                                                    </div>
                                                    <div class="d-flex align-items-center gap-1 font-size-12">
                                                        <i class="fa-regular fa-eye text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">3 Views</span>
                                                    </div>
                                                    
                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-4">
                                    <div class="watchlist-warpper card-hover-style-two">
                                        <div class="block-images position-relative w-100">
                                            <div class="img-box">
                                                <a href="watchlist-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                                <img src="./assets/images/movies/playlist/02.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                            </div>
                                            <div class="card-description">
                                                <h5 class="text-capitalize fw-500"> <a href="">Play List 2</a> </h5>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="d-flex align-items-center gap-1 font-size-12">
                                                        <i class="fa-solid fa-earth-americas text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">Private</span>
                                                    </div>
                                                    <div class="d-flex align-items-center gap-1 font-size-12">
                                                        <i class="fa-regular fa-eye text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">1 Views</span>
                                                    </div>
                                                    
                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-4">
                                    <div class="watchlist-warpper card-hover-style-two">
                                        <div class="block-images position-relative w-100">
                                            <div class="img-box">
                                                <a href="watchlist-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                                <img src="./assets/images/movies/playlist/03.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                            </div>
                                            <div class="card-description">
                                                <h5 class="text-capitalize fw-500"> <a href="">Play List 3</a> </h5>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="d-flex align-items-center gap-1 font-size-12">
                                                        <i class="fa-solid fa-earth-americas text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">Public</span>
                                                    </div>
                                                    <div class="d-flex align-items-center gap-1 font-size-12">
                                                        <i class="fa-regular fa-eye text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">10 Views</span>
                                                    </div>
                                                    
                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-4">
                                    <div class="watchlist-warpper card-hover-style-two">
                                        <div class="block-images position-relative w-100">
                                            <div class="img-box">
                                                <a href="watchlist-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                                <img src="./assets/images/movies/playlist/04.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                            </div>
                                            <div class="card-description">
                                                <h5 class="text-capitalize fw-500"> <a href="">Play List 4</a> </h5>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="d-flex align-items-center gap-1 font-size-12">
                                                        <i class="fa-solid fa-earth-americas text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">Public</span>
                                                    </div>
                                                    <div class="d-flex align-items-center gap-1 font-size-12">
                                                        <i class="fa-regular fa-eye text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">30 Views</span>
                                                    </div>
                                                    
                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-4">
                                    <div class="watchlist-warpper card-hover-style-two">
                                        <div class="block-images position-relative w-100">
                                            <div class="img-box">
                                                <a href="watchlist-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                                <img src="./assets/images/movies/playlist/05.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                            </div>
                                            <div class="card-description">
                                                <h5 class="text-capitalize fw-500"> <a href="">Play List 5</a> </h5>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="d-flex align-items-center gap-1 font-size-12">
                                                        <i class="fa-solid fa-earth-americas text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">Private</span>
                                                    </div>
                                                    <div class="d-flex align-items-center gap-1 font-size-12">
                                                        <i class="fa-regular fa-eye text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">2 Views</span>
                                                    </div>
                                                    
                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-4">
                                    <div class="watchlist-warpper card-hover-style-two">
                                        <div class="block-images position-relative w-100">
                                            <div class="img-box">
                                                <a href="watchlist-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                                <img src="./assets/images/movies/playlist/06.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                            </div>
                                            <div class="card-description">
                                                <h5 class="text-capitalize fw-500"> <a href="">Play List 6</a> </h5>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="d-flex align-items-center gap-1 font-size-12">
                                                        <i class="fa-solid fa-earth-americas text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">Public</span>
                                                    </div>
                                                    <div class="d-flex align-items-center gap-1 font-size-12">
                                                        <i class="fa-regular fa-eye text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">10 Views</span>
                                                    </div>
                                                    
                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-4">
                                    <div class="watchlist-warpper card-hover-style-two">
                                        <div class="block-images position-relative w-100">
                                            <div class="img-box">
                                                <a href="watchlist-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                                <img src="./assets/images/movies/playlist/07.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                            </div>
                                            <div class="card-description">
                                                <h5 class="text-capitalize fw-500"> <a href="">Play List 7</a> </h5>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="d-flex align-items-center gap-1 font-size-12">
                                                        <i class="fa-solid fa-earth-americas text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">Public</span>
                                                    </div>
                                                    <div class="d-flex align-items-center gap-1 font-size-12">
                                                        <i class="fa-regular fa-eye text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">50 Views</span>
                                                    </div>
                                                    
                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <div class="iq-button">
                                    <button type="button" class="btn text-uppercase position-relativ" data-bs-toggle="modal" data-bs-target="#addNewPlaylist">
                                        <span class="button-text">Create Playlist</span>
                                        <i class="fa-solid fa-play"></i>
                                    </button>
                                </div>                                
                            </div>
                        </div>
                    </div>
                    <div id="watchlist" class="tab-pane animated fadeInUp" role="tabpanel">
                        <div class="overflow-hidden">
                            <div class="d-flex align-items-center justify-content-between my-4">
                                <h5 class="main-title text-capitalize mb-0">My watchlist</h5>
                            </div>
                           <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
                                <div class="col mb-4">
                                    <div class="watchlist-warpper card-hover-style-two">
                                        <div class="block-images position-relative w-100">
                                            <div class="img-box">
                                                <a href="watchlist-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                                <img src="./assets/images/movies/playlist/01.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                            </div>
                                            <div class="card-description">
                                                <h5 class="text-capitalize fw-500"> <a href="">Play List 1</a> </h5>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="d-flex align-items-center gap-1 font-size-12">
                                                        <i class="fa-solid fa-earth-americas text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">Public</span>
                                                    </div>
                                                    <div class="d-flex align-items-center gap-1 font-size-12">
                                                        <i class="fa-regular fa-eye text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">3 Views</span>
                                                    </div>
                                                    
                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-4">
                                    <div class="watchlist-warpper card-hover-style-two">
                                        <div class="block-images position-relative w-100">
                                            <div class="img-box">
                                                <a href="watchlist-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                                <img src="./assets/images/movies/playlist/02.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                            </div>
                                            <div class="card-description">
                                                <h5 class="text-capitalize fw-500"> <a href="">Play List 2</a> </h5>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="d-flex align-items-center gap-1 font-size-12">
                                                        <i class="fa-solid fa-earth-americas text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">Private</span>
                                                    </div>
                                                    <div class="d-flex align-items-center gap-1 font-size-12">
                                                        <i class="fa-regular fa-eye text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">1 Views</span>
                                                    </div>
                                                    
                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-4">
                                    <div class="watchlist-warpper card-hover-style-two">
                                        <div class="block-images position-relative w-100">
                                            <div class="img-box">
                                                <a href="watchlist-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                                <img src="./assets/images/movies/playlist/03.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                            </div>
                                            <div class="card-description">
                                                <h5 class="text-capitalize fw-500"> <a href="">Play List 3</a> </h5>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="d-flex align-items-center gap-1 font-size-12">
                                                        <i class="fa-solid fa-earth-americas text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">Public</span>
                                                    </div>
                                                    <div class="d-flex align-items-center gap-1 font-size-12">
                                                        <i class="fa-regular fa-eye text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">10 Views</span>
                                                    </div>
                                                    
                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-4">
                                    <div class="watchlist-warpper card-hover-style-two">
                                        <div class="block-images position-relative w-100">
                                            <div class="img-box">
                                                <a href="watchlist-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                                <img src="./assets/images/movies/playlist/04.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                            </div>
                                            <div class="card-description">
                                                <h5 class="text-capitalize fw-500"> <a href="">Play List 4</a> </h5>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="d-flex align-items-center gap-1 font-size-12">
                                                        <i class="fa-solid fa-earth-americas text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">Public</span>
                                                    </div>
                                                    <div class="d-flex align-items-center gap-1 font-size-12">
                                                        <i class="fa-regular fa-eye text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">30 Views</span>
                                                    </div>
                                                    
                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <div class="iq-button">
                                    <button type="button" class="btn text-uppercase position-relativ" data-bs-toggle="modal" data-bs-target="#addNewPlaylist">
                                        <span class="button-text">Create Watchlist</span>
                                        <i class="fa-solid fa-play"></i>
                                    </button>
                                </div>                                
                            </div>
                        </div>
                    </div>
                    <div id="favorites" class="tab-pane animated fadeInUp" role="tabpanel">
                        <div class="overflow-hidden">
                            <div class="d-flex align-items-center justify-content-between my-4">
                                <h5 class="main-title text-capitalize mb-0">My favourite</h5>
                            </div>
                            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
                                <div class="col mb-4">
                                    <div class="watchlist-warpper card-hover-style-two">
                                        <div class="block-images position-relative w-100">
                                            <div class="img-box">
                                                <a href="watchlist-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                                <img src="./assets/images/movies/playlist/01.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                            </div>
                                            <div class="card-description">
                                                <h5 class="text-capitalize fw-500"> <a href="">Play List 1</a> </h5>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="d-flex align-items-center gap-1 font-size-12">
                                                        <i class="fa-solid fa-earth-americas text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">Public</span>
                                                    </div>
                                                    <div class="d-flex align-items-center gap-1 font-size-12">
                                                        <i class="fa-regular fa-eye text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">3 Views</span>
                                                    </div>
                                                    
                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-4">
                                    <div class="watchlist-warpper card-hover-style-two">
                                        <div class="block-images position-relative w-100">
                                            <div class="img-box">
                                                <a href="watchlist-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                                <img src="./assets/images/movies/playlist/02.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                            </div>
                                            <div class="card-description">
                                                <h5 class="text-capitalize fw-500"> <a href="">Play List 2</a> </h5>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="d-flex align-items-center gap-1 font-size-12">
                                                        <i class="fa-solid fa-earth-americas text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">Private</span>
                                                    </div>
                                                    <div class="d-flex align-items-center gap-1 font-size-12">
                                                        <i class="fa-regular fa-eye text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">1 Views</span>
                                                    </div>
                                                    
                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-4">
                                    <div class="watchlist-warpper card-hover-style-two">
                                        <div class="block-images position-relative w-100">
                                            <div class="img-box">
                                                <a href="watchlist-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                                <img src="./assets/images/movies/playlist/03.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                            </div>
                                            <div class="card-description">
                                                <h5 class="text-capitalize fw-500"> <a href="">Play List 3</a> </h5>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="d-flex align-items-center gap-1 font-size-12">
                                                        <i class="fa-solid fa-earth-americas text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">Public</span>
                                                    </div>
                                                    <div class="d-flex align-items-center gap-1 font-size-12">
                                                        <i class="fa-regular fa-eye text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">10 Views</span>
                                                    </div>
                                                    
                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-4">
                                    <div class="watchlist-warpper card-hover-style-two">
                                        <div class="block-images position-relative w-100">
                                            <div class="img-box">
                                                <a href="watchlist-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                                <img src="./assets/images/movies/playlist/04.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                            </div>
                                            <div class="card-description">
                                                <h5 class="text-capitalize fw-500"> <a href="">Play List 4</a> </h5>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="d-flex align-items-center gap-1 font-size-12">
                                                        <i class="fa-solid fa-earth-americas text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">Public</span>
                                                    </div>
                                                    <div class="d-flex align-items-center gap-1 font-size-12">
                                                        <i class="fa-regular fa-eye text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">30 Views</span>
                                                    </div>
                                                    
                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-4">
                                    <div class="watchlist-warpper card-hover-style-two">
                                        <div class="block-images position-relative w-100">
                                            <div class="img-box">
                                                <a href="watchlist-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                                <img src="./assets/images/movies/playlist/05.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                            </div>
                                            <div class="card-description">
                                                <h5 class="text-capitalize fw-500"> <a href="">Play List 5</a> </h5>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="d-flex align-items-center gap-1 font-size-12">
                                                        <i class="fa-solid fa-earth-americas text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">Private</span>
                                                    </div>
                                                    <div class="d-flex align-items-center gap-1 font-size-12">
                                                        <i class="fa-regular fa-eye text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">2 Views</span>
                                                    </div>
                                                    
                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-4">
                                    <div class="watchlist-warpper card-hover-style-two">
                                        <div class="block-images position-relative w-100">
                                            <div class="img-box">
                                                <a href="watchlist-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                                <img src="./assets/images/movies/playlist/06.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                            </div>
                                            <div class="card-description">
                                                <h5 class="text-capitalize fw-500"> <a href="">Play List 6</a> </h5>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="d-flex align-items-center gap-1 font-size-12">
                                                        <i class="fa-solid fa-earth-americas text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">Public</span>
                                                    </div>
                                                    <div class="d-flex align-items-center gap-1 font-size-12">
                                                        <i class="fa-regular fa-eye text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">10 Views</span>
                                                    </div>
                                                    
                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col mb-4">
                                    <div class="watchlist-warpper card-hover-style-two">
                                        <div class="block-images position-relative w-100">
                                            <div class="img-box">
                                                <a href="watchlist-detail.html" class="position-absolute top-0 bottom-0 start-0 end-0"></a>
                                                <img src="./assets/images/movies/playlist/07.webp" alt="movie-card" class="img-fluid object-cover w-100 d-block border-0">
                                            </div>
                                            <div class="card-description">
                                                <h5 class="text-capitalize fw-500"> <a href="">Play List 7</a> </h5>
                                                <div class="d-flex align-items-center gap-3">
                                                    <div class="d-flex align-items-center gap-1 font-size-12">
                                                        <i class="fa-solid fa-earth-americas text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">Public</span>
                                                    </div>
                                                    <div class="d-flex align-items-center gap-1 font-size-12">
                                                        <i class="fa-regular fa-eye text-primary"></i>
                                                        <span class="text-body fw-semibold text-capitalize">50 Views</span>
                                                    </div>
                                                    
                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <div class="iq-button">
                                    <button type="button" class="btn text-uppercase position-relativ" data-bs-toggle="modal" data-bs-target="#addNewPlaylist">
                                        <span class="button-text">Create Playlist</span>
                                        <i class="fa-solid fa-play"></i>
                                    </button>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="addNewPlaylist" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content border-0">
      <div class="modal-header border-0">
        <div>
            <h1 class="modal-title text-capitalize fs-5 fw-500">Create new Playlist</h1>
            <p class="mb-0">Please fill in all information below to create new playlist.</p>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-group">
                <label class="text-white fw-500 mb-2">Name *</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label class="text-white fw-500 mb-2">Description</label>
                <textarea class="form-control" cols="5"></textarea>
            </div>
            <div class="form-group">
                <label class="text-white fw-500 mb-2">Privacy</label>
                <select class="form-control">
                    <option>Public</option>
                    <option>Private</option>
                </select>
            </div>
            <div class="form-group">
                <label class="text-white fw-500">Playlist Thumbnail</label>
                <small class="d-block my-2">Support *.webp, *webp, *.gif, *.webp. Maximun upload file size: 5mb.</small>
                <input type="file" class="form-control">
            </div>
            <div class="form-group d-flex align-items-center gap-3">
                <button class="btn btn-sm btn-light text-uppercase fw-medium">cancel</button>
                <button class="btn btn-sm btn-primary text-uppercase fw-medium">save</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>

  </main>


  <?php include('./footer.php') ?>

  <div id="back-to-top" style="display: none;">
     <a class="p-0 btn bg-primary btn-sm position-fixed top border-0 rounded-circle text-white" id="top" href="#top">
        <i class="fa-solid fa-chevron-up"></i>
     </a>
  </div>
  <!-- Wrapper End-->
  <!-- Library Bundle Script -->
  <script src="./assets/js/core/libs.min.js"></script>
  <!-- Plugin Scripts -->
  
  
  
  
  
  
  <!-- Lodash Utility -->
  <script src="./assets/vendor/lodash/lodash.min.js"></script>
  <!-- External Library Bundle Script -->
  <script src="./assets/js/core/external.min.js"></script>
  <!-- countdown Script -->
  <script src="./assets/js/plugins/countdown.js"></script>
  <!-- utility Script -->
  <script src="./assets/js/utility.js"></script>
  <!-- Setting Script -->
  <script src="./assets/js/setting.js"></script>
  <script src="./assets/js/setting-init.js" defer></script>
  <!-- Streamit Script -->
  <script src="./assets/js/streamit.js" defer></script>
  <script src="./assets/js/swiper.js" defer></script>
</body>

</html>