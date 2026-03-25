<?php 
include "includes/header.php";
require_once "backend/config/db.php";

$query = "SELECT * FROM daily_diary ORDER BY id DESC";
$result = mysqli_query($conn, $query);
?>
                <div class="flex justify-between items-center mb-6">
                    <div>
                        <p class="text-slate-500 text-sm">Campus / Records</p>
                        <h3 class="text-2xl font-bold text-slate-800">Daily Diary / Logbook</h3>
                    </div>
                    <button onclick="openModal('addDailyDiaryModel')" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg shadow transition-colors flex items-center gap-2">
                        <i class="fas fa-pen"></i> New Entry
                    </button>
                </div>

                <div class="grid gap-4">

<?php if(mysqli_num_rows($result) > 0) { ?>

    <?php while($row = mysqli_fetch_assoc($result)) { ?>

        <div class="bg-white p-4 rounded-xl shadow-sm flex items-center gap-4 border border-slate-100">
            
            <!-- DATE CIRCLE (same UI) -->
            <div class="h-12 w-12 rounded-full bg-orange-100 text-orange-600 flex items-center justify-center text-xl font-bold">
                <?php echo date("d", strtotime($row['event_date'])); ?>
            </div>

            <div class="flex-1">
                
                <div class="flex justify-between">
                    
                    <!-- TITLE -->
                    <h5 class="font-bold text-slate-800">
                        <?php echo $row['title']; ?>
                    </h5>

                    <!-- DATE + TIME -->
                    <span class="text-xs text-slate-400">
                        <?php echo date("M d, Y", strtotime($row['event_date'])); ?>,
                        <?php echo date("h:i A", strtotime($row['event_time'])); ?>
                    </span>

                </div>

                <!-- DESCRIPTION -->
                <p class="text-sm text-slate-600 mt-1">
                    <?php echo $row['description']; ?>
                </p>

                <!-- TAGS -->
                <div class="mt-2 flex gap-2">
                    
                    <span class="text-xs bg-orange-50 text-orange-600 px-2 py-0.5 rounded">
                        <?php echo $row['category']; ?>
                    </span>

                    <span class="text-xs bg-blue-50 text-blue-600 px-2 py-0.5 rounded">
                        Class <?php echo $row['class_range']; ?>
                    </span>

                </div>

                <!-- DELETE BUTTON -->
            <a 
            href="backend/routes/dailyDiary.php?delete=<?php echo $row['id']; ?>" 
            onclick="return confirm('Are you sure you want to delete this entry?')"
            class="text-red-500 hover:text-red-700 text-sm"
        >
                <i class="mt-5 text-sm fas fa-trash"></i> Delete
            </a>

            </div>

        </div>

    <?php } ?>

<?php } else { ?>

    <!-- EMPTY STATE -->
    <div class="bg-white p-4 rounded-xl shadow-sm text-center text-slate-500">
        No diary entries found
    </div>

<?php } ?>

</div>
<script>
function openModal(id) {
    document.getElementById(id).classList.remove("hidden");
}

function closeModal() {
    document.getElementById("addDailyDiaryModel").classList.add("hidden");
}
</script>
<?php include "includes/modal.php"; ?>

