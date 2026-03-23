<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<?php include __DIR__ . '/inc/header.php'; ?>
<?php include __DIR__ . '/inc/top-nav.php'; ?>

<?php 
require_once "admin-panel/backend/config/db.php";

// get latest 5 notices
$query = "SELECT title, description FROM notices ORDER BY id DESC LIMIT 5";
$result = mysqli_query($conn, $query);
?>

<?php 
require_once "admin-panel/backend/config/db.php";
$query2 = "SELECT title, description FROM notices ORDER BY id DESC LIMIT 5";
$result2 = mysqli_query($conn, $query2);
?>
 
    
    <div class="hero-wrap" style="background-image: url('images/DSC_4285.JPG'); background-attachment:fixed;" loading="lazy" decoding="async">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center">
            <h1 class="mb-4">Shaping Bright Futures with Knowledge & Values</h1>
            <p><a href="https://vmsacademy.com/en/1225/10359" class="btn btn-primary px-4 py-3">Apply Now</a> <a href="#" class="btn btn-secondary px-4 py-3">View Courses</a></p>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-search-course">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="courseSearch-wrap d-md-flex flex-column-reverse">
    					<div class="full-wrap d-flex ftco-animate">
    						<div class="one-third order-last p-5">
    							<span>Know what you're after?</span>
    							<h3>I want to study</h3>
    							<form action="#" class="course-search-form">
		                <div class="form-group d-flex">
		                  <input type="text" class="form-control" placeholder="Type a course you want to study">
		                  <input type="submit" value="Search" class="submit">
		                </div>
		              </form>
		              <p>Just Browsing? <a href="#"> See all courses</a></p>
    						</div>
    						<div class="one-forth order-first img" style="background-image: url(images/feature-2.jpg);" loading="lazy" decoding="async"></div>
    					</div>
    					<div class="full-wrap ftco-animate">
    						<div class="one-half">
    							<div class="featured-blog d-md-flex">
    								<div class="image d-flex order-last">
    									<a href="#" class="img" style="background: url(images/feature-4.jpeg);" loading="lazy" decoding="async"></a>
    								</div>
    								<div class="text order-first">
    									<span class="date">Sep 07, 2025</span>
    									<h3><a href="#">Welcome to Uma Memorial Public School, Varanasi</a></h3>
											<p>Where learning goes beyond books. We nurture young minds to become tomorrow’s scientists, engineers, doctors, entrepreneurs, and leaders.</p>
    								</div>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
<!-- Marquee Section  -->

  <div class="flex items-start justify-center p-4">

     <div class="w-100 rounded-card p-4" style="max-width: 1920px; border: 1px solid #e2e8f0;">
        <div class="d-flex align-items-center mb-2">
            <svg class="me-3" style="height: 24px; width: 24px; color: #3B82F6;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.5a1.5 1.5 0 01-3 0V5.882a1.5 1.5 0 013 0zM17 5.882V19.5a1.5 1.5 0 01-3 0V5.882a1.5 1.5 0 013 0zM5 5.882V19.5a1.5 1.5 0 01-3 0V5.882a1.5 1.5 0 013 0z" />
            </svg>
            <h1 class="h5 fw-bold text-gray-800 mb-0 text-center">Latest Notifications</h1>
        </div>

        <!-- Marquee Section -->
        <div class="marquee-container">
            <span class="marquee fw-semibold" style="color: #3B82F6;">

                <?php while($row = mysqli_fetch_assoc($result)) { ?>
                
                    <a href="#">
                        📢 <?php echo $row['title']; ?>: <?php echo $row['description']; ?>
                    </a>
                
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                
                <?php } ?>
                
            </span>
        </div>
    </div>

<!-- End Actual Code For Marquee-->




<!-- Marquee tag -->
    <section class="ftco-section mt-0 pt-0 mb-0 pb-0">
    	<div class="container">
    		<div class="row">
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-0 py-4 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center mb-3"><span class="flaticon-exam"></span></div>
              <div class="media-body px-3">
                <h3 class="heading">Admission</h3>
                <p>Admissions are open for the 2025–26 session. Enroll your child in a school 
