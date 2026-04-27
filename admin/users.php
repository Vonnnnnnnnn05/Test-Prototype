<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users - Admin Panel</title>
</head>
<body class="bg-base text-gray-900">
    <?php include "../sidebar/admin.php"; ?>

    <!-- Main Content -->
    <main class="ml-0 p-6 w-full flex-1">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-semibold">User Management</h1>
            <button class="bg-primary hover:bg-primaryHover text-white px-4 py-2 rounded-lg transition flex items-center gap-2">
                <i data-feather="user-plus" class="w-4 h-4"></i>
                Add User
            </button>
        </div>

        <!-- Filters -->
        <div class="bg-white rounded-lg shadow-md p-4 mb-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Search</label>
                    <input type="text" placeholder="Search users..." class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent outline-none">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Role</label>
                    <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent outline-none">
                        <option value="">All Roles</option>
                        <option value="admin">Admin</option>
                        <option value="technician">Technician</option>
                        <option value="staff">Staff</option>
                        <option value="student">Student</option>
                        <option value="ojt">OJT</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Office</label>
                    <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent outline-none">
                        <option value="">All Offices</option>
                        <option value="ict">ICT Office</option>
                        <option value="admin">Admin Office</option>
                        <option value="library">Library</option>
                        <option value="registrar">Registrar</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                    <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent outline-none">
                        <option value="">All Status</option>
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Users Table -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <table class="w-full">
                <thead class="bg-primary text-white">
                    <tr>
                      
                        <th class="px-6 py-3 text-left text-sm font-semibold">Name</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold">Email</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold">Role</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold">Office</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold">Status</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50">
                       
                        <td class="px-6 py-4 text-sm">John Smith</td>
                        <td class="px-6 py-4 text-sm text-gray-500">john.smith@school.edu</td>
                        <td class="px-6 py-4 text-sm"><span class="px-2 py-1 bg-red-100 text-red-800 rounded-full text-xs font-medium">Admin</span></td>
                        <td class="px-6 py-4 text-sm">ICT Office</td>
                        <td class="px-6 py-4 text-sm"><span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs font-medium">Active</span></td>
                        <td class="px-6 py-4 text-sm">
                            <button class="text-primary hover:text-primaryHover mr-2"><i data-feather="eye" class="w-4 h-4"></i></button>
                            <button class="text-primary hover:text-primaryHover mr-2"><i data-feather="edit" class="w-4 h-4"></i></button>
                            <button class="text-danger hover:text-red-700"><i data-feather="trash-2" class="w-4 h-4"></i></button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                      
                        <td class="px-6 py-4 text-sm">Jane Doe</td>
                        <td class="px-6 py-4 text-sm text-gray-500">jane.doe@school.edu</td>
                        <td class="px-6 py-4 text-sm"><span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs font-medium">Technician</span></td>
                        <td class="px-6 py-4 text-sm">ICT Office</td>
                        <td class="px-6 py-4 text-sm"><span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs font-medium">Active</span></td>
                        <td class="px-6 py-4 text-sm">
                            <button class="text-primary hover:text-primaryHover mr-2"><i data-feather="eye" class="w-4 h-4"></i></button>
                            <button class="text-primary hover:text-primaryHover mr-2"><i data-feather="edit" class="w-4 h-4"></i></button>
                            <button class="text-danger hover:text-red-700"><i data-feather="trash-2" class="w-4 h-4"></i></button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 text-sm">Bob Johnson</td>
                        <td class="px-6 py-4 text-sm text-gray-500">bob.johnson@school.edu</td>
                        <td class="px-6 py-4 text-sm"><span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs font-medium">Technician</span></td>
                        <td class="px-6 py-4 text-sm">ICT Office</td>
                        <td class="px-6 py-4 text-sm"><span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs font-medium">Active</span></td>
                        <td class="px-6 py-4 text-sm">
                            <button class="text-primary hover:text-primaryHover mr-2"><i data-feather="eye" class="w-4 h-4"></i></button>
                            <button class="text-primary hover:text-primaryHover mr-2"><i data-feather="edit" class="w-4 h-4"></i></button>
                            <button class="text-danger hover:text-red-700"><i data-feather="trash-2" class="w-4 h-4"></i></button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 text-sm">Mary Wilson</td>
                        <td class="px-6 py-4 text-sm text-gray-500">mary.wilson@school.edu</td>
                        <td class="px-6 py-4 text-sm"><span class="px-2 py-1 bg-purple-100 text-purple-800 rounded-full text-xs font-medium">Staff</span></td>
                        <td class="px-6 py-4 text-sm">Admin Office</td>
                        <td class="px-6 py-4 text-sm"><span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs font-medium">Active</span></td>
                        <td class="px-6 py-4 text-sm">
                            <button class="text-primary hover:text-primaryHover mr-2"><i data-feather="eye" class="w-4 h-4"></i></button>
                            <button class="text-primary hover:text-primaryHover mr-2"><i data-feather="edit" class="w-4 h-4"></i></button>
                            <button class="text-danger hover:text-red-700"><i data-feather="trash-2" class="w-4 h-4"></i></button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 text-sm">David Brown</td>
                        <td class="px-6 py-4 text-sm text-gray-500">david.brown@school.edu</td>
                        <td class="px-6 py-4 text-sm"><span class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs font-medium">OJT</span></td>
                        <td class="px-6 py-4 text-sm">ICT Office</td>
                        <td class="px-6 py-4 text-sm"><span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs font-medium">Active</span></td>
                        <td class="px-6 py-4 text-sm">
                            <button class="text-primary hover:text-primaryHover mr-2"><i data-feather="eye" class="w-4 h-4"></i></button>
                            <button class="text-primary hover:text-primaryHover mr-2"><i data-feather="edit" class="w-4 h-4"></i></button>
                            <button class="text-danger hover:text-red-700"><i data-feather="trash-2" class="w-4 h-4"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="flex items-center justify-between mt-4">
            <p class="text-sm text-gray-500">Showing 1-5 of 12 users</p>
            <div class="flex gap-2">
                <button class="px-3 py-1 border border-gray-300 rounded hover:bg-gray-100 text-sm">Previous</button>
                <button class="px-3 py-1 bg-primary text-white rounded text-sm">1</button>
                <button class="px-3 py-1 border border-gray-300 rounded hover:bg-gray-100 text-sm">2</button>
                <button class="px-3 py-1 border border-gray-300 rounded hover:bg-gray-100 text-sm">Next</button>
            </div>
        </div>
    </main>
</div>

<script>
    feather.replace();
</script>
</body>
</html>