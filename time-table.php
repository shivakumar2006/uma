<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<?php include __DIR__ . '/inc/header.php'; ?>
<?php include __DIR__ . '/inc/top-nav.php'; ?>
<?php 
require_once __DIR__ . "/admin-panel/backend/config/db.php";
require_once __DIR__ . "/admin-panel/config/app.php";

$query = "SELECT * FROM timetable ORDER BY id DESC";
$result = mysqli_query($conn, $query); 
?>

<div class="hero-wrap hero-wrap-2" style="background-image: url('images/DSC_4285.JPG'); background-attachment:fixed;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Time Table</span></p>
            <h1 class="mb-3 bread">Time Table</h1>
          </div>
        </div>
    </div>
</div>

<div style="max-width:1100px; margin:40px auto; font-family:Arial, sans-serif; color:#333;">

    <h1 style="text-align:center; color:#2c3e50; margin-bottom:40px;">
        Class Time Table
    </h1>

    <p style="text-align:center; margin-bottom:40px;">
        School timing and daily schedule for all classes
    </p>

    <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(260px,1fr)); gap:25px;">

<?php if(mysqli_num_rows($result) > 0) { ?>

    <?php while($row = mysqli_fetch_assoc($result)) { ?>

        <div style="background:#fff; padding:20px; border-radius:15px; border:1px solid #ddd; display:flex; flex-direction:column; justify-content:space-between;">

            <div>
                <h3><?php echo $row['class_name']; ?></h3>
                <p style="margin-top:8px;">Click below to view timetable</p>
            </div>

            <a 
                href="<?php echo BASE_URL; ?>uploads/<?php echo $row['file_path']; ?>"
                target="_blank"
                style="margin-top:15px; display:inline-block; background:#167ce9; color:#fff; padding:8px 12px; border-radius:6px; text-align:center;"
            >
                View Timetable
            </a>

        </div>

    <?php } ?>

<?php } else { ?>

    <p style="text-align:center;">No timetable uploaded yet</p>

<?php } ?>

</div>
</div>

<!-- <div id="ttModal" style="display:none; position:fixed; inset:0; background:rgba(0,0,0,0.6); z-index:999;">
    <div style="background:#fff; max-width:950px; margin:40px auto; padding:25px; border-radius:12px; position:relative;">
        
        <span onclick="closeTT()" style="position:absolute; top:15px; right:20px; font-size:22px; cursor:pointer;">x</span>
        
        <h2 id="ttTitle" style="text-align:center; margin-bottom:20px;"></h2>
        
        <div id="ttContent" style="overflow-x:auto;"></div>
    </div>
</div> -->


<?php include __DIR__ . '/inc/footer.php'; ?>