that focuses on holistic growth, discipline, and academic excellence.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-3 py-4 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center mb-3"><span class="flaticon-blackboard"></span></div>
              <div class="media-body px-3">
                <h3 class="heading">Notice Board</h3>
                <p>Stay updated with important announcements, exam schedules, and 
upcoming events at Uma Memorial Public School.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services p-3 py-4 d-block text-center">
              <div class="icon d-flex justify-content-center align-items-center mb-3"><span class="flaticon-books"></span></div>
              <div class="media-body px-3">
                <h3 class="heading">Our Library</h3>
                <p>Our well-stocked digital and physical library inspires curiosity, 
creativity, and a lifelong love for reading.</p>
              </div>
            </div>    
          </div>
        </div>
    	</div>
    </section>

  <section class="ftco-section-3 img mt-0 mb-2" style="background-image: url(images/notice-bg.png);">
  <div class="side-link left">QUICK LINKS</div>
  <div class="side-link right">CONTACT US</div>

  <div class="container py-5">
    <div class="row justify-content-center g-4">

      <!-- Noticeboard -->
      <div class="col-md-4">
          <div class="card-custom img">
              <h5 class="fw-bold text-success icon-notice">NOTICE BOARD</h5>
              <hr>

              <?php if(mysqli_num_rows($result2) > 0) { ?>
              
                  <?php while($row = mysqli_fetch_assoc($result2)) { ?>
                  
                      <p>
                          <?php echo $row['title']; ?> - 
                          <?php echo substr($row['description'], 0, 50); ?>...
                      </p>
                  
                  <?php } ?>
                  
              <?php } else { ?>
              
                  <p>No notices available</p>
              
              <?php } ?>
              
          </div>
      </div>

      <!-- Diary Dates -->
      <div class="col-md-6">
        <div class="card-custom">
          <h5 class="fw-bold icon-diary">DIARY DATES</h5>
          <hr>

          <!-- Entry 1 -->
          <div class="d-flex align-items-center mb-3" style="background: rgba(206, 34, 34, 0.8);">
            <div class="date-box me-3" >
              <div>24</div>
              <div>MAR</div>
            </div>
            <p class="mb-0 text-white" > Small Steps, Big Change workshops (all day)</p>
          </div>

          <!-- Entry 2 -->
          <div class="d-flex align-items-center mb-3" style="background: rgba(210, 220, 11, 0.8);">
            <div class="date-box me-3">
              <div>27</div>
              <div>MAR</div>
            </div>
            <p class="mb-0">Robotics Week</p>
          </div>

          <!-- Entry 3 -->
          <div class="d-flex align-items-center mb-3" style="background: rgba(23, 236, 197, 0.8);">
            <div class="date-box me-3">
              <div>27</div>
              <div>MAR</div>
            </div>
            <p class="mb-0">Y1/2 Easter Service - Church of the Holy Spirit - Parents welcome: 1.30pm</p>
          </div>

          <!-- Buttons -->
          <div class="d-flex gap-2 mt-4">
            <button class="btn btn-info btn-custom text-white">ALL DATES</button>
            <button class="btn btn-success btn-custom text-white">TERM DATES</button>
            <button class="btn btn-primary btn-custom">CALENDAR</button>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<section class="ftco-freeTrial">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="d-flex align-items-center">
			    		<div class="free-trial ftco-animate">
			    			<h3>Encourages holistic development through programs </h3>
			    			<p> Music, dance, arts & crafts, educational tours, healthy meals that ban junk food, playgrounds, and safe transportation.</p>
			    		</div>
			    		<div class="btn-join ftco-animate">
			    			<p><a href="#" class="btn btn-primary py-3 px-4">Join now!</a></p>
			    		</div>
			    	</div>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section-3 img" style="background-image: url(images/DSC_6235.JPG);" loading="lazy" decoding="async">
    	<div class="overlay"></div>
    	<div class="container">
    		<div class="row d-md-flex justify-content-center">
    			<div class="col-md-9 about-video text-center">
    				<h2 class="ftco-animate ion-ios-rocket">Turning Classrooms into Launchpads.</h2>
    				<div class="video d-flex justify-content-center">
    					<a href="https://youtu.be/--PASA5_2ok?si=GK-UhEIUAW-TSb9l" class="button popup-youtube d-flex justify-content-center align-items-center"><span class="ion-ios-play"></span></a>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    <section class="ftco-counter bg-light" id="section-counter">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="3485">0</strong>
		                <span>Happy Students</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="20">0</strong>
		                <span>Years Of excellence</span>
		              </div>
		            </div>
		          </div>
		          
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center ">
		              <div class="text">
		                <strong class="number" data-number="100">0</strong>
		                <span>Trophies Won</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="6">0</strong>
		                <span>Startup By Students</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>
    

    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate text-center">
            <h2 class="mb-4">Our Programs</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-4 d-flex ftco-animate">
    				<div class="course align-self-stretch">
    					<a href="#" class="img" style="background-image: url(images/feature_1.jpg)" loading="lazy" decoding="async"></a>
    					<div class="text p-4">
    						<p class="category"><span>Academic Program</span></p>
    						<h3 class="mb-3 text-justify"><a href="#">PlayGroup - 12th  </a></h3>
    						<p>From foundational learning in PlayGroup to advanced academics in Class 12, we nurture every stage of a child’s growth.Our curriculum blends knowledge, discipline, and creativity, ensuring students are prepared for both board exams and life beyond school. <br></p>
