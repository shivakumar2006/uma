<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<?php include __DIR__ . '/inc/header.php'; ?>
<?php include __DIR__ . '/inc/top-nav.php'; ?>

<div class="hero-wrap hero-wrap-2" style="background-image: url('images/DSC_4285.JPG'); background-attachment:fixed;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>RTE-Admission</span></p>
            <h1 class="mb-3 bread">RTE Admission</h1>
          </div>
        </div>
    </div>
</div>


<div style="max-width:1100px; margin:40px auto; padding:20px; font-family:Arial, sans-serif; color:#333;">

    <!-- Page Title -->
    <h1 style="text-align:center; color:#2c3e50; margin-bottom:20px;">
        RTE Admission
    </h1>

    <p style="text-align:center; max-width:800px; margin:0 auto 40px; line-height:1.7;">
        Uma Memorial Public School follows the provisions of the <strong>Right to Education (RTE) Act</strong>
        as prescribed by the Government of India, ensuring free and compulsory education for eligible
        children in a fair and transparent manner.
    </p>

    <div style="max-width:1100px; color:#333; align-items:center; justify-content:center;">

    <div style="background:#fff; width:100%; max-width:500px; padding:25px;
                border-radius:15px; position:relative; margin:0 auto;">

        <h2 style="text-align:center; margin-bottom:20px; color:#2c3e50;">
            RTE-Admission Form
        </h2>

        <form>
            <input type="text" placeholder="Student Name" required
                   style="width:100%; padding:10px; margin-bottom:15px;
                          border-radius:6px; border:1px solid #ccc;">

            <input type="text" placeholder="Parent / Guardian Name" required
                   style="width:100%; padding:10px; margin-bottom:15px;
                          border-radius:6px; border:1px solid #ccc;">

            <input type="number" placeholder="Age" required
                   style="width:100%; padding:10px; margin-bottom:15px;
                          border-radius:6px; border:1px solid #ccc;">
            
            <input type="tel" placeholder="Mobile Number" required
                   style="width:100%; padding:10px; margin-bottom:15px;
                          border-radius:6px; border:1px solid #ccc;">

              <select name="standard" required
                style="width:100%; padding:10px; margin-bottom:15px;
                          border-radius:6px; border:1px solid #ccc;">
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
                <option>Class 10</option>
                <option>Class 11</option>
                <option>Class 12</option>
              </select>


            <input type="text" placeholder="RTE Application Number" required
                   style="width:100%; padding:10px; margin-bottom:15px;
                          border-radius:6px; border:1px solid #ccc;">

            <textarea placeholder="Address" required
                      style="width:100%; padding:10px; margin-bottom:20px;
                             border-radius:6px; border:1px solid #ccc;"></textarea>

            <div style="text-align:center;">
                <button type="submit"
                        style="background:#167ce9; color:#fff; padding:10px 25px;
                               border:none; border-radius:6px; cursor:pointer;">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>



    <!-- Eligibility -->
    <h2 style="color:#34495e; margin-bottom:20px;">Eligibility Criteria</h2>

    <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(250px, 1fr)); gap:25px; margin-bottom:50px;">

        <div style="background:#fff; padding:25px; border-radius:15px; border:1px solid #e0e0e0;
                    box-shadow:0 8px 20px rgba(0,0,0,0.08); text-align:center;">
            <div style="font-size:3em; margin-bottom:15px;">👶</div>
            <h3>Age Criteria</h3>
            <p style="font-size:14px;">Child must meet the age requirements set by the RTE authority.</p>
        </div>

        <div style="background:#fff; padding:25px; border-radius:15px; border:1px solid #e0e0e0;
                    box-shadow:0 8px 20px rgba(0,0,0,0.08); text-align:center;">
            <div style="font-size:3em; margin-bottom:15px;">🏠</div>
            <h3>Residential Proof</h3>
            <p style="font-size:14px;">Valid residential proof within the notified school area is required.</p>
        </div>

        <div style="background:#fff; padding:25px; border-radius:15px; border:1px solid #e0e0e0;
                    box-shadow:0 8px 20px rgba(0,0,0,0.08); text-align:center;">
            <div style="font-size:3em; margin-bottom:15px;">📑</div>
            <h3>Income Category</h3>
            <p style="font-size:14px;">Family income must fall under RTE-specified limits.</p>
        </div>

    </div>

    <!-- How to Apply -->
    <h2 style="color:#34495e; margin-bottom:20px;">How to Apply</h2>

    <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(250px, 1fr)); gap:25px; margin-bottom:50px;">

        <div style="background:#fff; padding:25px; border-radius:15px; border:1px solid #e0e0e0;
                    box-shadow:0 8px 20px rgba(0,0,0,0.08); text-align:center;">
            <div style="font-size:3em; margin-bottom:15px;">🏢</div>
            <h3>CSC Centers</h3>
            <p style="font-size:14px;">Parents may apply through nearby Common Service Centers.</p>
        </div>

        <div style="background:#fff; padding:25px; border-radius:15px; border:1px solid #e0e0e0;
                    box-shadow:0 8px 20px rgba(0,0,0,0.08); text-align:center;">
            <div style="font-size:3em; margin-bottom:15px;">🌐</div>
            <h3>Official RTE Portal</h3>
            <p style="font-size:14px;">Self-apply online through the government RTE admission portal.</p>
        </div>

    </div>

    <!-- Seat Allotment -->
    <h2 style="color:#34495e; margin-bottom:20px;">After Seat Allotment</h2>

    <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(220px, 1fr)); gap:25px; margin-bottom:40px;">

        <div style="background:#fff; padding:20px; border-radius:15px; border:1px solid #e0e0e0; text-align:center;">
            <div style="font-size:2.5em;">🏫</div>
            <p>Report to school within the given timeline</p>
        </div>

        <div onclick="document.getElementById('admissionModal').style.display='flex'"
            style="cursor:pointer; background:#fff; padding:20px; border-radius:15px;
            border:1px solid #e0e0e0; text-align:center;
            box-shadow:0 8px 20px rgba(0,0,0,0.08);">
            <div style="font-size:2.5em;">📝</div>
            <p>Complete school admission formalities</p>
        </div>

        <div style="background:#fff; padding:20px; border-radius:15px; border:1px solid #e0e0e0; text-align:center;">
            <div style="font-size:2.5em;">📂</div>
            <p>Submit original documents for verification</p>
        </div>

        <div style="background:#fff; padding:20px; border-radius:15px; border:1px solid #e0e0e0; text-align:center;">
            <div style="font-size:2.5em;">✅</div>
            <p>Admission confirmed after approval</p>
        </div>

    </div>

    <!-- Documents Required -->
    <h2 style="color:#34495e; margin-bottom:20px;">Documents Required</h2>

    <div style="background:#fff; padding:25px; border-radius:15px; border:1px solid #e0e0e0;
                box-shadow:0 8px 20px rgba(0,0,0,0.08); margin-bottom:40px;">
        <ul style="line-height:1.8;">
            <li>RTE application acknowledgement slip</li>
            <li>Child’s birth certificate</li>
            <li>Aadhar card of child and parents</li>
            <li>Residential proof</li>
            <li>Income certificate (if applicable)</li>
        </ul>
    </div>

    <!-- Important Note -->
    <div style="background:#fff3cd; border-left:6px solid #ffc107; padding:20px; border-radius:10px;">
        <strong>Important Note:</strong>
        <p style="margin-top:10px; line-height:1.6;">
            All expenses such as uniforms, books, transport, or activities not covered under the RTE scheme
            shall be borne by the parent or guardian as per school norms.
        </p>
    </div>

</div>



<?php include __DIR__ . '/inc/footer.php'; ?>