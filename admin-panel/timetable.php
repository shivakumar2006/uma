<?php include "includes/header.php"; ?>
                <div class="flex justify-between items-center mb-6">
                    <div>
                        <p class="text-slate-500 text-sm">Academics / Schedule</p>
                        <h3 class="text-2xl font-bold text-slate-800">Class Time Table</h3>
                    </div>
                    <div class="flex gap-2">
                        <select class="border border-slate-300 rounded-lg px-3 py-2 text-sm focus:outline-none focus:border-indigo-500">
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
                        <button onclick="openModal('addTimeTableModal')" class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg shadow transition-colors">
                            <i class="fas fa-edit"></i> Edit
                        </button>
                    </div>
                </div>

                <!-- Visual Calendar/Time Table -->
                <div class="bg-white p-6 rounded-xl shadow-sm overflow-x-auto">
                    <table class="min-w-full text-center border-collapse">
                        <thead>
                            <tr class="bg-slate-100 text-slate-600">
                                <th class="p-3 border border-slate-200">Time</th>
                                <th class="p-3 border border-slate-200">Mon</th>
                                <th class="p-3 border border-slate-200">Tue</th>
                                <th class="p-3 border border-slate-200">Wed</th>
                                <th class="p-3 border border-slate-200">Thu</th>
                                <th class="p-3 border border-slate-200">Fri</th>
                            </tr>
                        </thead>
                        <tbody class="text-sm text-slate-700">
                            <tr>
                                <td class="p-3 border font-semibold bg-slate-50">09:00 - 10:00</td>
                                <td class="p-3 border bg-indigo-50 text-indigo-700 font-medium">Math</td>
                                <td class="p-3 border">Science</td>
                                <td class="p-3 border bg-indigo-50 text-indigo-700 font-medium">Math</td>
                                <td class="p-3 border">English</td>
                                <td class="p-3 border bg-indigo-50 text-indigo-700 font-medium">Math</td>
                            </tr>
                            <tr>
                                <td class="p-3 border font-semibold bg-slate-50">10:00 - 11:00</td>
                                <td class="p-3 border">History</td>
                                <td class="p-3 border bg-pink-50 text-pink-700 font-medium">Art</td>
                                <td class="p-3 border">Physics</td>
                                <td class="p-3 border bg-green-50 text-green-700 font-medium">Sports</td>
                                <td class="p-3 border">Chemistry</td>
                            </tr>
                            <tr>
                                <td class="p-3 border font-semibold bg-slate-50">11:00 - 12:00</td>
                                <td class="p-3 border">Physics</td>
                                <td class="p-3 border">Math</td>
                                <td class="p-3 border">Geography</td>
                                <td class="p-3 border">Math</td>
                                <td class="p-3 border">Lab Work</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
<script>
function openModal(id) {
    document.getElementById(id).classList.remove("hidden");
}

function closeModal() {
    document.getElementById("addTimeTableModal").classList.add("hidden");
}
</script>
<?php include "includes/modal.php"; ?>