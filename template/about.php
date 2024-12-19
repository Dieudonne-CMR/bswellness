<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from html.vecurosoft.com/cannabo/demo/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Nov 2024 09:53:46 GMT -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?= $nom_entreprise ?> | A Propos</title>
  <meta name="author" content="vecuro">
  <meta name="description" content="<?=$decription_entreprise?>">
  <meta name="keywords" content="<?=$decription_entreprise?>" />
  <meta name="robots" content="INDEX,FOLLOW">
  <!-- Mobile Specific Metas -->

   <?php include "includes/style.php" ?>

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicons - Place favicon.ico in the root directory -->
  <link rel="apple-touch-icon" sizes="57x57" href="<?=$lien_logo.$logo?>">
  <link rel="apple-touch-icon" sizes="60x60" href="<?=$lien_logo.$logo?>">
  <link rel="apple-touch-icon" sizes="72x72" href="<?=$lien_logo.$logo?>">
  <link rel="apple-touch-icon" sizes="76x76" href="<?=$lien_logo.$logo?>">
  <link rel="apple-touch-icon" sizes="114x114" href="<?=$lien_logo.$logo?>">
  <link rel="apple-touch-icon" sizes="120x120" href="<?=$lien_logo.$logo?>">
  <link rel="apple-touch-icon" sizes="144x144" href="<?=$lien_logo.$logo?>">
  <link rel="apple-touch-icon" sizes="152x152" href="<?=$lien_logo.$logo?>">
  <link rel="apple-touch-icon" sizes="180x180" href="<?=$lien_logo.$logo?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?=$lien_logo.$logo?>">
  <link rel="icon" type="image/png" sizes="96x96" href="<?=$lien_logo.$logo?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?=$lien_logo.$logo?>">
  <link rel="manifest" href="assets/img/favicons/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?=$lien_logo.$logo?>">
  <meta name="theme-color" content="#ffffff">
  <!--==============================
	  Google Fonts
	============================== -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Epilogue:ital,wght@0,100..900;1,100..900&amp;family=Jost:ital,wght@0,100..900;1,100..900&amp;display=swap" rel="stylesheet">
  <!--==============================
	    All CSS File
	============================== -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <!-- Fontawesome Icon -->
  <link rel="stylesheet" href="assets/css/fontawesome.min.css">
  <!-- Magnific Popup -->
  <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
  <!-- Nice Select -->
  <link rel="stylesheet" href="assets/css/nice-select.min.css">
  <!-- Slick Slider -->
  <link rel="stylesheet" href="assets/css/slick.min.css">
  <!--Jquery UI -->
  <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
  <!-- Theme Custom CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <!--[if lte IE 9]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
  <!--********************************
   		Code Start From Here 
	******************************** -->
  <!--==============================
	Preloader
	==============================-->
  <?php include "includes/header.php" ?>
  <!-- breadcumb -->
  <section class="z-index-common breadcumb-wrapper" data-bg-src="<?=$image_banniere.$banniere2?>">
    <div class="container">
      <div class="row justify-content-between align-items-center">
        <div class="col-auto">
          <div class="breadcumb-content">
            <h1 class="breadcumb-title">À propos de nous</h1>
            <div class="breadcumb-menu-wrap">
              <ul class="breadcumb-menu">
                <li><a href="home">Acceuil</a></li>
                <li>À propos de nous</li>
              </ul>
            </div>
          </div>
        </div> 
      </div>
    </div>
  </section>
  <!-- breadcumb End assets/img/bg/b-1-3.png-->
  <!-- About Area Start  -->
  <section class="about-layout1 space-top z-index-common space-extra-bottom">
    <img src="assets/img/about/about-ele1-1.png" alt="about element" class="about-ele1">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mb-30">
          <div class="img-box1">
            <div class="img1">
              <img class="img" src="<?=$image_banniere.$image_about?>" alt="about 1 1">
            </div>
            <div class="video-thumb1">
              <img class="img" src="<?=$image_banniere.$banniere1?>" alt="about 2 2" style="width: 22rem;">
              <a href="https://www.youtube.com/watch?v=zX-jSCDsJ8E" class="play-btn style7 popup-video" tabindex="0"><i
                class="fas fa-play"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mb-30">
          <div class="about-content1">
            <div class="title-area">
              <span class="sec-subtitle">Bienvenue Chez <?= $nom_entreprise ?></span>
              
              <p class="about-text"> <?= $apropos_entreprise ?> </p>
            </div>
            <div class="about-body">
             <!-- <p class="about-text">There are many variations of passages of Lorem Ipsum available, bhe mred aln ine form,
                by injected humour, or randomised words which don't look even slilievable. If youre going to use a passage
                of variations of passages of lorem.</p> -->
             <?php /* <div class="list-style1">
                <ul>
                  <li><i><img src="assets/img/icons/shield.png" alt="shield"></i>100% huile de cannabis</li>
                  <li><i><img src="assets/img/icons/marijuana.png" alt="shield"></i>Ingrédients à base de plantes</li>
                  <li><i><img src="assets/img/icons/microscope.png" alt="shield"></i>Testé en laboratoire par un tiers</li>
                </ul>
              </div> */ ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- About Area End  -->
  <!-- Review Area -->
  <?php /*<section class="space-bottom">
    <div class="container">
      <div class="position-relative">
        <div class="review-wrap">
          <div class="row g-md-3 align-items-center justify-content-center justify-content-lg-between">
            <div class="col-lg-8">
              <div class="review-content">
                <div class="review-content__left">
                  <div class="review-logo">
                    <img src="assets/img/logos/l-1-2.png" alt="logo">
                  </div>
                </div>
                <div class="review-content__right">
                  <h2 class="review-title h3">Spécialiste n°1 du <?= $nom_entreprise ?></h2>
                  <p class="review-text">Huiles de <?= $nom_entreprise ?>, frictions articulaires et musculaires, soins de la peau et cosmétiques, produits comestibles, boissons,
                    e-liquides, concentrés et
                    isole, vape et plus encore…</p>
                </div>
              </div>
            </div>
            <div class="col-auto text-center text-lg-end">
              <span class="review-subtitle">Noté 4.9 / 5</span>
              <img src="assets/img/others/ot-1-1.png" alt="review star" class="review-star">
              <p class="review-subtitle2">Basé sur 848 avis</p>
              <img src="assets/img/logos/l-1-3.png" alt="review logo" class="review-trust">
            </div>
          </div>
        </div>
        <img src="assets/img/shapes/s-1-1.png" alt="shape" class="shape-1">
      </div>
    </div>
  </section> */?>
  <!-- Review Area End -->
  <!-- Featue Area -->
  <section class="space-top space-bottom z-index-common" data-bg-src="assets/img/bg/bg-1-1.jpg">
    <!-- <img src="assets/img/leafs/feature-3-1.png" alt="feature element 1" class="feature-element1"> -->
    <div class="container">
      <div class="row">
        <div class="col-lg-7 mx-auto">
          <div class="title-area text-center">
            <span class="sec-subtitle">Nos produits sont certifiés</span>
            <h2 class="sec-title">D’excellents résultats dans l’amélioration du bien-être</h2>
          </div>
        </div>
      </div>
      <div class="row justify-content-between align-items-center">
        <div class="col-xl-6 col-lg-6 mb-30">
          <div class="feature-item style3">
            <div class="feature-icon">
              <img src="assets/img/icons/feature-3-1.png" alt="feature 3 1">
              <span class="feature-number">1.</span>
            </div>
            <div class="feature-content">
              <h3 class="feature-title"><?= $titre_s1 ?></h3>
              <p class="feature-text"><?= $discription_s1 ?>
              </p>
            </div>
          </div>
          <div class="feature-item style3">
            <div class="feature-icon">
              <img src="assets/img/icons/feature-3-2.png" alt="feature 3 1">
              <span class="feature-number">2.</span>
            </div>
            <div class="feature-content">
              <h3 class="feature-title"><?= $titre_s2 ?></h3>
              <p class="feature-text"><?= $discription_s2 ?>
              </p>
            </div>
          </div>
          <div class="feature-item style3">
            <div class="feature-icon">
              <img src="assets/img/icons/feature-3-3.png" alt="feature 3 1">
              <span class="feature-number">3.</span>
            </div>
            <div class="feature-content">
            <h3 class="feature-title"><?= $titre_s3 ?></h3>
            <p class="feature-text"><?= $discription_s3 ?>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-lg-auto mb-30">
          <div class="img-box7">
            <img src="<?=$image_banniere.$banniere3?>" alt="feature-img" class="img1">
            <a href="https://www.youtube.com/watch?v=zX-jSCDsJ8E" class="play-btn style5 popup-video"><i
              class="fas fa-play"></i></a>
            <?php /*<img src="assets/img/leafs/feature-3-2.png" alt="leafs" class="img2">
            <img src="assets/img/leafs/feature-3-3.png" alt="leafs" class="img3">
            <img src="assets/img/leafs/feature-3-4.png" alt="leafs" class="img4">  */ ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Features Area End -->

  <!-- Key Features Area End -->
  <!-- Footer Area Start -->
  <?php include "includes/footer.php" ?>
  <!-- Footer Area End -->
  <!--********************************
			Code End  Here 
	******************************** -->
  <!--==============================
        All Js File
    ============================== -->
  <!-- Jquery -->
  <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
  <!-- Slick Slider -->
  <script src="assets/js/slick.min.js"></script>
  <!-- Bootstrap -->
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- WOW.js Animation -->
  <script src="assets/js/wow.min.js"></script>
  <!-- Magnific Popup -->
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <!-- Nice Select -->
  <script src="assets/js/jquery.nice-select.min.js"></script>
  <!-- Image Loaded Jquery -->
  <script src="assets/js/imagesloaded.pkgd.min.js"></script>
  <!-- Isotope Filter -->
  <script src="assets/js/isotope.pkgd.min.js"></script>
  <!-- Jquery UI JS -->
  <script src="assets/js/jquery-ui.min.js"></script>
  <!-- Main Js File -->
  <script src="assets/js/main.js"></script>
</body>


<!-- Mirrored from html.vecurosoft.com/cannabo/demo/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Nov 2024 09:53:52 GMT -->
</html>