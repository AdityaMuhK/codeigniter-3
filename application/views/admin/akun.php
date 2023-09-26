<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Password</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>

<body class="flex h-screen bg-gray-100">
    <?php foreach ($user as $users): ?>
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

            <div class="my-8 mx-4"> <!-- Tambahkan margin di sini -->
                <div class="bg-white p-6 rounded-lg shadow-lg contrast-50">
                    <h2 class="text-2xl font-bold mb-6">Ubah Password</h2>
                    <form action="<?php echo base_url('auth/aksi_ubah_password'); ?>" method="post"
                        class="grid grid-cols-2 gap-4">

                        <div class="mb-4 col-span-1">
                            <label class="block text-gray-700 font-bold mb-2" for="email">Email</label>
                            <input type="text" name="email" id="email" class="w-full border border-gray-300 p-2 rounded-lg"
                                value="<?php echo $users->email ?>" readonly>
                        </div>
                        <div class="mb-4 col-span-1">
                            <label class="block text-gray-700 font-bold mb-2" for="username">Username</label>
                            <input type="text" name="username" id="username"
                                class="w-full border border-gray-300 p-2 rounded-lg" value="<?php echo $users->username ?>"
                                readonly>
                        </div>
                        <div class="mb-4 col-span-1">
                            <label class="block text-gray-700 font-bold mb-2" for="password_baru">Password
                                Baru</label>
                            <input type="password" name="password_baru" id="password_baru"
                                class="w-full border border-gray-300 p-2 rounded-lg">
                            <label for="showPassword1">Show Password <input type="checkbox" id="showPassword1">
                            </label>
                        </div>
                        <div class="mb-4 col-span-1">
                            <label class="block text-gray-700 font-bold mb-2" for="konfirmasi_password">Konfirmasi
                                Password Baru</label>
                            <input type="password" name="konfirmasi_password" id="konfirmasi_password"
                                class="w-full border border-gray-300 p-2 rounded-lg">
                            <label for="showPassword2">Show Password <input type="checkbox" id="showPassword2">
                            </label>
                        </div>
                        <button type="submit"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded col-span-2">Ubah
                            Password
                        </button>

                    </form>
                </div>
            </div>
        </div>
        <script>
            document.getElementById('showPassword1').addEventListener('change', function () {
                const passwordInput = document.getElementById('password_baru');
                passwordInput.type = this.checked ? 'text' : 'password_baru';
            });
        </script>
        <script>
            document.getElementById('showPassword2').addEventListener('change', function () {
                const passwordInput = document.getElementById('konfirmasi_password');
                passwordInput.type = this.checked ? 'text' : 'konfirmasi_password';
            });
        </script>
    <?php endforeach ?>
</body>

</html>