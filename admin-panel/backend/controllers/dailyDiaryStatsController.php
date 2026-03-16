<?php

require_once "../config/db.php";

/* TOTAL DAILY DIARIES */

$totalDiaryQuery = "SELECT COUNT(*) AS total_diaries FROM daily_diary";
$totalDiaryResult = mysqli_query($conn, $totalDiaryQuery);
$totalDiaryData = mysqli_fetch_assoc($totalDiaryResult);

$totalDiaries = $totalDiaryData['total_diaries'];


/* DAILY DIARIES THIS MONTH */

$monthlyDiaryQuery = "
SELECT COUNT(*) AS monthly_diaries
FROM daily_diary
WHERE MONTH(created_at) = MONTH(CURRENT_DATE())
AND YEAR(created_at) = YEAR(CURRENT_DATE())
";

$monthlyDiaryResult = mysqli_query($conn, $monthlyDiaryQuery);
$monthlyDiaryData = mysqli_fetch_assoc($monthlyDiaryResult);

$monthlyDiaries = $monthlyDiaryData['monthly_diaries'];

?>