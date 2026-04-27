<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>
<!-- Tailwind -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- Feather Icons -->
<script src="https://unpkg.com/feather-icons"></script>

<!-- Custom Colors -->
<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    primary: '#14532D',
                    primaryHover: '#166534',
                    accent: '#2563EB',
                    success: '#059669',
                    danger: '#DC2626',
                    base: '#F5F7FA'
                }
            }
        }
    }
</script>

<style>
    /* Mobile sidebar styles */
    .sidebar {
        transition: transform 0.3s ease-in-out;
    }

    /* Mobile: hidden by default */
    @media (max-width: 1023px) {
        .sidebar {
            transform: translateX(-100%);
        }

        .sidebar.open {
            transform: translateX(0);
        }
    }

    /* Desktop: always visible */
    @media (min-width: 1024px) {
        .sidebar {
            transform: translateX(0);
        }
    }

    .overlay {
        transition: opacity 0.3s ease-in-out;
    }

    .overlay.hidden-overlay {
        opacity: 0;
        pointer-events: none;
    }

    .overlay.visible-overlay {
        opacity: 1;
        pointer-events: auto;
    }

    /* Hamburger animation */
    .hamburger-line {
        transition: all 0.3s ease-in-out;
    }

    .hamburger.active .hamburger-line:nth-child(1) {
        transform: rotate(45deg) translate(5px, 5px);
    }

    .hamburger.active .hamburger-line:nth-child(2) {
        opacity: 0;
    }

    .hamburger.active .hamburger-line:nth-child(3) {
        transform: rotate(-45deg) translate(7px, -6px);
    }
</style>

<!-- Overlay for mobile -->
<div id="overlay" class="overlay hidden-overlay fixed inset-0 bg-black/50 z-40 lg:hidden" onclick="toggleSidebar()"></div>

<div class="flex min-h-screen">

    <!-- Sidebar -->
    <aside id="sidebar" class="sidebar open lg:transform-none w-56 shrink-0 min-h-screen bg-primary text-gray-300 flex flex-col fixed z-50 lg:relative lg:z-auto lg:min-h-screen">

        <!-- Header -->
        <div class="p-4 border-b border-green-700 flex items-center justify-between">
            <div>
                <h2 class="text-white text-sm font-semibold">ICT System</h2>
                <p class="text-xs text-gray-300">Admin Panel</p>
            </div>
            <button id="hamburger" class="hamburger lg:hidden flex flex-col gap-1.5 p-2 rounded-lg bg-primaryHover hover:bg-green-900 transition z-[60]" onclick="toggleSidebar()">
                <span class="hamburger-line w-6 h-0.5 bg-white block"></span>
                <span class="hamburger-line w-6 h-0.5 bg-white block"></span>
                <span class="hamburger-line w-6 h-0.5 bg-white block"></span>
            </button>
        </div>

        <!-- Menu -->
        <nav class="flex-1 py-3">
            <ul class="space-y-1 text-sm">

                <!-- Dashboard -->
                <li>
                    <a href="dashboard.php" class="flex items-center gap-3 px-5 py-2 <?php echo $currentPage == 'dashboard.php' ? 'bg-green-900/40 border-l-4 border-accent text-white' : 'hover:bg-primaryHover hover:text-white'; ?> transition">
                        <i data-feather="home" class="w-4 h-4"></i>
                        Dashboard
                    </a>
                </li>

                <!-- Tickets -->
                <li>
                    <a href="tickets.php" class="flex items-center gap-3 px-5 py-2 <?php echo $currentPage == 'tickets.php' ? 'bg-green-900/40 border-l-4 border-accent text-white' : 'hover:bg-primaryHover hover:text-white'; ?> transition">
                        <i data-feather="file-text" class="w-4 h-4"></i>
                        Tickets
                    </a>
                </li>

                <!-- Users -->
                <li>
                    <a href="users.php" class="flex items-center gap-3 px-5 py-2 <?php echo $currentPage == 'users.php' ? 'bg-green-900/40 border-l-4 border-accent text-white' : 'hover:bg-primaryHover hover:text-white'; ?> transition">
                        <i data-feather="users" class="w-4 h-4"></i>
                        Users
                    </a>
                </li>

                <!-- Technicians -->
                <li>
                    <a href="technicians.php" class="flex items-center gap-3 px-5 py-2 <?php echo $currentPage == 'technicians.php' ? 'bg-green-900/40 border-l-4 border-accent text-white' : 'hover:bg-primaryHover hover:text-white'; ?> transition">
                        <i data-feather="tool" class="w-4 h-4"></i>
                        Technicians
                    </a>
                </li>

                <!-- Assets -->
                <li>
                    <a href="assets.php" class="flex items-center gap-3 px-5 py-2 <?php echo $currentPage == 'assets.php' ? 'bg-green-900/40 border-l-4 border-accent text-white' : 'hover:bg-primaryHover hover:text-white'; ?> transition">
                        <i data-feather="cpu" class="w-4 h-4"></i>
                        Assets
                    </a>
                </li>

                <!-- Logs -->
                <li>
                    <a href="logs.php" class="flex items-center gap-3 px-5 py-2 <?php echo $currentPage == 'logs.php' ? 'bg-green-900/40 border-l-4 border-accent text-white' : 'hover:bg-primaryHover hover:text-white'; ?> transition">
                        <i data-feather="activity" class="w-4 h-4"></i>
                        Logs
                    </a>
                </li>

                <!-- Reports -->
                <li>
                    <a href="reports.php" class="flex items-center gap-3 px-5 py-2 <?php echo $currentPage == 'reports.php' ? 'bg-green-900/40 border-l-4 border-accent text-white' : 'hover:bg-primaryHover hover:text-white'; ?> transition">
                        <i data-feather="bar-chart-2" class="w-4 h-4"></i>
                        Reports
                    </a>
                </li>


            </ul>
        </nav>

        <!-- Footer -->
        <div class="p-4 border-t border-green-700">
            <button onclick="logout()" class="flex items-center justify-center gap-2 bg-danger text-white py-2 rounded-md hover:bg-red-700 transition text-sm w-full">
                <i data-feather="log-out" class="w-4 h-4"></i>
                Logout
            </button>
        </div>

    </aside>

<!-- Activate Icons -->
<script>
    feather.replace();

    function toggleSidebar() {
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('overlay');
        const hamburger = document.getElementById('hamburger');

        sidebar.classList.toggle('open');
        sidebar.classList.toggle('closed');
        overlay.classList.toggle('hidden-overlay');
        overlay.classList.toggle('visible-overlay');
        hamburger.classList.toggle('active');
    }

    function logout() {
        localStorage.removeItem('userLoggedIn');
        localStorage.removeItem('userEmail');
        localStorage.removeItem('userRole');
        window.location.href = '../index.html';
    }
</script>
