<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Agdasima&family=Poppins&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: url(https://foto.data.kemdikbud.go.id/getImage/20328986/8.jpg);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            height: 100%;

        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .card {
            width: 350px;
            background-color: rgba(255, 255, 255, 0.3);
            border-radius: 15px;
            padding: 40px;
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        h2 {
            color: #111;
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            color: #111;
            margin-bottom: 5px;
        }

        input {
            padding: 10px;
            margin-bottom: 10px;
            border: none;
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.8);
        }

        button {
            padding: 10px;
            background-color: #fff;
            color: #498ffc;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #70c1ff;
        }

        @media (max-width: 480px) {
            .card {
                width: 100%;
                max-width: 350px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <h2>Login Form</h2>
            <form action="<?php echo base_url(); ?>Auth/aksi_login" method="post">
                <label for="email">Email</label>
                <input type="text" id="email" placeholder="Enter your email" name="email">

                <label for="password">Password</label>
                <input type="password" id="password" placeholder="Enter your password" name="password">

                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</body>

</html>