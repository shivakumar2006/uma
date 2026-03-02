<?php include "includes/header.php"; ?>

<div class="flex justify-between items-center mb-6">
    <div>
        <p class="text-slate-500 text-sm">Academics / Resources</p>
        <h3 class="text-2xl font-bold text-slate-800">
            Sample Papers Management
        </h3>
    </div>

    <button onclick="openModal('addPaperModal')" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg shadow flex items-center gap-2">
        <i class="fas fa-plus"></i> Add New Paper
    </button>
</div>

<div class="bg-white rounded-xl shadow-sm overflow-hidden">
    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead class="bg-slate-100 text-slate-600 text-xs uppercase font-semibold">
                <tr>
                    <th class="p-4">Subject</th>
                    <th class="p-4">Class</th>
                    <th class="p-4">Board/Year</th>
                    <th class="p-4">File</th>
                    <th class="p-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="text-sm text-slate-700 divide-y divide-slate-100">
                <tr class="hover:bg-slate-50">
                    <td class="p-4 font-medium">Mathematics</td>
                    <td class="p-4">10</td>
                    <td class="p-4">CBSE 2023</td>
                    <td class="p-4">
                        <a href="#" class="text-indigo-600 hover:underline">
                            <i class="fas fa-download"></i> Download
                        </a>
                    </td>
                    <td class="p-4 text-right space-x-2">
                        <button class="text-blue-500 hover:text-blue-700">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="text-red-500 hover:text-red-700">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                </tr>
                <tr class="hover:bg-slate-50">
                    <td class="p-4 font-medium">Physics</td>
                    <td class="p-4">12</td>
                    <td class="p-4">State Board</td>
                    <td class="p-4">
                        <a href="#" class="text-indigo-600 hover:underline">
                            <i class="fas fa-download"></i> Download
                        </a>
                    </td>
                    <td class="p-4 text-right space-x-2">
                        <button class="text-blue-500 hover:text-blue-700">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="text-red-500 hover:text-red-700">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<script>
function openModal(id) {
    document.getElementById(id).classList.remove("hidden");
}

function closeModal() {
    document.getElementById("addPaperModal").classList.add("hidden");
}
</script>
<?php include "includes/modal.php"; ?>