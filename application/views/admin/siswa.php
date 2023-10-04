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
            <h1 class="text-4xl">Tabel</h1>
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

                <div class="mb-4 flex justify-between items-center">
                    <h3 class="text-4xl">Data Siswa</h3>
                    <div class="font-bold text-right">
                        <a href="<?php echo base_url('admin') ?>" class="text-blue-500">Dashboard</a>
                        <span class="mx-2">/</span>
                        <a href="<?php echo base_url('admin/siswa') ?>" class="text-gray-500">Tabel</a>
                    </div>
                </div>
                <h3></h3>
                <!-- Table -->
                <div class="bg-white p-6 rounded-lg shadow-2xl">
                    <div class="flex justify-end my-4">

                        <div class="flex space-x-4">
                            <a href="<?php echo base_url('admin/tambah_siswa') ?>"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"><i
                                    class="fas fa-plus mr-2"></i> Tambah</a>

                            <!-- Tombol Export -->
                            <a href="<?php echo base_url('admin/export') ?>"
                                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"><i
                                    class="fas fa-file-export mr-2"></i> Export</a>
                            <!-- Tombol Import -->
                            <button id="importButton"
                                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded"><i
                                    class="fas fa-file-import mr-2"></i> Import</button>
                        </div>
                    </div>
                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th class="text-left border border-black p-2 border-4">No</th>
                                <th class="text-left border border-black p-2 border-4">Foto Siswa</th>
                                <th class="text-left border border-black p-2 border-4">Nama Siswa</th>
                                <th class="text-left border border-black p-2 border-4">NISN</th>
                                <th class="text-left border border-black p-2 border-4">Gender</th>
                                <th class="text-left border border-black p-2 border-4">Kelas</th>
                                <th class="text-left border border-black p-2 border-4">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0;
                            foreach ($siswa as $row):
                                $no++ ?>
                                <!-- Data Siswa -->
                                <tr>
                                    <td class="border border-black p-2 border-4">
                                        <?php echo $no ?>
                                    </td>
                                    <td class="border border-black p-2 border-4">
                                        <img src="<?php echo base_url('images/siswa/' . $row->foto) ?>" width="50"
                                            height="50" alt="Foto Siswa">
                                    </td>
                                    <td class="border border-black p-2 border-4">
                                        <?php echo $row->nama_siswa ?>
                                    </td>
                                    <td class="border border-black p-2 border-4">
                                        <?php echo $row->nisn ?>
                                    </td>
                                    <td class="border border-black p-2 border-4">
                                        <?php echo $row->gender ?>
                                    </td>
                                    <td class="border border-black p-2 border-4">
                                        <?php echo tampil_full_kelas_byid($row->id_kelas) ?>
                                    </td>
                                    <td class="border border-black p-2 border-4">
                                        <a href="<?php echo base_url('admin/ubah_siswa/') . $row->id_siswa ?>"
                                            class="bg-blue-300 hover:bg-blue-500 text-white font-bold py-2 px-4 rounded mb-2">
                                            Ubah
                                        </a>
                                        <button onClick="hapus(<?php echo $row->id_siswa; ?>)"
                                            class="bg-red-400 hover:bg-red-600 text-white font-bold py-2 px-4 rounded ml-2">
                                            Hapus
                                        </button>
                                    </td>
                                </tr>
                                <!-- Tambahkan baris data siswa lainnya sesuai kebutuhan -->
                            <?php endforeach ?>
                        </tbody>

                    </table>
                    <!-- Modal -->
                    <div id="importModal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
                        <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

                        <div
                            class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto animate__animated animate__fadeIn">
                            <div class="modal-content py-4 text-left px-6">
                                <!-- Close Button -->
                                <div class="flex justify-end items-center">
                                    <button type="button" class="text-3xl leading-none hover:text-gray-700"
                                        onclick="closeModal()">
                                        &times;
                                    </button>
                                </div>
                                <!-- Formulir Input File -->
                                <form action="<?= base_url('admin/import') ?>" method="POST"
                                    enctype="multipart/form-data">
                                    <div class="my-4">
                                        <input type="file" name="file" class="w-full py-2 px-3 border border-gray-300">
                                    </div>
                                    <!-- Tombol Kirim -->
                                    <button type="submit" name="import"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                        Kirim
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- tutup modal -->    
                </div>
            </div>
        </main>
    </div>
    <script>
        function hapus(id) {
            var yes = confirm('Yakin DI Hapus?');
            if (yes == true) {
                window.location.href = "<?php echo base_url('admin/hapus_siswa/') ?>" + id;
            }
        }
    </script>
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
    <!-- Script JavaScript untuk Menampilkan dan Menutup Modal -->
    <script>
        function openModal() {
            document.getElementById('importModal').classList.remove('hidden');
        }

        function closeModal() {
            document.getElementById('importModal').classList.add('fadeOut');
            setTimeout(function () {
                document.getElementById('importModal').classList.add('hidden');
                document.getElementById('importModal').classList.remove('fadeOut');
            }, 300);
        }

        document.getElementById('importButton').addEventListener('click', openModal);
    </script>
</body>

</html>