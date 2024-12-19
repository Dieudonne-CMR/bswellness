<!doctype html>
<html class="no-js" lang="zxx">
<!-- Mirrored from html.vecurosoft.com/cannabo/demo/shop-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Nov 2024 09:53:59 GMT -->
  <head>
  <meta charset="utf-8">
  <base href="../">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?= $nom_entreprise ?> | <?= $nom_produit ?> </title>
  <meta name="author" content="<?= $nom_entreprise ?>">
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
<meta property="og:url" content=" " />

<?php $meer = strip_tags($courte_description) ?>
<meta property="og:type" content="website" />
<meta property="og:title" content=" <?= $nom_produit ?>" />
<meta property="og:description"
    content=" <?= strip_tags($courte_description) ?>" />
<meta property="og:image"
    content="<?= $image_produit . $lien_img_vedette  ?>" />

<?php 
        $lien_watSapp = "https://api.whatsapp.com/send?phone=$mumero&text= Bonjour j'ai besoin de ce produit: ".url();
 ?>
<body>
  <!--[if lte IE 9]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
  <!--********************************
   		Code Start From Here 
	******************************** -->
  <!--==============================
	Preloader
	============================== -->
  <?php include "includes/header.php" ?>
  <!-- breadcumb -->
  <section class="z-index-common breadcumb-wrapper" data-bg-src="assets/img/bg/b-1-3.png">
    <div class="container">
      <div class="row justify-content-between align-items-center">
        <div class="col-auto">
          <div class="breadcumb-content">
            <h1 class="breadcumb-title"><?=$nom_produit?></h1>
            <div class="breadcumb-menu-wrap">
              <ul class="breadcumb-menu">
                <li><a href="home">Acceuil</a></li>
                <li>Détails du produit</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcumb End -->
  <!-- Product Details -->
  <section class="space space-extra-bottom">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-30">
          <div class="product-slide-row">
            <div class="product-big-img vs-carousel" data-slide-show="1" data-fade="true" data-asnavfor=".product-thumb-slide">
              <div class="img"><img src="<?=$image_produit.$lien_img_vedette?>" alt="Product Image"></div>
              <div class="img"><img src="assets/img/products/p-d-1-2.png" alt="Product Image"></div>
              <div class="img"><img src="assets/img/products/p-d-1-3.png" alt="Product Image"></div> 
            </div>
            <div class="product-thumb-slide vs-carousel" data-slide-show="4" data-md-slide-show="4" data-sm-slide-show="3" data-xs-slide-show="3" data-asnavfor=".product-big-img" data-vertical="false" data-sm-vertical="false">
              <div>
                <div class="thumb"><img src="<?=$image_produit.$detail_pro[0]->lien_img2 ?>" alt="Product Image"></div>
              </div>
              <div>
                <div class="thumb"><img src="<?=$image_produit.$detail_pro[0]->lien_img3 ?>" alt="Product Image"></div>
              </div>
              <div>
                <div class="thumb"><img src="<?=$image_produit.$detail_pro[0]->lien_img4 ?>" alt="Product Image"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mb-30">
          <div class="product-about">
            <div class="product-rating">
              <span class="product-instock">Disponible</span>
              <div class="star-rating" role="img" aria-label="Rated 5 out of 5">
                <span style="width:100%">Noté <strong class="rating">5</strong> Sur 5</span>
              </div>
              <!-- <span class="product-rating__total">(1 Revoir )</span> -->
            </div>
            <h2 class="product-title"><?=$nom_produit?></h2>
            <span class="product-ml"><p><?=$courte_description?></p></span>
            <p class="product-price"><?=  number_format($prix_reel, 0, '', ' ')." ".$devise2[0]->code_iso_devise?> <del><?=$prix_fictif."".$devise2[0]->code_iso_devise?></del></p>
            <div class="actions">
              <div class="quantity">
                <?php /*<label for="quantity" class="screen-reader-text">Quantité:</label>
                <div class="quantity__field quantity-container">
                  <input type="number" id="quantity" class="qty-input" step="1" min="1" max="100" name="quantity" value="01" title="Qty">
                  <div class="quantity__buttons">
                    <button class="quantity-plus qty-btn"><i class="fas fa-caret-up"></i></button>
                    <button class="quantity-minus qty-btn"><i class="fas fa-caret-down"></i></button>
                  </div>
                </div> */?>
              </div>
            </div>
            <span class="counter-title">Offre à durée limitée:</span>
            <div class="counter-style">
              <ul class="offer-counter" data-offer-date="10/12/2025">
                <li>
                  <div class="day count-number">00</div><span class="count-name">Jours</span>
                </li>
                <li>
                  <div class="hour count-number">00</div><span class="count-name">Heures</span>
                </li>
                <li>
                  <div class="minute count-number">00</div><span class="count-name">Minutes</span>
                </li>
                <li>
                  <div class="seconds count-number">00</div><span class="count-name">Secondes</span>
                </li>
              </ul>
            </div>
            <div class="pro-btns">
              <a href="<?= $lien_watSapp ?>" class="vs-btn"><i class="fab fa-whatsapp"></i>Commandez Maintenant</a>
              <a href="#" class="icon-btn"><i class="far fa-heart"></i></a>
            </div>
            <div class="product_meta">
              <span class="sku_wrapper">
              <p>SKU:</p> <span class="sku"><?= recup_detail_cat($mat_categorie_art)[0]-> libelle ?></span>
              </span>
              <span>
              <p>Tags:</p> <a href="javascript:void(0)" rel="tag">En vedette</a><a href="avascript:void(0)" rel="tag">Produits</a><a href="avascript:void(0)"
                rel="tag">Memp</a>
            </span>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="space-extra-bottom">
    <div class="container">
      <div class="product-description mb-50">
        <h3 class="blog-inner-title">Description</h3>
        
        <p><?=$description?></p>
      </div>

    </div>
  </section>
  <!-- Product Details End -->
  <!-- Related Products Ajouter des avis-->
  <section class="space-extra-bottom">
    <div class="container">
      <h3 class="blog-inner-title">Autres produits</h3>
      <div class="row vs-carousel" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1">
        <?php foreach( $produits as $key=> $value):
          if($key < 6):
          ?>
        <div class="col-xl-3 col-lg-4 col-md-6">
          <div class="vs-product product-style6">
            <div class="product-img">
              <a href="product-details/<?=$value->mat_article?>"><img src="<?=$image_produit.$value->lien_img_vedette?>" alt="Image" class="img w-100"></a>
              
            </div>
            <div class="product-content">
              <div class="star-rating" role="img" aria-label="Rated 5 out of 5">
                <span style="width:100%">Noté <strong class="rating">5</strong> Sur 5</span>
              </div>
              <h3 class="product-title"><a href="product-details/<?=$value->mat_article?>"><?=$value->nom_art?></a></h3>
              <?php $value->courte_description= strTextLent($value->courte_description,80) ?>
              <span class="product-cate"><?=$value->courte_description?></span>
              <span class="product-price"><?=$value->prix_reel."".$devise2[0]->code_iso_devise?></span>
              <div class="product-actions">
                <a href="product-details/<?=$value->mat_article?>" class="vs-btn">Ajouter au panier</a>
                <a href="product-details/<?=$value->mat_article?>" class="cart-btn"><i class="fas fa-shopping-basket"></i></a>
              </div>
            </div>
          </div>
        </div>
        <?php else: break; endif; endforeach;
       ?>
        <?php /*
        <div class="col-xl-3 col-lg-4 col-md-6">
          <div class="vs-product product-style6">
            <div class="product-img">
              <a href="shop-details.html"><img src="assets/img/products/p-1-2.png" alt="Image" class="img w-100"></a>
            </div>
            <div class="product-content">
              <div class="star-rating" role="img" aria-label="Rated 5 out of 5">
                <span style="width:100%">Noté<strong class="rating">5</strong>Sur 5</span>
              </div> 
              <h3 class="product-title"><a href="shop-details.html">Thé au chanvre Naturecan
              Mélangez 20 sachets</a></h3> 
              <span class="product-cate">CBD 100MG</span>
              <span class="product-price">$39.00</span>
              <div class="product-actions">
                <a href="cart.html" class="vs-btn">Ajouter au panier</a>
                <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-basket"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6">
          <div class="vs-product product-style6">
            <div class="product-img">
              <a href="shop-details.html"><img src="assets/img/products/p-1-3.png" alt="Image" class="img w-100"></a>
              <a href="shop-details.html" class="product-tag2">En rupture de stock</a>
            </div>
            <div class="product-content">
              <div class="star-rating" role="img" aria-label="Rated 5 out of 5">
                <span style="width:100%">Noté<strong class="rating">5</strong> Sur 5</span>
              </div>
              <h3 class="product-title"><a href="shop-details.html">Orange Couny CBD
                  E-liquid</a></h3>
              <span class="product-cate">CBD 100MG</span>
              <span class="product-price">$39.00</span>
              <div class="product-actions">
                <a href="cart.html" class="vs-btn">Ajouter au panier</a>
                <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-basket"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6">
          <div class="vs-product product-style6">
            <div class="product-img">
              <a href="shop-details.html"><img src="assets/img/products/p-1-4.png" alt="Image" class="img w-100"></a>
            </div>
            <div class="product-content">
              <div class="star-rating" role="img" aria-label="Rated 5 out of 5">
                <span style="width:100%">Noté<strong class="rating">5</strong>Sur 5</span>
              </div>
              <h3 class="product-title"><a href="shop-details.html">Mélange de thé au chanvre Naturecan</a></h3>
              <span class="product-cate">CBD 100MG</span>
              <span class="product-price">$39.00</span>
              <div class="product-actions">
                <a href="cart.html" class="vs-btn">Ajouter au panier</a>
                <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-basket"></i></a>
              </div>
            </div>
          </div>
        </div> 
        */?>
      </div>
    </div>
  </section>
  <!-- Related Products End -->
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


<!-- Mirrored from html.vecurosoft.com/cannabo/demo/shop-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Nov 2024 09:54:03 GMT -->
</html>