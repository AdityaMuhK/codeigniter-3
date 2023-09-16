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
        <header class="flex justify-between items-center p-4 bg-white border-b-2 border-gray-100">
            <h1 class="text-4xl">Ubah Siswa</h1>
        </header>

        <div class="my-8 mx-4"> <!-- Tambahkan margin di sini -->
            <div class="bg-white p-6 rounded-lg shadow-lg contrast-50">
                <?php foreach ($siswa as $data_siswa): ?>
                    <form action="<?php echo base_url('admin/aksi_ubah_siswa') ?>" enctype="multipart/form-data"
                        method="POST" class="grid grid-cols-2 gap-4">
                        <input name="id_siswa" type="hidden" value="<?php echo $data_siswa->id_siswa ?>">
                        <div class="mb-4 col-span-1">
                            <label for="nama" class="block text-gray-700 font-bold mb-2">Nama Siswa</label>
                            <input type="text" id="nama" name="nama"
                                class="w-full border border-gray-300 p-2 rounded-lg"
                                value="<?php echo $data_siswa->nama_siswa ?>" required>
                        </div>
                        <div class="mb-4 col-span-1">
                            <label for="nisn" class="block text-gray-700 font-bold mb-2">NISN</label>
                            <input type="text" id="nisn" name="nisn" class="w-full border border-gray-300 p-2 rounded-lg"
                                value="<?php echo $data_siswa->nisn ?>" required>
                        </div>
                        <div class="mb-4 col-span-1">
                            <label for="gender" class="block text-gray-700 font-bold mb-2">Gender</label>
                            <select id="gender" name="gender" class="w-full border border-gray-300 p-2 rounded-lg" required>
                                <option selected value="<?php echo $data_siswa->gender ?>">
                                    <?php echo $data_siswa->gender ?>
                                </option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-4 col-span-1">
                            <label for="kelas" class="block text-gray-700 font-bold mb-2">Kelas</label>
                            <select id="kelas" name="kelas" class="w-full border border-gray-300 p-2 rounded-lg" required>
                                <option selected value="<?php $data_siswa->id_kelas ?>">
                                    <?php echo tampil_full_kelas_byid($data_siswa->id_kelas) ?>
                                </option>
                                <?php foreach ($kelas as $row): ?>
                                    <option value="<?php echo $row->id ?>">
                                        <?php echo $row->tingkat_kelas . ' ' . $row->jurusan_kelas ?>
                                    </option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded col-span-2">
                            Ubah Siswa
                        </button>
                    </form>
                <?php endforeach ?>
            </div>
        </div>
    </div>



</body>

</html>