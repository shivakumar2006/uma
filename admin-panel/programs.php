<?php include "includes/header.php"; ?>
                <div class="flex justify-between items-center mb-6">
                    <div>
                        <p class="text-slate-500 text-sm">Campus / Overview</p>
                        <h3 class="text-2xl font-bold text-slate-800">Our Programs</h3>
                    </div>
                    <button onclick="openModal('addProgramModal')" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg shadow transition-colors flex items-center gap-2">
                        <i class="fas fa-plus"></i> Add Program
                    </button>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Program Card -->
                    <div class="bg-white rounded-xl shadow-sm overflow-hidden group hover:-translate-y-1 transition-transform duration-300">
                        <div class="h-32 bg-gradient-to-r from-indigo-500 to-purple-600 flex items-center justify-center text-white text-3xl font-bold opacity-90">
                            STEM
                        </div>
                        <div class="p-5">
                            <div class="flex justify-between items-start">
                                <h4 class="font-bold text-slate-800">STEM Robotics</h4>
                                <span class="text-xs bg-green-100 text-green-700 px-2 py-1 rounded">Running</span>
                            </div>
                            <p class="text-sm text-slate-600 mt-2 line-clamp-2">Focus on Robotics, AI, and Automation for classes 6-8.</p>
                            <div class="mt-4 flex gap-2">
                                <button class="text-xs text-indigo-600 hover:underline font-medium">Edit</button>
                                <button class="text-xs text-red-600 hover:underline font-medium">Remove</button>
                            </div>
                        </div>
                    </div>

                    <!-- Program Card -->
                    <div class="bg-white rounded-xl shadow-sm overflow-hidden group hover:-translate-y-1 transition-transform duration-300">
                        <div class="h-32 bg-gradient-to-r from-yellow-500 to-orange-600 flex items-center justify-center text-white text-3xl font-bold opacity-90">
                            ART
                        </div>
                        <div class="p-5">
                            <div class="flex justify-between items-start">
                                <h4 class="font-bold text-slate-800">Fine Arts</h4>
                                <span class="text-xs bg-green-100 text-green-700 px-2 py-1 rounded">Running</span>
                            </div>
                            <p class="text-sm text-slate-600 mt-2 line-clamp-2">Painting, Sculpture, and Digital Art classes.</p>
                            <div class="mt-4 flex gap-2">
                                <button class="text-xs text-indigo-600 hover:underline font-medium">Edit</button>
                                <button class="text-xs text-red-600 hover:underline font-medium">Remove</button>
                            </div>
                        </div>
                    </div>

                    <!-- Program Card -->
                    <div class="bg-white rounded-xl shadow-sm overflow-hidden group hover:-translate-y-1 transition-transform duration-300">
                        <div class="h-32 bg-gradient-to-r from-teal-500 to-green-600 flex items-center justify-center text-white text-3xl font-bold opacity-90">
                            SPORTS
                        </div>
                        <div class="p-5">
                            <div class="flex justify-between items-start">
                                <h4 class="font-bold text-slate-800">Athletics</h4>
                                <span class="text-xs bg-yellow-100 text-yellow-700 px-2 py-1 rounded">New</span>
                            </div>
                            <p class="text-sm text-slate-600 mt-2 line-clamp-2">Track and field events training for seniors.</p>
                            <div class="mt-4 flex gap-2">
                                <button class="text-xs text-indigo-600 hover:underline font-medium">Edit</button>
                                <button class="text-xs text-red-600 hover:underline font-medium">Remove</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
<!-- MODALS (Hidden by default) -->
<script>
function openModal(id) {
    document.getElementById(id).classList.remove("hidden");
}

function closeModal() {
    document.getElementById("addProgramModal").classList.add("hidden");
}
</script>
<?php include "includes/modal.php"; ?>