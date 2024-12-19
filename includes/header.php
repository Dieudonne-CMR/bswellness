  <!--==============================
	Preloader
	==============================-->
  <div class="preloader">
    <button class="vs-btn preloaderCls">Annuler le préchargement</button>
    <div class="preloader-inner">
      <img src="<?=$lien_logo.$logo?>" style="max-width: 30%; border-radius: 12%;" alt="logo">
      <span class="loader"></span>
    </div>
  </div> 
  <?php $device3=info_boutique(); ?>
  <a href="#" class="scrollToTop scroll-btn"><i class="far fa-arrow-up"></i></a>
  <!--==============================
    Popup Search Box 
  ============================== -->
  <?php /*<div class="popup-search-box d-none d-lg-block  ">
    <button class="searchClose"><i class="fal fa-times"></i></button>
    <form action="#">
      <input type="text" class="border-theme" placeholder="What are you looking for">
      <button type="submit"><i class="fal fa-search"></i></button>
    </form>
  </div> */?>
  <!--==============================
    Cart Side bar
  ============================== -->
  <?php /*<div class="sideCart-wrapper offcanvas-wrapper">
    <div class="sidemenu-content">
      <button class="closeButton border-theme bg-theme-hover sideMenuCls"><i class="far fa-times"></i></button>
      <div class="widget widget_shopping_cart">
        <h3 class="widget_title">Panier</h3>
        <div class="widget_shopping_cart_content">
          <ul class="cart_list">
            <li class="mini_cart_item">
              <a href="products-grid.html" class="remove"><i class="fal fa-trash-alt"></i></a> <a href="products-grid.html"><img src="assets/img/products/p-rc-1-1.jpg" alt="Cart Image" />
              </a>
              <span class="quantity">
								1 × <span class="amount">100.00<span><?=$device3[0]->code_iso_devise?></span></span>
              </span>
            </li> 
            <li class="mini_cart_item">
              <a href="products-grid.html" class="remove"><i class="fal fa-trash-alt"></i></a> <a href="products-grid.html"><img src="assets/img/products/p-rc-1-2.jpg" alt="Cart Image" />
              </a>
              <span class="quantity">
								1 × <span class="amount">10.00<span><?=$device3[0]->code_iso_devise?></span></span>
              </span>
            </li>
          </ul>
          <div class="total">
            <strong>Subtotal:</strong> <span class="amount">110.00<span><?=$device3[0]->code_iso_devise?></span></span>
          </div>
          <div class="buttons d-flex">
            <a href="cart.html" class="vs-btn style2">Voir le panier</a>
            <a href="checkout.html" class="vs-btn style2">Vérifier</a>
          </div>
          <div class="footer-social pt-5">
            <a href="<?=$lien_facebook?>"><i class="fab fa-facebook-f"></i></a>
            <a href="<?=$lien_linkedin?>"><i class="fab fa-twitter"></i></a>
            <a href="<?=$instagram?>"><i class="fab fa-instagram"></i></a>
            <a href="https://www.behance.net/"><i class="fab fa-behance"></i></a>
            <a href="<?=$youtube?>"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div> */?>
  <!--==============================
		Mobile Menu
	============================== -->
  <div class="vs-menu-wrapper">
    <div class="vs-menu-area text-center">
      <div class="mobile-logo">
        <a href="home"><img src="<?=$lien_logo.$logo?>" alt="Carmax" class="logo" style="max-width: 40%; border-radius: 12%;"></a>
        <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
      </div>
      <div class="vs-mobile-menu">
        <ul>
        <li>
            <a href="home">Accueil</a>
        </li>
        <li>
            <a href="about">À propos</a>
        </li>
        <li>
            <a href="product">Boutique</a>
        </li>

        <li>
            <a href="contact">Contact</a>
        </li>
        </ul>
      </div>
    </div>
  </div>
  <!--==============================
	Offcanvas
	============================== -->
  <div class="sidemenu-wrapper d-none d-lg-block">
    <div class="sidemenu-content">
      <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
      <div class="widget  ">
        <div class="vs-widget-about">
          <div class="footer-logo">
            <a href="home"><img src="assets/img/logo.png" alt="Consik" class="logo"></a>
          </div>
          <p>Les scénarios de pointe émergents, intrinsèquement évisculés, redéfinissent la pérennité
            marchés électroniques
            ligne de demande</p>
          <div class="footer-social">
            <a href="<?= $lien_facebook?>"><i class="fab fa-facebook-f"></i></a>
            <a href="<?=$lien_twitter?>"><i class="fab fa-twitter"></i></a>
            <a href="<?=$instagram?>"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-behance"></i></a>
            <a href="<?=$youtube?>"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
      </div>

      <?php /*<div class="widget">
        <h4 class="widget_title">Articles de la galerie</h4>
        <div class="sidebar-gallery">
          <div class="gallery-thumb">
            <img src="assets/img/widget/gal-1-1.jpg" alt="Gallery Image" class="w-100">
          </div>
          <div class="gallery-thumb">
            <img src="assets/img/widget/gal-1-2.jpg" alt="Gallery Image" class="w-100">
          </div>
          <div class="gallery-thumb">
            <img src="assets/img/widget/gal-1-3.jpg" alt="Gallery Image" class="w-100">
          </div>
          <div class="gallery-thumb">
            <img src="assets/img/widget/gal-1-4.jpg" alt="Gallery Image" class="w-100">
          </div>
          <div class="gallery-thumb">
            <img src="assets/img/widget/gal-1-5.jpg" alt="Gallery Image" class="w-100">
          </div>
          <div class="gallery-thumb">
            <img src="assets/img/widget/gal-1-6.jpg" alt="Gallery Image" class="w-100">
          </div>
        </div>
      </div> */?>
    </div>
  </div>
  <!--==============================
        Header Area
    ==============================-->
  <header class="vs-header header-layout1">
    <!-- Header Top -->
    <div class="header-top">
      <div class="container">
        <div class="row gx-0 align-items-center">
          <div class="col-lg-auto flex-grow-1 d-none d-lg-block">
            <p class="header-text">
              <i><img src="assets/img/icons/free-delivery.png" alt=""></i>
              Livraison gratuite le lendemain lorsque vous <span>dépenser plus de 10000 <?=$device3[0]->code_iso_devise?></span>
            </p>
          </div>
          <div class="col-lg-auto">
            <div class="header-social">
              <a href="<?= $lien_facebook?>"><i class="fab fa-facebook-f"></i></a>
              <a href="<?=$lien_twitter?>"><i class="fab fa-twitter"></i></a>
              <a href="<?=$lien_linkedin?>"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>
          <div class="col-lg-auto d-none d-xl-block">
            <div class="header-call">
              <i><img src="assets/img/icons/customer-service.png" alt="customer-service"></i>
              <span>Besoin d'aide ?</span>
              <a href="tel:<?=$telephone?>"><?=$telephone?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="sticky-wrapper">
      <div class="sticky-active">
        <div class="container">
          <div class="row justify-content-between align-items-center gx-sm-0">
            <div class="col-auto">
              <div class="header-logo">
                <a href="home"><img src="<?=$lien_logo.$logo?>" alt="Cannabo" style="max-width: 40%; border-radius: 12%;" class="logo"></a>
              </div>
            </div>
            <div class="col-auto flex-grow-1">
              <nav class="main-menu d-none d-lg-block">
                <ul>
                    <li>
                        <a href="home">Accueil</a>
                     </li>
                    <li>
                        <a href="about">À propos</a>
                    </li>
                    <li>
                        <a href="product">Boutique</a>
                    </li>

                    <li>
                        <a href="contact">Contact</a>
                    </li>

                </ul>
              </nav>
            </div>

            <?php /*<div class="col-auto d-none d-xl-block">
              <form class="header-search">
                <button class="searchBoxTggler" aria-label="search-button">
                  <i><img src="assets/img/icons/search.png" alt=""></i>
                </button>
                <input type="text" placeholder="Search">
              </form>
            </div> */?>

            <div class="col-auto">
              <div class="header-btns">
                <?php /*<a href="contact.html" class="user-btn d-none d-md-inline-flex">
                  <img src="assets/img/icons/user.png" alt="user">
                </a> */?>
                <a href="javascript:void(0)" class="sideCartToggler d-none d-md-inline-flex">
                  <i class="fas fa-shopping-basket"></i>
                  <span>0</span>
                </a>
                <button class="vs-menu-toggle d-inline-flex d-lg-none"><i class="fal fa-bars"></i></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Main Menu Area -->
  </header>