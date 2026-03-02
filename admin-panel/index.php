<?php

$page = $_GET['page'] ?? 'dashboard';

$allowedPages = [
    'dashboard',
    'sample-papers',
    'syllabus',
    'timetable',
    'notice-board',
    'daily-diary',
    'career',
    'programs',
    'communication',
    'query-handler',
    'Admission-Forms',
    'Settings'
];

// Security check
if (!in_array($page, $allowedPages)) {
    $page = 'dashboard';
}

$pageTitle = ucwords(str_replace('-', ' ', $page));
$content = "$page.php";

include "includes/layout.php";
