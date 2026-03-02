<?php include "includes/header.php"; ?>
<div class="flex justify-between items-center mb-6">
    <div>
        <p class="text-slate-500 text-sm">Others</p>
        <h3 class="text-2xl font-bold text-slate-800">
            Query Handler
        </h3>
        <p class="text-slate-500 text-sm">Manage student and parent queries</p>
    </div>
</div>
                        <div class="card p-6 mb-6">
                            <div class="tabs">
                                <div class="tab active" onclick="switchTab(event, 'query-pending')">Pending</div>
                                <div class="tab" onclick="switchTab(event, 'query-resolved')">Resolved</div>
                                <div class="tab" onclick="switchTab(event, 'query-all')">All Queries</div>
                            </div>

                            <div id="query-pending" class="tab-content active">
                                <div class="space-y-4">
                                    <div class="card p-4 border-l-4 border-orange-500">
                                        <div class="flex items-start justify-between mb-3">
                                            <div>
                                                <h4 class="font-bold text-gray-800">Admission Fee Waiver</h4>
                                                <p class="text-sm text-gray-600">From: Mr. Sharma</p>
                                            </div>
                                            <span class="badge badge-warning">Pending</span>
                                        </div>
                                        <p class="text-gray-700 mb-3">Is there any scholarship or fee waiver available for meritorious students?</p>
                                        <div class="flex gap-3">
                                            <button onclick="openModal('reply-modal')" class="text-blue-600 text-sm font-semibold">Reply</button>
                                            <button class="text-green-600 text-sm font-semibold">Mark Resolved</button>
                                        </div>
                                    </div>

                                    <div class="card p-4 border-l-4 border-orange-500">
                                        <div class="flex items-start justify-between mb-3">
                                            <div>
                                                <h4 class="font-bold text-gray-800">Class Change Request</h4>
                                                <p class="text-sm text-gray-600">From: Ms. Patel</p>
                                            </div>
                                            <span class="badge badge-warning">Pending</span>
                                        </div>
                                        <p class="text-gray-700 mb-3">Can my child be transferred to section B due to personal reasons?</p>
                                        <div class="flex gap-3">
                                            <button onclick="openModal('reply-modal')" class="text-blue-600 text-sm font-semibold">Reply</button>
                                            <button class="text-green-600 text-sm font-semibold">Mark Resolved</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="query-resolved" class="tab-content">
                                <div class="space-y-4">
                                    <div class="card p-4 border-l-4 border-green-500">
                                        <div class="flex items-start justify-between mb-3">
                                            <div>
                                                <h4 class="font-bold text-gray-800">Exam Date Clarification</h4>
                                                <p class="text-sm text-gray-600">From: Mr. Khan</p>
                                            </div>
                                            <span class="badge badge-success">Resolved</span>
                                        </div>
                                        <p class="text-gray-700">Query resolved on 2024-01-15</p>
                                    </div>
                                </div>
                            </div>

                            <div id="query-all" class="tab-content">
                                <p class="text-gray-600">All queries displayed</p>
                            </div>
                        </div>
<script>
function openModal(id) {
    document.getElementById(id).classList.remove("hidden");
}

function closeModal() {
    document.getElementById("reply-modal").classList.add("hidden");
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