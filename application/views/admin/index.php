<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>
</head>

<body class="flex h-screen bg-gray-100">
    <!-- Sidebar -->
    <aside class="bg-blue-600 w-60 flex flex-col items-right p-4">
        <a href="<?php echo base_url('admin') ?>" class="text-white text-2xl mb-4 hover:bg-blue-700 p-2 rounded-full">
            D
        </a>

        <a href="<?php echo base_url('admin') ?>" class="text-white hover:bg-blue-700 p-2 rounded-lg">
            <i class="fas fa-chart-line mr-2"></i> Dashboard
        </a>
        <a href="<?php echo base_url('admin/siswa') ?>" class="text-white hover:bg-blue-700 p-2 rounded-lg">
            <i class="fas fa-table mr-2"></i> Table
        </a>
        <a href="<?php echo base_url('admin/guru') ?>" class="text-white hover:bg-blue-700 p-2 rounded-lg">
            <i class="fas fa-chalkboard mr-2"></i> Guru
        </a>
        <!-- Keuangan Dropdown -->
        <div class="relative group">
            <button class="text-white hover:bg-blue-700 p-2 rounded-lg flex items-center focus:outline-none">
                <i class="fas fa-coins mr-2"></i> Keuangan <i class="fas fa-chevron-down ml-auto"></i>
            </button>
            <ul class="absolute hidden mt-2 bg-blue-600 group-hover:block">
                <li>
                    <a href="<?php echo base_url('keuangan/index') ?>"
                        class="block px-4 py-2 text-white hover:bg-blue-700">Keuangan</a>
                </li>
                <li>
                    <a href="<?php echo base_url('keuangan/pembayaran') ?>"
                        class="block px-4 py-2 text-white hover:bg-blue-700">Pembayaran</a>
                </li>
            </ul>
        </div>
        <a href="<?php echo base_url('admin/akun'); ?>" class="text-white hover:bg-blue-700 p-2 rounded-lg">
            <i class="fas fa-user-circle mr-2"></i> Akun
        </a>
    </aside>

    <div class="flex-1 flex flex-col overflow-hidden">
        <header class="flex justify-between items-center p-4 bg-white border-b-2 border-gray-200">
            <h1 class="text-4xl">Dashboard Akademik</h1>
            <div class="flex items-center space-x-2">
                <a href="<?php echo base_url(
                    'auth/logout'
                ); ?>" class="text-gray-600 hover:text-blue-600">
                    Logout
                </a>
            </div>
        </header>


        <!-- Main Content -->
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-8">

                <div class="font-bold text-right">
                    <a href="<?php echo base_url('admin') ?>" class="text-gray-500">Dashboard</a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Card 1 -->
                    <div class="bg-blue-400 border p-6 rounded-lg relative">
                        <i class="fas fa-door-closed text-gray-600 text-6xl absolute right-4 top-9"></i>
                        <p class="text-white mb-2">Jumlah Kelas</p>
                        <p class="text-white text-2xl font-bold">
                            <?php echo $kelas ?>
                        </p>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-blue-400 border p-6 rounded-lg relative">
                        <i class="fas fa-file-invoice text-gray-600 text-6xl absolute right-4 top-9"></i>
                        <p class="text-white mb-2">Jumlah Mapel</p>
                        <p class="text-white text-2xl font-bold">
                            <?php echo $mapel ?>
                        </p>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-blue-400 border p-6 rounded-lg relative">
                        <i class="fas fa-user text-gray-600 text-6xl absolute right-4 top-9"></i>
                        <p class="text-white mb-2">Jumlah Siswa</p>
                        <p class="text-white text-2xl font-bold">
                            <?php echo $siswa ?>
                        </p>
                    </div>

                    <!-- Card 4 -->
                    <div class="bg-blue-400 border p-6 rounded-lg relative">
                        <i class="fas fa-user-tie text-gray-600 text-6xl absolute right-4 top-9"></i>
                        <p class="text-white mb-2">Jumlah Guru</p>
                        <p class="text-white text-2xl font-bold">
                            <?php echo $guru ?>
                        </p>
                    </div>
                    <!-- Card 5 -->
                    <div class="bg-green-400 border p-6 rounded-lg relative">
                        <i class="fas fa-coins text-gray-600 text-6xl absolute right-4 top-9"></i>
                        <p class="text-white mb-2">Pendapatan Bulan Ini</p>
                        <p class="text-white text-2xl font-bold">
                            Rp
                            120000
                        </p>
                    </div>
                </div>
            </div>
        </main>

    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Mengambil elemen dropdown
            const dropdown = document.querySelector('.relative.group');

            // Menggunakan event listener untuk menampilkan/menyembunyikan dropdown
            dropdown.addEventListener('click', function () {
                const menu = this.querySelector('ul');
                menu.classList.toggle('hidden');
            });
        });
    </script>
</body>

</html>