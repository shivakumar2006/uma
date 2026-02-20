// --- State Management ---
        const sections = [
            'dashboard', 'sample-papers', 'syllabus', 'timetable', 
            'notice-board', 'daily-diary', 'career', 'programs'
        ];

        const modalConfig = {
            'addPaperModal': { title: 'Add Sample Paper' },
            'addSyllabusModal': { title: 'Upload Syllabus' },
            'addTimeTableModal': { title: 'Edit Time Table' },
            'addNoticeModal': { title: 'Create New Notice' },
            'addDiaryModal': { title: 'New Diary Entry' },
            'addJobModal': { title: 'Post Job Opening' },
            'addProgramModal': { title: 'Add New Program' }
        };

        // --- Navigation Logic ---
        function showSection(sectionId) {
            // Update UI Classes
            document.querySelectorAll('.section-view').forEach(el => {
                el.classList.remove('active');
            });
            document.getElementById(sectionId).classList.add('active');

            // Update Sidebar Active State
            document.querySelectorAll('.nav-item').forEach(btn => {
                btn.classList.remove('bg-slate-800', 'text-white');
                btn.classList.add('text-slate-300');
            });
            
            // Find the button that triggered this (approximate based on text matching or index)
            // For simplicity, we add active class to the clicked button via event bubbling later if needed.
            // Here we will just iterate and match onclick attribute
            const buttons = document.querySelectorAll('.nav-item');
            buttons.forEach(btn => {
                if(btn.getAttribute('onclick') === `showSection('${sectionId}')`) {
                    btn.classList.add('bg-slate-800', 'text-white');
                    btn.classList.remove('text-slate-300');
                }
            });

            // Update Header Title
            const title = sectionId.replace(/-/g, ' ').replace(/\b\w/g, l => l.toUpperCase());
            document.getElementById('page-title').textContent = title;

            // Mobile: Close sidebar if open
            if(window.innerWidth < 768) {
                document.getElementById('sidebar').classList.add('collapsed');
            }
        }

        // --- Sidebar Toggles ---
        const sidebar = document.getElementById('sidebar');
        
        document.getElementById('toggleSidebarDesktop').addEventListener('click', () => {
            sidebar.classList.toggle('collapsed');
        });

        document.getElementById('toggleSidebarMobileBtn').addEventListener('click', () => {
            sidebar.classList.remove('collapsed');
            sidebar.style.position = 'absolute';
            sidebar.style.height = '100%';
        });

        document.getElementById('toggleSidebarMobile').addEventListener('click', () => {
            sidebar.classList.add('collapsed');
            sidebar.style.position = '';
            sidebar.style.height = '';
        });

        // --- Modal Logic ---
        function openModal(modalId) {
            const overlay = document.getElementById('modalOverlay');
            const titleEl = document.getElementById('modalTitle');
            
            // Configure Title
            if (modalConfig[modalId]) {
                titleEl.textContent = modalConfig[modalId].title;
            } else {
                titleEl.textContent = 'Add New Item';
            }

            // Reset Form
            const form = overlay.querySelector('form');
            if(form) form.reset();

            // Show
            overlay.classList.remove('hidden');
            // Small delay to allow display:block to apply before opacity transition
            requestAnimationFrame(() => {
                overlay.style.opacity = '1';
                overlay.querySelector('.modal-content').style.transform = 'scale(1)';
            });
        }

        function closeModal() {
            const overlay = document.getElementById('modalOverlay');
            overlay.style.opacity = '0';
            overlay.querySelector('.modal-content').style.transform = 'scale(0.95)';
            
            setTimeout(() => {
                overlay.classList.add('hidden');
            }, 300);
        }

        // Close modal on outside click
        document.getElementById('modalOverlay').addEventListener('click', (e) => {
            if (e.target === document.getElementById('modalOverlay')) {
                closeModal();
            }
        });

        // --- Form Submit Handler (Simulation) ---
        function handleFormSubmit(e) {
            e.preventDefault();
            const btn = e.target.querySelector('button[type="submit"]');
            const spinner = document.getElementById('loadingSpinner');
            const text = document.getElementById('submitText');

            // Loading State
            btn.disabled = true;
            text.textContent = 'Saving...';
            spinner.classList.remove('hidden');

            // Simulate API Call
            setTimeout(() => {
                // Reset State
                btn.disabled = false;
                text.textContent = 'Save Changes';
                spinner.classList.add('hidden');

                // Close Modal
                closeModal();

                // Show Toast
                showToast('Success!', 'Item added successfully.', 'success');
                
                // If it was a notice, prepend it to the list (Visual Demo)
                if(document.getElementById('modalTitle').textContent.includes('Notice')) {
                    addNoticeVisualDemo();
                }

            }, 1500);
        }

        // --- Toast Notification System ---
        function showToast(title, message, type = 'info') {
            const container = document.getElementById('toastContainer');
            const toast = document.createElement('div');
            
            // Colors based on type
            let borderClass = 'border-l-4 border-blue-500';
            let icon = '<i class="fas fa-info-circle text-blue-500"></i>';
            if(type === 'success') {
                borderClass = 'border-l-4 border-green-500';
                icon = '<i class="fas fa-check-circle text-green-500"></i>';
            } else if (type === 'error') {
                borderClass = 'border-l-4 border-red-500';
                icon = '<i class="fas fa-exclamation-circle text-red-500"></i>';
            }

            toast.className = `toast bg-white p-4 rounded shadow-lg flex items-start gap-3 min-w-[300px] ${borderClass}`;
            toast.innerHTML = `
                <div class="text-xl">${icon}</div>
                <div>
                    <h6 class="font-bold text-slate-800 text-sm">${title}</h6>
                    <p class="text-slate-600 text-xs mt-1">${message}</p>
                </div>
            `;

            container.appendChild(toast);

            // Remove from DOM after animation
            setTimeout(() => {
                toast.remove();
            }, 3000);
        }

        // --- Visual Demo: Add Notice ---
        function addNoticeVisualDemo() {
            const container = document.getElementById('notices-container');
            const div = document.createElement('div');
            div.className = "bg-white p-5 rounded-xl shadow-sm border-l-4 border-indigo-500 hover:shadow-md transition-shadow animate-pulse";
            div.innerHTML = `
                <div class="flex justify-between items-start mb-2">
                    <span class="bg-indigo-100 text-indigo-700 text-xs font-bold px-2 py-1 rounded uppercase">New</span>
                    <span class="text-xs text-slate-400">Just now</span>
                </div>
                <h4 class="font-bold text-slate-800 text-lg mb-1">New Entry</h4>
                <p class="text-slate-600 text-sm mb-3">Processing...</p>
            `;
            container.prepend(div);
            setTimeout(() => {
                div.classList.remove('animate-pulse');
            }, 2000);
        }

        // --- Analytics Chart (Chart.js) ---
        function initChart() {
            const ctx = document.getElementById('analyticsChart');
            if(!ctx) return;
            
            new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ['Notices', 'Syllabus', 'Papers', 'Jobs'],
                    datasets: [{
                        data: [12, 8, 15, 5],
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

        // --- Date Formatting ---
        function updateDate() {
            const options = { weekday: 'long', year: 'numeric', month: 'short', day: 'numeric' };
            const dateStr = new Date().toLocaleDateString('en-US', options);
            document.getElementById('current-date').textContent = dateStr;
        }

        // --- Initialization ---
        window.addEventListener('DOMContentLoaded', () => {
            updateDate();
            
            // Delay chart init slightly to ensure container is ready
            setTimeout(initChart, 500);
        });
