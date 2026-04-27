<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Technician Panel</title>
</head>
<body class="bg-base text-gray-900">
    <?php include "../sidebar/technician.php"; ?>
    <main class="ml-0 p-6 w-full flex-1">
        <h1 class="text-2xl font-semibold mb-6">My Profile</h1>
        <div class="bg-white rounded-lg shadow-md p-6 max-w-2xl">
            <div class="flex items-center gap-6 mb-6">
                <div class="w-24 h-24 bg-primary rounded-full flex items-center justify-center text-white text-3xl font-bold">T</div>
                <div>
                    <h2 class="text-xl font-semibold">Jane Doe</h2>
                    <p class="text-gray-500">ICT Technician</p>
                    <p class="text-sm text-gray-400">jane.doe@school.edu</p>
                </div>
            </div>
            <form>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
                        <input type="text" value="Jane" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
                        <input type="text" value="Doe" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent outline-none">
                    </div>
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                    <input type="email" value="jane.doe@school.edu" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent outline-none">
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Phone</label>
                    <input type="tel" value="+63 912 345 6789" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent outline-none">
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Specialization</label>
                    <input type="text" value="Hardware" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent outline-none">
                </div>
                <div class="mb-6">
                    <label class="block text-sm font-medium text-gray-700 mb-2">Role</label>
                    <input type="text" value="Technician" disabled class="w-full px-4 py-2 border border-gray-300 rounded-lg bg-gray-100 text-gray-600">
                </div>
                <button type="submit" class="w-full bg-primary hover:bg-primaryHover text-white py-3 rounded-lg transition font-medium">Update Profile</button>
            </form>
        </div>
    </main>
</div>
<script>feather.replace();</script>
</body>
</html>
