<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nabil</title>

    <!-- BULMA CSS -->
    <link rel="stylesheet" href="<?php echo base_url('/css/bulma.min.css') ?>">

    <style>
        /* ONLINE BULMA CSS */
        @import "https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css";

        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

        html, * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
        }
        nav{
            background-color: aqua;
            height: 12svh;
            display: flex;
            align-items: center;
        }

        ul{
            display: flex;
            align-items: center;
            width: 50svw;
            height: 100%;
            justify-content: space-evenly;
        }

        li{
            list-style: none;
        }

        li > a{
            text-decoration: none;
            color: black;
            border-radius: 3em;
            padding: .7em 1em;
            transition: .8s;
        }
        
        li > a:hover{
            border-radius: .8em;
            background-color: #161A30;
            color: #F0ECE5;
        }

        p{
            font-size: 1.3em;
            font-weight: bold;
        }

        main{
            height: 100svh;
        }

        /* css mahasiswalist */

        .container{
            padding-top: 5svh;
            width: 75svw;
        }

        body{
            background-image: url(gambar/Universitas.jpg);
        }

    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="/">Data Mahasiswa</a></li>
            <li><a href="/formMahasiswa">Form Input Mahasiswa</a></li>
        </ul>
    </nav>
    <main>
        <?= $this->renderSection('content'); ?>
    </main>
</body>
</html>