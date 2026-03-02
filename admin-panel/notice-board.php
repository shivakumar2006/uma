<?php include "includes/header.php"; ?>
                <div class="flex justify-between items-center mb-6">
                    <div>
                        <p class="text-slate-500 text-sm">Campus / Communication</p>
                        <h3 class="text-2xl font-bold text-slate-800">Notice Board</h3>
                    </div>
                    <button onclick="openModal('addNoticeModal')" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg shadow transition-colors flex items-center gap-2">
                        <i class="fas fa-plus"></i> New Notice
                    </button>
                </div>

                <div class="space-y-4" id="notices-container">
                    <!-- Notice Card -->
                    <div class="bg-white p-5 rounded-xl shadow-sm border-l-4 border-red-500 hover:shadow-md transition-shadow">
                        <div class="flex justify-between items-start mb-2">
                            <span class="bg-red-100 text-red-700 text-xs font-bold px-2 py-1 rounded uppercase">Urgent</span>
                            <span class="text-xs text-slate-400">Oct 24, 2023</span>
                        </div>
                        <h4 class="font-bold text-slate-800 text-lg mb-1">Campus Closed for Maintenance</h4>
                        <p class="text-slate-600 text-sm mb-3">The campus will be closed this Saturday for electrical maintenance. All classes are suspended.</p>
                        <div class="flex items-center gap-3 text-xs text-slate-400">
                            <span><i class="fas fa-user"></i> Principal</span>
                            <span><i class="fas fa-eye"></i> Viewed by 85%</span>
                        </div>
                    </div>

                    <!-- Notice Card -->
                    <div class="bg-white p-5 rounded-xl shadow-sm border-l-4 border-indigo-500 hover:shadow-md transition-shadow">
                        <div class="flex justify-between items-start mb-2">
                            <span class="bg-indigo-100 text-indigo-700 text-xs font-bold px-2 py-1 rounded uppercase">General</span>
                            <span class="text-xs text-slate-400">Oct 22, 2023</span>
                        </div>
                        <h4 class="font-bold text-slate-800 text-lg mb-1">Annual Sports Day</h4>
                        <p class="text-slate-600 text-sm mb-3">Annual sports day is scheduled for next Friday. Students are requested to bring their sports kit.</p>
                        <div class="flex items-center gap-3 text-xs text-slate-400">
                            <span><i class="fas fa-user"></i> Admin Office</span>
                            <span><i class="fas fa-eye"></i> Viewed by 92%</span>
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
