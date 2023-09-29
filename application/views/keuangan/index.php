<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

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
        <a href="<?php echo base_url('keuangan/pembayaran') ?>" class="text-white hover:bg-blue-700 p-2 rounded-lg">
            <i class="fas fa-cash-register mr-2"></i> Pembayaran
        </a>
        <a href="<?php echo base_url('keuangan/index') ?>" class="text-white hover:bg-blue-700 p-2 rounded-lg">
            <i class="fas fa-coins mr-2"></i> Keuangan
        </a>
    </aside>
    <div class="flex-1 flex flex-col overflow-hidden">
        <header class="flex justify-between items-center p-4 bg-white border-b-2 border-gray-200">
            <h1 class="text-4xl">Keuangan</h1>
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
            <div class="container mx-auto px-6 py-8 ">


                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Card 1 -->
                    <div class="bg-green-400 border p-6 rounded-lg relative">
                        <i class="fas fa-coins text-gray-600 text-6xl absolute right-4 top-9"></i>
                        <p class="text-white mb-2">Jumlah Pembayaran SPP</p>
                        <p class="text-white text-2xl font-bold">
                            Rp.120.000
                        </p>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-green-400 border p-6 rounded-lg relative">
                        <i class="fas fa-coins text-gray-600 text-6xl absolute right-4 top-9"></i>
                        <p class="text-white mb-2">Jumlah Pembayaran Uang Gedung</p>
                        <p class="text-white text-2xl font-bold">
                            Rp.1.500.000
                        </p>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-green-400 border p-6 rounded-lg relative">
                        <i class="fas fa-coins text-gray-600 text-6xl absolute right-4 top-9"></i>
                        <p class="text-white mb-2">Jumlah Pembayaran Uang Seragam</p>
                        <p class="text-white text-2xl font-bold">
                            Rp.500.000
                        </p>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>