<p>👉 Strong academics, co-curricular excellence, and values for a brighter future.</p>
    						<p><a href="#" class="btn btn-primary">Enroll now!</a></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4 d-flex ftco-animate">
    				<div class="course align-self-stretch">
    					<a href="#" class="img" style="background-image: url(images/DSC_6227.JPG)" loading="lazy" decoding="async"></a>
    					<div class="text p-4">
    						<p class="category"><span>Enterpreneurship Programs</span></p>
    						<h3 class="mb-3"><a href="#">Startup And Innovation </a></h3>
    						<p>At UMPS, classrooms are more than learning spaces — they are launchpads for ideas. Our Startup & Innovation Program helps students explore creativity, build problem-solving skills, and transform bold ideas into practical solutions</p><br>
                <p >👉Encouraging young innovators to dream, design, and develop for tomorrow.</p>
    						<p><a href="#" class="btn btn-primary">Enroll now!</a></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4 d-flex ftco-animate">
    				<div class="course align-self-stretch">
    					<a href="#" class="img" style="background-image: url(images/Course-31.png)" loading="lazy" decoding="async"></a>
    					<div class="text p-4">
    						<p class="category"><span>Skil Build Programs</span></p>
    						<h3 class="mb-3"><a href="#">IBM Skill Build  </a></h3>
    						<p>In partnership with IBM, we offer students hands-on training in emerging technologies and future-ready skills. From coding to communication, our Skill Build Program empowers students with the tools they need for higher education and careers.</p><br>
                <p>👉 Equipping every learner with 21st-century skills for success.</p>
    						<p><a href="#" class="btn btn-primary">Enroll now!</a></p>
    					</div>
    				</div>
    			</div>
    		</div>
    		<div class="row justify-content-center mt-5">
        	<div class="col-md-10 ftco-animate">
        		<p><strong>Collaborates with IBM for skill development,</strong> Provides programs catering to competition preparation, including coaching for Navodaya Vidyalaya, BHU, Science Olympiads, and more</p>
        		<p><span>Just Browsing?</span><a href="course.html"> View All Courses</a></p>
        	</div>
        </div>
    	</div>
    </section>

    <!-- Admission Modal -->
