<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<?php include __DIR__ . '/inc/header.php'; ?>
<?php include __DIR__ . '/inc/top-nav.php'; ?>
<?php require_once "admin-panel/config/app.php"; ?>

<?php if (isset($_GET['success'])): ?>
    <p class="text-green-600 mb-3">Message sent successfully!</p>
<?php endif; ?>

    
    <div class="hero-wrap hero-wrap-2" style="background-image: url('images/DSC_4285.jpg'); background-attachment:fixed;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact</span></p>
            <h1 class="mb-3 bread">Contact Us</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section contact-section ftco-degree-bg">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h4">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3">
            <p><span>Address:</span> Dherahi , Lakhanpur Cholapur Varanasi 221101</p>
          </div>
          <div class="col-md-3">
            <p><span>Phone:</span> <a href="#">	+918090587632</a>
          <a href="#"> +918090587632</a></p>
          </div>
          <div class="col-md-3">
            <p><span>Email:</span> <a href="#">inquiry@umagroups.com</a></p>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-md-6 pr-md-5">
          	<h4 class="mb-4">Do you have any questions?</h4>
            <form 
                action="<?php echo BASE_URL; ?>admin-panel/backend/routes/query.php?action=create"
                method="POST"
            >

              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
              </div>

              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Your Email" required>
              </div>

              <div class="form-group">
                <textarea name="address" class="form-control" placeholder="Address"></textarea>
              </div>

              <div class="form-group">
                <input type="tel" name="phone" class="form-control" placeholder="Phone Number">
              </div>

              <div class="form-group">
                <textarea name="message" class="form-control" placeholder="Message" required></textarea>
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-primary py-3 px-5">
                    Send Message
                </button>
              </div>

            </form>
          
          </div>
          <div class="col-md-6">
            <img src="images/DSC_6227.JPG" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <p>Shaping Bright Futures with Knowledge & Values</p>
              <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
  
<?php include __DIR__ . '/inc/footer.php'; ?>