<?php include "includes/header.php"; ?>
<div class="flex justify-between items-center mb-6">
    <div>
        <p class="text-slate-500 text-sm">Others</p>
        <h3 class="text-2xl font-bold text-slate-800">
            Settings
        </h3>
        <p class="text-slate-500 text-sm">Manage system preferences and configurations</p>
    </div>
</div>
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                            <div class="card p-6">
                                <h3 class="text-lg font-bold text-gray-800 mb-4">School Information</h3>
                                <div class="space-y-4">
                                    <div>
                                        <label class="block text-sm font-semibold text-gray-700 mb-2">School Name</label>
                                        <input type="text" class="form-input" value="XYZ Academy">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-semibold text-gray-700 mb-2">Email</label>
                                        <input type="email" class="form-input" value="admin@xyzacademy.com">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-semibold text-gray-700 mb-2">Phone</label>
                                        <input type="tel" class="form-input" value="+91-XXXX-XXXX-XX">
                                    </div>
                                    <button class="bg-indigo-600 text-white w-full py-2 rounded-lg hover:bg-indigo-700 transition-colors">Save Changes</button>
                                </div>
                            </div>

                            <div class="card p-6">
                                <h3 class="text-lg font-bold text-gray-800 mb-4">Notification Settings</h3>
                                <div class="space-y-4">
                                    <div class="flex items-center gap-3">
                                        <input type="checkbox" id="email-notifications" checked>
                                        <label for="email-notifications" class="text-gray-700">Email Notifications</label>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <input type="checkbox" id="sms-notifications" checked>
                                        <label for="sms-notifications" class="text-gray-700">SMS Notifications</label>
                                    </div>
                                    <div class="flex items-center gap-3">
                                        <input type="checkbox" id="push-notifications" checked>
                                        <label for="push-notifications" class="text-gray-700">Push Notifications</label>
                                    </div>
                                    <button class="bg-indigo-600 text-white w-full py-2 rounded-lg hover:bg-indigo-700 transition-colors">Save Preferences</button>
                                </div>
                            </div>
                        </div>