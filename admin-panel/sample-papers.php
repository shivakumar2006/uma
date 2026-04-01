<?php 
include "includes/header.php";
require_once "backend/config/db.php";

$query = "SELECT * FROM sample_papers ORDER BY id DESC";
$result = mysqli_query($conn, $query);
?>

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

                <?php if(mysqli_num_rows($result) > 0) { ?>

                    <?php while($row = mysqli_fetch_assoc($result)) { ?>

                        <tr class="hover:bg-slate-50">

                            <td class="p-4 font-medium">
                                <?php echo $row['subject']; ?>
                            </td>

                            <td class="p-4">
                                <?php echo $row['class_name']; ?>
                            </td>

                            <td class="p-4">
                                <?php echo $row['year']; ?>
                            </td>

                            <td class="p-4">
                                <a 
                                    href="/uma/admin-panel/backend/uploads/<?php echo $row['file_path']; ?>" 
                                    target="_blank"
                                    class="text-indigo-600 hover:underline"
                                >
                                    <i class="fas fa-download"></i> Download
                                </a>
                            </td>

                            <td class="p-4 text-right space-x-2">

                                <!-- EDIT (for future use) -->
                                <button class="text-blue-500 hover:text-blue-700">
                                    <i class="fas fa-edit"></i>
                                </button>

                                <!-- DELETE -->
                                <a 
                                    href="backend/routes/samplePaperRoutes.php?delete=<?php echo $row['id']; ?>"
                                    onclick="return confirm('Are you sure you want to delete this paper?')"
                                    class="text-red-500 hover:text-red-700"
                                >
                                    <i class="fas fa-trash"></i>
                                </a>

                            </td>

                        </tr>

                    <?php } ?>

                <?php } else { ?>

                    <tr>
                        <td colspan="5" class="text-center p-6 text-slate-400">
                            No sample papers available
                        </td>
                    </tr>

                <?php } ?>

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
<script>
document.addEventListener("DOMContentLoaded", function() {
    const fileInput = document.getElementById("fileInput");

    if(fileInput){
        fileInput.addEventListener("change", function() {
            const fileName = this.files[0]?.name || "Click to upload PDF";
            document.getElementById("fileText").innerText = fileName;
        });
    }
});
</script>

<?php include "includes/modal.php"; ?>