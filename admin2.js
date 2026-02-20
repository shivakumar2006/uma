// Initialize data from localStorage or use defaults
        let careersData = JSON.parse(localStorage.getItem('careers')) || [];
        let diaryData = JSON.parse(localStorage.getItem('diary')) || [];
        let noticeData = JSON.parse(localStorage.getItem('notices')) || [];
        let programsData = JSON.parse(localStorage.getItem('programs')) || [];
        let samplePapersData = JSON.parse(localStorage.getItem('samplePapers')) || [];
        let syllabusData = JSON.parse(localStorage.getItem('syllabus')) || [];
        let timetableData = JSON.parse(localStorage.getItem('timetables')) || [];
        
        // Show section
        function showSection(sectionId) {
            const sections = document.querySelectorAll('.content-section');
            sections.forEach(section => section.classList.add('hidden'));
            document.getElementById(sectionId).classList.remove('hidden');
            
            // Update header title
            const titles = {
                'dashboard': 'Dashboard',
                'careers': 'Career Positions',
                'daily-diary': 'Daily Diary',
                'notice': 'Notice Board',
                'programs': 'Our Programs',
                'academics': 'Academics Management'
            };
            document.querySelector('header h2').textContent = titles[sectionId] || 'Dashboard';
        }
        
        // Modal functions
        function openModal(modalId) {
            document.getElementById(modalId).classList.add('active');
        }
        
        function closeModal(modalId) {
            document.getElementById(modalId).classList.remove('active');
        }
        
        // Show toast notification
        function showToast(message, type = 'success') {
            const toast = document.getElementById('toast');
            const toastMessage = document.getElementById('toastMessage');
            
            toast.className = `fixed top-4 right-4 px-6 py-3 rounded-lg shadow-lg toast ${
                type === 'success' ? 'bg-green-500' : 'bg-red-500'
            } text-white`;
            toastMessage.textContent = message;
            toast.classList.remove('hidden');
            
            setTimeout(() => {
                toast.classList.add('hidden');
            }, 3000);
        }
        
        // Save functions
        function saveCareer(event) {
            event.preventDefault();
            const formData = new FormData(event.target);
            const career = {
                id: Date.now(),
                position: formData.get('position') || event.target[0].value,
                department: event.target[1].value,
                type: event.target[2].value,
                description: event.target[3].value,
                vacancies: event.target[4].value,
                applications: 0,
                status: 'Active'
            };
            
            careersData.push(career);
            localStorage.setItem('careers', JSON.stringify(careersData));
            addCareerToTable(career);
            closeModal('careerModal');
            showToast('Position added successfully!');
            event.target.reset();
        }
        
        function saveDiary(event) {
            event.preventDefault();
            const diary = {
                id: Date.now(),
                class: event.target[0].value,
                subject: event.target[1].value,
                description: event.target[2].value,
                date: event.target[3].value,
                teacher: 'Admin User'
            };
            
            diaryData.push(diary);
            localStorage.setItem('diary', JSON.stringify(diaryData));
            addDiaryCard(diary);
            closeModal('diaryModal');
            showToast('Diary entry added successfully!');
            event.target.reset();
        }
        
        function saveNotice(event) {
            event.preventDefault();
            const notice = {
                id: Date.now(),
                title: event.target[0].value,
                priority: event.target[1].value,
                content: event.target[2].value,
                date: event.target[3].value,
                postedDate: new Date().toLocaleDateString()
            };
            
            noticeData.push(notice);
            localStorage.setItem('notices', JSON.stringify(noticeData));
            addNoticeToList(notice);
            closeModal('noticeModal');
            showToast('Notice posted successfully!');
            event.target.reset();
        }
        
        function saveProgram(event) {
            event.preventDefault();
            const program = {
                id: Date.now(),
                name: event.target[0].value,
                description: event.target[1].value,
                students: event.target[2].value,
                type: event.target[3].value
            };
            
            programsData.push(program);
            localStorage.setItem('programs', JSON.stringify(programsData));
            addProgramCard(program);
            closeModal('programModal');
            showToast('Program added successfully!');
            event.target.reset();
        }
        
        function saveSample(event) {
            event.preventDefault();
            const sample = {
                id: Date.now(),
                title: event.target[0].value,
                class: event.target[1].value,
                subject: event.target[2].value,
                file: event.target[3].files[0]?.name || 'Sample Paper'
            };
            
            samplePapersData.push(sample);
            localStorage.setItem('samplePapers', JSON.stringify(samplePapersData));
            addSamplePaperCard(sample);
            closeModal('sampleModal');
            showToast('Sample paper uploaded successfully!');
            event.target.reset();
        }
        
        function saveSyllabus(event) {
            event.preventDefault();
            const syllabus = {
                id: Date.now(),
                subject: event.target[0].value,
                class: event.target[1].value,
                term: event.target[2].value,
                file: event.target[3].files[0]?.name || 'Syllabus.pdf'
            };
            
            syllabusData.push(syllabus);
            localStorage.setItem('syllabus', JSON.stringify(syllabusData));
            addSyllabusToTable(syllabus);
            closeModal('syllabusModal');
            showToast('Syllabus added successfully!');
            event.target.reset();
        }
        
        function saveTimetable(event) {
            event.preventDefault();
            const timetable = {
                id: Date.now(),
                class: event.target[0].value,
                name: event.target[1].value,
                type: event.target[2].value,
                file: event.target[3].files[0]?.name || 'Timetable.pdf',
                status: 'Active'
            };
            
            timetableData.push(timetable);
            localStorage.setItem('timetables', JSON.stringify(timetableData));
            addTimetableCard(timetable);
            closeModal('timetableModal');
            showToast('Time table created successfully!');
            event.target.reset();
        }
        
        // Add to DOM functions
        function addCareerToTable(career) {
            const table = document.getElementById('careerTable');
            const row = document.createElement('tr');
            row.className = 'border-b hover:bg-gray-50';
            row.innerHTML = `
                <td class="py-3 px-4">${career.position}</td>
                <td class="py-3 px-4">${career.department}</td>
                <td class="py-3 px-4">${career.type}</td>
                <td class="py-3 px-4">${career.applications}</td>
                <td class="py-3 px-4">
                    <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">${career.status}</span>
                </td>
                <td class="py-3 px-4">
                    <button class="text-blue-600 hover:text-blue-800 mr-2">
                        <i class="fas fa-edit"></i>
                    </button>
                    <button class="text-red-600 hover:text-red-800" onclick="deleteCareer(${career.id})">
                        <i class="fas fa-trash"></i>
                    </button>
                </td>
            `;
            table.appendChild(row);
        }
        
        function addDiaryCard(diary) {
            const container = document.getElementById('diaryCards');
            const card = document.createElement('div');
            card.className = 'border rounded-lg p-4 hover:shadow-lg transition';
            card.innerHTML = `
                <div class="flex items-center justify-between mb-3">
                    <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded">${diary.class}</span>
                    <span class="text-xs text-gray-500">${diary.date}</span>
                </div>
                <h4 class="font-semibold mb-2">${diary.subject}</h4>
                <p class="text-sm text-gray-600 mb-3">${diary.description}</p>
                <div class="flex items-center justify-between">
                    <span class="text-xs text-gray-500">${diary.teacher}</span>
                    <button class="text-blue-600 text-sm hover:text-blue-800">Edit</button>
                </div>
            `;
            container.appendChild(card);
        }
        
        function addNoticeToList(notice) {
            const container = document.getElementById('noticeList');
            const colors = {
                'Important': 'blue',
                'Urgent': 'red',
                'Normal': 'green'
            };
            const color = colors[notice.priority] || 'blue';
            
            const noticeItem = document.createElement('div');
            noticeItem.className = `border-l-4 border-${color}-500 bg-${color}-50 p-4 rounded-lg`;
            noticeItem.innerHTML = `
                <div class="flex items-center justify-between mb-2">
                    <h4 class="font-semibold text-${color}-900">${notice.title}</h4>
                    <span class="bg-${color}-500 text-white text-xs px-2 py-1 rounded">${notice.priority}</span>
                </div>
                <p class="text-sm text-${color}-800 mb-2">${notice.content}</p>
                <div class="flex items-center justify-between text-xs text-${color}-600">
                    <span>Posted: ${notice.postedDate}</span>
                    <div class="space-x-2">
                        <button class="hover:text-${color}-800">Edit</button>
                        <button class="hover:text-red-600" onclick="deleteNotice(${notice.id})">Delete</button>
                    </div>
                </div>
            `;
            container.appendChild(noticeItem);
        }
        
        function addProgramCard(program) {
            const container = document.getElementById('programGrid');
            const gradients = {
                'Academic': 'from-purple-500 to-pink-500',
                'Extracurricular': 'from-green-500 to-teal-500',
                'Sports': 'from-orange-500 to-red-500',
                'Cultural': 'from-indigo-500 to-purple-500'
            };
            const gradient = gradients[program.type] || 'from-purple-500 to-pink-500';
            
            const card = document.createElement('div');
            card.className = `bg-gradient-to-br ${gradient} rounded-xl p-6 text-white card-hover`;
            card.innerHTML = `
                <i class="fas fa-rocket text-3xl mb-4"></i>
                <h4 class="text-xl font-semibold mb-2">${program.name}</h4>
                <p class="text-sm opacity-90 mb-4">${program.description}</p>
                <div class="flex items-center justify-between">
                    <span class="text-xs">${program.students}+ Students</span>
                    <button class="text-white hover:text-gray-200">
                        <i class="fas fa-arrow-right"></i>
                    </button>
                </div>
            `;
            container.appendChild(card);
        }
        
        function addSamplePaperCard(sample) {
            const container = document.getElementById('samplePapers');
            const card = document.createElement('div');
            card.className = 'border rounded-lg p-4 hover:shadow-lg transition';
            card.innerHTML = `
                <i class="fas fa-file-pdf text-red-500 text-2xl mb-2"></i>
                <h5 class="font-semibold text-sm">${sample.title}</h5>
                <p class="text-xs text-gray-500">${sample.class} - ${sample.subject}</p>
                <button class="mt-2 text-blue-600 text-sm hover:text-blue-800">Download</button>
            `;
            container.appendChild(card);
        }
        
        function addSyllabusToTable(syllabus) {
            const table = document.getElementById('syllabusTable');
            const row = document.createElement('tr');
            row.className = 'border-b hover:bg-gray-50';
            row.innerHTML = `
                <td class="py-3 px-4">${syllabus.subject}</td>
                <td class="py-3 px-4">${syllabus.class}</td>
                <td class="py-3 px-4">${syllabus.term}</td>
                <td class="py-3 px-4">
                    <button class="text-blue-600 hover:text-blue-800 mr-2">
                        <i class="fas fa-eye"></i>
                    </button>
                    <button class="text-green-600 hover:text-green-800 mr-2">
                        <i class="fas fa-download"></i>
                    </button>
                    <button class="text-red-600 hover:text-red-800" onclick="deleteSyllabus(${syllabus.id})">
                        <i class="fas fa-trash"></i>
                    </button>
                </td>
            `;
            table.appendChild(row);
        }
        
        function addTimetableCard(timetable) {
            const container = document.getElementById('timetableCards');
            const card = document.createElement('div');
            card.className = 'border rounded-lg p-4 hover:shadow-lg transition';
            card.innerHTML = `
                <div class="flex items-center justify-between mb-3">
                    <h5 class="font-semibold">${timetable.class}</h5>
                    <span class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded">${timetable.status}</span>
                </div>
                <p class="text-sm text-gray-600 mb-3">${timetable.name}</p>
                <button class="text-blue-600 text-sm hover:text-blue-800">View Schedule</button>
            `;
            container.appendChild(card);
        }
        
        // Delete functions
        function deleteCareer(id) {
            careersData = careersData.filter(c => c.id !== id);
            localStorage.setItem('careers', JSON.stringify(careersData));
            location.reload();
        }
        
        function deleteNotice(id) {
            noticeData = noticeData.filter(n => n.id !== id);
            localStorage.setItem('notices', JSON.stringify(noticeData));
            location.reload();
        }
        
        function deleteSyllabus(id) {
            syllabusData = syllabusData.filter(s => s.id !== id);
            localStorage.setItem('syllabus', JSON.stringify(syllabusData));
            location.reload();
        }
        
        // Toggle sidebar for mobile
        function toggleSidebar() {
            const sidebar = document.querySelector('aside');
            sidebar.classList.toggle('-translate-x-full');
        }
        
        // Load initial data
        window.onload = function() {
            // Load saved data into DOM
            careersData.forEach(career => addCareerToTable(career));
            diaryData.forEach(diary => addDiaryCard(diary));
            noticeData.forEach(notice => addNoticeToList(notice));
            programsData.forEach(program => addProgramCard(program));
            samplePapersData.forEach(sample => addSamplePaperCard(sample));
            syllabusData.forEach(syllabus => addSyllabusToTable(syllabus));
            timetableData.forEach(timetable => addTimetableCard(timetable));
        };