<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Guru</title>
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
        <a href="<?php echo base_url('admin/akun'); ?>" class="text-white hover:bg-blue-700 p-2 rounded-lg">
            <i class="fas fa-user-circle mr-2"></i> Akun
        </a>
    </aside>

    <div class="flex-1 flex flex-col overflow-hidden">
        <header class="flex justify-between items-center p-4 bg-white border-b-2 border-gray-100">
            <h1 class="text-4xl">Tambah Guru</h1>
        </header>

        <div class="my-8 mx-4"> <!-- Tambahkan margin di sini -->
            <div class="bg-white p-6 rounded-lg shadow-lg contrast-50">
                <form action="<?php echo base_url('admin/aksi_tambah_guru') ?>" enctype="multipart/form-data"
                    method="POST" class="grid grid-cols-2 gap-4">
                    <div class="mb-4 col-span-1">
                        <label for="nama" class="block text-gray-700 font-bold mb-2">Nama Guru</label>
                        <input type="text" id="nama" name="nama" class="w-full border border-gray-300 p-2 rounded-lg"
                            required>
                    </div>
                    <div class="mb-4 col-span-1">
                        <label for="nik" class="block text-gray-700 font-bold mb-2">NIK</label>
                        <input type="text" id="nik" name="nik" class="w-full border border-gray-300 p-2 rounded-lg"
                            required>
                    </div>
                    <div class="mb-4 col-span-1">
                        <label for="gender" class="block text-gray-700 font-bold mb-2">Gender</label>
                        <select id="gender" name="gender" class="w-full border border-gray-300 p-2 rounded-lg" required>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-4 col-span-1">
                        <label for="mapel" class="block text-gray-700 font-bold mb-2">Mapel</label>
                        <select id="mapel" name="mapel" class="w-full border border-gray-300 p-2 rounded-lg" required>
                            <option selected>Pilih Mapel</option>
                            <?php foreach ($mapel as $row): ?>
                                <option value="<?php echo $row->id ?>">
                                    <?php echo $row->nama_mapel ?>
                                </option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="mb-4 col-span-1">
                        <label for="foto" class="block text-gray-700 font-bold mb-2">Foto Guru</label>
                        <input type="file" id="foto" name="foto" accept="image/*"
                            class="w-full border border-gray-300 p-2 rounded-lg" required>
                        <small class="text-gray-500">Pilih file gambar (format: JPG, PNG, JPEG, GIF, dll.)</small>
                    </div>
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded col-span-2">
                        Tambah Guru
                    </button>
                </form>
            </div>
        </div>
    </div>



</body>

</html>