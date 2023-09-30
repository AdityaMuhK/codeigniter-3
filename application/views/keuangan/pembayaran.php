<!-- views/siswa.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
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
            <h1 class="text-4xl">Pembayaran</h1>
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

                <h3></h3>
                <!-- Table -->
                <div class="bg-white p-6 rounded-lg shadow-2xl">
                    <div class="flex justify-end mt-4">

                        <div class="flex space-x-4">
                            <a href="<?php echo base_url('keuangan/tambah_pembayaran') ?>"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"><i
                                    class="fas fa-plus mr-2"></i> Tambah</a>
                        </div>
                    </div>
                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th class="text-left border border-black p-2 border-4">No</th>
                                <th class="text-left border border-black p-2 border-4">Siswa</th>
                                <th class="text-left border border-black p-2 border-4">Jenis Pembayaran</th>
                                <th class="text-left border border-black p-2 border-4">Total Pembayaran</th>
                                <th class="text-left border border-black p-2 border-4">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0;
                            foreach ($pembayaran as $row):
                                $no++ ?>
                                <tr>
                                    <td class="border border-black p-2 border-4">
                                        <?php echo $no ?>
                                    </td>
                                    <td class="border border-black p-2 border-4">
                                        <?php echo tampil_full_siswa_byid($row->id_siswa) ?>
                                    </td>
                                    <td class="border border-black p-2 border-4">
                                        <?php echo $row->jenis_pembayaran ?>
                                    </td>
                                    <td class="border border-black p-2 border-4">
                                        <?php echo convRupiah($row->total_pembayaran)?>
                                    </td>
                                    <td class="border border-black p-2 border-4">
                                        <a href="<?php echo base_url('keuangan/ubah_pembayaran/') . $row->id ?>"
                                            class="bg-blue-300 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded mb-2">
                                            Ubah
                                        </a>
                                        <button onClick="hapus(<?php echo $row->id; ?>)"
                                            class="bg-red-400 hover:bg-red-600 text-white font-bold py-2 px-4 rounded ml-2">
                                            Hapus
                                        </button>
                                    </td>


                                </tr>
                                <!-- Tambahkan baris data siswa lainnya sesuai kebutuhan -->
                            <?php endforeach ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </main>
    </div>
    <script>
        function hapus(id) {
            var yes = confirm('Yakin DI Hapus?');
            if (yes == true) {
                window.location.href = "<?php echo base_url('keuangan/hapus_pembayaran/') ?>" + id;
            }
        }
    </script>
</body>

</html>