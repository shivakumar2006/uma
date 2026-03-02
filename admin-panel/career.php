<?php include "includes/header.php"; ?>
                <div class="flex justify-between items-center mb-6">
                    <div>
                        <p class="text-slate-500 text-sm">Campus / Recruitment</p>
                        <h3 class="text-2xl font-bold text-slate-800">Career Openings</h3>
                    </div>
                    <button onclick="openModal('addJobModal')" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg shadow transition-colors flex items-center gap-2">
                        <i class="fas fa-plus"></i> Post Job
                    </button>
                </div>

                <div class="grid gap-4">
                    <!-- Job Item -->
                    <div class="bg-white p-5 rounded-xl shadow-sm border border-slate-200">
                        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                            <div>
                                <div class="flex items-center gap-2 mb-1">
                                    <h4 class="font-bold text-lg text-slate-800">Senior Physics Teacher</h4>
                                    <span class="bg-green-100 text-green-700 text-xs px-2 py-0.5 rounded font-medium">Active</span>
                                </div>
                                <div class="text-sm text-slate-500 flex items-center gap-3">
                                    <span><i class="fas fa-user-graduate"></i> 3-5 Years Exp.</span>
                                    <span><i class="fas fa-rupee-sign"></i> Competitive</span>
                                    <span><i class="far fa-clock"></i> 2d ago</span>
                                </div>
                            </div>
                            <div class="flex gap-2">
                                <button class="text-slate-500 hover:text-indigo-600 px-3 py-1 border border-slate-200 rounded text-sm">Edit</button>
                                <button class="text-white bg-red-500 hover:bg-red-600 px-3 py-1 rounded text-sm">Close</button>
                                <button class="text-indigo-600 hover:bg-indigo-50 px-3 py-1 rounded text-sm font-medium border border-indigo-200">View Apps (2)</button>
                            </div>
                        </div>
                    </div>

                    <!-- Job Item -->
                    <div class="bg-white p-5 rounded-xl shadow-sm border border-slate-200">
                        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                            <div>
                                <div class="flex items-center gap-2 mb-1">
                                    <h4 class="font-bold text-lg text-slate-800">Sports Coach</h4>
                                    <span class="bg-yellow-100 text-yellow-700 text-xs px-2 py-0.5 rounded font-medium">Reviewing</span>
                                </div>
                                <div class="text-sm text-slate-500 flex items-center gap-3">
                                    <span><i class="fas fa-user-graduate"></i> Freshers</span>
                                    <span><i class="fas fa-rupee-sign"></i> Negotiable</span>
                                    <span><i class="far fa-clock"></i> 1w ago</span>
                                </div>
                            </div>
                            <div class="flex gap-2">
                                <button class="text-slate-500 hover:text-indigo-600 px-3 py-1 border border-slate-200 rounded text-sm">Edit</button>
                                <button class="text-white bg-red-500 hover:bg-red-600 px-3 py-1 rounded text-sm">Close</button>
                                <button class="text-indigo-600 hover:bg-indigo-50 px-3 py-1 rounded text-sm font-medium border border-indigo-200">View Apps (5)</button>
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
    document.getElementById("addJobModal").classList.add("hidden");
}
</script>
<?php include "includes/modal.php"; ?>
