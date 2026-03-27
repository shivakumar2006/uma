<?php 
include 'includes/header.php';

require_once "backend/config/db.php";

/* total notices */
$totalQuery = "SELECT COUNT(*) AS total_notices FROM notices";
$totalResult = mysqli_query($conn, $totalQuery);
$totalData = mysqli_fetch_assoc($totalResult);

$totalNotices = $totalData["total_notices"];

/* notices this week */
$weekQuery = "
    SELECT COUNT(*) AS weekly_notices
    FROM notices 
    WHERE created_at >= DATE_SUB(NOW(), INTERVAL 7 DAY)
";
$weekResult = mysqli_query($conn, $weekQuery);
$weekData = mysqli_fetch_assoc($weekResult);

$weeklyNotices = $weekData['weekly_notices'];


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


/* TOTAL JOBS */

$totalJobsQuery = "SELECT COUNT(*) AS total_jobs FROM jobs";
$totalJobsResult = mysqli_query($conn, $totalJobsQuery);
$totalJobsData = mysqli_fetch_assoc($totalJobsResult);

$totalJobs = $totalJobsData['total_jobs'];


/* JOBS UNDER REVIEW */

$pendingJobsQuery = "
SELECT COUNT(*) AS pending_jobs
FROM jobs
WHERE status = 'reviewing'
";

$pendingJobsResult = mysqli_query($conn, $pendingJobsQuery);
$pendingJobsData = mysqli_fetch_assoc($pendingJobsResult);

$pendingJobs = $pendingJobsData['pending_jobs'];
?>

