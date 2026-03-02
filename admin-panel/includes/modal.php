<!-- Message Modal -->
    <div id="message-modal" class="modal">
        <div class="modal-content">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-2xl font-bold text-gray-800">Send Bulk Message</h3>
                <button onclick="closeModal('message-modal')" class="text-gray-500 hover:text-gray-700">
                    <i class="fas fa-times text-2xl"></i>
                </button>
            </div>
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Message Type</label>
                    <select class="form-input">
                        <option>SMS</option>
                        <option>Email</option>
                        <option>Both</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Recipient Group</label>
                    <select class="form-input">
                        <option>All Students</option>
                        <option>All Teachers</option>
                        <option>Class 10</option>
                        <option>Class 12</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Message Subject (for Email)</label>
                    <input type="text" class="form-input" placeholder="Subject">
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Message</label>
                    <textarea class="form-input" rows="4" placeholder="Type your message..."></textarea>
                </div>
                <div class="flex gap-3 justify-end">
                    <button onclick="closeModal('message-modal')" class="btn-secondary">Cancel</button>
                    <button class="btn-primary">Send Message</button>
                </div>
            </div>
        </div>
    </div>

<!-- Admission Detail Modal -->
<div id="admission-detail-modal" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center modal-overlay hidden backdrop-blur-sm">
        <div class="modal-content bg-white rounded-xl shadow-2xl w-full max-w-md mx-4 overflow-hidden transform scale-95">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-2xl font-bold text-gray-800">Admission Application Details</h3>
                <button onclick="closeModal('admission-detail-modal')" class="text-gray-500 hover:text-gray-700">
                    <i class="fas fa-times text-2xl"></i>
                </button>
            </div>
            <div class="space-y-4">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="text-sm font-semibold text-gray-600">Student Name</label>
                        <p class="text-gray-800 font-semibold">Raj Kumar</p>
                    </div>
                    <div>
                        <label class="text-sm font-semibold text-gray-600">Class Applied</label>
                        <p class="text-gray-800 font-semibold">10-A</p>
                    </div>
                    <div>
                        <label class="text-sm font-semibold text-gray-600">Date of Birth</label>
                        <p class="text-gray-800 font-semibold">15-05-2008</p>
                    </div>
                    <div>
                        <label class="text-sm font-semibold text-gray-600">Father's Name</label>
                        <p class="text-gray-800 font-semibold">Shri Kumar</p>
                    </div>
                </div>
                <div>
                    <label class="text-sm font-semibold text-gray-600">Address</label>
                    <p class="text-gray-800">123 Main Street, City, State 12345</p>
                </div>
                <div>
                    <label class="text-sm font-semibold text-gray-600">Phone</label>
                    <p class="text-gray-800">+91-XXXX-XXXX-XX</p>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg">
                    <p class="text-sm font-semibold text-blue-900">Attached Documents:</p>
                    <ul class="text-sm text-blue-800 mt-2 space-y-1">
                        <li>✓ Birth Certificate</li>
                        <li>✓ Previous School Certificate</li>
                        <li>✓ Address Proof</li>
                    </ul>
                </div>
                <div class="flex gap-3 justify-end">
                    <button onclick="closeModal('admission-detail-modal')" class="btn-secondary">Reject</button>
                    <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition-colors">Approve</button>
                </div>
            </div>
        </div>
    </div>


<!-- Reply Modal Template -->
<div id="reply-modal" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center modal-overlay hidden backdrop-blur-sm">
        <div class="modal-content bg-white rounded-xl shadow-2xl w-full max-w-md mx-4 overflow-hidden transform scale-95">
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-2xl font-bold text-gray-800">Reply to Query</h3>
                <button onclick="closeModal('reply-modal')" class="text-gray-500 hover:text-gray-700">
                    <i class="fas fa-times text-2xl"></i>
                </button>
            </div>
            <div class="space-y-4">
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Reply</label>
                    <textarea class="form-input" rows="4" placeholder="Type your reply here..."></textarea>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Send Via</label>
                    <select class="form-input">
                        <option>Email</option>
                        <option>SMS</option>
                        <option>Both</option>
                    </select>
                </div>
                <div class="flex gap-3 justify-end">
                    <button onclick="closeModal('reply-modal')" class="btn-secondary">Cancel</button>
                    <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition-colors">Send Reply</button>
                </div>
            </div>
        </div>
    </div>

