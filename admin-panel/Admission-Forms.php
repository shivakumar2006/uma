<?php include "includes/header.php"; ?>
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
                                            <tr class="border-b">
                                                <td class="p-3">Raj Kumar</td>
                                                <td class="p-3">10-A</td>
                                                <td class="p-3">2024-01-16</td>
                                                <td class="p-3"><span class="badge badge-warning">Under Review</span></td>
                                                <td class="p-3"><button class="text-blue-600 text-sm font-semibold" onclick="openModal('admission-detail-modal')">View</button></td>
                                            </tr>
                                            <tr class="border-b">
                                                <td class="p-3">Priya Singh</td>
                                                <td class="p-3">12-B</td>
                                                <td class="p-3">2024-01-15</td>
                                                <td class="p-3"><span class="badge badge-warning">Under Review</span></td>
                                                <td class="p-3"><button class="text-blue-600 text-sm font-semibold" onclick="openModal('admission-detail-modal')">View</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

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
                                            <tr class="border-b">
                                                <td class="p-3">Arjun Patel</td>
                                                <td class="p-3">10-A</td>
                                                <td class="p-3">2024-01-10</td>
                                                <td class="p-3"><button class="text-blue-600 text-sm font-semibold">View</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div id="admission-rejected" class="tab-content">
                                <p class="text-gray-600">No rejected applications</p>
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