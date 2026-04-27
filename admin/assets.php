<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assets - Admin Panel</title>
</head>
<body class="bg-base text-gray-900">
    <?php include "../sidebar/admin.php"; ?>
    <main class="ml-0 p-6 w-full flex-1">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-2xl font-semibold">Asset Management</h1>
            <button class="bg-primary hover:bg-primaryHover text-white px-4 py-2 rounded-lg transition flex items-center gap-2">
                <i data-feather="plus" class="w-4 h-4"></i>
                Add Asset
            </button>
        </div>
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <table class="w-full">
                <thead class="bg-primary text-white">
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-semibold">Asset ID</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold">Name</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold">Category</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold">Location</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold">Status</th>
                        <th class="px-6 py-3 text-left text-sm font-semibold">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 text-sm font-medium">#A001</td>
                        <td class="px-6 py-4 text-sm">Dell OptiPlex 7090</td>
                        <td class="px-6 py-4 text-sm">Computer</td>
                        <td class="px-6 py-4 text-sm">ICT Office</td>
                        <td class="px-6 py-4 text-sm"><span class="px-2 py-1 bg-green-100 text-green-800 rounded-full text-xs font-medium">Available</span></td>
                        <td class="px-6 py-4 text-sm">
                            <button class="text-primary hover:text-primaryHover mr-2"><i data-feather="eye" class="w-4 h-4"></i></button>
                            <button class="text-primary hover:text-primaryHover mr-2"><i data-feather="edit" class="w-4 h-4"></i></button>
                            <button class="text-danger hover:text-red-700"><i data-feather="trash-2" class="w-4 h-4"></i></button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 text-sm font-medium">#A002</td>
                        <td class="px-6 py-4 text-sm">HP LaserJet Pro</td>
                        <td class="px-6 py-4 text-sm">Printer</td>
                        <td class="px-6 py-4 text-sm">Admin Office</td>
                        <td class="px-6 py-4 text-sm"><span class="px-2 py-1 bg-yellow-100 text-yellow-800 rounded-full text-xs font-medium">In Use</span></td>
                        <td class="px-6 py-4 text-sm">
                            <button class="text-primary hover:text-primaryHover mr-2"><i data-feather="eye" class="w-4 h-4"></i></button>
                            <button class="text-primary hover:text-primaryHover mr-2"><i data-feather="edit" class="w-4 h-4"></i></button>
                            <button class="text-danger hover:text-red-700"><i data-feather="trash-2" class="w-4 h-4"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</div>
<script>feather.replace();</script>
</body>
</html>