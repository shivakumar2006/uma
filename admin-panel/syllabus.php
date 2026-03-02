<?php include "includes/header.php"; ?>
<div class="flex justify-between items-center mb-6">
    <div>
        <p class="text-slate-500 text-sm">Academics / Curriculum</p>
        <h3 class="text-2xl font-bold text-slate-800">
            Syllabus Manager
        </h3>
    </div>

    <button onclick="openModal('addSyllabusModal')" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg shadow flex items-center gap-2">
        <i class="fas fa-upload"></i> Upload Syllabus
    </button>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-6">

    <!-- Item 1 -->
    <div class="bg-white p-5 rounded-xl shadow-sm border border-slate-100 flex flex-col gap-3">
        <div class="flex items-center gap-3">
            <div class="h-10 w-10 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center">
                <i class="fas fa-book"></i>
            </div>
            <div>
                <h4 class="font-bold text-slate-800">Class 9 - Full Syllabus</h4>
                <p class="text-xs text-slate-500">Updated: 2 days ago</p>
            </div>
        </div>

        <div class="w-full bg-slate-100 h-2 rounded-full overflow-hidden">
            <div class="bg-blue-600 h-full w-3/4"></div>
        </div>

        <div class="flex justify-between text-xs text-slate-500">
            <span>PDF • 4.2 MB</span>
            <span class="text-blue-600 font-medium cursor-pointer hover:underline">
                Preview
            </span>
        </div>
    </div>

    <!-- Item 2 -->
     <div class="bg-white p-5 rounded-xl shadow-sm border border-slate-100 flex flex-col gap-3">
        <div class="flex items-center gap-3">
            <div class="h-10 w-10 bg-purple-100 text-purple-600 rounded-full flex items-center justify-center">
                <i class="fas fa-book-open"></i>
            </div>
            <div>
                <h4 class="font-bold text-slate-800">Class 12 - Commerce</h4>
                <p class="text-xs text-slate-500">Updated: 1 week ago</p>
            </div>
        </div>
        <div class="w-full bg-slate-100 h-2 rounded-full overflow-hidden">
            <div class="bg-purple-600 h-full w-1/2"></div>
        </div>
        <div class="flex justify-between text-xs text-slate-500">
            <span>PDF • 2.8 MB</span>
            <span class="text-purple-600 font-medium cursor-pointer hover:underline">
                Preview
            </span>
        </div>
    </div>

</div>
<script>
function openModal(id) {
    document.getElementById(id).classList.remove("hidden");
}

function closeModal() {
    document.getElementById("addSyllabusModal").classList.add("hidden");
}
</script>
<?php include "includes/modal.php"; ?>