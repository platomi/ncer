<?php include 'validation/validation.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'components/head.php'; ?>
  <style>
    select:invalid{ 
      color: gray !important;
    }
  </style>
</head>

<body> 
  <?php include 'components/header.php'; ?>

  <main id="main"> 
    <!-- ======= Contact Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Registration</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Registration</li>
          </ol>
        </div>

      </div>
    </section><!-- End Contact Section -->

    <!-- ======= Contact Section ======= -->
    <section class="myform" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500" >
      <div class="container">

        <div class="row">
 
          <div class="col-lg-12">
            <form autocomplete="off" action="server/actions/register.php" method="post" role="form" class="forma">

              <div class="row">
                <div class="form-group">
                  <input type="text" name="title" class="form-control" placeholder="Title" required autocomplete="off">
                </div>                
              </div>

              <div class="row">
                <div class="form-group col-lg-6 mt-3">
                  <input type="text" name="fullname" class="form-control" placeholder="Full Name" required autocomplete="off">
                </div>      
                <div class="form-group col-lg-6 mt-3">
                  <input type="email" name="email" class="form-control" placeholder="Email Address" required autocomplete="off">
                </div>            
              </div>

              <div class="row">
                <div class="form-group col-lg-6 mt-3">
                  <select name="gender" class="form-control" placeholder="Gender" required>
										<option selected disabled hidden value="">Gender</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
                </div>      
                <div class="form-group col-lg-6 mt-3">
                  <input type="number" name="mobile" class="form-control" placeholder="Mobile Number" required autocomplete="off">
                </div>            
              </div>

              <div class="row">
                <div class="form-group mt-3">
                  <input type="text" name="affiliation" class="form-control" placeholder="Affiliation/Agency" autocomplete="off">
                </div>                
              </div>

              <div class="row">
                <div class="form-group mt-3">
                  <input type="text" name="designation" class="form-control" placeholder="Designation" required autocomplete="off">
                </div>                
              </div>


              <div class="my-3"> 
                <?php if(isset($_SESSION['returned'])){ ?>

                <div class="alert <?= $_SESSION['returned']['class'] ?>">
                  <?= $_SESSION['returned']['message'] ?>
                </div> 

                <?php unset($_SESSION['returned']); } ?>
              </div>
              
               
              <div class="text-center mt-3 float-end"><input type="submit" value="Submit" name="register"></input></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
 

  <!-- ======= Footer ======= -->
  <?php include 'components/footer.php'; ?>

</body>

</html>