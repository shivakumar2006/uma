<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle; ?> - Admin</title>

    <!-- ✅ Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- ✅ Font Awesome CDN -->
    <link rel="stylesheet" 
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Optional Custom CSS -->
    <link rel="stylesheet" href="assets/css/admin.css">
</head>

<body class="bg-slate-100 text-slate-800">

<div class="flex h-screen">

    <!-- Sidebar -->
    <?php include "includes/sidebar.php"; ?>

    <!-- Main Content -->
    <div class="flex-1 p-6 overflow-y-auto">
        <div class="container mx-auto">
            <?php include $content; ?>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Optional Custom JS -->
<script src="assets/js/admin.js"></script>
</body>
</html>