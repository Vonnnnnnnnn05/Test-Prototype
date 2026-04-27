<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity Logs - Admin Panel</title>
</head>
<body class="bg-base text-gray-900">
    <?php include "../sidebar/admin.php"; ?>
    <main class="ml-0 p-6 w-full flex-1">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-semibold">Activity Logs</h1>
            <button class="bg-primary hover:bg-primaryHover text-white px-4 py-2 rounded-lg transition flex items-center gap-2">
                <i data-feather="download" class="w-4 h-4"></i>
                Export Logs
            </button>
        </div>
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <table class="w-full">
                <thead class="bg-primary text-white">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-semibold">Date</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold">User</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold">Action</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold">Details</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 text-sm text-gray-500">2026-04-25 09:30</td>
                        <td class="px-6 py-4 text-sm">John Smith</td>
                        <td class="px-6 py-4 text-sm"><span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs font-medium">Created</span></td>
                        <td class="px-6 py-4 text-sm">Created new ticket #T005</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 text-sm text-gray-500">2026-04-25 09:15</td>
                        <td class="px-6 py-4 text-sm">Jane Doe</td>
                        <td class="px-6 py-4 text-sm"><span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs font-medium">Updated</span></td>
                        <td class="px-6 py-4 text-sm">Updated ticket #T003 status to Resolved</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 text-sm text-gray-500">2026-04-25 08:45</td>
                        <td class="px-6 py-4 text-sm">Admin</td>
                        <td class="px-6 py-4 text-sm"><span class="px-2 py-1 bg-purple-100 text-purple-800 rounded-full text-xs font-medium">Assigned</span></td>
                        <td class="px-6 py-4 text-sm">Assigned technician Jane Doe to ticket #T004</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</div>
<script>feather.replace();</script>
</body>
</html>