<!-- <div class="flex-1 overflow-y-auto p-6 bg-slate-50" id="content-area">
            <div id="dashboard" class="section-view active"> -->
                <!-- Stats Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                    <div class="dash-card bg-white p-6 rounded-xl shadow-sm border-l-4 border-indigo-500">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-xs font-bold text-slate-400 uppercase">Total Notices</p>
                                <h3 class="text-3xl font-bold text-slate-800 mt-1">
                                    <?php echo $totalNotices; ?>
                                </h3>
                            </div>
                            <div class="p-2 bg-indigo-50 rounded-lg text-indigo-600"><i class="fas fa-bullhorn"></i></div>
                        </div>
                        <?php if($weeklyNotices > 0) { ?>
                            <p class="text-xs text-green-500 mt-2 font-medium">
                                <i class="fas fa-arrow-up"></i> <?php echo $weeklyNotices; ?> new this week
                            </p>
                        <?php } else { ?>
                            <p class="text-xs text-slate-400 mt-2">
                                No new notices this week
                            </p>
                        <?php } ?>
                    </div>
                    <div class="dash-card bg-white p-6 rounded-xl shadow-sm border-l-4 border-green-500">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-xs font-bold text-slate-400 uppercase">Active Programs</p>
                                <h3 class="text-3xl font-bold text-slate-800 mt-1">8</h3>
                            </div>
                            <div class="p-2 bg-green-50 rounded-lg text-green-600"><i class="fas fa-layer-group"></i></div>
                        </div>
                        <p class="text-xs text-slate-400 mt-2">3 requiring update</p>
                    </div>
                    <div class="dash-card bg-white p-6 rounded-xl shadow-sm border-l-4 border-yellow-500">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-xs font-bold text-slate-400 uppercase">Career Openings</p>
                                <h3 class="text-3xl font-bold text-slate-800 mt-1">
                                    <?php echo $totalJobs; ?>
                                </h3>
                            </div>
                            <div class="p-2 bg-yellow-50 rounded-lg text-yellow-600"><i class="fas fa-briefcase"></i></div>
                        </div>
                        <?php if($pendingJobs > 0) { ?>
                            <p class="text-xs text-green-500 mt-2 font-medium">
                                <i class="fas fa-clock"></i> <?php echo $pendingJobs; ?> under review
                            </p>
                        <?php } else { ?>
                            <p class="text-xs text-slate-400 mt-2">
                                No pending jobs
                            </p>
                        <?php } ?>
                    </div>
                    <div class="dash-card bg-white p-6 rounded-xl shadow-sm border-l-4 border-purple-500">
                        <div class="flex justify-between items-start">
                            <div>
                                <p class="text-xs font-bold text-slate-400 uppercase">Daily Diary</p>
                                <h3 class="text-3xl font-bold text-slate-800 mt-1">
                                    <?php echo $totalDiaries; ?>
                                </h3>
                            </div>
                            <div class="p-2 bg-purple-50 rounded-lg text-purple-600"><i class="fas fa-calendar-day"></i></div>
                        </div>
                        <?php if($monthlyDiaries > 0) { ?>
                            <p class="text-xs text-green-500 mt-2 font-medium">
                                <i class="fas fa-arrow-up"></i> <?php echo $monthlyDiaries; ?> this month
                            </p>
                        <?php } else { ?>
                            <p class="text-xs text-slate-400 mt-2">
                                No entries this month
                            </p>
                        <?php } ?>
                    </div>
                </div>

                <!-- Recent Activity & Chart -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <!-- Chart -->
                    <div class="bg-white p-6 rounded-xl shadow-sm lg:col-span-1">
                        <h4 class="font-bold text-slate-700 mb-4">Traffic Sources</h4>
                        <canvas id="analyticsChart"></canvas>
                    </div>
                    <!-- Quick Actions -->
                    <div class="bg-white p-6 rounded-xl shadow-sm lg:col-span-2">
                        <h4 class="font-bold text-slate-700 mb-4">Quick Actions</h4>
                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                            <a href="index.php?page=notice-board" class="flex flex-col items-center justify-center p-4 border border-slate-200 rounded-lg hover:border-indigo-500 hover:bg-indigo-50 transition-colors">
                                <i class="fas fa-plus-circle text-indigo-600 text-2xl mb-2"></i>
                                <span class="text-sm font-medium">Add Notice</span>
                            </a>
                            <a href="index.php?page=timetable" class="flex flex-col items-center justify-center p-4 border border-slate-200 rounded-lg hover:border-indigo-500 hover:bg-indigo-50 transition-colors">
                                <i class="fas fa-edit text-green-600 text-2xl mb-2"></i>
                                <span class="text-sm font-medium">Update Time Table</span>
                            </a>
                            <a href="index.php?page=career" class="flex flex-col items-center justify-center p-4 border border-slate-200 rounded-lg hover:border-indigo-500 hover:bg-indigo-50 transition-colors">
                                <i class="fas fa-briefcase text-yellow-600 text-2xl mb-2"></i>
                                <span class="text-sm font-medium">Post Job</span>
                            </a>
                            <a href="index.php?page=daily-diary" class="flex flex-col items-center justify-center p-4 border border-slate-200 rounded-lg hover:border-indigo-500 hover:bg-indigo-50 transition-colors sm:col-span-2">
                                <i class="fas fa-book-medical text-red-600 text-2xl mb-2"></i>
                                <span class="text-sm font-medium">Log Daily Activity</span>
                            </a>
                        </div>
                    </div>
                </div>
            <!-- </div> -->
<script>
    function initChart() {
            const ctx = document.getElementById('analyticsChart');
            if(!ctx) return;
            
            new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ['Notices', 'Syllabus', 'Papers', 'Jobs'],
                    datasets: [{
                        data: [<?php echo $totalNotices; ?>, 8, 15, <?php echo $totalJobs; ?>],
                        backgroundColor: [
                            '#4f46e5', // Indigo
                            '#10b981', // Emerald
                            '#f59e0b', // Amber
                            '#8b5cf6'  // Purple
                        ],
                        borderWidth: 0,
                        hoverOffset: 4
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: { usePointStyle: true, padding: 20 }
                        }
                    },
                    cutout: '70%'
                }
            });
        }
         document.addEventListener("DOMContentLoaded", initChart);
        </script>