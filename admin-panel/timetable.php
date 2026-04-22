<?php 
include "includes/header.php"; 
// include "includes/modal.php";
require_once __DIR__ . "/backend/config/db.php";
require_once __DIR__ . "/config/app.php";

$query = "SELECT * FROM timetable ORDER BY id DESC";
$result = mysqli_query($conn, $query);
?>
                <div class="flex justify-between items-center mb-6">
                    <div>
                        <p class="text-slate-500 text-sm">Academics / Schedule</p>
                        <h3 class="text-2xl font-bold text-slate-800">Class Time Table</h3>
                    </div>
                    <div class="flex gap-2">
                        <select class="border border-slate-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:border-indigo-500">
                            <option>Class 1</option>
                            <option>Class 2</option>
                            <option>Class 3</option>
                            <option>Class 4</option>
                            <option>Class 5</option>
                            <option>Class 6</option>
                            <option>Class 7</option>
                            <option>Class 8</option>
                            <option>Class 9</option>
                            <option>Class 10</option>
                            <option>Class 11</option>
                            <option>Class 12</option>
                        </select>
                        <button onclick="openModal('addTimeTableModal')" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg shadow transition-colors">
                            <i class="fas fa-edit"></i> Edit
                        </button>
                    </div>
                </div>

                <!-- Visual Calendar/Time Table -->
                <div class="bg-white p-6 rounded-xl shadow-sm">

    <h3 class="text-lg font-bold mb-4 text-slate-700">Class Timetable</h3>

    <?php if(mysqli_num_rows($result) > 0) { ?>

        <div class="space-y-3">

        <?php while($row = mysqli_fetch_assoc($result)) { ?>

            <div class="flex items-center justify-between bg-slate-50 hover:bg-slate-100 transition rounded-lg px-4 py-3 border border-slate-200">

                <!-- LEFT -->
                <div class="flex items-center gap-3">
                    
                    <div class="h-10 w-10 bg-indigo-100 text-indigo-600 rounded-full flex items-center justify-center">
                        <i class="fas fa-calendar-alt"></i>
                    </div>

                    <div>
                        <p class="font-semibold text-slate-800">
                            <?php echo $row['class_name']; ?>
                        </p>
                        <p class="text-xs text-slate-500">
                            Timetable PDF
                        </p>
                    </div>

                </div>

                <!-- RIGHT -->
                <div class="flex items-center gap-4">

                    <!-- VIEW -->
                    <a 
                        href="<?php echo BASE_URL; ?>uploads/<?php echo $row['file_path']; ?>" 
                        target="_blank"
                        class="text-indigo-600 hover:text-indigo-800 flex items-center gap-1 text-sm font-medium"
                    >
                        <i class="fas fa-eye"></i> View
                    </a>

                    <!-- DELETE -->
                    <a 
                        href="<?php echo BASE_URL; ?>admin-panel/backend/controllers/timetableController.php?delete=<?php echo $row['id']; ?>"
                        onclick="return confirm('Are you sure you want to delete this timetable?')"
                        class="text-red-500 hover:text-red-700 flex items-center gap-1 text-sm font-medium"
                    >
                        <i class="fas fa-trash"></i> Delete
                    </a>

                </div>

            </div>

        <?php } ?>

        </div>

    <?php } else { ?>

        <div class="text-center py-10 text-slate-400">
            <i class="fas fa-folder-open text-3xl mb-2"></i>
            <p>No timetable uploaded yet</p>
        </div>

    <?php } ?>

</div>
<script>
function openModal(id) {
    document.getElementById(id).classList.remove("hidden");
}

function closeModal() {
    document.getElementById("addTimeTableModal").classList.add("hidden");
}
</script>
<?php include "includes/modal.php"; ?>