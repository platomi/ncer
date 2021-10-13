<?php include 'validation/validation.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'components/head.php'; ?>
  <style>
    select:invalid  { color: gray; }
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
            <form autocomplete="off" action="" method="post" role="form" class="forma">

              <div class="row">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Title" required autocomplete="off">
                </div>                
              </div>

              <div class="row">
                <div class="form-group col-lg-6 mt-3">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Full Name" required autocomplete="off">
                </div>      
                <div class="form-group col-lg-6 mt-3">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Email Address" required autocomplete="off">
                </div>            
              </div>

              <div class="row">
                <div class="form-group col-lg-6 mt-3">
                  <select name="gender" class="form-control" placeholder="Gender" required>
										<option selected disabled hidden>Gender</option>
										<option value="male">Male</option>
										<option value="female">Female</option>
									</select>
                </div>      
                <div class="form-group col-lg-6 mt-3">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Email Address" required autocomplete="off">
                </div>            
              </div>
              
              <div class="text-center mt-3 float-end"><button type="submit">Submit</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
 

  <!-- ======= Footer ======= -->
  <?php include 'components/footer.php'; ?>

</body>

</html>