<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<?php
require_once __DIR__ . "/admin-panel/backend/config/db.php";
require_once __DIR__ . "/admin-panel/config/app.php";

$query = "SELECT * FROM sample_papers ORDER BY id DESC";
$result = mysqli_query($conn, $query);
?>

<?php include __DIR__ . '/inc/header.php'; ?>
<?php include __DIR__ . '/inc/top-nav.php'; ?>

<div class="hero-wrap hero-wrap-2" style="background-image: url('images/DSC_4285.JPG'); background-attachment:fixed;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Academics</span></p>
            <h1 class="mb-3 bread">Academics</h1>
          </div>
        </div>
    </div>
</div>

<div style="max-width:1000px; margin:40px auto; font-family:Arial, sans-serif;">

    <h1 style="text-align:center; color:#2c3e50;">Sample Papers</h1>
    <p style="text-align:center; margin-bottom:40px;">
        Download and practice sample question papers for better exam preparation.
    </p>

    <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(250px,1fr)); gap:25px;">

<?php if(mysqli_num_rows($result) > 0) { ?>

    <?php while($row = mysqli_fetch_assoc($result)) { ?>

        <div style="background:#fff; padding:20px; border-radius:12px; border:1px solid #ddd;">
            
            <h3><?php echo $row['class_name']; ?></h3>
            
            <p><?php echo $row['subject']; ?> (<?php echo $row['year']; ?>)</p>

            <a 
                href="<?php echo BASE_URL; ?>uploads/<?php echo $row['file_path']; ?>" 
                target="_blank"
                class="btn btn-primary py-2 px-3"
            >
                Download
            </a>

        </div>

    <?php } ?>

<?php } else { ?>

    <p style="text-align:center;">No sample papers available</p>

<?php } ?>

</div>
</div>
<?php include __DIR__ . '/inc/footer.php'; ?>
