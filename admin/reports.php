<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports - Admin Panel</title>
</head>
<body class="bg-base text-gray-900">
    <?php include "../sidebar/admin.php"; ?>
    <main class="ml-0 p-6 w-full flex-1">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-semibold">Reports</h1>
            <button class="bg-primary hover:bg-primaryHover text-white px-4 py-2 rounded-lg transition flex items-center gap-2">
                <i data-feather="download" class="w-4 h-4"></i>
                Generate Report
            </button>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center gap-3 mb-4">
                    <div class="p-3 bg-blue-100 rounded-lg"><i data-feather="file-text" class="w-6 h-6 text-blue-600"></i></div>
                    <h3 class="font-semibold">Ticket Summary</h3>
                </div>
                <p class="text-sm text-gray-600 mb-4">Overview of all tickets by status and priority</p>
                <button class="w-full bg-primary hover:bg-primaryHover text-white py-2 rounded-lg transition text-sm">View Report</button>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center gap-3 mb-4">
                    <div class="p-3 bg-green-100 rounded-lg"><i data-feather="users" class="w-6 h-6 text-green-600"></i></div>
                    <h3 class="font-semibold">Technician Performance</h3>
                </div>
                <p class="text-sm text-gray-600 mb-4">Performance metrics for each technician</p>
                <button class="w-full bg-primary hover:bg-primaryHover text-white py-2 rounded-lg transition text-sm">View Report</button>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center gap-3 mb-4">
                    <div class="p-3 bg-purple-100 rounded-lg"><i data-feather="bar-chart-2" class="w-6 h-6 text-purple-600"></i></div>
                    <h3 class="font-semibold">Asset Inventory</h3>
                </div>
                <p class="text-sm text-gray-600 mb-4">Current asset status and allocation</p>
                <button class="w-full bg-primary hover:bg-primaryHover text-white py-2 rounded-lg transition text-sm">View Report</button>
            </div>
        </div>
    </main>
</div>
<script>feather.replace();</script>
</body>
</html>