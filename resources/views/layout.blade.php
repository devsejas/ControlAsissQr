<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/flaticon.css">
<link rel="stylesheet" href="css/themify-icons.css">
<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
<link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
<link rel="stylesheet" href="css/style.css">
<title>@yield('title') - Dev-sejas.com</title>
</head>
<body>
    <header class="header_area">
      <div class="main_menu">
        <div class="search_input" id="search_input_box">
          <div class="container">
            <form class="d-flex justify-content-between" method="" action="">
              <input
                type="text"
                class="form-control"
                id="search_input"
                placeholder="Search Here"
              />
              <button type="submit" class="btn"></button>
              <span
                class="ti-close"
                id="close_search"
                title="Close Search"
              ></span>
            </form>
          </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="index.html"
              ><img src="img/logo.png" alt=""
            /></a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon-bar"></span> <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div
              class="collapse navbar-collapse offset"
              id="navbarSupportedContent"
            >
              <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Principal</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/students">Estudiantes</a>
                </li>
                <li class="nav-item submenu dropdown">
                  <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    role="button"
                    aria-haspopup="true"
                    aria-expanded="false"
                    >Registro</a
                  >
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a class="nav-link" href="/students">Estudiantes</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="course-details.html"
                        >Course Details</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="elements.html">Registrar</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item submenu dropdown">
                  <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    role="button"
                    aria-haspopup="true"
                    aria-expanded="false"
                    >Qr</a
                  >
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a class="nav-link" href="blog.html">Qr</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="single-blog.html"
                        >Blog Details</a
                      >
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contactos</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link search" id="search">
                    <i class="ti-search"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
      <!--================ End Header Menu Area =================-->

    <!--================ Start Home Banner Area =================-->
    <section class="">
    	@yield('content')  
    	
    </section>
    <!--================ End Home Banner Area =================-->

    <!--================ Start Feature Area =================-->
  
    <!--================ End Feature Area =================-->

	<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/stellar.js"></script>
<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="js/owl-carousel-thumb.min.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/gmaps.min.js"></script>
<script src="js/contact.js"></script>
<script src="js/theme.js"></script>
</body>
</html>
