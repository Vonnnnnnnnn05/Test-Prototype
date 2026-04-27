<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tickets - Admin Panel</title>
</head>
<body class="bg-base text-gray-900">
    <?php include "../sidebar/admin.php"; ?>

    <!-- Main Content -->
    <main class="ml-0 p-6 w-full min-w-0 flex-1">
        <div class="flex flex-col gap-4 mb-6 sm:flex-row sm:items-center sm:justify-between">
            <div>
                <h1 class="text-2xl font-semibold">Ticket Management</h1>
                <p class="text-sm text-gray-500 mt-1">Review, assign, and track ICT support requests.</p>
            </div>
            <button class="bg-primary hover:bg-primaryHover text-white px-4 py-2 rounded-lg transition flex items-center justify-center gap-2 text-sm font-medium">
                <i data-feather="plus" class="w-4 h-4"></i>
                Create Ticket
            </button>
        </div>

        <!-- Summary -->
        <div class="grid grid-cols-1 gap-4 mb-6 md:grid-cols-4">
            <div class="bg-white rounded-lg shadow-md p-4 border-l-4 border-primary">
                <p class="text-sm text-gray-500">Total Tickets</p>
                <p class="text-2xl font-bold text-primary mt-1">24</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-4 border-l-4 border-yellow-500">
                <p class="text-sm text-gray-500">Pending</p>
                <p class="text-2xl font-bold text-yellow-600 mt-1">8</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-4 border-l-4 border-blue-500">
                <p class="text-sm text-gray-500">Ongoing</p>
                <p class="text-2xl font-bold text-blue-600 mt-1">11</p>
            </div>
            <div class="bg-white rounded-lg shadow-md p-4 border-l-4 border-green-500">
                <p class="text-sm text-gray-500">Resolved</p>
                <p class="text-2xl font-bold text-green-600 mt-1">5</p>
            </div>
        </div>

        <!-- Filters -->
        <div class="bg-white rounded-lg shadow-md p-4 mb-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Search</label>
                    <input type="text" placeholder="Search tickets..." class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent outline-none text-sm">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                    <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent outline-none text-sm">
                        <option value="">All Status</option>
                        <option value="pending">Pending</option>
                        <option value="ongoing">Ongoing</option>
                        <option value="resolved">Resolved</option>
                        <option value="closed">Closed</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Priority</label>
                    <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent outline-none text-sm">
                        <option value="">All Priorities</option>
                        <option value="low">Low</option>
                        <option value="medium">Medium</option>
                        <option value="high">High</option>
                        <option value="urgent">Urgent</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Technician</label>
                    <select class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent outline-none text-sm">
                        <option value="">All Technicians</option>
                        <option value="jane">Jane Doe</option>
                        <option value="bob">Bob Wilson</option>
                        <option value="unassigned">Unassigned</option>
                    </select>
                </div>
            </div>
        </div>

        <!-- Tickets Table -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full min-w-[960px]">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th class="px-6 py-3 text-left text-sm font-semibold">Ticket ID</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold">Subject</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold">Requestor</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold">Technician</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold">Priority</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold">Status</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold">Date</th>
                            <th class="px-6 py-3 text-left text-sm font-semibold">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 text-sm font-medium">#T001</td>
                            <td class="px-6 py-4 text-sm">Computer not booting</td>
                            <td class="px-6 py-4 text-sm">John Smith</td>
                            <td class="px-6 py-4 text-sm">Jane Doe</td>
                            <td class="px-6 py-4 text-sm"><span class="px-2 py-1 bg-red-100 text-red-800 rounded-full text-xs font-medium">High</span></td>
                            <td class="px-6 py-4 text-sm"><span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs font-medium">Ongoing</span></td>
                            <td class="px-6 py-4 text-sm text-gray-500">2026-04-21</td>
                            <td class="px-6 py-4 text-sm whitespace-nowrap">
                                <button class="text-primary hover:text-primaryHover mr-2" aria-label="View ticket"><i data-feather="eye" class="w-4 h-4"></i></button>
                                <button class="text-primary hover:text-primaryHover mr-2" aria-label="Edit ticket"><i data-feather="edit" class="w-4 h-4"></i></button>
                                <button class="text-danger hover:text-red-700" aria-label="Delete ticket"><i data-feather="trash-2" class="w-4 h-4"></i></button>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 text-sm font-medium">#T002</td>
                            <td class="px-6 py-4 text-sm">Printer jam issue</td>
                            <td class="px-6 py-4 text-sm">Mary Johnson</td>
                            <td class="px-6 py-4 text-sm">Bob Wilson</td>
                            <td class="px-6 py-4 text-sm"><span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs font-medium">Medium</span></td>
                            <td class="px-6 py-4 text-sm"><span class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs font-medium">Pending</span></td>
                            <td class="px-6 py-4 text-sm text-gray-500">2026-04-20</td>
                            <td class="px-6 py-4 text-sm whitespace-nowrap">
                                <button class="text-primary hover:text-primaryHover mr-2" aria-label="View ticket"><i data-feather="eye" class="w-4 h-4"></i></button>
                                <button class="text-primary hover:text-primaryHover mr-2" aria-label="Edit ticket"><i data-feather="edit" class="w-4 h-4"></i></button>
                                <button class="text-danger hover:text-red-700" aria-label="Delete ticket"><i data-feather="trash-2" class="w-4 h-4"></i></button>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 text-sm font-medium">#T003</td>
                            <td class="px-6 py-4 text-sm">Network connectivity issue</td>
                            <td class="px-6 py-4 text-sm">David Brown</td>
                            <td class="px-6 py-4 text-sm">Jane Doe</td>
                            <td class="px-6 py-4 text-sm"><span class="px-2 py-1 bg-red-100 text-red-800 rounded-full text-xs font-medium">Urgent</span></td>
                            <td class="px-6 py-4 text-sm"><span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs font-medium">Resolved</span></td>
                            <td class="px-6 py-4 text-sm text-gray-500">2026-04-19</td>
                            <td class="px-6 py-4 text-sm whitespace-nowrap">
                                <button class="text-primary hover:text-primaryHover mr-2" aria-label="View ticket"><i data-feather="eye" class="w-4 h-4"></i></button>
                                <button class="text-primary hover:text-primaryHover mr-2" aria-label="Edit ticket"><i data-feather="edit" class="w-4 h-4"></i></button>
                                <button class="text-danger hover:text-red-700" aria-label="Delete ticket"><i data-feather="trash-2" class="w-4 h-4"></i></button>
                            </td>
                        </tr>
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 text-sm font-medium">#T004</td>
                            <td class="px-6 py-4 text-sm">Software installation request</td>
                            <td class="px-6 py-4 text-sm">Sarah Wilson</td>
                            <td class="px-6 py-4 text-sm">Unassigned</td>
                            <td class="px-6 py-4 text-sm"><span class="px-2 py-1 bg-gray-100 text-gray-800 rounded-full text-xs font-medium">Low</span></td>
                            <td class="px-6 py-4 text-sm"><span class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs font-medium">Pending</span></td>
                            <td class="px-6 py-4 text-sm text-gray-500">2026-04-21</td>
                            <td class="px-6 py-4 text-sm whitespace-nowrap">
                                <button class="text-primary hover:text-primaryHover mr-2" aria-label="View ticket"><i data-feather="eye" class="w-4 h-4"></i></button>
                                <button class="text-primary hover:text-primaryHover mr-2" aria-label="Edit ticket"><i data-feather="edit" class="w-4 h-4"></i></button>
                                <button class="text-danger hover:text-red-700" aria-label="Delete ticket"><i data-feather="trash-2" class="w-4 h-4"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Pagination -->
        <div class="flex flex-col gap-3 mt-4 sm:flex-row sm:items-center sm:justify-between">
            <p class="text-sm text-gray-500">Showing 1-4 of 24 tickets</p>
            <div class="flex gap-2">
                <button class="px-3 py-1 border border-gray-300 rounded hover:bg-gray-100 text-sm">Previous</button>
                <button class="px-3 py-1 bg-primary text-white rounded text-sm">1</button>
                <button class="px-3 py-1 border border-gray-300 rounded hover:bg-gray-100 text-sm">2</button>
                <button class="px-3 py-1 border border-gray-300 rounded hover:bg-gray-100 text-sm">3</button>
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
