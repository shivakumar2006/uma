<?php 
include "includes/header.php";

require_once "backend/config/db.php";
require_once "config/app.php";
require_once "backend/models/job.php";

$job = new job($conn);

// FETCH ALL JOBS
$jobs = $job->getAll();

$editData = null;

if(isset($_GET['edit'])){
    $id = intval($_GET['edit']);
    $result = $job->getById($id);
    $editData = mysqli_fetch_assoc($result);
}
?>
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

<?php if(mysqli_num_rows($jobs) > 0) { ?>

<?php while($row = mysqli_fetch_assoc($jobs)) { ?>

    <!-- Job Item -->
    <div class="bg-white p-5 rounded-xl shadow-sm border border-slate-200">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
            
            <div>
                <div class="flex items-center gap-2 mb-1">
                    
                    <!-- TITLE -->
                    <h4 class="font-bold text-lg text-slate-800">
                        <?php echo $row['title']; ?>
                    </h4>

                    <!-- STATUS -->
                    <span class="bg-green-100 text-green-700 text-xs px-2 py-0.5 rounded font-medium">
                        <?php echo $row['status']; ?>
                    </span>

                </div>

                <div class="text-sm text-slate-500 flex items-center gap-3">
                    
                    <!-- EXPERIENCE -->
                    <span>
                        <i class="fas fa-user-graduate"></i> 
                        <?php echo $row['experience']; ?>
                    </span>

                    <!-- CATEGORY -->
                    <span>
                        <i class="fas fa-briefcase"></i> 
                        <?php echo $row['category']; ?>
                    </span>

                    <!-- OPTIONAL TIME (if you add later) -->
                    <span>
                        <i class="far fa-clock"></i> 
                        Recently
                    </span>

                </div>
            </div>

            <div class="flex gap-2">

                <!-- EDIT -->
                <!-- <a href="?edit=<?php echo $row['id']; ?>"
   class="text-slate-500 hover:text-indigo-600 px-3 py-1 border border-slate-200 rounded text-sm">
   Edit
</a> -->

                <!-- DELETE -->
                <a href="<?php echo BASE_URL; ?>backend/routes/jobRoutes.php?delete=<?php echo $row['id']; ?>"
                   onclick="return confirm('Are you sure you want to delete this job?')"
                   class="text-white bg-red-500 hover:bg-red-600 px-3 py-1 rounded text-sm">
                   Close
                </a>

                <!-- VIEW APPS (STATIC FOR NOW) -->
                <button class="text-indigo-600 hover:bg-indigo-50 px-3 py-1 rounded text-sm font-medium border border-indigo-200">
                    View Apps (0)
                </button>

            </div>

        </div>
    </div>

<?php } ?>

<?php } else { ?>

    <!-- EMPTY STATE -->
    <div class="bg-white p-5 rounded-xl shadow-sm border border-slate-200 text-center text-slate-500">
        No job openings found
    </div>

<?php } ?>

</div>
<script>
function openModal(id) {
    document.getElementById(id).classList.remove("hidden");
}

function closeModal() {
    document.getElementById("addJobModal").classList.add("hidden");
}
    document.addEventListener("DOMContentLoaded", function(){
        openModal('addJobModal');
    });
</script>
<!-- <?php if($editData){ ?>
<script>
document.addEventListener("DOMContentLoaded", function(){
    openModal('addJobModal');
});
</script>
<?php } ?> -->
<?php include "includes/modal.php"; ?>