<div id="addProgramModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center modal-overlay hidden backdrop-blur-sm">
        <div class="modal-content bg-white rounded-xl shadow-2xl w-full max-w-md mx-4 overflow-hidden transform scale-95">
            <div class="bg-slate-50 px-6 py-4 border-b border-slate-200 flex justify-between items-center">
                <h3 class="font-bold text-lg text-slate-800" id="modalTitle">Add New Program</h3>
                <button onclick="closeModal()" class="text-slate-400 hover:text-red-500 transition-colors">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="p-6" id="modalBody">
                <!-- Dynamic Content injected here -->
                <form class="space-y-4" onsubmit="handleFormSubmit(event)">
                    <div>
                        <label class="block text-xs font-bold text-slate-600 uppercase mb-1">Title</label>
                        <input type="text" class="w-full border border-slate-300 rounded-lg px-3 py-2 input-field" placeholder="e.g., Fine Arts" required>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-600 uppercase mb-1">Description / Details</label>
                        <textarea class="w-full border border-slate-300 rounded-lg px-3 py-2 input-field h-24" placeholder="Enter details..." required></textarea>
                    </div>
                    <div class="grid grid-cols-2 gap-3">
                        <div>
                            <label class="block text-xs font-bold text-slate-600 uppercase mb-1">Category</label>
                            <select class="w-full border border-slate-300 rounded-lg px-3 py-2 input-field">
                                <option>Academic</option>
                                <option>Administrative</option>
                                <option>Student</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-600 uppercase mb-1">Status</label>
                            <select class="w-full border border-slate-300 rounded-lg px-3 py-2 input-field">
                                <option>New</option>
                                <option>Running</option>
                                <option>Closed</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-600 uppercase mb-1">Upload File (Optional)</label>
                        <div class="border-2 border-dashed border-slate-300 rounded-lg p-4 text-center text-slate-500 hover:bg-slate-50 cursor-pointer transition-colors">
                            <i class="fas fa-cloud-upload-alt text-2xl mb-1"></i><br>
                            <span class="text-xs">Click to browse</span>
                        </div>
                    </div>
                    <div class="pt-2 flex justify-end gap-3">
                        <button type="button" onclick="closeModal()" class="px-4 py-2 text-slate-600 hover:bg-slate-100 rounded-lg transition-colors">Cancel</button>
                        <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 shadow transition-colors flex items-center gap-2">
                            <span id="submitText">Save Changes</span>
                            <i class="fas fa-spinner fa-spin hidden" id="loadingSpinner"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


<div id="addJobModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center modal-overlay hidden backdrop-blur-sm">
        <div class="modal-content bg-white rounded-xl shadow-2xl w-full max-w-md mx-4 overflow-hidden transform scale-95">
            <div class="bg-slate-50 px-6 py-4 border-b border-slate-200 flex justify-between items-center">
                <h3 class="font-bold text-lg text-slate-800" id="modalTitle">Post New Job</h3>
                <button onclick="closeModal()" class="text-slate-400 hover:text-red-500 transition-colors">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="p-6" id="modalBody">
                <!-- Dynamic Content injected here -->
                <form class="space-y-4" onsubmit="handleFormSubmit(event)">
                    <div>
                        <label class="block text-xs font-bold text-slate-600 uppercase mb-1">Title</label>
                        <input type="text" class="w-full border border-slate-300 rounded-lg px-3 py-2 input-field" placeholder="e.g., Senior Physics Teacher" required>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-600 uppercase mb-1">Description / Details</label>
                        <textarea class="w-full border border-slate-300 rounded-lg px-3 py-2 input-field h-24" placeholder="Enter details..." required></textarea>
                    </div>
                    <div class="grid grid-cols-2 gap-3">
                        <div>
                            <label class="block text-xs font-bold text-slate-600 uppercase mb-1">Category</label>
                            <select class="w-full border border-slate-300 rounded-lg px-3 py-2 input-field">
                                <option>Academic</option>
                                <option>Administrative</option>
                                <option>Other Staff</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-600 uppercase mb-1">Experience</label>
                            <select class="w-full border border-slate-300 rounded-lg px-3 py-2 input-field">
                                <option>Fresher</option>
                                <option>Experienced 0-1 Years</option>
                                <option>Experienced 1-3 Years</option>
                                <option>Experienced 3-5 Years</option>
                                <option>Experienced 5+ Years</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-600 uppercase mb-1">Upload File (Optional)</label>
                        <div class="border-2 border-dashed border-slate-300 rounded-lg p-4 text-center text-slate-500 hover:bg-slate-50 cursor-pointer transition-colors">
                            <i class="fas fa-cloud-upload-alt text-2xl mb-1"></i><br>
                            <span class="text-xs">Click to browse</span>
                        </div>
                    </div>
                    <div class="pt-2 flex justify-end gap-3">
                        <button type="button" onclick="closeModal()" class="px-4 py-2 text-slate-600 hover:bg-slate-100 rounded-lg transition-colors">Cancel</button>
                        <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 shadow transition-colors flex items-center gap-2">
                            <span id="submitText">Save Changes</span>
                            <i class="fas fa-spinner fa-spin hidden" id="loadingSpinner"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


