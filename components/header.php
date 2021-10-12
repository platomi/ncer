 <!-- ======= Header ======= -->
 

<header id="header" class="fixed-top d-flex align-items-center 
          <?= ($uri_segments[2] == 'index.php') ? 'header-transparent' : '' ?>
          ">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <a href="index.php"><img src="assets/img/SDSSULOGO3.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="<?= ($page == 'home') ? 'active': '' ?>" href="/">Home</a></li>
          <li><a class="<?= ($uri_segments[1] == 'about.php') ? 'active' : '' ?>" href="about.php">About</a></li>
          <li><a class="<?= ($uri_segments[1] == 'services.php') ? 'active' : '' ?>" href="services.php">Services</a></li> 
          <li><a class="<?= ($uri_segments[1] == 'contact.php') ? 'active' : '' ?>" href="contact.php">Contact Us</a></li>
          
          <li><a class="<?= ($uri_segments[1] == 'registration.php') ? 'active' : '' ?>" href="registration.php">Registration</a></li>
    
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
              </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


