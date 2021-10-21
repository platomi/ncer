 <!-- ======= Header ======= -->
 

<header id="header" class="fixed-top d-flex align-items-center 
          <?= ($page == 'home') ? 'header-transparent' : '' ?>
          ">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <a href="/"><img src="assets/img/SDSSULOGO3.png" alt="" class="img-fluid"></a>
        <!-- <h1 class="text-light"><a href="index.html"><span>NCER</span></a></h1>         -->
      </div>

      <nav id="navbar" class="navbar">
        <ul> 
          <li><a class="<?= ($page == 'home') ? 'active': '' ?>" href="/">Home</a></li>
          <li><a class="<?= ($uri_segments[1] == 'registration.php') ? 'active' : '' ?>" href="registration.php">Registration</a></li>
          <li><a class="<?= ($uri_segments[1] == 'fees.php') ? 'active' : '' ?>" href="fees.php">Fees</a></li> 
          <li><a class="<?= ($uri_segments[1] == 'guidelines.php') ? 'active' : '' ?>" href="guidelines.php">Guidelines</a></li>
          <li><a class="<?= ($uri_segments[1] == 'contact.php') ? 'active' : '' ?>" href="contact.php">Contact Us</a></li>
          
          <li><a class="<?= ($uri_segments[1] == 'about.php') ? 'active' : '' ?>" href="about.php">About Us</a></li>
          
         
         
          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
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
          </li> -->
              </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


