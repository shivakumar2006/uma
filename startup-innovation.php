<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<?php include __DIR__ . '/inc/header.php'; ?>
<?php include __DIR__ . '/inc/top-nav.php'; ?>

<div class="hero-wrap hero-wrap-2" style="background-image: url('images/DSC_4285.jpg'); background-attachment:fixed;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Startup & Innovation</span></p>
            <h1 class="mb-3 bread">Startup & Innovation</h1>
          </div>
        </div>
    </div>
</div>


<section style="background:#f5f8fc; padding:60px 20px; font-family:Segoe UI, sans-serif;">
  <div style="max-width:1100px; margin:auto;">

    <!-- Title -->
    <h2 style="text-align:center; font-size:32px; color:#1e3a8a; margin-bottom:10px;">
      Startup & Innovation Council
    </h2>
    <p style="text-align:center; font-size:16px; color:#555; max-width:700px; margin:0 auto 40px;">
      Uma Memorial Public School believes that innovation and creativity should start from an early stage.
    </p>

    <!-- Content Grid -->
    <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(280px, 1fr)); gap:25px; margin-bottom:50px;">

      <!-- About Card -->
      <div style="background:#ffffff; padding:25px; border-radius:10px; box-shadow:0 8px 20px rgba(0,0,0,0.05);">
        <h3 style="color:#1e40af; margin-bottom:15px;">About the Council</h3>
        <p style="color:#444; font-size:15px; line-height:1.6;">
          Uma Memorial Public School strongly believes that innovation and creativity should begin at an early age.
          Through our Startup & Innovation Council, students are encouraged to think beyond textbooks and work on
          real-world problems.
        </p>
        <p style="color:#444; font-size:15px; line-height:1.6;">
          The council provides guidance, mentorship, and resources to help students convert ideas into practical
          and meaningful solutions.
        </p>
      </div>

      <!-- Journey Card -->
      <div style="background:#ffffff; padding:25px; border-radius:10px; box-shadow:0 8px 20px rgba(0,0,0,0.05);">
        <h3 style="color:#1e40af; margin-bottom:15px;">Our Startup Journey</h3>
        <p style="color:#444; font-size:15px; line-height:1.6;">
          The startup culture at Uma Memorial Public School began with the idea of encouraging students to identify
          problems around them and create meaningful solutions.
        </p>
        <p style="color:#444; font-size:15px; line-height:1.6;">
          Over time, several innovative projects and student-led startups were initiated under teacher guidance,
          helping students apply classroom learning to real-life challenges.
        </p>
      </div>

    </div>

    <!-- Skills Section -->
    <div style="text-align:center;">
      <h3 style="color:#1e3a8a; margin-bottom:25px;">
        Skills Developed Through Our Initiatives
      </h3>

      <div class="skills-grid" 
        style="display:grid; grid-template-columns:repeat(auto-fit, minmax(250px, 1fr)); gap:25px; margin-top:30px;">

        <div class="skill-card"
            style="background:#ffffff;
                    color:#333;
                    padding:30px;
                    border-radius:15px;
                    border:1px solid #e0e0e0;
                    box-shadow:0 8px 20px rgba(0,0,0,0.08);
                    transition:transform 0.3s ease, box-shadow 0.3s ease;
                    text-align:center;"
            onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 15px 30px rgba(0,0,0,0.15)'"
            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 20px rgba(0,0,0,0.08)'">

            <div class="icon" style="font-size:3em; margin-bottom:15px;">💡</div>
            <h3 style="font-size:1.3em; margin-bottom:10px;">Creative Thinking</h3>
            <p>The ability to generate original, novel, and useful ideas.</p>
        </div>

        <div class="skill-card"
            style="background:#ffffff;
                    color:#333;
                    padding:30px;
                    border-radius:15px;
                    border:1px solid #e0e0e0;
                    box-shadow:0 8px 20px rgba(0,0,0,0.08);
                    transition:transform 0.3s ease, box-shadow 0.3s ease;
                    text-align:center;"
            onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 15px 30px rgba(0,0,0,0.15)'"
            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 20px rgba(0,0,0,0.08)'">

            <div class="icon" style="font-size:3em; margin-bottom:15px;">🎯</div>
            <h3 style="font-size:1.3em; margin-bottom:10px;">Problem-Solving Skills</h3>
            <p>The ability to identify, analyze, and resolve challenges effectively and systematically.</p>
        </div>

        <div class="skill-card"
            style="background:#ffffff;
                    color:#333;
                    padding:30px;
                    border-radius:15px;
                    border:1px solid #e0e0e0;
                    box-shadow:0 8px 20px rgba(0,0,0,0.08);
                    transition:transform 0.3s ease, box-shadow 0.3s ease;
                    text-align:center;"
            onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 15px 30px rgba(0,0,0,0.15)'"
            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 20px rgba(0,0,0,0.08)'">

            <div class="icon" style="font-size:3em; margin-bottom:15px;">🤝</div>
            <h3 style="font-size:1.3em; margin-bottom:10px;">Teamwork and Leadership</h3>
            <p>The strength of the team is each individual member. The strength of each member is the team.</p>
        </div>

        <div class="skill-card"
            style="background:#ffffff;
                    color:#333;
                    padding:30px;
                    border-radius:15px;
                    border:1px solid #e0e0e0;
                    box-shadow:0 8px 20px rgba(0,0,0,0.08);
                    transition:transform 0.3s ease, box-shadow 0.3s ease;
                    text-align:center;"
            onmouseover="this.style.transform='translateY(-10px)'; this.style.boxShadow='0 15px 30px rgba(0,0,0,0.15)'"
            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 8px 20px rgba(0,0,0,0.08)'">

            <div class="icon" style="font-size:3em; margin-bottom:15px;">🔧</div>
            <h3 style="font-size:1.3em; margin-bottom:10px;">Practical and Technical Knowledge</h3>
            <p>Technical skill is mastery of complexity, while creativity is mastery of simplicity.</p>
        </div>

    </div>


    </div>

    </div>

  </div>
</section>

<section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Encouraging young innovators to dream, design, and develop for tomorrow.</h2>
              <p>At UMPS, classrooms are more than learning spaces — they are launchpads for ideas. Our Startup & Innovation Program helps students explore creativity, build problem-solving skills, and transform bold ideas into practical solutions </p>
              <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="btn-join ftco-animate">
			    			<p><a href="#" class="btn btn-primary py-3 px-4">Enrol now!</a></p>
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
