<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Requests - Staff Panel</title>
</head>
<body class="bg-base text-gray-900">
    <?php include "../sidebar/staff.php"; ?>
    <main class="ml-0 p-6 w-full flex-1">
        <h1 class="text-2xl font-semibold mb-6">My Requests</h1>
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <table class="w-full">
                <thead class="bg-primary text-white">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-semibold">Ticket ID</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold">Subject</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold">Category</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold">Priority</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold">Status</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold">Date</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 text-sm font-medium">#T004</td>
                        <td class="px-6 py-4 text-sm">Printer not working</td>
                        <td class="px-6 py-4 text-sm">Printer</td>
                        <td class="px-6 py-4 text-sm"><span class="px-2 py-1 bg-red-100 text-red-800 rounded-full text-xs font-medium">High</span></td>
                        <td class="px-6 py-4 text-sm"><span class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs font-medium">Pending</span></td>
                        <td class="px-6 py-4 text-sm text-gray-500">2026-04-25</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 text-sm font-medium">#T003</td>
                        <td class="px-6 py-4 text-sm">Network connectivity issue</td>
                        <td class="px-6 py-4 text-sm">Network</td>
                        <td class="px-6 py-4 text-sm"><span class="px-2 py-1 bg-red-100 text-red-800 rounded-full text-xs font-medium">Urgent</span></td>
                        <td class="px-6 py-4 text-sm"><span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs font-medium">In Progress</span></td>
                        <td class="px-6 py-4 text-sm text-gray-500">2026-04-24</td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 text-sm font-medium">#T002</td>
                        <td class="px-6 py-4 text-sm">Computer slow performance</td>
                        <td class="px-6 py-4 text-sm">Hardware</td>
                        <td class="px-6 py-4 text-sm"><span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs font-medium">Medium</span></td>
                        <td class="px-6 py-4 text-sm"><span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs font-medium">Resolved</span></td>
                        <td class="px-6 py-4 text-sm text-gray-500">2026-04-23</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</div>
<script>feather.replace();</script>
</body>
</html>
