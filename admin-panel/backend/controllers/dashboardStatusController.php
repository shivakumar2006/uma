<?php

require_once "../config/db.php";

/* TOTAL JOBS */

$totalJobsQuery = "SELECT COUNT(*) AS total_jobs FROM jobs";
$totalJobsResult = mysqli_query($conn, $totalJobsQuery);
$totalJobsData = mysqli_fetch_assoc($totalJobsResult);

$totalJobs = $totalJobsData['total_jobs'];


/* JOBS UNDER REVIEW (PENDING) */

$pendingJobsQuery = "
SELECT COUNT(*) AS pending_jobs
FROM jobs
WHERE status = 'reviewing'
";

$pendingJobsResult = mysqli_query($conn, $pendingJobsQuery);
$pendingJobsData = mysqli_fetch_assoc($pendingJobsResult);

$pendingJobs = $pendingJobsData['pending_jobs'];


/* DAILY DIARY ENTRIES THIS MONTH */

$monthlyDiaryQuery = "
SELECT COUNT(*) AS monthly_diary
FROM daily_diary
WHERE MONTH(created_at) = MONTH(CURRENT_DATE())
AND YEAR(created_at) = YEAR(CURRENT_DATE())
";

$monthlyDiaryResult = mysqli_query($conn, $monthlyDiaryQuery);
$monthlyDiaryData = mysqli_fetch_assoc($monthlyDiaryResult);

$monthlyDiary = $monthlyDiaryData['monthly_diary'];

/* TOTAL SYLLABUS */

$totalSyllabusQuery = "SELECT COUNT(*) AS total_syllabus FROM syllabus";
$totalSyllabusResult = mysqli_query($conn, $totalSyllabusQuery);
$totalSyllabusData = mysqli_fetch_assoc($totalSyllabusResult);

$totalSyllabus = $totalSyllabusData['total_syllabus'];

/* TOTAL TIMETABLE */

$totalTimetableQuery = "SELECT COUNT(*) AS total_timetable FROM timetable";
$totalTimetableResult = mysqli_query($conn, $totalTimetableQuery);
$totalTimetableData = mysqli_fetch_assoc($totalTimetableResult);

$totalTimetable = $totalTimetableData['total_timetable'];

?>