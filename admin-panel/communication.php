<?php include "includes/header.php"; ?>
<?php if(isset($_GET['success'])): ?>
    <p class="text-green-600 mb-4">Message sent successfully!</p>
<?php endif; ?>

<div class="flex justify-between items-center mb-6">
    <div>
        <p class="text-slate-500 text-sm">Communication</p>
        <h3 class="text-2xl font-bold text-slate-800">
            SMS & Email Handler
        </h3>
        <p class="text-slate-500 text-sm">Send SMS and Email to students and teachers</p>
    </div>
</div>
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                            <!-- Send SMS -->
                            <div class="card p-6">
                                <h3 class="text-2xl font-bold text-slate-800 mb-4">Send SMS</h3>
                                <form action="<?php echo BASE_URL; ?>admin-panel/backend/routes/communication.php?action=send" method="POST">

                                    <input type="hidden" name="type" value="sms">

                                    <div>
                                        <label class="block text-sm font-semibold text-gray-700 mb-2">Recipient Type</label>
                                        <select name="audience" class="form-input" required>
                                            <option value="all_students">All Students</option>
                                            <option value="all_teachers">All Teachers</option>
                                            <option value="specific_class">Specific Class</option>
                                            <option value="specific_students">Specific Student</option>
                                        </select>
                                    </div>

                                    <div>
                                        <label class="block text-sm font-semibold text-gray-700 mb-2">Message</label>
                                        <textarea name="message" class="form-input" rows="4" required></textarea>
                                    </div>

                                    <button type="submit" class="bg-indigo-600 text-white w-full py-2 rounded-lg">
                                        Send SMS
                                    </button>

                                </form>
                            </div>

                            <!-- Send Email -->
                            <div class="card p-6">
                                <h3 class="text-2xl font-bold text-slate-800 mb-4">Send Email</h3>
                                <form action="<?php echo BASE_URL; ?>admin-panel/backend/routes/communication.php?action=send" method="POST">

                                    <input type="hidden" name="type" value="email">

                                    <div>
                                        <label class="block text-sm font-semibold text-gray-700 mb-2">Recipient Type</label>
                                        <select name="audience" class="form-input" required>
                                            <option value="all_students">All Students</option>
                                            <option value="all_teachers">All Teachers</option>
                                            <option value="specific_class">Specific Class</option>
                                            <option value="specific_students">Specific Student</option>
                                        </select>
                                    </div>

                                    <div>
                                        <label class="block text-sm font-semibold text-gray-700 mb-2">Subject</label>
                                        <input type="text" name="subject" class="form-input" required>
                                    </div>

                                    <div>
                                        <label class="block text-sm font-semibold text-gray-700 mb-2">Message</label>
                                        <textarea name="message" class="form-input" rows="4" required></textarea>
                                    </div>

                                    <button type="submit" class="bg-indigo-600 text-white w-full py-2 rounded-lg">
                                        Send Email
                                    </button>

                                </form>
                        </div>

                        <!-- Communication History -->
                        <div class="card p-6 mt-6">
                            <h3 class="text-lg font-bold text-gray-800 mb-4">Communication History</h3>
                            <div class="table-container">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>Recipients</th>
                                            <th>Subject/Message</th>
                                            <th>Date Sent</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><span class="badge badge-info">Email</span></td>
                                            <td>All Students (2,540)</td>
                                            <td>Exam Schedule Announcement</td>
                                            <td>2024-01-16</td>
                                            <td><span class="badge badge-success">Delivered</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="badge badge-info">SMS</span></td>
                                            <td>All Teachers (320)</td>
                                            <td>Staff Meeting Reminder</td>
                                            <td>2024-01-15</td>
                                            <td><span class="badge badge-success">Delivered</span></td>
                                        </tr>
                                        <tr>
                                            <td><span class="badge badge-info">Email</span></td>
                                            <td>Class 10-A (45)</td>
                                            <td>Assignment Submission Reminder</td>
                                            <td>2024-01-14</td>
                                            <td><span class="badge badge-success">Delivered</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>