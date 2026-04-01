<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $pageTitle; ?> - Admin</title>

    <!-- ✅ Facebook Pixel -->
    <script>
        !function(f,b,e,v,n,t,s){
        if(f.fbq)return;n=f.fbq=function(){
        n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)
        }(window, document,'script','https://connect.facebook.net/en_US/fbevents.js');

        fbq('init', '887752657618800');
        fbq('track', 'PageView');
    </script>

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
<noscript>
  <img height="1" width="1" 
  src="https://www.facebook.com/tr?id=887752657618800&ev=PageView&noscript=1"/>
</noscript>
</html>