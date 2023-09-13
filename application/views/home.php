<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo $title ?>
    </title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/all.min.css">


    <style>
        body {
            margin: 0%;
        }

        .wrapper {
            height: 100vh;
            overflow-y: auto;
            overflow-x: hidden;
            perspective: 10px;
        }

        header {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            transform-style: preserve-3d;
            z-index: -1;
        }

        .background,
        .foregound {
            position: absolute;
            height: 100%;
            width: 100%;
            object-fit: cover;
            z-index: -1;
            filter: brightness(40%);
        }

        .background {
            transform: translateZ(-10px) scale(2);
        }

        .foregound {
            transform: translateZ(-5px) scale(1.5);
        }

        .tengah {
            color: aliceblue;
            text-shadow: 0 0 5px black;
            display: flex;
            flex-direction: column;
            /* Menyusun elemen secara vertikal */
            justify-content: center;
            align-items: center;
            height: 50vh;
        }

        img {
            margin-bottom: 10px;
            /* Menambahkan jarak di bawah gambar */
        }


        section {
            font-size: 15px;
            background-color: blue;
            color: aliceblue;
            padding: 90px;
        }

        .text-with-underline {
            text-decoration: underline;
            text-decoration-thickness: 5px;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <header>
            <!--           u can upload any png image for background and foregound -->
            <img class="background" src="https://foto.data.kemdikbud.go.id/getImage/20328986/7.jpg" alt="">
            <div class="tengah container">
                <img src="https://binusasmg.sch.id/ppdb/logobinusa.png" alt="logo" width="15%">
                <h1 class="text-with-underline"><b>Sistem Informasi Sekolah</b></h1>
                <h3>SMK Bina Nusantara</h3>
                <div class="row">
                    <div class="col-md-6">
                        <a href="#" type="button" class="btn btn-primary">Perpustakaan</a>
                    </div>
                    <div class="col-md-6">
                        <a href="./auth" type="button" class="btn btn-warning">Login</a>
                    </div>
                </div>
            </div>
        </header>


        <!-- SECTION -->
        <section>
            <div class="container-lg">
                <div class="row">
                    <div class="col-md-4">
                        <h2><b>Tentang SIS</b></h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates maxime in, odio quod ex
                            soluta nulla. Eos, alias eius quae unde debitis culpa officiis, quisquam sint porro quaerat
                            odit architecto.</p>
                    </div>
                    <div class="col-md-4">
                        <h1><b>Hubungi Kami</b></h1>
                        <i class="fa-solid fa-house"></i><p> Jl. Kemantren Raya No.5, RT.02/RW.04,Wonosari, Kec. Ngaliyan, Kota Semarang, Jawa Tengah 50186</p>
                        <p>binusasmg.sch.id</p>
                        <p>(024)86620971</p>
                    </div>
                    <div class="col-md-4">
                        <h1><b>Peta Lokasi</b></h1>

                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>