<div id="addNoticeModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center modal-overlay hidden backdrop-blur-sm">
        <div class="modal-content bg-white rounded-xl shadow-2xl w-full max-w-md mx-4 overflow-hidden transform scale-95">
            <div class="bg-slate-50 px-6 py-4 border-b border-slate-200 flex justify-between items-center">
                <h3 class="font-bold text-lg text-slate-800" id="modalTitle">Add New Item</h3>
                <button onclick="closeModal()" class="text-slate-400 hover:text-red-500 transition-colors">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="p-6" id="modalBody">
                <!-- Dynamic Content injected here -->
                <form class="space-y-4" onsubmit="handleFormSubmit(event)">
                    <div>
                        <label class="block text-xs font-bold text-slate-600 uppercase mb-1">Title / Subject</label>
                        <input type="text" class="w-full border border-slate-300 rounded-lg px-3 py-2 input-field" placeholder="e.g., Physics Sample Paper" required>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-600 uppercase mb-1">Description / Details</label>
                        <textarea class="w-full border border-slate-300 rounded-lg px-3 py-2 input-field h-24" placeholder="Enter details..." required></textarea>
                    </div>
                    <div class="grid grid-cols-2 gap-3">
                        <div>
                            <label class="block text-xs font-bold text-slate-600 uppercase mb-1">Category</label>
                            <select class="w-full border border-slate-300 rounded-lg px-3 py-2 input-field">
                                <option>Academic</option>
                                <option>Administrative</option>
                                <option>Student</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-600 uppercase mb-1">Priority</label>
                            <select class="w-full border border-slate-300 rounded-lg px-3 py-2 input-field">
                                <option>Normal</option>
                                <option>High</option>
                                <option>Urgent</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-600 uppercase mb-1">Upload File (Optional)</label>
                        <div class="border-2 border-dashed border-slate-300 rounded-lg p-4 text-center text-slate-500 hover:bg-slate-50 cursor-pointer transition-colors">
                            <i class="fas fa-cloud-upload-alt text-2xl mb-1"></i><br>
                            <span class="text-xs">Click to browse</span>
                        </div>
                    </div>
                    <div class="pt-2 flex justify-end gap-3">
                        <button type="button" onclick="closeModal()" class="px-4 py-2 text-slate-600 hover:bg-slate-100 rounded-lg transition-colors">Cancel</button>
                        <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 shadow transition-colors flex items-center gap-2">
                            <span id="submitText">Save Changes</span>
                            <i class="fas fa-spinner fa-spin hidden" id="loadingSpinner"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


