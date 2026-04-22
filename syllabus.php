<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$currentPage = basename($_SERVER['PHP_SELF']);
?>

<?php
require_once __DIR__ . "/admin-panel/config/app.php";
require_once __DIR__ . "/admin-panel/backend/config/db.php";

$query = "SELECT * FROM syllabus ORDER BY class_name ASC";
$result = mysqli_query($conn, $query);

// group by class
$grouped = [];

while($row = mysqli_fetch_assoc($result)){
    $grouped[$row['class_name']][] = $row;
}
?>

<?php include __DIR__ . '/inc/header.php'; ?>
<?php include __DIR__ . '/inc/top-nav.php'; ?>

<div class="hero-wrap hero-wrap-2" style="background-image: url('images/DSC_4285.JPG'); background-attachment:fixed;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Syllabus</span></p>
            <h1 class="mb-3 bread">Syllabus</h1>
          </div>
        </div>
    </div>
</div>


<div style="max-width:1100px; margin:40px auto; font-family:Arial, sans-serif; color:#333;">

    <h1 style="text-align:center; color:#2c3e50; margin-bottom:40px;">
        Academic Syllabus
    </h1>

    <p style="text-align:center; margin-bottom:40px;">
        Class-wise syllabus for the current academic session
    </p>

    <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(260px,1fr)); gap:25px;">

<?php if(!empty($grouped)) { ?>

    <?php foreach($grouped as $class => $subjects) { ?>

        <div style="background:#fff; padding:20px; border-radius:15px; border:1px solid #ddd;">
            
            <h3><?php echo $class; ?></h3>

            <ul>

                <?php foreach($subjects as $item) { ?>

                    <li>
                        <a 
                            href="<?php echo BASE_URL; ?>uploads/<?php echo $item['file_path']; ?>" 
                            target="_blank"
                        >
                            <?php echo $item['subject']; ?> (<?php echo $item['year']; ?>)
                        </a>
                    </li>

                <?php } ?>

            </ul>

        </div>

    <?php } ?>

<?php } else { ?>

    <p>No syllabus available</p>

<?php } ?>

</div>
</div>

<?php include __DIR__ . '/inc/footer.php'; ?>
