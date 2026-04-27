<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - OJT Panel</title>
</head>
<body class="bg-base text-gray-900">
    <?php include "../sidebar/ojt.php"; ?>
    <main class="ml-0 p-6 w-full flex-1">
        <h1 class="text-2xl font-semibold mb-6">OJT Dashboard</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-500">Assigned Tickets</p>
                        <p class="text-3xl font-bold text-primary">5</p>
                    </div>
                    <div class="p-3 bg-blue-100 rounded-lg"><i data-feather="clipboard" class="w-6 h-6 text-blue-600"></i></div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-500">Assisting</p>
                        <p class="text-3xl font-bold text-yellow-600">2</p>
                    </div>
                    <div class="p-3 bg-yellow-100 rounded-lg"><i data-feather="users" class="w-6 h-6 text-yellow-600"></i></div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-500">Completed</p>
                        <p class="text-3xl font-bold text-green-600">3</p>
                    </div>
                    <div class="p-3 bg-green-100 rounded-lg"><i data-feather="check-circle" class="w-6 h-6 text-green-600"></i></div>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-500">Hours Logged</p>
                        <p class="text-3xl font-bold text-blue-600">24</p>
                    </div>
                    <div class="p-3 bg-blue-100 rounded-lg"><i data-feather="clock" class="w-6 h-6 text-blue-600"></i></div>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-lg font-semibold mb-4">Recent Activities</h2>
            <div class="space-y-4">
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                    <div class="flex items-center gap-4">
                        <div class="p-2 bg-blue-100 rounded-lg"><i data-feather="users" class="w-5 h-5 text-blue-600"></i></div>
                        <div>
                            <p class="font-medium">Assisting Jane Doe with #T001</p>
                            <p class="text-sm text-gray-500">Server issue • 2 hours ago</p>
                        </div>
                    </div>
                    <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-xs font-medium">In Progress</span>
                </div>
                <div class="flex items-center justify-between p-4 bg-gray-50 rounded-lg">
                    <div class="flex items-center gap-4">
                        <div class="p-2 bg-green-100 rounded-lg"><i data-feather="check-circle" class="w-5 h-5 text-green-600"></i></div>
                        <div>
                            <p class="font-medium">Completed assistance for #T003</p>
                            <p class="text-sm text-gray-500">Printer issue • 1 day ago</p>
                        </div>
                    </div>
                    <span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-xs font-medium">Completed</span>
                </div>
            </div>
        </div>
    </main>
</div>
<script>feather.replace();</script>
</body>
</html>