<div id="addTimeTableModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center modal-overlay hidden backdrop-blur-sm">
        <div class="modal-content bg-white rounded-xl shadow-2xl w-full max-w-md mx-4 overflow-hidden transform scale-95">
            <div class="bg-slate-50 px-6 py-4 border-b border-slate-200 flex justify-between items-center">
                <h3 class="font-bold text-lg text-slate-800" id="modalTitle">Add New Time Table</h3>
                <button onclick="closeModal()" class="text-slate-400 hover:text-red-500 transition-colors">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="p-6" id="modalBody">
                <!-- Dynamic Content injected here -->
                <form class="space-y-4" onsubmit="handleFormSubmit(event)">
                    <div class="grid grid-cols-2 gap-3">
                        <div>
                            <label class="block text-xs font-bold text-slate-600 uppercase mb-1">Class</label>
                            <select class="w-full border border-slate-300 rounded-lg px-3 py-2 input-field">
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
                        </div>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-600 uppercase mb-1">Upload File</label>
                        <div class="border-2 border-dashed border-slate-300 rounded-lg p-4 text-center text-slate-500 hover:bg-slate-50 cursor-pointer transition-colors">
                            <i class="fas fa-cloud-upload-alt text-2xl mb-1"></i><br>
                            <span class="text-xs">Click to browse</span>
                        </div>
                    </div>
                    <div class="pt-2 flex justify-end gap-3">
                        <button type="button" onclick="closeModal()" class="px-4 py-2 text-slate-600 hover:bg-slate-100 rounded-lg transition-colors">Cancel</button>
                        <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 shadow transition-colors flex items-center gap-2">
                            <span id="submitText">Save Changes</span>
                            <i class="fas fa-spinner fa-spin hidden" id="loadingSpinner"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<div id="addSyllabusModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center modal-overlay hidden backdrop-blur-sm">
        <div class="modal-content bg-white rounded-xl shadow-2xl w-full max-w-md mx-4 overflow-hidden transform scale-95">
            <div class="bg-slate-50 px-6 py-4 border-b border-slate-200 flex justify-between items-center">
                <h3 class="font-bold text-lg text-slate-800" id="modalTitle">Add New Sample Paper</h3>
                <button onclick="closeModal()" class="text-slate-400 hover:text-red-500 transition-colors">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="p-6" id="modalBody">
                <!-- Dynamic Content injected here -->
                <form class="space-y-4" onsubmit="handleFormSubmit(event)">
                    <div>
                        <label class="block text-xs font-bold text-slate-600 uppercase mb-1">Subject</label>
                        <input type="text" class="w-full border border-slate-300 rounded-lg px-3 py-2 input-field" placeholder="e.g., Physics Sample Paper" required>
                    </div>
                    <div class="grid grid-cols-2 gap-3">
                        <div>
                            <label class="block text-xs font-bold text-slate-600 uppercase mb-1">Class</label>
                            <select class="w-full border border-slate-300 rounded-lg px-3 py-2 input-field">
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
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-600 uppercase mb-1">Year</label>
                            <input type="text" class="w-full border border-slate-300 rounded-lg px-3 py-2 input-field" placeholder="e.g., 2023" required>
                        </div>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-600 uppercase mb-1">Upload File (Optional)</label>
                        <div class="border-2 border-dashed border-slate-300 rounded-lg p-4 text-center text-slate-500 hover:bg-slate-50 cursor-pointer transition-colors">
                            <i class="fas fa-cloud-upload-alt text-2xl mb-1"></i><br>
                            <span class="text-xs">Click to browse</span>
                        </div>
                    </div>
                    <div class="pt-2 flex justify-end gap-3">
                        <button type="button" onclick="closeModal()" class="px-4 py-2 text-slate-600 hover:bg-slate-100 rounded-lg transition-colors">Cancel</button>
                        <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 shadow transition-colors flex items-center gap-2">
                            <span id="submitText">Save Changes</span>
                            <i class="fas fa-spinner fa-spin hidden" id="loadingSpinner"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<div id="addPaperModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center modal-overlay hidden backdrop-blur-sm">
        <div class="modal-content bg-white rounded-xl shadow-2xl w-full max-w-md mx-4 overflow-hidden transform scale-95">
            <div class="bg-slate-50 px-6 py-4 border-b border-slate-200 flex justify-between items-center">
                <h3 class="font-bold text-lg text-slate-800" id="modalTitle">Add New Sample Paper</h3>
                <button onclick="closeModal()" class="text-slate-400 hover:text-red-500 transition-colors">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="p-6" id="modalBody">
                <!-- Dynamic Content injected here -->
                <form class="space-y-4" onsubmit="handleFormSubmit(event)">
                    <div>
                        <label class="block text-xs font-bold text-slate-600 uppercase mb-1">Subject</label>
                        <input type="text" class="w-full border border-slate-300 rounded-lg px-3 py-2 input-field" placeholder="e.g., Physics Sample Paper" required>
                    </div>
                    <div class="grid grid-cols-2 gap-3">
                        <div>
                            <label class="block text-xs font-bold text-slate-600 uppercase mb-1">Class</label>
                            <select class="w-full border border-slate-300 rounded-lg px-3 py-2 input-field">
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
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-600 uppercase mb-1">Year</label>
                            <input type="text" class="w-full border border-slate-300 rounded-lg px-3 py-2 input-field" placeholder="e.g., 2023" required>
                        </div>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-600 uppercase mb-1">Upload File (Optional)</label>
                        <div class="border-2 border-dashed border-slate-300 rounded-lg p-4 text-center text-slate-500 hover:bg-slate-50 cursor-pointer transition-colors">
                            <i class="fas fa-cloud-upload-alt text-2xl mb-1"></i><br>
                            <span class="text-xs">Click to browse</span>
                        </div>
                    </div>
                    <div class="pt-2 flex justify-end gap-3">
                        <button type="button" onclick="closeModal()" class="px-4 py-2 text-slate-600 hover:bg-slate-100 rounded-lg transition-colors">Cancel</button>
                        <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 shadow transition-colors flex items-center gap-2">
                            <span id="submitText">Save Changes</span>
                            <i class="fas fa-spinner fa-spin hidden" id="loadingSpinner"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<div id="modalOverlay" class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center modal-overlay hidden backdrop-blur-sm">
        <div class="modal-content bg-white rounded-xl shadow-2xl w-full max-w-md mx-4 overflow-hidden transform scale-95">
            <div class="bg-slate-50 px-6 py-4 border-b border-slate-200 flex justify-between items-center">
                <h3 class="font-bold text-lg text-slate-800" id="modalTitle">Add New Item</h3>
                <button onclick="closeModal()" class="text-slate-400 hover:text-red-500 transition-colors">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="p-6" id="modalBody">
                <!-- Dynamic Content injected here -->
                <form class="space-y-4" onsubmit="handleFormSubmit(event)">
                    <div>
                        <label class="block text-xs font-bold text-slate-600 uppercase mb-1">Title / Subject</label>
                        <input type="text" class="w-full border border-slate-300 rounded-lg px-3 py-2 input-field" placeholder="e.g., Physics Sample Paper" required>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-600 uppercase mb-1">Description / Details</label>
                        <textarea class="w-full border border-slate-300 rounded-lg px-3 py-2 input-field h-24" placeholder="Enter details..." required></textarea>
                    </div>
                    <div class="grid grid-cols-2 gap-3">
                        <div>
                            <label class="block text-xs font-bold text-slate-600 uppercase mb-1">Category</label>
                            <select class="w-full border border-slate-300 rounded-lg px-3 py-2 input-field">
                                <option>Academic</option>
                                <option>Administrative</option>
                                <option>Student</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs font-bold text-slate-600 uppercase mb-1">Priority</label>
                            <select class="w-full border border-slate-300 rounded-lg px-3 py-2 input-field">
                                <option>Normal</option>
                                <option>High</option>
                                <option>Urgent</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-600 uppercase mb-1">Upload File (Optional)</label>
                        <div class="border-2 border-dashed border-slate-300 rounded-lg p-4 text-center text-slate-500 hover:bg-slate-50 cursor-pointer transition-colors">
                            <i class="fas fa-cloud-upload-alt text-2xl mb-1"></i><br>
                            <span class="text-xs">Click to browse</span>
                        </div>
                    </div>
                    <div class="pt-2 flex justify-end gap-3">
                        <button type="button" onclick="closeModal()" class="px-4 py-2 text-slate-600 hover:bg-slate-100 rounded-lg transition-colors">Cancel</button>
                        <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 shadow transition-colors flex items-center gap-2">
                            <span id="submitText">Save Changes</span>
                            <i class="fas fa-spinner fa-spin hidden" id="loadingSpinner"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
