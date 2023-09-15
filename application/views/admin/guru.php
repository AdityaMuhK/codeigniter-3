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
        <a href="<?php echo base_url('admin/siswa') ?>" class="text-white hover:bg-blue-700 p-2 rounded-lg">
            <i class="fas fa-table mr-2"></i> Table
        </a>
        <a href="<?php echo base_url('admin/guru') ?>" class="text-white hover:bg-blue-700 p-2 rounded-lg">
            <i class="fas fa-chalkboard mr-2"></i> Guru
        </a>
    </aside>
    <div class="flex-1 flex flex-col overflow-hidden">
        <header class="flex justify-between items-center p-4 bg-white border-b-2 border-gray-200">
            <h1 class="text-4xl">Guru</h1>
            <div class="flex items-center space-x-2">
                <a href="#" class="text-gray-600 hover:text-blue-600">
                    Logout
                </a>
            </div>
        </header>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-8 ">

            <div class="mb-4 flex justify-between items-center">
            <h3 class="text-4xl">Data Guru</h3>
            <div class="font-bold text-right">
                <a href="<?php echo base_url('admin') ?>" class="text-blue-500">Dashboard</a>
                <span class="mx-2">/</span>
                <a href="<?php echo base_url('admin/siswa') ?>" class="text-blue-500">Tabel</a>
                <span class="mx-2">/</span>
                <a href="<?php echo base_url('admin/guru') ?>" class="text-gray-500">Guru</a>
            </div>
        </div>
    p
</body>
</html>