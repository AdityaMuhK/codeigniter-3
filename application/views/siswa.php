<!-- views/siswa.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
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
        <a href="<?php echo base_url('siswa') ?>" class="text-white hover:bg-blue-700 p-2 rounded-lg">
            <i class="fas fa-table mr-2"></i> Table
        </a>
    </aside>

    <div class="flex-1 flex flex-col overflow-hidden">
        <header class="flex justify-between items-center p-4 bg-white border-b-2 border-gray-200">
            <h1 class="text-2xl font-bold">Data Siswa</h1>
            <div class="flex items-center space-x-2">
                <a href="#" class="text-gray-600 hover:text-blue-600">
                    Logout
                </a>
            </div>
        </header>

        <!-- Main Content -->
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-8 ">

                <!-- Table -->
                <div class="bg-white p-6 rounded-lg shadow-2xl">
                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th class="text-left border border-black p-2 border-4">No</th>
                                <th class="text-left border border-black p-2 border-4">Nama Siswa</th>
                                <th class="text-left border border-black p-2 border-4">NISN</th>
                                <th class="text-left border border-black p-2 border-4">Gender</th>
                                <th class="text-left border border-black p-2 border-4">Kelas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Data Siswa -->
                            <tr>
                                <td class="border border-black p-2 border-4">1</td>
                                <td class="border border-black p-2 border-4">John Doe</td>
                                <td class="border border-black p-2 border-4">123456</td>
                                <td class="border border-black p-2 border-4">Male</td>
                                <td class="border border-black p-2 border-4">10A</td>
                            </tr>
                            <!-- Tambahkan baris data siswa lainnya sesuai kebutuhan -->
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>

</body>

</html>
