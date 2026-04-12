<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "includes/header.php"; 

require_once "backend/config/db.php";
require_once "backend/models/admission.php";
$admission = new Admission($conn);
$result = $admission->getAll();

?>
<div class="flex justify-between items-center mb-6">
    <div>
        <p class="text-slate-500 text-sm">Others</p>
        <h3 class="text-2xl font-bold text-slate-800">
            Admission Forms
        </h3>
        <p class="text-slate-500 text-sm">Review and manage admission applications</p>
    </div>
</div>
                        

<div class="card p-6 mb-6">
    <div class="tabs">
        <div class="tab active" onclick="switchTab(event, 'admission-pending')">Pending</div>
        <div class="tab" onclick="switchTab(event, 'admission-approved')">Approved</div>
        <div class="tab" onclick="switchTab(event, 'admission-rejected')">Rejected</div>
    </div>

    <!-- ✅ PENDING -->
    <div id="admission-pending" class="tab-content active">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="p-3 text-left">Name</th>
                        <th class="p-3 text-left">Class</th>
                        <th class="p-3 text-left">Date</th>
                        <th class="p-3 text-left">Status</th>
                        <th class="p-3 text-left">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $found = false;
                    while($row = mysqli_fetch_assoc($result)) { 
                        if($row['status'] == 'pending') { 
                            $found = true;
                    ?>
                    <tr class="border-b">
                        <td class="p-3"><?= $row['child_name'] ?></td>
                        <td class="p-3"><?= $row['class'] ?></td>
                        <td class="p-3"><?= $row['admission_date'] ?></td>
                        <td class="p-3">
                            <span class="badge badge-warning">Under Review</span>
                        </td>
                        <td class="p-3">
                            <form method="POST" action="../backend/admission.php?action=update_status">
                                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                <button name="status" value="approved" class="text-green-600 text-sm">Approve</button>
                                <button name="status" value="rejected" class="text-red-600 text-sm">Reject</button>
                            </form>
                        </td>
                    </tr>
                    <?php } } ?>

                    <?php if(!$found) { ?>
                    <tr>
                        <td colspan="5" class="p-3 text-center text-gray-500">
                            No Pending Admissions Found
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- ✅ APPROVED -->
    <div id="admission-approved" class="tab-content">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="p-3 text-left">Name</th>
                        <th class="p-3 text-left">Class</th>
                        <th class="p-3 text-left">Approved Date</th>
                        <th class="p-3 text-left">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    mysqli_data_seek($result, 0);
                    $found = false;

                    while($row = mysqli_fetch_assoc($result)) { 
                        if($row['status'] == 'approved') { 
                            $found = true;
                    ?>
                    <tr class="border-b">
                        <td class="p-3"><?= $row['child_name'] ?></td>
                        <td class="p-3"><?= $row['class'] ?></td>
                        <td class="p-3"><?= $row['admission_date'] ?></td>
                        <td class="p-3">
                            <button class="text-blue-600 text-sm font-semibold">View</button>
                        </td>
                    </tr>
                    <?php } } ?>

                    <?php if(!$found) { ?>
                    <tr>
                        <td colspan="4" class="p-3 text-center text-gray-500">
                            No Approved Admissions Found
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- ✅ REJECTED -->
    <div id="admission-rejected" class="tab-content">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="p-3 text-left">Name</th>
                        <th class="p-3 text-left">Class</th>
                        <th class="p-3 text-left">Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    mysqli_data_seek($result, 0);
                    $found = false;

                    while($row = mysqli_fetch_assoc($result)) { 
                        if($row['status'] == 'rejected') { 
                            $found = true;
                    ?>
                    <tr class="border-b">
                        <td class="p-3"><?= $row['child_name'] ?></td>
                        <td class="p-3"><?= $row['class'] ?></td>
                        <td class="p-3"><?= $row['admission_date'] ?></td>
                    </tr>
                    <?php } } ?>

                    <?php if(!$found) { ?>
                    <tr>
                        <td colspan="3" class="p-3 text-center text-gray-500">
                            No Rejected Admissions Found
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
function openModal(id) {
    document.getElementById(id).classList.remove("hidden");
}

function closeModal() {
    document.getElementById("admission-detail-modal").classList.add("hidden");
}
function switchTab(event, tabId) {
            // Hide all tab contents
            const tabContents = event.target.parentElement.parentElement.querySelectorAll('.tab-content');
            tabContents.forEach(content => {
                content.classList.remove('active');
            });

            // Remove active from all tabs
            const tabs = event.target.parentElement.querySelectorAll('.tab');
            tabs.forEach(tab => {
                tab.classList.remove('active');
            });

            // Show selected tab content and mark tab as active
            const selectedTabContent = document.getElementById(tabId);
            if (selectedTabContent) {
                selectedTabContent.classList.add('active');
            }
            event.target.classList.add('active');
        }
</script>
<?php include "includes/modal.php"; ?>