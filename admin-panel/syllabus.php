<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once __DIR__ . "/backend/config/db.php";
require_once __DIR__ . "/config/app.php";
include "includes/header.php"; 

$query = "SELECT * FROM syllabus ORDER BY id DESC";
$result = mysqli_query($conn, $query);

?>
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

<?php if(mysqli_num_rows($result) > 0){ ?>

    <?php while($row = mysqli_fetch_assoc($result)){ ?>

        <div class="bg-white p-5 rounded-xl shadow-sm border border-slate-100 flex flex-col gap-3">

            <div class="flex items-center gap-3">
                <div class="h-10 w-10 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center">
                    <i class="fas fa-book"></i>
                </div>

                <div>
                    <h4 class="font-bold text-slate-800">
                        <?php echo $row['class_name']; ?> - <?php echo $row['subject']; ?>
                    </h4>

                    <p class="text-xs text-slate-500">
                        <?php echo date("M d, Y", strtotime($row['created_at'])); ?>
                    </p>
                </div>
            </div>

            <!-- FILE INFO -->
            <div class="flex justify-between text-xs text-slate-500">

                <span>PDF</span>

                <!-- PREVIEW -->
                <a 
                    href="<?php echo BASE_URL; ?>uploads/<?php echo $row['file_path']; ?>"
                    target="_blank"
                    class="text-blue-600 font-medium hover:underline"
                >
                    Preview
                </a>

            </div>

            <!-- ACTIONS -->
            <div class="flex justify-between items-center">
                <!-- EDIT (for future use) -->
                <button 
                    onclick='openEditModal(<?= json_encode($row) ?>)' 
                    class="text-blue-500 hover:text-blue-700 flex justify-center items-center gap-2">
                    <i class="fas fa-edit"></i><p class="text-md">Edit</p>
                </button>
                <a 
                    href="<?php echo BASE_URL; ?>backend/controllers/syllabusController.php?delete=<?php echo $row['id']; ?>"
                    onclick="return confirm('Delete this syllabus?')"
                    class="text-red-500 text-sm hover:underline"
                >
                    Delete
                </a>

            </div>

        </div>

    <?php } ?>

<?php } else { ?>

    <p class="text-gray-500">No syllabus uploaded</p>

<?php } ?>

</div>
<script>
function openModal(id) {
    document.getElementById(id).classList.remove("hidden");

    document.querySelector("form").reset();
    document.getElementById("editId").value = "";
    document.getElementById("oldFile").value = "";
}

function closeModal() {
    document.getElementById("addSyllabusModal").classList.add("hidden");
}
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const fileInput = document.getElementById("syllabusFileInput");

    if(fileInput){
        fileInput.addEventListener("change", function() {
            const fileName = this.files[0]?.name || "Click to upload PDF";
            document.getElementById("syllabusFileText").innerText = fileName;
        });
    }
});
</script>
<script>
function openEditModal(data) {

    document.getElementById("addSyllabusModal").classList.remove("hidden");

    // fill fields
    document.querySelector("input[name='subject']").value = data.subject;
    document.querySelector("select[name='class_name']").value = data.class_name;
    document.querySelector("input[name='year']").value = data.year;

    // hidden
    document.getElementById("editId").value = data.id;
    document.getElementById("oldFile").value = data.file_path;

    // UI update
    document.querySelector("h3").innerText = "Edit Syllabus";
}
</script>
<?php include "includes/modal.php"; ?>