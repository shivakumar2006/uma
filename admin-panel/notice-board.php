<?php include "includes/header.php"; ?>
<?php 
require_once "config/app.php";
require_once "backend/config/db.php";

$query = "SELECT * FROM notices ORDER BY id DESC";
$result = mysqli_query($conn, $query);
?>

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

<?php if(mysqli_num_rows($result) > 0) { ?>

    <?php while($row = mysqli_fetch_assoc($result)) { ?>

        <div class="bg-white p-5 rounded-xl shadow-sm border-l-4 
        <?php 
            if($row['priority'] == 'Urgent') echo 'border-red-500';
            elseif($row['priority'] == 'High') echo 'border-yellow-500';
            else echo 'border-indigo-500';
        ?>
        hover:shadow-md transition-shadow">

            <div class="flex justify-between items-start mb-2">
                <span class="text-xs font-bold px-2 py-1 rounded uppercase
                <?php 
                    if($row['priority'] == 'Urgent') echo 'bg-red-100 text-red-700';
                    elseif($row['priority'] == 'High') echo 'bg-yellow-100 text-yellow-700';
                    else echo 'bg-indigo-100 text-indigo-700';
                ?>">
                    <?php echo $row['priority']; ?>
                </span>

                <span class="text-xs text-slate-400">
                    <?php echo date("M d, Y", strtotime($row['created_at'])); ?>
                </span>
            </div>

            <h4 class="font-bold text-slate-800 text-lg mb-1">
                <?php echo $row['title']; ?>
            </h4>

            <p class="text-slate-600 text-sm mb-3">
                <?php echo $row['description']; ?>
            </p>

            <div class="flex items-center gap-3 text-xs text-slate-400">
                <span><i class="fas fa-user"></i> <?php echo $row['posted_by']; ?></span>

                <?php if(!empty($row['file_path'])) { ?>
                    <a href="<?php echo BASE_URL; ?>backend/uploads/<?php echo $row['file_path']; ?>" target="_blank" class="text-blue-500 underline">
                        View File
                    </a>
                <?php } ?>
            </div>
            <a 
                href="<?php echo BASE_URL; ?>admin-panel/backend/routes/deleteNotice.php?id=<?php echo $row['id']; ?>" 
                onclick="return confirm('Are you sure you want to delete this notice?')"
                class="text-red-500 hover:text-red-700 font-semibold"
            >
                <i class="mt-5 text-sm fas fa-trash"></i> Delete
            </a>

        </div>

    <?php } ?>

<?php } else { ?>

    <!-- SAME UI STYLE MESSAGE -->
    <div class="bg-white p-5 rounded-xl shadow-sm text-center text-slate-500">
        No notices available
    </div>

<?php } ?>

</div>

<script>
function openModal(id) {
    const modal = document.getElementById(id);
    if(modal){
        modal.classList.remove("hidden");
    } else {
        console.log("Modal not found:", id);
    }
}

function closeModal() {
    document.getElementById("addNoticeModal").classList.add("hidden");
}
</script>

<?php include "includes/modal.php"; ?>