<script>
function openTT(cls) {
    document.getElementById("ttModal").style.display = "block";

    let title = "";
    let table = "";

    if (cls === "nursery") {
        title = "Nursery Time Table";
        table = `
        <table style="width:100%; border-collapse:collapse; text-align:center;">
            <tr style="background:#f2f2f2;">
                <th style="border:1px solid #ccc; padding:8px;">Day</th>
                <th style="border:1px solid #ccc;">9:30-10:20</th>
                <th style="border:1px solid #ccc;">10:20-11:10</th>
                <th style="border:1px solid #ccc;">11:10-12:00</th>
            </tr>
            <tr><td style="border:1px solid #ccc;">Monday</td><td>Rhymes</td><td>Drawing</td><td>Play</td></tr>
            <tr><td style="border:1px solid #ccc;">Tuesday</td><td>Alphabet</td><td>Coloring</td><td>Story</td></tr>
            <tr><td style="border:1px solid #ccc;">Wednesday</td><td>Numbers</td><td>Rhymes</td><td>Outdoor</td></tr>
            <tr><td style="border:1px solid #ccc;">Thursday</td><td>Drawing</td><td>Alphabet</td><td>Free Play</td></tr>
            <tr><td style="border:1px solid #ccc;">Friday</td><td>Rhymes</td><td>Games</td><td>Play</td></tr>
        </table>`;
    }

    if (cls === "lkg") {
        title = "LKG Time Table";
        table = `
        <table style="width:100%; border-collapse:collapse; text-align:center;">
            <tr style="background:#f2f2f2;">
                <th style="border:1px solid #ccc;">Day</th>
                <th style="border:1px solid #ccc;">English</th>
                <th style="border:1px solid #ccc;">Maths</th>
                <th style="border:1px solid #ccc;">Activity</th>
            </tr>
            <tr><td style="border:1px solid #ccc;">Mon</td><td>Alphabet</td><td>Numbers</td><td>Rhymes</td></tr>
            <tr><td style="border:1px solid #ccc;">Tue</td><td>Words</td><td>Shapes</td><td>Drawing</td></tr>
            <tr><td style="border:1px solid #ccc;">Wed</td><td>Reading</td><td>Counting</td><td>Play</td></tr>
        </table>`;
    }

    if (cls === "ukg") {
        title = "UKG Time Table";
        table = `
        <table style="width:100%; border-collapse:collapse; text-align:center;">
            <tr style="background:#f2f2f2;">
                <th style="border:1px solid #ccc;">Day</th>
                <th style="border:1px solid #ccc;">English</th>
                <th style="border:1px solid #ccc;">Maths</th>
                <th style="border:1px solid #ccc;">EVS</th>
            </tr>
            <tr><td style="border:1px solid #ccc;">Mon</td><td>Grammar</td><td>Addition</td><td>Plants</td></tr>
            <tr><td style="border:1px solid #ccc;">Tue</td><td>Reading</td><td>Subtraction</td><td>Animals</td></tr>
        </table>`;
    }

    if (cls === "primary") {
        title = "Class I – V Time Table";
        table = `
        <table style="width:100%; border-collapse:collapse; text-align:center;">
            <tr style="background:#f2f2f2;">
                <th style="border:1px solid #ccc;">Period</th>
                <th style="border:1px solid #ccc;">Subject</th>
            </tr>
            <tr><td style="border:1px solid #ccc;">I</td><td>English</td></tr>
            <tr><td style="border:1px solid #ccc;">II</td><td>Maths</td></tr>
            <tr><td style="border:1px solid #ccc;">III</td><td>EVS</td></tr>
            <tr><td style="border:1px solid #ccc;">IV</td><td>Computer</td></tr>
            <tr><td style="border:1px solid #ccc;">V</td><td>Games</td></tr>
        </table>`;
    }

    if (cls === "secondary") {
        title = "Class VI – X Time Table";
        table = `
        <table style="width:100%; border-collapse:collapse; text-align:center;">
            <tr style="background:#f2f2f2;">
                <th style="border:1px solid #ccc;">Period</th>
                <th style="border:1px solid #ccc;">Subject</th>
            </tr>
            <tr><td style="border:1px solid #ccc;">I</td><td>English</td></tr>
            <tr><td style="border:1px solid #ccc;">II</td><td>Maths</td></tr>
            <tr><td style="border:1px solid #ccc;">III</td><td>EVS</td></tr>
            <tr><td style="border:1px solid #ccc;">IV</td><td>Computer</td></tr>
            <tr><td style="border:1px solid #ccc;">V</td><td>Bio</td></tr>
            <tr><td style="border:1px solid #ccc;">VI</td><td>History</td></tr>
            <tr><td style="border:1px solid #ccc;">VII</td><td>Geography</td></tr>
            <tr><td style="border:1px solid #ccc;">VIII</td><td>Chemistry</td></tr>
            <tr><td style="border:1px solid #ccc;">IX</td><td>Physics</td></tr>
        </table>`;
    }

    if (cls === "senior") {
        title = "Class IX – XII Time Table";
        table = `
        <table style="width:100%; border-collapse:collapse; text-align:center;">
            <tr style="background:#f2f2f2;">
                <th style="border:1px solid #ccc;">Period</th>
                <th style="border:1px solid #ccc;">Subject</th>
            </tr>
            <tr><td style="border:1px solid #ccc;">I</td><td>English</td></tr>
            <tr><td style="border:1px solid #ccc;">II</td><td>Maths</td></tr>
            <tr><td style="border:1px solid #ccc;">III</td><td>Commerce/PC</td></tr>
            <tr><td style="border:1px solid #ccc;">IV</td><td>Computers</td></tr>
            <tr><td style="border:1px solid #ccc;">V</td><td>Maths/Bio</td></tr>
        </table>`;
    }

    document.getElementById("ttTitle").innerHTML = title;
    document.getElementById("ttContent").innerHTML = table;
}

function closeTT() {
    document.getElementById("ttModal").style.display = "none";
}
</script>

