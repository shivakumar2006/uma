<?php 
include "includes/header.php";
require_once "backend/config/db.php";
require_once "backend/models/Query.php";

$queryModel = new Query($conn);

$pendingQueries = $queryModel->getAll("pending");
$resolvedQueries = $queryModel->getAll("resolved");
$allQueries = $queryModel->getAll();
?>

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
    <!-- Tabs -->
    <div class="tabs">
        <div class="tab active" onclick="switchTab(event, 'query-pending')">Pending</div>
        <div class="tab" onclick="switchTab(event, 'query-resolved')">Resolved</div>
        <div class="tab" onclick="switchTab(event, 'query-all')">All Queries</div>
    </div>

    <!-- Pending -->
    <div id="query-pending" class="tab-content active">
    <div class="space-y-4">

        <?php if (count($pendingQueries) > 0): ?>
            <?php foreach ($pendingQueries as $q): ?>

                <div class="card p-4 border-l-4 border-orange-500">
                    <div class="flex items-start justify-between mb-3">
                        <div>
                            <h4 class="font-bold text-gray-800">
                                <?php echo substr($q['message'], 0, 30); ?>...
                            </h4>
                            <p class="text-sm text-gray-600">From: <?php echo $q['name']; ?></p>
                        </div>
                        <span class="badge badge-warning">Pending</span>
                    </div>

                    <p class="text-gray-700 mb-3"><?php echo $q['message']; ?></p>

                    <div class="flex gap-3">
                        <button 
                            onclick="openReplyModal(<?php echo $q['id']; ?>, '<?php echo $q['email']; ?>')" 
                            class="text-blue-600 text-sm font-semibold"
                        >
                            Reply
                        </button>

                        <a href="<?php echo BASE_URL; ?>admin-panel/backend/routes/query.php?action=resolve&id=<?php echo $q['id']; ?>" 
                           class="text-green-600 text-sm font-semibold">
                           Mark Resolved
                        </a>
                    </div>
                </div>

            <?php endforeach; ?>
        <?php else: ?>
            <p class="text-gray-500">No pending queries</p>
        <?php endif; ?>

    </div>
</div>

    <!-- Resolved -->
    <div id="query-resolved" class="tab-content">
    <div class="space-y-4">

        <?php if (count($resolvedQueries) > 0): ?>
            <?php foreach ($resolvedQueries as $q): ?>

                <div class="card p-4 border-l-4 border-green-500">
                    <div class="flex items-start justify-between mb-3">
                        <div>
                            <h4 class="font-bold text-gray-800">
                                <?php echo substr($q['message'], 0, 30); ?>...
                            </h4>
                            <p class="text-sm text-gray-600">From: <?php echo $q['name']; ?></p>
                        </div>
                        <span class="badge badge-success">Resolved</span>
                    </div>

                    <p class="text-gray-700"><?php echo $q['message']; ?></p>
                </div>

            <?php endforeach; ?>
        <?php else: ?>
            <p class="text-gray-500">No resolved queries</p>
        <?php endif; ?>

    </div>
</div>

    <!-- All -->
    <div id="query-all" class="tab-content">
    <div class="space-y-4">

        <?php if (count($allQueries) > 0): ?>
            <?php foreach ($allQueries as $q): ?>

                <div class="card p-4 border-l-4 <?php echo $q['status'] == 'resolved' ? 'border-green-500' : 'border-orange-500'; ?>">
                    <div class="flex items-start justify-between mb-3">
                        <div>
                            <h4 class="font-bold text-gray-800">
                                <?php echo substr($q['message'], 0, 30); ?>...
                            </h4>
                            <p class="text-sm text-gray-600">From: <?php echo $q['name']; ?></p>
                        </div>
                        <span class="badge <?php echo $q['status'] == 'resolved' ? 'badge-success' : 'badge-warning'; ?>">
                            <?php echo ucfirst($q['status']); ?>
                        </span>
                    </div>

                    <p class="text-gray-700"><?php echo $q['message']; ?></p>
                </div>

            <?php endforeach; ?>
        <?php else: ?>
            <p class="text-gray-500">No queries found</p>
        <?php endif; ?>

    </div>
</div>
</div>

<script>
// Load all data
async function loadAll() {
    const pending = await fetchQueries("pending");
    const resolved = await fetchQueries("resolved");
    const all = await fetchQueries();

    renderQueries("pending-container", pending);
    renderQueries("resolved-container", resolved);
    renderQueries("all-container", all);
}

// Tabs
function switchTab(event, tabId) {
    document.querySelectorAll('.tab-content').forEach(c => c.classList.remove('active'));
    document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));

    document.getElementById(tabId).classList.add('active');
    event.target.classList.add('active');
}

// Modal
function openReplyModal(id, email) {
    document.getElementById("replyQueryId").value = id;
    document.getElementById("replyEmail").value = email;

    document.getElementById("reply-modal").classList.remove("hidden");
}

function closeModal() {
    document.getElementById("reply-modal").classList.add("hidden");
}

function closeModal() {
    document.getElementById("reply-modal").classList.add("hidden");
}

// Init
document.addEventListener("DOMContentLoaded", loadAll);
</script>

<?php include "includes/modal.php"; ?>