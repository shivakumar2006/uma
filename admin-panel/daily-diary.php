<?php include "includes/header.php"; ?>
                <div class="flex justify-between items-center mb-6">
                    <div>
                        <p class="text-slate-500 text-sm">Campus / Records</p>
                        <h3 class="text-2xl font-bold text-slate-800">Daily Diary / Logbook</h3>
                    </div>
                    <button onclick="openModal('addNoticeModal')" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg shadow transition-colors flex items-center gap-2">
                        <i class="fas fa-pen"></i> New Entry
                    </button>
                </div>

                <div class="grid gap-4">
                    <div class="bg-white p-4 rounded-xl shadow-sm flex items-center gap-4 border border-slate-100">
                        <div class="h-12 w-12 rounded-full bg-orange-100 text-orange-600 flex items-center justify-center text-xl font-bold">
                            24
                        </div>
                        <div class="flex-1">
                            <div class="flex justify-between">
                                <h5 class="font-bold text-slate-800">Event: Science Exhibition</h5>
                                <span class="text-xs text-slate-400">Today, 10:00 AM</span>
                            </div>
                            <p class="text-sm text-slate-600 mt-1">Class 9 & 10 students presenting projects in the main hall. Chief Guest: Dr. S. Kumar.</p>
                            <div class="mt-2 flex gap-2">
                                <span class="text-xs bg-orange-50 text-orange-600 px-2 py-0.5 rounded">Exhibition</span>
                                <span class="text-xs bg-blue-50 text-blue-600 px-2 py-0.5 rounded">Class 9</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white p-4 rounded-xl shadow-sm flex items-center gap-4 border border-slate-100">
                        <div class="h-12 w-12 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center text-xl font-bold">
                            23
                        </div>
                        <div class="flex-1">
                            <div class="flex justify-between">
                                <h5 class="font-bold text-slate-800">Staff Meeting</h5>
                                <span class="text-xs text-slate-400">Yesterday, 3:00 PM</span>
                            </div>
                            <p class="text-sm text-slate-600 mt-1">Discussed upcoming exam schedule and curriculum changes for the next semester.</p>
                            <div class="mt-2 flex gap-2">
                                <span class="text-xs bg-purple-50 text-purple-600 px-2 py-0.5 rounded">Meeting</span>
                                <span class="text-xs bg-gray-100 text-gray-600 px-2 py-0.5 rounded">Staff</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<script>
function openModal(id) {
    document.getElementById(id).classList.remove("hidden");
}

function closeModal() {
    document.getElementById("addNoticeModal").classList.add("hidden");
}
</script>
<?php include "includes/modal.php"; ?>

