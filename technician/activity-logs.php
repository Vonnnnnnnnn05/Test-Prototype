<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity Logs - Technician Panel</title>
</head>
<body class="bg-base text-gray-900">
    <?php include "../sidebar/technician.php"; ?>
    <main class="ml-0 p-6 w-full flex-1">
        <h1 class="text-2xl font-semibold mb-6">My Activity Logs</h1>
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <table class="w-full">
                <thead class="bg-primary text-white">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-semibold">Date</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold">Ticket ID</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold">Action</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold">Details</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 text-sm text-gray-500">2026-04-25 10:30</td>
                        <td class="px-6 py-4 text-sm font-medium">#T001</td>
                        <td class="px-6 py-4 text-sm"><span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs font-medium">Started</span></td>
                        <td class="px-6 py-4 text-sm">Started working on server issue</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 text-sm text-gray-500">2026-04-25 09:15</td>
                        <td class="px-6 py-4 text-sm font-medium">#T003</td>
                        <td class="px-6 py-4 text-sm"><span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs font-medium">Resolved</span></td>
                        <td class="px-6 py-4 text-sm">Resolved printer jam issue</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 text-sm text-gray-500">2026-04-25 08:45</td>
                        <td class="px-6 py-4 text-sm font-medium">#T002</td>
                        <td class="px-6 py-4 text-sm"><span class="px-2 py-1 bg-purple-100 text-purple-800 rounded-full text-xs font-medium">Assigned</span></td>
                        <td class="px-6 py-4 text-sm">Assigned to ticket by admin</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</div>
<script>feather.replace();</script>
</body>
</html>
