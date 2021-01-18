<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/breakpoints.css">
    <title>Seaweed Inc.</title>
</head>
<body>
    <nav>
        <a href="/">
            <img src="./images/Logo.png" class="logo" alt="Logo Seaweed Inc.">
        </a>
        <ul>
            <!-- TODO: Re-organize and group these links -->
            <li>
                <a href="/habitat">
                    Habitat
                </a>
            </li>
            <li>
                <a href="/harga">
                    Harga
                </a>
            </li>
            <li>
                <a href="/karakteristik">
                    Karakteristik
                </a>
            </li>
            <li>
                <a href="/klasifikasi">
                    Klasifikasi
                </a>
            </li>
            <li>
                <a href="/manfaat">
                    Manfaat
                </a>
            </li>
            <li>
                <a href="/morfologi">
                    Morfologi
                </a>
            </li>
            <li>
                <a href="/cara_budidaya">
                    Cara Budidaya
                </a>
            </li>
            <li>
                <a href="/daerah_penghasil">
                    Daerah Penghasil
                </a>
            </li>
            <li>
                <a href="/negara_importir">
                    Negara Importir
                </a>
            </li>
        </ul>
    </nav>
    <main>
        <?php
            $request = $_SERVER['REQUEST_URI'];
            switch ($request) {
                case '/' :
                    require __DIR__ . '/views/landing.html';
                    break;
                case '' :
                    require __DIR__ . '/views/landing.html';
                    break;
                case '/peta_situs' :
                    require __DIR__ . '/views/peta_situs.html';
                    break;
                case '/tentang_kami' :
                    require __DIR__ . '/views/tentang_kami.html';
                    break;
                case '/daftar_pustaka' :
                    require __DIR__ . '/views/daftar_pustaka.html';
                    break;
                default:
                    http_response_code(404);
                    require __DIR__ . '/views/404.html';
                    break;
            }
        ?>
    </main>
    <footer>
        <!-- Create the Footer -->
        <div>
            <a href="/peta_situs">
                Peta Situs
            </a>
            <a href="/tentang_kami">
                Tentang Kami
            </a>
            <img src="./images/Logo.png" class="logo-footer" alt="Logo Seaweed Inc.">
            <a href="/daftar_pustaka">
                Daftar Pustaka
            </a>
            <a href="https://github.com/Rayhanga/seaweed-inc" target="_blank">
                Source Code
            </a>
        </div>
        <div>
            <hr/>
        </div>
        <div>
            <img src="images/Rengganis.png" class="avatar" alt="Rengganis">
            <img src="images/Rayhan.png" class="avatar" alt="Rayhan">
        </div>
        <div>
            <p class="text-faint">
                © Seaweed Inc. 2021. Created by Rayhan Gusty Alif & Rengganis Nurul Aini
            </p>
        </div>
    </footer>
</body>
</html>