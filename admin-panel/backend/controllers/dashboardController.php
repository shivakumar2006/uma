<?php

require_once "../config/db.php";

/*total notices*/ 
$totalQuery = "SELECT COUNT(*) AS total_notices FROM notices";
$totalResult = mysqli_query($conn, $totalQuery);
$totalData = mysqli_fetch_assoc($totalResult);

$totalNotices = $totalData["total_notices"];

// notices this week
$weekQuery = "
    SELECT COUNT(*) AS weekly_notices
    FROM notices 
    WHERE created_at >= DATE_SUB(NOW(), INTERVAL 7 DAYS)
    ";

    $weekResult = mysqli_query($conn, $weekQuery);
    $weekData = mysqli_fetch_assoc($weekResult);

    $weeklyNotices = $weekData['weekly_notices'];

?>