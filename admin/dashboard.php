<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
<body class="bg-base text-gray-900">
    <?php include "../sidebar/admin.php"; ?>

    <!-- Main Content -->
    <main class="ml-0 p-6 w-full flex-1">
        <h1 class="text-2xl font-semibold mb-6">Dashboard</h1>
        
        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-500">Total Tickets</p>
                        <p class="text-3xl font-bold text-primary">24</p>
                    </div>
                    <i data-feather="file-text" class="w-8 h-8 text-primary"></i>
                </div>
            </div>
            
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-500">Active Users</p>
                        <p class="text-3xl font-bold text-primary">12</p>
                    </div>
                    <i data-feather="users" class="w-8 h-8 text-primary"></i>
                </div>
            </div>
            
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-500">Technicians</p>
                        <p class="text-3xl font-bold text-primary">8</p>
                    </div>
                    <i data-feather="tool" class="w-8 h-8 text-primary"></i>
                </div>
            </div>
            
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm text-gray-500">Pending Tasks</p>
                        <p class="text-3xl font-bold text-accent">5</p>
                    </div>
                    <i data-feather="clock" class="w-8 h-8 text-accent"></i>
                </div>
            </div>
        </div>
        
        <!-- Features Cards -->
        <h2 class="text-xl font-semibold mb-4">System Features</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-primary">
                <div class="flex items-center gap-3 mb-3">
                    <i data-feather="shield" class="w-6 h-6 text-primary"></i>
                    <h3 class="font-semibold text-lg">Full System Access</h3>
                </div>
                <p class="text-gray-600 text-sm">Complete control over all system modules and settings.</p>
            </div>
            
            <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-primary">
                <div class="flex items-center gap-3 mb-3">
                    <i data-feather="users" class="w-6 h-6 text-primary"></i>
                    <h3 class="font-semibold text-lg">Manage Users & Roles</h3>
                </div>
                <p class="text-gray-600 text-sm">Create and manage user accounts with role-based access control.</p>
            </div>
            
            <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-primary">
                <div class="flex items-center gap-3 mb-3">
                    <i data-feather="cpu" class="w-6 h-6 text-primary"></i>
                    <h3 class="font-semibold text-lg">Asset Management</h3>
                </div>
                <p class="text-gray-600 text-sm">Track and manage all ICT assets and inventory.</p>
            </div>
            
            <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-primary">
                <div class="flex items-center gap-3 mb-3">
                    <i data-feather="tool" class="w-6 h-6 text-primary"></i>
                    <h3 class="font-semibold text-lg">Assign Technicians</h3>
                </div>
                <p class="text-gray-600 text-sm">Assign tasks to technicians based on availability and expertise.</p>
            </div>
            
            <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-primary">
                <div class="flex items-center gap-3 mb-3">
                    <i data-feather="bar-chart-2" class="w-6 h-6 text-primary"></i>
                    <h3 class="font-semibold text-lg">View All Reports</h3>
                </div>
                <p class="text-gray-600 text-sm">Generate and view comprehensive system reports.</p>
            </div>
            
            <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-primary">
                <div class="flex items-center gap-3 mb-3">
                    <i data-feather="activity" class="w-6 h-6 text-primary"></i>
                    <h3 class="font-semibold text-lg">Activity Logs</h3>
                </div>
                <p class="text-gray-600 text-sm">Monitor all system activities and user actions.</p>
            </div>
        </div>
    </main>
</div>

<script>
    feather.replace();
</script>
</body>
</html>
