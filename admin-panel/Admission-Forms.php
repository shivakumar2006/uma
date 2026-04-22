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
        <h3 class="text-2xl font-bold text-slate-800">Admission Forms</h3>
    </div>
</div>

<div class="card p-6 mb-6">
    <div class="tabs">
        <div class="tab active" onclick="switchTab(event, 'pending')">Pending</div>
        <div class="tab" onclick="switchTab(event, 'approved')">Approved</div>
        <div class="tab" onclick="switchTab(event, 'rejected')">Rejected</div>
    </div>

    <!-- PENDING -->
    <div id="pending" class="tab-content active">
        <table class="w-full">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Class</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_assoc($result)) { 
                    if($row['status'] == 'pending') { ?>
                <tr>
                    <td><?= $row['child_name'] ?></td>
                    <td><?= $row['class'] ?></td>
                    <td><?= $row['admission_date'] ?></td>
                    <td>
                        <button onclick='openModalData(<?= json_encode($row) ?>)' 
                        class="text-blue-600">View</button>
                    </td>
                </tr>
                <?php }} ?>
            </tbody>
        </table>
    </div>

    <!-- APPROVED -->
    <div id="approved" class="tab-content">
        <table class="w-full">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Class</th>
                    <th>Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                mysqli_data_seek($result, 0);
                while($row = mysqli_fetch_assoc($result)) { 
                    if($row['status'] == 'approved') { ?>
                <tr>
                    <td><?= $row['child_name'] ?></td>
                    <td><?= $row['class'] ?></td>
                    <td><?= $row['admission_date'] ?></td>
                    <td>
                        <button onclick='openModalData(<?= json_encode($row) ?>)' 
                            class="text-blue-600 font-semibold">
                            View
                        </button>
                    </td>
                </tr>
                <?php }} ?>
            </tbody>
        </table>
    </div>

    <!-- REJECTED -->
    <div id="rejected" class="tab-content">
    <table class="w-full">
        <thead>
            <tr>
                <th>Name</th>
                <th>Class</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
                <?php 
                mysqli_data_seek($result, 0);
                while($row = mysqli_fetch_assoc($result)) { 
                    if($row['status'] == 'rejected') { ?>
                <tr>
                    <td><?= $row['child_name'] ?></td>
                    <td><?= $row['class'] ?></td>
                    <td><?= $row['admission_date'] ?></td>
                    <td>
                        <button onclick='openModalData(<?= json_encode($row) ?>)' 
                            class="text-blue-600 font-semibold">
                            View
                        </button>
                    </td>
                </tr>
                <?php }} ?>
            </tbody>
        </table>
    </div>
</div>

<!-- 🔥 MODAL -->
<div id="modal" class="hidden fixed inset-0 bg-black bg-opacity-50 backdrop-blur-sm flex items-center justify-center z-50">
    
    <div class="bg-white rounded-2xl shadow-xl w-[420px] p-6 relative animate-fadeIn">

        <!-- Header -->
        <div class="flex justify-between items-center border-b pb-3 mb-4">
            <h2 class="text-xl font-semibold text-gray-800">📄 Admission Details</h2>
            <button onclick="closeModal()" class="text-gray-500 hover:text-black text-lg">✕</button>
        </div>

        <!-- Content -->
        <div id="modalContent" class="space-y-3 text-sm text-gray-700"></div>

        <!-- Actions -->
        <form method="POST" action="backend/controllers/admissionController.php?action=update_status">
            <input type="hidden" name="id" id="modalId">

            <div class="flex gap-3 mt-6">
                <button name="status" value="approved"
                    class="flex-1 bg-green-500 hover:bg-green-600 text-white py-2 rounded-lg transition">
                    Approve
                </button>

                <button name="status" value="rejected"
                    class="flex-1 bg-red-500 hover:bg-red-600 text-white py-2 rounded-lg transition">
                    Reject
                </button>
            </div>
        </form>

    </div>
</div>

<script>
function openModalData(data) {
    document.getElementById("modal").classList.remove("hidden");

    document.getElementById("modalContent").innerHTML = `
        <div class="grid grid-cols-2 gap-3">

            <div class="bg-gray-100 p-2 rounded">
                <p class="text-gray-500 text-xs">Child Name</p>
                <p class="font-medium">${data.child_name}</p>
            </div>

            <div class="bg-gray-100 p-2 rounded">
                <p class="text-gray-500 text-xs">Class</p>
                <p class="font-medium">${data.class}</p>
            </div>

            <div class="bg-gray-100 p-2 rounded">
                <p class="text-gray-500 text-xs">Father Name</p>
                <p class="font-medium">${data.father_name}</p>
            </div>

            <div class="bg-gray-100 p-2 rounded">
                <p class="text-gray-500 text-xs">Mother Name</p>
                <p class="font-medium">${data.mother_name}</p>
            </div>

            <div class="bg-gray-100 p-2 rounded">
                <p class="text-gray-500 text-xs">Mobile</p>
                <p class="font-medium">${data.mobile}</p>
            </div>

            <div class="bg-gray-100 p-2 rounded">
                <p class="text-gray-500 text-xs">Date</p>
                <p class="font-medium">${data.admission_date}</p>
            </div>

            <div class="bg-gray-100 p-2 rounded col-span-2">
                <p class="text-gray-500 text-xs">Address</p>
                <p class="font-medium">${data.address}</p>
            </div>

        </div>
    `;

    document.getElementById("modalId").value = data.id;
}

function closeModal() {
    document.getElementById("modal").classList.add("hidden");
}

function switchTab(e, id) {
    document.querySelectorAll('.tab-content').forEach(el => el.classList.remove('active'));
    document.getElementById(id).classList.add('active');

    document.querySelectorAll('.tab').forEach(el => el.classList.remove('active'));
    e.target.classList.add('active');
}
</script>