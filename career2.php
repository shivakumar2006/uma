<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Careers | Uma Memorial Public School</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/jpg" href="images/logo-1_imresizer_1.jpg">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');
        
        * {
            font-family: 'Inter', sans-serif;
        }
        
        .gradient-bg {
            background: linear-gradient(
      to right,
      rgb(106, 0, 255) 0%,
      rgb(255, 217, 0) 100%
    );
        }
        
        .card-hover {
            transition: all 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }
        
        .job-card {
            transition: all 0.3s ease;
        }
        
        .job-card:hover {
            border-color: #2d5a87;
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
        }
        
        .btn-primary {
            background-color: #FFC300;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(30, 58, 95, 0.3);
        }
        
        .stat-card {
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(10px);
        }
        
        .benefit-icon {
            background: linear-gradient(135deg, #2d5a87 0%, #3d7ab5 100%);
        }
        
        .scroll-animate {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }
        
        .scroll-animate.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            z-index: 1000;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .modal.active {
            display: flex;
        }
        
        .modal-content {
            background: white;
            border-radius: 16px;
            max-width: 600px;
            width: 100%;
            max-height: 90vh;
            overflow-y: auto;
            animation: modalSlide 0.3s ease;
        }
        
        @keyframes modalSlide {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .tag {
            transition: all 0.2s ease;
        }
        
        .tag:hover {
            transform: scale(1.05);
        }
        
        input:focus, textarea:focus, select:focus {
            outline: none;
            border-color: #2d5a87;
            box-shadow: 0 0 0 3px rgba(45, 90, 135, 0.1);
        }

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(22, 124, 233, 0.2);
            background: linear-gradient(to right, #167CE9 0%, #FFC300 100%);
            color: white;
        }

        .card-hover:hover p,
        .card-hover:hover h3 {
            color: white;
        }

        .auth-buttons {
            display: flex;
            gap: 1rem;
        }

        
        .btn-outline {
            background-color: #167CE9;
            color: white;
            border: 2px solid white;
        }

        .btn-primary {
            background-color: #FFC300;
            color: white;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }

        .btn-dan{
            background-color: #197CE9;
            color: white;
        }

    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 rounded-full flex items-center justify-center">
                        <!--<i class="fas fa-graduation-cap text-white text-lg"></i>-->
                        <img src="images/logo.png" alt="UMPS">
                    </div>
                    <span class="font-bold text-xl text-gray-800">Uma Memorial Public School</span>
                </div>
                <div class="px-4 py-3 space-y-3">
                    <div class="auth-buttons">
                        <a href="login.php" class="bg-[#167CE9] text-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-[#FFC300] transition shadow-lg">Login</a>
                        <a href="signup.php" class="bg-[#FFC300] text-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-[#167CE9] transition">Sign Up</a>
                    </div>
                    <button class="md:hidden text-gray-600" onclick="toggleMobileMenu()">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div id="mobileMenu" class="hidden md:hidden bg-white border-t">
            <div class="px-4 py-3 space-y-3">
                <div class="auth-buttons">
                    <a href="login.php" class="bg-[#167CE9] text-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-[#FFC300] transition shadow-lg">Login</a>
                    <a href="signup.php" class="bg-[#FFC300] text-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-[#167CE9] transition">Sign Up</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section border-2 border-white -->
    <section class="gradient-bg py-20 md:py-32 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-20 left-10 w-72 h-72 bg-white rounded-full blur-3xl"></div>
            <div class="absolute bottom-10 right-20 w-96 h-96 bg-white rounded-full blur-3xl"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center">
                <span class="inline-block bg-white/20 text-white px-4 py-2 rounded-full text-sm font-medium mb-6">
                    <i class="fas fa-briefcase mr-2"></i>Join Our Team
                </span>
                <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                    Shaping Bright Futures with <br>
                    <span class="text-white-300">Knowledge & Values</span>
                </h1>
                <p class="text-xl text-blue-100 max-w-2xl mx-auto mb-10">
                    Join a passionate community of educators dedicated to inspiring the next generation. Discover your perfect role at Uma Memorial Public School.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#positions" class="bg-[#167CE9] text-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-[#FFC300] transition shadow-lg">
                        View Open Positions
                    </a>
                    <a href="#benefits" class="bg-[#FFC300] text-white px-8 py-4 rounded-full font-semibold hover:bg-white hover:text-[#167CE9] transition">
                        Why Work With Us
                    </a>
                </div>
            </div>
            
            <!-- Stats -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-16">
                <div class="stat-card rounded-2xl p-6 text-center">
                    <div class="text-3xl md:text-4xl font-bold text-white mb-2">150+</div>
                    <div class="text-blue-200 text-sm">Faculty Members</div>
                </div>
                <div class="stat-card rounded-2xl p-6 text-center">
                    <div class="text-3xl md:text-4xl font-bold text-white mb-2">16</div>
                    <div class="text-blue-200 text-sm">Years of Excellence</div>
                </div>
                <div class="stat-card rounded-2xl p-6 text-center">
                    <div class="text-3xl md:text-4xl font-bold text-white mb-2">98%</div>
                    <div class="text-blue-200 text-sm">Staff Satisfaction</div>
                </div>
                <div class="stat-card rounded-2xl p-6 text-center">
                    <div class="text-3xl md:text-4xl font-bold text-white mb-2">12</div>
                    <div class="text-blue-200 text-sm">Open Positions</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Work With Us -->
    <section id="benefits" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center mb-16 scroll-animate">
                <span class="text-[#167CE9] font-semibold text-sm uppercase tracking-wider">
                    Staff Benefits
                </span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-3 mb-4">
                    Benefits at Uma Memorial Public School</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    We value our educators and staff by offering financial security, healthcare support, and family benefits.
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- EPF -->
                <div class="card-hover bg-gray-50 rounded-2xl p-8 scroll-animate border-t-4 border-[#FFC300]">
                    <div class="w-14 h-14 bg-[#167CE9] rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-piggy-bank text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">
                        EPF & Provident Fund
                    </h3>
                    <p class="text-gray-600">
                        Employees receive EPF and Provident Fund benefits ensuring long-term financial security.
                    </p>
                </div>

                <!-- Health Insurance -->
                <div class="card-hover bg-gray-50 rounded-2xl p-8 scroll-animate border-t-4 border-[#FFC300]">
                    <div class="w-14 h-14 bg-[#167CE9] rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-heartbeat text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">
                        Health Insurance Coverage
                    </h3>
                    <p class="text-gray-600">
                        Comprehensive health insurance coverage up to ₹5 Lakhs for our staff members.
                    </p>
                </div>

                <!-- Staff Child Fee Waiver -->
                <div class="card-hover bg-gray-50 rounded-2xl p-8 scroll-animate border-t-4 border-[#FFC300]">
                    <div class="w-14 h-14 bg-[#167CE9] rounded-xl flex items-center justify-center mb-6">
                        <i class="fas fa-child text-white text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">
                        50% Fee Waiver for Staff Children
                    </h3>
                    <p class="text-gray-600">
                        50% tuition fee concession for children of full-time staff members.
                    </p>
                </div>

            </div>
        </div>
    </section>


    <!-- Job Listings -->
    <section id="positions" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 scroll-animate">
                <span class="text-blue-600 font-semibold text-sm uppercase tracking-wider">Open Positions</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-3 mb-4">Find Your Perfect Role</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Explore our current openings and take the first step towards a rewarding career in education.</p>
            </div>
            
            <!-- Filters -->
            <div class="bg-white rounded-2xl shadow-sm p-6 mb-8 scroll-animate">
                <div class="grid md:grid-cols-4 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Department</label>
                        <select id="filterDepartment" onchange="filterJobs()" class="w-full border border-gray-300 rounded-lg px-4 py-3 bg-white">
                            <option value="">All Departments</option>
                            <!-- Academic Group -->
                            <optgroup label="Academic">
                                <option value="commerce">Commerce</option>
                                <option value="science">Science</option>
                                <option value="social-science">Social Science</option>
                                <option value="hindi">Hindi</option>
                                <option value="english">English</option>
                                <option value="maths">Maths</option>
                            </optgroup>

                            <!-- Management Group -->
                            <optgroup label="Management">
                                <option value="coordinator-hr">Coordinator</option>
                                <option value="account-manager">Account Manager</option>
                                <option value="administration">Administration</option>
                                <option value="receptionist">Receptionist</option>
                            </optgroup>
                            <option value="support">Support Staff</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Employment Type</label>
                        <select id="filterType" onchange="filterJobs()" class="w-full border border-gray-300 rounded-lg px-4 py-3 bg-white">
                            <option value="">All Types</option>
                            <option value="full-time">Full Time</option>
                            <option value="part-time">Part Time</option>
                            <option value="contract">Contract</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Experience Level</label>
                        <select id="filterExperience" onchange="filterJobs()" class="w-full border border-gray-300 rounded-lg px-4 py-3 bg-white">
                            <option value="">All Levels</option>
                            <option value="entry">Entry Level</option>
                            <option value="mid">Mid Level</option>
                            <option value="senior">Senior Level</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Search</label>
                        <div class="relative">
                            <input type="text" id="searchInput" onkeyup="filterJobs()" placeholder="Search positions..." class="w-full border border-gray-300 rounded-lg px-4 py-3 pl-10">
                            <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Job Cards -->
            <div id="jobListings" class="space-y-4">
                <!-- Job Card 1 -->
                <div class="job-card bg-white rounded-2xl border-2 border-gray-100 p-6 scroll-animate" data-department="maths" data-type="full-time" data-experience="mid">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                        <div class="flex-1">
                            <div class="flex flex-wrap items-center gap-3 mb-3">
                                <h3 class="text-xl font-bold text-gray-900">High School Mathematics Teacher</h3>
                                <span class="tag bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-medium">New</span>
                            </div>
                            <div class="flex flex-wrap gap-4 text-sm text-gray-600 mb-4">
                                <span><i class="fas fa-building mr-2 text-blue-600"></i>Academic Department</span>
                                <span><i class="fas fa-clock mr-2 text-blue-600"></i>Full Time</span>
                                <span><i class="fas fa-map-marker-alt mr-2 text-blue-600"></i>Main Campus</span>
                                <span><img src="images/icons8-rupee-32 (1).png" alt="Rupee Icon" class="w-4 h-4 inline mr-1">Rs.55,000 - Rs.75,000</span>
                            </div>
                            <p class="text-gray-600 text-sm">Looking for a passionate mathematics educator to inspire students in algebra, geometry, and calculus courses.</p>
                        </div>
                        <div class="flex gap-3">
                            <button onclick="openJobModal('math-teacher')" class="text-blue-600 border border-blue-600 px-5 py-2.5 rounded-lg font-medium hover:bg-blue-50 transition">
                                View Details
                            </button>
                            <button onclick="openApplyModal('High School Mathematics Teacher')" class="btn-primary text-white px-5 py-2.5 rounded-lg font-medium">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Job Card 2 -->
                <div class="job-card bg-white rounded-2xl border-2 border-gray-100 p-6 scroll-animate" data-department="english" data-type="full-time" data-experience="senior">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                        <div class="flex-1">
                            <div class="flex flex-wrap items-center gap-3 mb-3">
                                <h3 class="text-xl font-bold text-gray-900">English Department Head</h3>
                                <span class="tag bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-xs font-medium">Leadership</span>
                            </div>
                            <div class="flex flex-wrap gap-4 text-sm text-gray-600 mb-4">
                                <span><i class="fas fa-building mr-2 text-blue-600"></i>Academic Department</span>
                                <span><i class="fas fa-clock mr-2 text-blue-600"></i>Full Time</span>
                                <span><i class="fas fa-map-marker-alt mr-2 text-blue-600"></i>Main Campus</span>
                                <span><img src="images/icons8-rupee-32 (1).png" alt="Rupee Icon" class="w-4 h-4 inline mr-1">Rs.70,000 - Rs.90,000</span>
                            </div>
                            <p class="text-gray-600 text-sm">Lead our English department with curriculum development, teacher mentorship, and innovative teaching strategies.</p>
                        </div>
                        <div class="flex gap-3">
                            <button onclick="openJobModal('english-head')" class="text-blue-600 border border-blue-600 px-5 py-2.5 rounded-lg font-medium hover:bg-blue-50 transition">
                                View Details
                            </button>
                            <button onclick="openApplyModal('English Department Head')" class="btn-primary text-white px-5 py-2.5 rounded-lg font-medium">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Job Card 3 -->
                <div class="job-card bg-white rounded-2xl border-2 border-gray-100 p-6 scroll-animate" data-department="administration" data-type="full-time" data-experience="mid">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                        <div class="flex-1">
                            <div class="flex flex-wrap items-center gap-3 mb-3">
                                <h3 class="text-xl font-bold text-gray-900">Admissions Counselor</h3>
                            </div>
                            <div class="flex flex-wrap gap-4 text-sm text-gray-600 mb-4">
                                <span><i class="fas fa-building mr-2 text-blue-600"></i>Management Department</span>
                                <span><i class="fas fa-clock mr-2 text-blue-600"></i>Full Time</span>
                                <span><i class="fas fa-map-marker-alt mr-2 text-blue-600"></i>Admin Building</span>
                                <span><img src="images/icons8-rupee-32 (1).png" alt="Rupee Icon" class="w-4 h-4 inline mr-1">Rs.45,000 - Rs.55,000</span>
                            </div>
                            <p class="text-gray-600 text-sm">Guide prospective families through the admissions process and represent our school at recruitment events.</p>
                        </div>
                        <div class="flex gap-3">
                            <button onclick="openJobModal('admissions')" class="text-blue-600 border border-blue-600 px-5 py-2.5 rounded-lg font-medium hover:bg-blue-50 transition">
                                View Details
                            </button>
                            <button onclick="openApplyModal('Admissions Counselor')" class="btn-primary text-white px-5 py-2.5 rounded-lg font-medium">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Job Card 4 -->
                <div class="job-card bg-white rounded-2xl border-2 border-gray-100 p-6 scroll-animate" data-department="science" data-type="part-time" data-experience="entry">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                        <div class="flex-1">
                            <div class="flex flex-wrap items-center gap-3 mb-3">
                                <h3 class="text-xl font-bold text-gray-900">Science Teacher (Part-Time)</h3>
                                <span class="tag bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-xs font-medium">Part Time</span>
                            </div>
                            <div class="flex flex-wrap gap-4 text-sm text-gray-600 mb-4">
                                <span><i class="fas fa-building mr-2 text-blue-600"></i>Academic Department</span>
                                <span><i class="fas fa-clock mr-2 text-blue-600"></i>Part Time</span>
                                <span><i class="fas fa-map-marker-alt mr-2 text-blue-600"></i>Main Campus</span>
                                <span><img src="images/icons8-rupee-32 (1).png" alt="Rupee Icon" class="w-4 h-4 inline mr-1">Rs.70,000 - Rs.85,000</span>
                            </div>
                            <p class="text-gray-600 text-sm">Teach instrumental and vocal music to middle and high school students. Lead after-school ensemble programs.</p>
                        </div>
                        <div class="flex gap-3">
                            <button onclick="openJobModal('science')" class="text-blue-600 border border-blue-600 px-5 py-2.5 rounded-lg font-medium hover:bg-blue-50 transition">
                                View Details
                            </button>
                            <button onclick="openApplyModal('Science Teacher (Part-Time)')" class="btn-primary text-white px-5 py-2.5 rounded-lg font-medium">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Job Card 5 -->
                <div class="job-card bg-white rounded-2xl border-2 border-gray-100 p-6 scroll-animate" data-department="account" data-type="full-time" data-experience="mid">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                        <div class="flex-1">
                            <div class="flex flex-wrap items-center gap-3 mb-3">
                                <h3 class="text-xl font-bold text-gray-900">Account Manager</h3>
                                <span class="tag bg-orange-100 text-orange-700 px-3 py-1 rounded-full text-xs font-medium">Urgent</span>
                            </div>
                            <div class="flex flex-wrap gap-4 text-sm text-gray-600 mb-4">
                                <span><i class="fas fa-building mr-2 text-blue-600"></i>Management Department</span>
                                <span><i class="fas fa-clock mr-2 text-blue-600"></i>Full Time</span>
                                <span><i class="fas fa-map-marker-alt mr-2 text-blue-600"></i>Main Campus</span>
                                <span><img src="images/icons8-rupee-32 (1).png" alt="Rupee Icon" class="w-4 h-4 inline mr-1">Rs.65,000 - Rs.85,000</span>
                            </div>
                            <p class="text-gray-600 text-sm">Oversee all athletic programs, manage coaching staff, and promote student-athlete development and wellness.</p>
                        </div>
                        <div class="flex gap-3">
                            <button onclick="openJobModal('account')" class="text-blue-600 border border-blue-600 px-5 py-2.5 rounded-lg font-medium hover:bg-blue-50 transition">
                                View Details
                            </button>
                            <button onclick="openApplyModal('Account Manager')" class="btn-primary text-white px-5 py-2.5 rounded-lg font-medium">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Job Card 6 -->
                <div class="job-card bg-white rounded-2xl border-2 border-gray-100 p-6 scroll-animate" data-department="support" data-type="full-time" data-experience="entry">
                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                        <div class="flex-1">
                            <div class="flex flex-wrap items-center gap-3 mb-3">
                                <h3 class="text-xl font-bold text-gray-900">Support Staff</h3>
                                <span class="tag bg-green-100 text-green-700 px-3 py-1 rounded-full text-xs font-medium">New</span>
                            </div>
                            <div class="flex flex-wrap gap-4 text-sm text-gray-600 mb-4">
                                <span><i class="fas fa-building mr-2 text-blue-600"></i>Support Staff</span>
                                <span><i class="fas fa-clock mr-2 text-blue-600"></i>Full Time</span>
                                <span><i class="fas fa-map-marker-alt mr-2 text-blue-600"></i>Student Services</span>
                                <span><img src="images/icons8-rupee-32 (1).png" alt="Rupee Icon" class="w-4 h-4 inline mr-1">Rs.5,000 - Rs.6,000</span>
                            </div>
                            <p class="text-gray-600 text-sm">Provide academic, career, and social-emotional support to students. Develop and implement counseling programs.</p>
                        </div>
                        <div class="flex gap-3">
                            <button onclick="openJobModal('support')" class="text-blue-600 border border-blue-600 px-5 py-2.5 rounded-lg font-medium hover:bg-blue-50 transition">
                                View Details
                            </button>
                            <button onclick="openApplyModal('Support Staff')" class="btn-primary text-white px-5 py-2.5 rounded-lg font-medium">
                                Apply Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- No Results Message -->
            <div id="noResults" class="hidden text-center py-12">
                <i class="fas fa-search text-5xl text-gray-300 mb-4"></i>
                <h3 class="text-xl font-semibold text-gray-700 mb-2">No positions found</h3>
                <p class="text-gray-500">Try adjusting your filters or search terms</p>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 scroll-animate">
                <span class="text-blue-600 font-semibold text-sm uppercase tracking-wider">Testimonials</span>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-3 mb-4">Hear From Our Team</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Our faculty and staff love being part of the Greenwood family.</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-gray-50 rounded-2xl p-8 scroll-animate">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                    <p class="text-gray-600 mb-6">"Working at Greenwood has been the most rewarding experience of my career. The administration truly supports teachers and provides resources for us to succeed."</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center text-white font-bold">SM</div>
                        <div class="ml-4">
                            <div class="font-semibold text-gray-900">Neeraj Kumar</div>
                            <div class="text-sm text-gray-500">Science Teacher, 8 years</div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-gray-50 rounded-2xl p-8 scroll-animate">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                    <p class="text-gray-600 mb-6">"The professional development opportunities here are unmatched. I've grown so much as an educator thanks to the continuous learning environment."</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-br from-green-400 to-green-600 flex items-center justify-center text-white font-bold">JR</div>
                        <div class="ml-4">
                            <div class="font-semibold text-gray-900">Anuj Sharma</div>
                            <div class="text-sm text-gray-500">History Department Head, 12 years</div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-gray-50 rounded-2xl p-8 scroll-animate">
                    <div class="flex items-center mb-4">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                    <p class="text-gray-600 mb-6">"The work-life balance and benefits package are exceptional. My children attend Greenwood, and the tuition discount has been a game-changer for our family."</p>
                    <div class="flex items-center">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-br from-purple-400 to-purple-600 flex items-center justify-center text-white font-bold">LP</div>
                        <div class="ml-4">
                            <div class="font-semibold text-gray-900">Anjali Saxena</div>
                            <div class="text-sm text-gray-500">Administrative Coordinator, 5 years</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Application Process -->
    <section class="py-20 gradient-bg relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-10 right-10 w-72 h-72 bg-white rounded-full blur-3xl"></div>
            <div class="absolute bottom-20 left-20 w-96 h-96 bg-white rounded-full blur-3xl"></div>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="text-center mb-16 scroll-animate">
                <span class="text-blue-200 font-semibold text-sm uppercase tracking-wider">How to Apply</span>
                <h2 class="text-3xl md:text-4xl font-bold text-white mt-3 mb-4">Our Hiring Process</h2>
                <p class="text-blue-100 max-w-2xl mx-auto">A transparent and supportive journey from application to offer.</p>
            </div>
            
            <div class="grid md:grid-cols-4 gap-8">
                <div class="text-center scroll-animate">
                    <div class="w-16 h-16 rounded-full bg-white/20 flex items-center justify-center mx-auto mb-6">
                        <span class="text-2xl font-bold text-white">1</span>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Submit Application</h3>
                    <p class="text-blue-100">Complete our online application form and upload your resume and cover letter.</p>
                </div>
                
                <div class="text-center scroll-animate">
                    <div class="w-16 h-16 rounded-full bg-white/20 flex items-center justify-center mx-auto mb-6">
                        <span class="text-2xl font-bold text-white">2</span>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Initial Screening</h3>
                    <p class="text-blue-100">Our HR team reviews applications and conducts phone interviews with qualified candidates.</p>
                </div>
                
                <div class="text-center scroll-animate">
                    <div class="w-16 h-16 rounded-full bg-white/20 flex items-center justify-center mx-auto mb-6">
                        <span class="text-2xl font-bold text-white">3</span>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Campus Interview</h3>
                    <p class="text-blue-100">Meet with department heads, demonstrate teaching skills, and tour our facilities.</p>
                </div>
                
                <div class="text-center scroll-animate">
                    <div class="w-16 h-16 rounded-full bg-white/20 flex items-center justify-center mx-auto mb-6">
                        <span class="text-2xl font-bold text-white">4</span>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Offer & Onboarding</h3>
                    <p class="text-blue-100">Receive your offer and join our comprehensive orientation program.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center scroll-animate">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">Don't See the Right Position?</h2>
            <p class="text-xl text-gray-600 mb-8">We're always looking for talented educators and staff. Submit your resume for future opportunities.</p>
            <button onclick="openApplyModal('General Application')" class="btn-dan text-white px-8 py-4 rounded-full font-semibold text-lg">
                Submit General Application
            </button>
        </div>
    </section>

    <!-- Footer -->
    <footer class="relative bg-cover bg-center bg-no-repeat"
            style="background-image: url('images/footer-1.jpeg');">

    <!-- Dark Overlay -->
    <div class="absolute inset-0 bg-[#0f172a]/85"></div>

    <div class="relative max-w-7xl mx-auto px-8 py-16 text-gray-300">

        <div class="grid md:grid-cols-5 gap-12">

        <!-- Logo + About -->
        <div>
            <div class="flex items-center gap-3 mb-6">
            <img src="images/logo-1.png" class="w-14" alt="UMPS">
            <div>
                <h2 class="text-xl font-semibold text-white">UMA MEMORIAL</h2>
                <p class="text-sm tracking-widest text-blue-400">PUBLIC SCHOOL</p>
            </div>
            </div>

            <p class="text-sm leading-relaxed mb-6">
            A Co-ed institution dedicated to providing quality education.
            </p>

            <!-- Social Icons -->
            <div class="flex gap-4">
            <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-white/10 hover:bg-[#FFC300] transition">
                <i class="fab fa-youtube text-white"></i>
            </a>
            <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-white/10 hover:bg-[#FFC300] transition">
                <i class="fab fa-facebook-f text-white"></i>
            </a>
            <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-white/10 hover:bg-[#FFC300] transition">
                <i class="fab fa-instagram text-white"></i>
            </a>
            <a href="#" class="w-10 h-10 flex items-center justify-center rounded-full bg-white/10 hover:bg-[#FFC300] transition">
                <i class="fab fa-linkedin-in text-white"></i>
            </a>
            </div>
        </div>

        <!-- Site Links -->
        <div>
            <h3 class="text-lg font-semibold text-white mb-6">Site Links</h3>
            <ul class="space-y-3 text-sm">
            <li><a href="#" class="hover:text-white">Home</a></li>
            <li><a href="#" class="hover:text-white">Career  </a><span class="tag bg-red-500 text-white px-3 py-1 rounded-full text-xs font-medium">Hiring</span></li>
            <li><a href="#" class="hover:text-white">About</a></li>
            <li><a href="#" class="hover:text-white">Academics</a></li>
            <li><a href="#" class="hover:text-white">Admissions</a></li>
            <li><a href="#" class="hover:text-white">Startup & Innovation</a></li>
            <li><a href="#" class="hover:text-white">Contact</a></li>
            </ul>
        </div>

        <!-- Contact -->
        <div>
            <h3 class="text-lg font-semibold text-white mb-6">Have a Questions?</h3>
            <ul class="space-y-4 text-sm">
            <li class="flex gap-3">
                <span><i class="fas fa-map-marker-alt text-white"></i></span>
                <span>Dherahi, Lakhanpur Cholapur Varanasi 221101</span>
            </li>
            <li class="flex gap-3">
                <span><i class="fa-solid fa-phone text-white"></i></span>
                <span>+918090587632 +918052305632</span>
            </li>
            <li class="flex gap-3">
                <span><i class="fas fa-envelope text-white"></i></span>
                <span>admission@umagroups.com</span>
            </li>
            </ul>
        </div>

        <!-- Education Policy -->
        <div>
            <h3 class="text-lg font-semibold text-white mb-6">Policies</h3>
            <h4 class="text-sm font-semibold text-gray-200 mb-3">Education Policy</h4>
            <ul class="space-y-2 text-sm">
            <li>✔ Equal education for all students</li>
            <li>✔ Safe and inclusive school environment</li>
            <li>✔ Zero discrimination policy</li>
            <li>✔ Continuous teacher development</li>
            </ul>
        </div>

        <!-- Legal Policy -->
        <div>
            <h3 class="text-lg font-semibold text-white mb-6 invisible">Hidden</h3>
            <h4 class="text-sm font-semibold text-gray-200 mb-3">Legal Policy</h4>
            <p class="text-sm leading-relaxed">
            We respect the privacy of our students, parents, and visitors.
            Any personal information collected through this website or during
            the admission process is used only for official school purposes.
            <br><br>
            The school does not share personal information with third parties
            without prior consent, except when required by law.
            </p>
        </div>

        </div>

        <!-- Bottom Copyright -->
        <div class="mt-16 text-center text-sm text-gray-400 border-t border-white/20 pt-6">
        © <script>document.write(new Date().getFullYear());</script>
        All rights reserved | Managed by
        <a href="#" class="text-white hover:text-[#FFC300] font-medium">
            Coderbot Robotech And IT Pvt Ltd
        </a>
        </div>

    </div>
    </footer>



    <!-- Job Details Modal -->
    <div id="jobModal" class="modal">
        <div class="modal-content">
            <div class="p-6 border-b">
                <div class="flex justify-between items-start">
                    <div>
                        <h2 id="modalJobTitle" class="text-2xl font-bold text-gray-900 mb-2">Job Title</h2>
                        <div id="modalJobMeta" class="flex flex-wrap gap-3 text-sm text-gray-600"></div>
                    </div>
                    <button onclick="closeJobModal()" class="text-gray-400 hover:text-gray-600 text-2xl">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="p-6">
                <div id="modalJobContent" class="prose max-w-none">
                    <!-- Content will be inserted here -->
                </div>
            </div>
            <div class="p-6 border-t bg-gray-50 flex justify-end gap-3">
                <button onclick="closeJobModal()" class="text-gray-600 border border-gray-300 px-5 py-2.5 rounded-lg font-medium hover:bg-gray-100 transition">
                    Close
                </button>
                <button id="modalApplyBtn" onclick="closeJobModal(); openApplyModal('');" class="btn-dan text-white px-5 py-2.5 rounded-lg font-medium">
                    Apply Now
                </button>
            </div>
        </div>
    </div>

    <!-- Application Modal -->
    <div id="applyModal" class="modal">
        <div class="modal-content">
            <div class="p-6 border-b">
                <div class="flex justify-between items-start">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-900 mb-1">Apply Now</h2>
                        <p id="applyJobTitle" class="text-gray-600">Position: High School Mathematics Teacher</p>
                    </div>
                    <button onclick="closeApplyModal()" class="text-gray-400 hover:text-gray-600 text-2xl">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <form id="applicationForm" class="p-6" onsubmit="submitApplication(event)">
                <div class="space-y-5">
                    <div class="grid md:grid-cols-2 gap-5">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">First Name *</label>
                            <input type="text" required class="w-full border border-gray-300 rounded-lg px-4 py-3">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Last Name *</label>
                            <input type="text" required class="w-full border border-gray-300 rounded-lg px-4 py-3">
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Email Address *</label>
                        <input type="email" required class="w-full border border-gray-300 rounded-lg px-4 py-3">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Phone Number *</label>
                        <input type="tel" required class="w-full border border-gray-300 rounded-lg px-4 py-3">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Resume/CV *</label>
                        <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center hover:border-blue-500 transition cursor-pointer">
                            <i class="fas fa-cloud-upload-alt text-3xl text-gray-400 mb-2"></i>
                            <p class="text-gray-600">Drag and drop your file here or <span class="text-blue-600">browse</span></p>
                            <p class="text-sm text-gray-400 mt-1">PDF, DOC, DOCX (Max 5MB)</p>
                            <input type="file" class="hidden" accept=".pdf,.doc,.docx">
                        </div>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Cover Letter</label>
                        <textarea rows="4" class="w-full border border-gray-300 rounded-lg px-4 py-3" placeholder="Tell us why you're interested in this position..."></textarea>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">How did you hear about us?</label>
                        <select class="w-full border border-gray-300 rounded-lg px-4 py-3">
                            <option value="">Select an option</option>
                            <option value="website">School Website</option>
                            <option value="linkedin">LinkedIn</option>
                            <option value="indeed">Indeed</option>
                            <option value="referral">Employee Referral</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    
                    <div class="flex items-start">
                        <input type="checkbox" required class="mt-1 mr-3">
                        <label class="text-sm text-gray-600">I confirm that the information provided is accurate and I agree to the <a href="#" class="text-blue-600 hover:underline">privacy policy</a> and <a href="#" class="text-blue-600 hover:underline">terms of service</a>.</label>
                    </div>
                </div>
            </form>
            <div class="p-6 border-t bg-gray-50 flex justify-end gap-3">
                <button onclick="closeApplyModal()" class="text-gray-600 border border-gray-300 px-5 py-2.5 rounded-lg font-medium hover:bg-gray-100 transition">
                    Cancel
                </button>
                <button onclick="document.getElementById('applicationForm').requestSubmit()" class="btn-dan text-white px-5 py-2.5 rounded-lg font-medium">
                    Submit Application
                </button>
            </div>
        </div>
    </div>

    <!-- Success Modal -->
    <div id="successModal" class="modal">
        <div class="modal-content max-w-md text-center p-8">
            <div class="w-20 h-20 rounded-full bg-green-100 flex items-center justify-center mx-auto mb-6">
                <i class="fas fa-check text-green-500 text-4xl"></i>
            </div>
            <h2 class="text-2xl font-bold text-gray-900 mb-3">Application Submitted!</h2>
            <p class="text-gray-600 mb-6">Thank you for your interest in joining Greenwood Academy. We'll review your application and get back to you within 5-7 business days.</p>
            <button onclick="closeSuccessModal()" class="btn-dan text-white px-8 py-3 rounded-lg font-medium w-full">
                Close
            </button>
        </div>
    </div>

    <script>
        // Job data
        const jobDetails = {
            'math-teacher': {
                title: 'High School Mathematics Teacher',
                meta: [
                    { icon: 'fa-building', text: 'maths' },
                    { icon: 'fa-clock', text: 'Full Time' },
                    { icon: 'fa-map-marker-alt', text: 'Main Campus' },
                    { text: 'Rs.55,000 - Rs.75,000' }
                ],
                content: `
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">About the Role</h3>
                    <p class="text-gray-600 mb-6">We are seeking a passionate and dedicated Mathematics Teacher to join our high school faculty. The ideal candidate will inspire students to develop a love for mathematics while building strong foundational skills.</p>
                    
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Responsibilities</h3>
                    <ul class="list-disc list-inside text-gray-600 mb-6 space-y-2">
                        <li>Teach Algebra, Geometry, and Calculus courses to grades 9-12</li>
                        <li>Develop engaging lesson plans aligned with state standards</li>
                        <li>Assess student progress through various evaluation methods</li>
                        <li>Participate in department meetings and professional development</li>
                        <li>Collaborate with colleagues on curriculum development</li>
                        <li>Communicate regularly with parents about student progress</li>
                    </ul>
                    
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Qualifications</h3>
                    <ul class="list-disc list-inside text-gray-600 mb-6 space-y-2">
                        <li>Bachelor's degree in Mathematics or Mathematics Education (Master's preferred)</li>
                        <li>Valid state teaching certification</li>
                        <li>3+ years of teaching experience preferred</li>
                        <li>Strong classroom management skills</li>
                        <li>Experience with educational technology</li>
                    </ul>
                `
            },
            'english-head': {
                title: 'English Department Head',
                meta: [
                    { icon: 'fa-building', text: 'english' },
                    { icon: 'fa-clock', text: 'Full Time' },
                    { icon: 'fa-map-marker-alt', text: 'Main Campus' },
                    { text: 'Rs.70,000 - Rs.90,000' }
                ],
                content: `
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">About the Role</h3>
                    <p class="text-gray-600 mb-6">Lead our English department with vision and innovation. This role combines teaching responsibilities with department leadership, curriculum development, and teacher mentorship.</p>
                    
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Responsibilities</h3>
                    <ul class="list-disc list-inside text-gray-600 mb-6 space-y-2">
                        <li>Lead and mentor a team of 8 English teachers</li>
                        <li>Oversee curriculum development and implementation</li>
                        <li>Teach 2-3 English courses per semester</li>
                        <li>Coordinate department budgets and resources</li>
                        <li>Organize literary events and writing competitions</li>
                        <li>Collaborate with administration on academic initiatives</li>
                    </ul>
                    
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Qualifications</h3>
                    <ul class="list-disc list-inside text-gray-600 mb-6 space-y-2">
                        <li>Master's degree in English, Literature, or Education</li>
                        <li>7+ years of English teaching experience</li>
                        <li>Previous leadership or department chair experience</li>
                        <li>Strong organizational and communication skills</li>
                        <li>Passion for literature and student development</li>
                    </ul>
                `
            },
            'admissions': {
                title: 'Admissions Counselor',
                meta: [
                    { icon: 'fa-building', text: 'Administration' },
                    { icon: 'fa-clock', text: 'Full Time' },
                    { icon: 'fa-map-marker-alt', text: 'Admin Building' },
                    { text: 'Rs.45,000 - Rs.55,000' }
                ],
                content: `
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">About the Role</h3>
                    <p class="text-gray-600 mb-6">Join our admissions team and be the first point of contact for prospective families. Help shape the future of our school community by identifying and recruiting exceptional students.</p>
                    
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Responsibilities</h3>
                    <ul class="list-disc list-inside text-gray-600 mb-6 space-y-2">
                        <li>Guide families through the admissions process</li>
                        <li>Conduct campus tours and information sessions</li>
                        <li>Review and evaluate student applications</li>
                        <li>Represent the school at recruitment fairs</li>
                        <li>Maintain admissions database and records</li>
                        <li>Coordinate with financial aid office</li>
                    </ul>
                    
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Qualifications</h3>
                    <ul class="list-disc list-inside text-gray-600 mb-6 space-y-2">
                        <li>Bachelor's degree required</li>
                        <li>2+ years in admissions or related field</li>
                        <li>Excellent interpersonal and presentation skills</li>
                        <li>Proficiency in CRM systems</li>
                        <li>Willingness to travel occasionally</li>
                    </ul>
                `
            },
            'science-teacher': {
                title: 'Science Teacher (Part-Time)',
                meta: [
                    { icon: 'fa-building', text: 'science' },
                    { icon: 'fa-clock', text: 'Part Time' },
                    { icon: 'fa-map-marker-alt', text: 'Main Campus' },
                    { text: 'Rs.70,000 - Rs.85,000' }
                ],
                content: `
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">About the Role</h3>
                    <p class="text-gray-600 mb-6">Bring science to life at Uma Memorial Public School! We're looking for a talented science educator to teach biology, chemistry, and physics to middle and high school students.</p>
                    
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Responsibilities</h3>
                    <ul class="list-disc list-inside text-gray-600 mb-6 space-y-2">
                        <li>Teach 15-20 hours per week</li>
                        <li>Instruct band, choir, and music theory classes</li>
                        <li>Direct after-school ensemble programs</li>
                        <li>Prepare students for performances and competitions</li>
                        <li>Maintain instrument inventory</li>
                    </ul>
                    
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Qualifications</h3>
                    <ul class="list-disc list-inside text-gray-600 mb-6 space-y-2">
                        <li>Bachelor's degree in Science or related field</li>
                        <li>Teaching certification preferred</li>
                        <li>Experience in science education</li>
                        <li>Strong communication and classroom management skills</li>
                    </ul>
                `
            },
            'account': {
                title: 'Accountant',
                meta: [
                    { icon: 'fa-building', text: 'Finance' },
                    { icon: 'fa-clock', text: 'Full Time' },
                    { icon: 'fa-map-marker-alt', text: 'Main Campus' },
                    { text: 'Rs.65,000 - Rs.85,000' }
                ],
                content: `
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">About the Role</h3>
                    <p class="text-gray-600 mb-6">Lead our comprehensive athletics program serving over 500 student-athletes. Build championship teams while emphasizing character development and academic excellence.</p>
                    
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Responsibilities</h3>
                    <ul class="list-disc list-inside text-gray-600 mb-6 space-y-2">
                        <li>Oversee 15 varsity and JV sports programs</li>
                        <li>Hire, supervise, and evaluate coaching staff</li>
                        <li>Manage athletics budget ($500K+)</li>
                        <li>Ensure compliance with league regulations</li>
                        <li>Coordinate facilities scheduling and maintenance</li>
                        <li>Promote student-athlete wellness and academic success</li>
                    </ul>
                    
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Qualifications</h3>
                    <ul class="list-disc list-inside text-gray-600 mb-6 space-y-2">
                        <li>Bachelor's degree in Sports Management or related field</li>
                        <li>5+ years of athletic administration experience</li>
                        <li>Coaching experience preferred</li>
                        <li>CAA certification or equivalent</li>
                        <li>Strong budget management skills</li>
                    </ul>
                `
            },
            'support': {
                title: 'Support Staff',
                meta: [
                    { icon: 'fa-building', text: 'Support Staff' },
                    { icon: 'fa-clock', text: 'Full Time' },
                    { icon: 'fa-map-marker-alt', text: 'Student Services' },
                    { text: 'Rs.50,000 - Rs.65,000' }
                ],
                content: `
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">About the Role</h3>
                    <p class="text-gray-600 mb-6">Support student success through comprehensive counseling services. Address academic, social-emotional, and career development needs of our diverse student body.</p>
                    
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Responsibilities</h3>
                    <ul class="list-disc list-inside text-gray-600 mb-6 space-y-2">
                        <li>Provide individual and group counseling</li>
                        <li>Develop and implement school-wide counseling programs</li>
                        <li>Assist with college and career planning</li>
                        <li>Collaborate with teachers and parents</li>
                        <li>Respond to crisis situations</li>
                        <li>Maintain confidential student records</li>
                    </ul>
                    
                    <h3 class="text-lg font-semibold text-gray-900 mb-3">Qualifications</h3>
                    <ul class="list-disc list-inside text-gray-600 mb-6 space-y-2">
                        <li>Master's degree in School Counseling</li>
                        <li>State counseling certification</li>
                        <li>Experience with K-12 students</li>
                        <li>Knowledge of social-emotional learning frameworks</li>
                        <li>Strong interpersonal and crisis intervention skills</li>
                    </ul>
                `
            }
        };

        // Mobile menu toggle
        function toggleMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
        }

        // Filter jobs
        function filterJobs() {
            const department = document.getElementById('filterDepartment').value;
            const type = document.getElementById('filterType').value;
            const experience = document.getElementById('filterExperience').value;
            const search = document.getElementById('searchInput').value.toLowerCase();
            
            const jobs = document.querySelectorAll('.job-card');
            let visibleCount = 0;
            
            jobs.forEach(job => {
                const jobDept = job.dataset.department;
                const jobType = job.dataset.type;
                const jobExp = job.dataset.experience;
                const jobText = job.textContent.toLowerCase();
                
                const matchDept = !department || jobDept === department;
                const matchType = !type || jobType === type;
                const matchExp = !experience || jobExp === experience;
                const matchSearch = !search || jobText.includes(search);
                
                if (matchDept && matchType && matchExp && matchSearch) {
                    job.style.display = 'block';
                    visibleCount++;
                } else {
                    job.style.display = 'none';
                }
            });
            
            document.getElementById('noResults').classList.toggle('hidden', visibleCount > 0);
        }

        // Job modal
        function openJobModal(jobId) {
            const job = jobDetails[jobId];
            if (!job) return;
            
            document.getElementById('modalJobTitle').textContent = job.title;
            document.getElementById('modalJobContent').innerHTML = job.content;
            document.getElementById('modalApplyBtn').onclick = () => {
                closeJobModal();
                openApplyModal(job.title);
            };
            
            const metaContainer = document.getElementById('modalJobMeta');
            metaContainer.innerHTML = job.meta.map(m => 
                `<span><i class="fas ${m.icon} mr-1 text-blue-600"></i>${m.text}</span>`
            ).join('');
            
            document.getElementById('jobModal').classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeJobModal() {
            document.getElementById('jobModal').classList.remove('active');
            document.body.style.overflow = '';
        }

        // Apply modal
        function openApplyModal(jobTitle) {
            document.getElementById('applyJobTitle').textContent = `Position: ${jobTitle}`;
            document.getElementById('applyModal').classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeApplyModal() {
            document.getElementById('applyModal').classList.remove('active');
            document.body.style.overflow = '';
        }

        // Submit application
        function submitApplication(e) {
            e.preventDefault();
            closeApplyModal();
            document.getElementById('successModal').classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeSuccessModal() {
            document.getElementById('successModal').classList.remove('active');
            document.body.style.overflow = '';
            document.getElementById('applicationForm').reset();
        }

        // Close modals on outside click
        document.querySelectorAll('.modal').forEach(modal => {
            modal.addEventListener('click', (e) => {
                if (e.target === modal) {
                    modal.classList.remove('active');
                    document.body.style.overflow = '';
                }
            });
        });

        // Scroll animations
        function handleScrollAnimations() {
            const elements = document.querySelectorAll('.scroll-animate');
            elements.forEach(el => {
                const rect = el.getBoundingClientRect();
                if (rect.top < window.innerHeight - 100) {
                    el.classList.add('visible');
                }
            });
        }

        window.addEventListener('scroll', handleScrollAnimations);
        window.addEventListener('load', handleScrollAnimations);

        // File upload interaction
        document.querySelector('.border-dashed').addEventListener('click', function() {
            this.querySelector('input[type="file"]').click();
        });
    </script>
</body>
</html>
