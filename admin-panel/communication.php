<?php include "includes/header.php"; ?>
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
                                <h3 class="text-lg font-bold text-gray-800 mb-6">Send SMS</h3>
                                <div class="space-y-4">
                                    <div>
                                        <label class="block text-sm font-semibold text-gray-700 mb-2">Recipient Type</label>
                                        <select class="form-input">
                                            <option>All Students</option>
                                            <option>All Teachers</option>
                                            <option>Specific Class</option>
                                            <option>Specific Student</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-semibold text-gray-700 mb-2">Message</label>
                                        <textarea class="form-input" rows="4" placeholder="Type your message here..."></textarea>
                                    </div>
                                    <button class="bg-indigo-600 text-white w-full py-2 rounded-lg hover:bg-indigo-700 transition-colors">
                                        <i class="fas fa-paper-plane mr-2"></i>Send SMS
                                    </button>
                                </div>
                            </div>

                            <!-- Send Email -->
                            <div class="card p-6">
                                <h3 class="text-lg font-bold text-gray-800 mb-6">Send Email</h3>
                                <div class="space-y-4">
                                    <div>
                                        <label class="block text-sm font-semibold text-gray-700 mb-2">Recipient Type</label>
                                        <select class="form-input">
                                            <option>All Students</option>
                                            <option>All Teachers</option>
                                            <option>Specific Class</option>
                                            <option>Specific Student</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-semibold text-gray-700 mb-2">Subject</label>
                                        <input type="text" class="form-input" placeholder="Email subject">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-semibold text-gray-700 mb-2">Message</label>
                                        <textarea class="form-input" rows="4" placeholder="Type your message here..."></textarea>
                                    </div>
                                    <button class="bg-indigo-600 text-white w-full py-2 rounded-lg hover:bg-indigo-700 transition-colors">
                                        <i class="fas fa-envelope mr-2"></i>Send Email
                                    </button>
                                </div>
                            </div>
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