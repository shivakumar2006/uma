<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once "backend/config/db.php";
require_once "backend/models/Program.php";

$program = new Program($conn);
$programs = $program->getAll();
?>

<?php include "includes/header.php"; ?>

<div class="flex justify-between items-center mb-6">
    <div>
        <p class="text-slate-500 text-sm">Campus / Overview</p>
        <h3 class="text-2xl font-bold text-slate-800">Our Programs</h3>
    </div>
    <button onclick="openModal('addProgramModal')" 
        class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg shadow transition-colors flex items-center gap-2">
        <i class="fas fa-plus"></i> Add Program
    </button>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">

<?php if(mysqli_num_rows($programs) > 0) { ?>

    <?php while($row = mysqli_fetch_assoc($programs)) { ?>

        <?php
            // Status color logic
            $statusClass = $row['status'] == 'Running' 
                ? 'bg-green-100 text-green-700' 
                : 'bg-yellow-100 text-yellow-700';

            // Category gradient (optional styling)
            $gradient = "from-indigo-500 to-purple-600";

            if(strtolower($row['category']) == "art"){
                $gradient = "from-yellow-500 to-orange-600";
            } elseif(strtolower($row['category']) == "sports"){
                $gradient = "from-teal-500 to-green-600";
            }
        ?>

        <!-- Program Card -->
        <div class="bg-white rounded-xl shadow-sm overflow-hidden group hover:-translate-y-1 transition-transform duration-300">
            
            <!-- Top Banner -->
            <div class="h-32 bg-gradient-to-r <?php echo $gradient; ?> flex items-center justify-center text-white text-3xl font-bold opacity-90">
                <?php echo strtoupper($row['category']); ?>
            </div>

            <!-- Content -->
            <div class="p-5">
                
                <div class="flex justify-between items-start">
                    
                    <h4 class="font-bold text-slate-800">
                        <?php echo $row['title']; ?>
                    </h4>

                    <span class="text-xs <?php echo $statusClass; ?> px-2 py-1 rounded">
                        <?php echo $row['status']; ?>
                    </span>

                </div>

                <p class="text-sm text-slate-600 mt-2 line-clamp-2">
                    <?php echo $row['description']; ?>
                </p>

                <!-- PDF FILE -->
                <?php if(!empty($row['file_path'])) { ?>
                    <a href="../uploads/<?php echo $row['file_path']; ?>" target="_blank"
                       class="text-blue-500 text-xs underline mt-2 block">
                       📄 View PDF
                    </a>
                <?php } ?>

                <!-- Actions -->
                <div class="mt-4 flex gap-2">
                    
                    <!-- EDIT -->
                    <!-- <a href="index.php?page=edit-program&id=<?php echo $row['id']; ?>" 
                       class="text-xs text-indigo-600 hover:underline font-medium">
                       Edit
                    </a> -->

                    <!-- DELETE -->
                    <a href="backend/controllers/programController.php?delete=<?php echo $row['id']; ?>" 
                       class="text-xs text-red-600 hover:underline font-medium"
                       onclick="return confirm('Are you sure you want to delete this program?')">
                       Remove
                    </a>

                </div>

            </div>
        </div>

    <?php } ?>

<?php } else { ?>

    <!-- No Data -->
    <div class="col-span-3 text-center text-gray-500">
        No programs found.
    </div>

<?php } ?>

</div>

</div>
</div>
</main>

<!-- MODALS -->
<script>
function openModal(id) {
    document.getElementById(id).classList.remove("hidden");
}

function closeModal() {
    document.getElementById("addProgramModal").classList.add("hidden");
}
</script>

<?php include "includes/modal.php"; ?>