<div class="modal fade" id="admissionModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content" style="background:transparent;border:none;">
      <div class="modal-body p-0">

        <div style="max-width:420px;margin:auto;background:#e9eef2;padding:25px;border-radius:6px;position:relative;">

          <button type="button" class="btn-close position-absolute top-0 end-0 m-2"
                  data-bs-dismiss="modal"></button>

          <h3 class="mb-3">Admission Enquiry Form</h3>

          <form action="submit.php" method="POST">
                <!-- Child Name -->
                <div style="background:#fff;border:1px solid #ddd;border-radius:4px;margin-bottom:15px;display:flex;align-items:center;">
                  <span style="padding:10px;font-size:18px;">
                    <i class="bi bi-person-fill"></i>
                  </span>
                  <input type="text" name="child_name" placeholder="Child Name" required
                    style="border:none;outline:none;padding:12px;width:100%;">
                </div>

                <!-- Father Name -->
                <div style="background:#fff;border:1px solid #ddd;border-radius:4px;margin-bottom:15px;display:flex;align-items:center;">
                  <span style="padding:10px;font-size:18px;">
                    <i class="bi bi-person-fill"></i>
                  </span>
                  <input type="text" name="father_name" placeholder="Father's Name" required
                    style="border:none;outline:none;padding:12px;width:100%;">
                </div>

                <!-- Mother Name -->
                <div style="background:#fff;border:1px solid #ddd;border-radius:4px;margin-bottom:15px;display:flex;align-items:center;">
                  <span style="padding:10px;font-size:18px;">
                    <i class="bi bi-person-fill"></i>
                  </span>
                  <input type="text" name="mother_name" placeholder="Mother's Name" required
                    style="border:none;outline:none;padding:12px;width:100%;">
                </div>

                <!-- DOB -->
                <div style="background:#fff;border:1px solid #ddd;border-radius:4px;margin-bottom:15px;display:flex;align-items:center;">
                  <span style="padding:10px;font-size:18px;">
                    <i class="bi bi-calendar-event-fill"></i>
                  </span>
                  <input type="date" name="dob" required
                    style="border:none;outline:none;padding:12px;width:100%;">
                </div>

                <!-- Mobile -->
                <div style="background:#fff;border:1px solid #ddd;border-radius:4px;margin-bottom:15px;display:flex;align-items:center;">
                  <span style="padding:10px;font-size:18px;">
                    <i class="bi bi-phone-fill"></i>
                  </span>
                  <input type="tel" name="mobile" placeholder="Mobile*" required
                    style="border:none;outline:none;padding:12px;width:100%;">
                </div>


                <!-- Standard -->
                <div style="background:#fff;border:1px solid #ddd;border-radius:4px;margin-bottom:15px;display:flex;align-items:center;">
                  <span style="padding:10px;font-size:18px;">
                    <i class="bi bi-mortarboard-fill"></i>
                  </span>
                  <select name="standard" required
                    style="border:none;outline:none;padding:12px;width:100%;">
                    <option value="">Select Standard</option>
                    <option>Nursery</option>
                    <option>LKG</option>
                    <option>UKG</option>
                    <option>Class 1</option>
                    <option>Class 2</option>
                    <option>Class 3</option>
                    <option>Class 4</option>
                    <option>Class 5</option>
                    <option>Class 6</option>
                    <option>Class 7</option>
                    <option>Class 8</option>
                    <option>Class 9</option>
                    <option>Class 11</option>
                    <option>Class Maths</option>
                    <option>Class Commerce</option>
                    <option>Class Science</option>
                  </select>
                </div>

                <!-- Address -->
                <div style="background:#fff;border:1px solid #ddd;border-radius:4px;margin-bottom:15px;display:flex;align-items:center;">
                  <span style="padding:10px;font-size:18px;">
                    <i class="bi bi-geo-alt"></i>
                  </span>
                  <input type="text" name="address" placeholder="Address" required
                    style="border:none;outline:none;padding:12px;width:100%;">
                </div>

                <!-- CAPTCHA -->
                <div style="background:#fff; border:1px solid #ddd; padding:12px; display:flex; align-items:center; gap:10px; margin-bottom:15px;">
                  <input type="checkbox" required>
                  <span>I'm not a robot</span>
                  <img src="https://www.gstatic.com/recaptcha/api2/logo_48.png" width="35">
                </div>

                <!-- Button -->
                <button type="submit" onclick="window.location.href='https://vmsacademy.com/en/1225/10359'"
                  style="background:#167ce9; color:#fff; width:100%; padding:12px; font-size:18px; border:none; cursor:pointer;">
                  Apply Now
                </button>

              </form>

        </div>

      </div>
    </div>
  </div>
</div>


<?php include __DIR__ . '/inc/footer.php'; ?>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    if (window.location.search.includes('popup=admission')) {
      var modal = new bootstrap.Modal(document.getElementById('admissionModal'));
      modal.show();
    }
  });
</script>
