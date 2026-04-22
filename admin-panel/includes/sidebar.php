<?php 
session_start();
$currentPage = $_GET['page'] ?? 'dashboard'; 
require_once __DIR__ . "/../config/app.php";
?>
<?php
$userName = $_SESSION['user']['name'] ?? 'Guest';
$userEmail = $_SESSION['user']['email'] ?? 'guest@email.com';
?>
<aside class="sidebar bg-slate-900 text-white w-64 flex flex-col h-full shadow-xl">

<div class="h-16 flex items-center px-6 border-b border-slate-700">
    <div class="flex items-center gap-3">
        <div class="bg-indigo-600 p-2 rounded-lg">
            <i class="fas fa-graduation-cap"></i>
        </div>
        <span class="font-bold text-xl">Uma Admin</span>
    </div>
</div>

<nav class="flex-1 overflow-y-auto py-4">
            <ul class="space-y-1 px-3">
                <li>
                    <a href="index.php?page=dashboard" class="nav-item w-full flex items-center gap-4 px-4 py-3 rounded-lg hover:bg-slate-800 text-slate-300 hover:text-white transition-colors 
                    <?php echo ($currentPage == 'dashboard') 
                        ? 'bg-slate-800 text-white' 
                        : 'text-slate-300 hover:bg-slate-800 hover:text-white'; ?>">
                        <i class="fas fa-home w-5 text-center"></i>
                        <span class="link-text">Dashboard</span>
                    </a>
                </li>
                
                <li class="pt-4 pb-2 px-4 text-xs font-semibold text-slate-500 uppercase tracking-wider">Academics</li>
                <li>
                    <a href="index.php?page=sample-papers" class="nav-item w-full flex items-center gap-4 px-4 py-2 rounded-lg hover:bg-slate-800 text-slate-300 hover:text-white transition-colors 
                    <?php echo ($currentPage == 'sample-papers') 
                        ? 'bg-slate-800 text-white' 
                        : 'text-slate-300 hover:bg-slate-800 hover:text-white'; ?>">
                        <i class="fas fa-file-alt w-5 text-center"></i>
                        <span class="link-text">Sample Papers</span>
                    </a>
                </li>
                <li>
                    <a href="index.php?page=syllabus" class="nav-item w-full flex items-center gap-4 px-4 py-2 rounded-lg hover:bg-slate-800 text-slate-300 hover:text-white transition-colors 
                    <?php echo ($currentPage == 'syllabus') 
                        ? 'bg-slate-800 text-white' 
                        : 'text-slate-300 hover:bg-slate-800 hover:text-white'; ?>">
                        <i class="fas fa-book w-5 text-center"></i>
                        <span class="link-text">Syllabus</span>
                    </a>
                </li>
                <li>
                    <a href="index.php?page=timetable" class="nav-item w-full flex items-center gap-4 px-4 py-2 rounded-lg hover:bg-slate-800 text-slate-300 hover:text-white transition-colors
                    <?php echo ($currentPage == 'timetable') 
                        ? 'bg-slate-800 text-white'
                        : 'text-slate-300 hover:bg-slate-800 hover:text-white'; ?>">
                        <i class="fas fa-clock w-5 text-center"></i>
                        <span class="link-text">Time Table</span>
                    </a>
                </li>

                <li class="pt-4 pb-2 px-4 text-xs font-semibold text-slate-500 uppercase tracking-wider">Campus</li>
                <li>
                    <a href="index.php?page=notice-board" class="nav-item w-full flex items-center gap-4 px-4 py-2 rounded-lg hover:bg-slate-800 text-slate-300 hover:text-white transition-colors
                    <?php echo ($currentPage == 'notice-board') 
                        ? 'bg-slate-800 text-white'
                        : 'text-slate-300 hover:bg-slate-800 hover:text-white'; ?>">
                        <i class="fas fa-bullhorn w-5 text-center"></i>
                        <span class="link-text">Notice Board</span>
                    </a>
                </li>
                <li>
                    <a href="index.php?page=daily-diary" class="nav-item w-full flex items-center gap-4 px-4 py-2 rounded-lg hover:bg-slate-800 text-slate-300 hover:text-white transition-colors
                    <?php echo ($currentPage == 'daily-diary') 
                        ? 'bg-slate-800 text-white'
                        : 'text-slate-300 hover:bg-slate-800 hover:text-white'; ?>">
                        <i class="fas fa-calendar-day w-5 text-center"></i>
                        <span class="link-text">Daily Diary</span>
                    </a>
                </li>
                <li>
                    <a href="index.php?page=career" class="nav-item w-full flex items-center gap-4 px-4 py-2 rounded-lg hover:bg-slate-800 text-slate-300 hover:text-white transition-colors
                    <?php echo ($currentPage == 'career') 
                        ? 'bg-slate-800 text-white'
                        : 'text-slate-300 hover:bg-slate-800 hover:text-white'; ?>">
                        <i class="fas fa-briefcase w-5 text-center"></i>
                        <span class="link-text">Career Openings</span>
                    </a>
                </li>
                <li>
                    <a href="index.php?page=programs" class="nav-item w-full flex items-center gap-4 px-4 py-2 rounded-lg hover:bg-slate-800 text-slate-300 hover:text-white transition-colors
                    <?php echo ($currentPage == 'programs') 
                        ? 'bg-slate-800 text-white'
                        : 'text-slate-300 hover:bg-slate-800 hover:text-white'; ?>">
                        <i class="fas fa-layer-group w-5 text-center"></i>
                        <span class="link-text">Our Programs</span>
                    </a>
                </li>
                <li class="pt-4 pb-2 px-4 text-xs font-semibold text-slate-500 uppercase tracking-wider">Communication</li>
                <li>
                    <a href="index.php?page=communication" class="nav-item w-full flex items-center gap-4 px-4 py-2 rounded-lg hover:bg-slate-800 text-slate-300 hover:text-white transition-colors
                    <?php echo ($currentPage == 'communication') 
                        ? 'bg-slate-800 text-white'
                        : 'text-slate-300 hover:bg-slate-800 hover:text-white'; ?>">
                        <i class="fas fa-envelope w-5 text-center"></i>
                        <span class="link-text">SMS & Mail Handler</span>
                    </a>
                </li>
                <li class="pt-4 pb-2 px-4 text-xs font-semibold text-slate-500 uppercase tracking-wider">Others</li>
                <li>
                    <a href="index.php?page=query-handler" class="nav-item w-full flex items-center gap-4 px-4 py-2 rounded-lg hover:bg-slate-800 text-slate-300 hover:text-white transition-colors
                    <?php echo ($currentPage == 'query-handler') 
                        ? 'bg-slate-800 text-white'
                        : 'text-slate-300 hover:bg-slate-800 hover:text-white'; ?>">
                        <i class="fas fa-question w-5 text-center"></i>
                        <span class="link-text">Query Handler</span>
                    </a>
                </li>
                <li>
                    <a href="index.php?page=Admission-Forms" class="nav-item w-full flex items-center gap-4 px-4 py-2 rounded-lg hover:bg-slate-800 text-slate-300 hover:text-white transition-colors
                    <?php echo ($currentPage == 'Admission-Forms') 
                        ? 'bg-slate-800 text-white'
                        : 'text-slate-300 hover:bg-slate-800 hover:text-white'; ?>">
                        <i class="fas fa-database w-5 text-center"></i>
                        <span class="link-text">Admission Forms</span>
                    </a>
                </li>
                <li>
                    <a href="index.php?page=Settings" class="nav-item w-full flex items-center gap-4 px-4 py-2 rounded-lg hover:bg-slate-800 text-slate-300 hover:text-white transition-colors
                    <?php echo ($currentPage == 'Settings') 
                        ? 'bg-slate-800 text-white'
                        : 'text-slate-300 hover:bg-slate-800 hover:text-white'; ?>">
                        <i class="fas fa-cogs w-5 text-center"></i>
                        <span class="link-text">Settings</span>
                    </a>
                </li>
            </ul>
        </nav>

<div class="p-4 border-t border-slate-700 bg-slate-800">
            <div class="flex items-center gap-3">
                <img src="https://ui-avatars.com/api/?name=Admin+User&background=4f46e5&color=fff" alt="Admin" class="w-10 h-10 rounded-full">
                <div class="user-info overflow-hidden">
                    <p class="text-sm font-semibold truncate"><?php echo $userName; ?></p>
                    <p class="text-xs text-slate-400"><?php echo $userEmail; ?></p>
                </div>
                <a href="<?php echo BASE_URL; ?>admin-panel/backend/routes/auth.php?action=logout"
                   class="ml-auto text-slate-400 hover:text-red-400"
                   title="Logout">
                   <i class="fas fa-sign-out-alt"></i>
                </a>
            </div>
        </div>

</aside>
