<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track Status - Staff Panel</title>
</head>
<body class="bg-base text-gray-900">
    <?php include "../sidebar/staff.php"; ?>
    <main class="ml-0 p-6 w-full flex-1">
        <h1 class="text-2xl font-semibold mb-6">Track Request Status</h1>
        <div class="bg-white rounded-lg shadow-md p-6 max-w-2xl">
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-2">Enter Ticket ID</label>
                <input type="text" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent outline-none" placeholder="e.g., T004">
            </div>
            <button class="bg-primary hover:bg-primaryHover text-white px-6 py-2 rounded-lg transition">Search</button>
        </div>
        <div class="mt-6 bg-white rounded-lg shadow-md p-6">
            <h2 class="text-lg font-semibold mb-4">Ticket Details</h2>
            <div class="space-y-4">
                <div class="flex justify-between py-3 border-b">
                    <span class="text-gray-600">Ticket ID</span>
                    <span class="font-medium">#T004</span>
                </div>
                <div class="flex justify-between py-3 border-b">
                    <span class="text-gray-600">Subject</span>
                    <span class="font-medium">Printer not working</span>
                </div>
                <div class="flex justify-between py-3 border-b">
                    <span class="text-gray-600">Category</span>
                    <span class="font-medium">Printer</span>
                </div>
                <div class="flex justify-between py-3 border-b">
                    <span class="text-gray-600">Priority</span>
                    <span class="px-2 py-1 bg-red-100 text-red-800 rounded-full text-xs font-medium">High</span>
                </div>
                <div class="flex justify-between py-3 border-b">
                    <span class="text-gray-600">Status</span>
                    <span class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs font-medium">Pending</span>
                </div>
                <div class="flex justify-between py-3 border-b">
                    <span class="text-gray-600">Assigned Technician</span>
                    <span class="font-medium">Unassigned</span>
                </div>
                <div class="flex justify-between py-3">
                    <span class="text-gray-600">Submitted Date</span>
                    <span class="font-medium">2026-04-25</span>
                </div>
            </div>
        </div>
    </main>
</div>
<script>feather.replace();</script>
</body>
</html>
