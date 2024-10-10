<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kamen Rider</title>
</head>
<body>
    <?php
    $riderName = isset($_GET['name']) ? $_GET['name'] : '';

    if ($riderName == 'Kuuga') {
        echo "<h1>Detail Kamen Rider Kuuga</h1>";
        echo "<p>Kamen Rider Kuuga adalah Kamen Rider pertama di era Heisei. Dia memiliki empat bentuk utama dengan kemampuan yang berbeda-beda.</p>";
    } elseif ($riderName == 'Agito') {
        echo "<h1>Detail Kamen Rider Agito</h1>";
        echo "<p>Kamen Rider Agito melanjutkan tema dari Kuuga dan memiliki beberapa bentuk yang mewakili elemen berbeda.</p>";
    } elseif ($riderName == 'Ryuki') {
        echo "<h1>Detail Kamen Rider Ryuki</h1>";
        echo "<p>Kamen Rider Ryuki berfokus pada perang antar rider untuk mendapatkan keinginan tertinggi.</p>";
    } elseif ($riderName == 'Faiz') {
        echo "<h1>Detail Kamen Rider Faiz</h1>";
        echo "<p>Kamen Rider Faiz adalah kisah tentang pertarungan melawan Orphnoch, ras evolusi manusia.</p>";
    } elseif ($riderName == 'Blade') {
        echo "<h1>Detail Kamen Rider Blade</h1>";
        echo "<p>Kamen Rider Blade bertarung menggunakan kartu kekuatan dan merupakan bagian dari organisasi BOARD.</p>";
    } elseif ($riderName == 'Hibiki') {
        echo "<h1>Detail Kamen Rider Hibiki</h1>";
        echo "<p>Kamen Rider Hibiki memiliki tema yang berbeda dari serial lainnya, dengan konsep oni dan alat musik.</p>";
    } elseif ($riderName == 'Kabuto') {
        echo "<h1>Detail Kamen Rider Kabuto</h1>";
        echo "<p>Kamen Rider Kabuto bertarung melawan Worm, alien yang bisa meniru manusia. Kabuto memiliki akses ke Clock Up.</p>";
    } elseif ($riderName == 'Den-o') {
        echo "<h1>Detail Kamen Rider Den-o</h1>";
        echo "<p>Kamen Rider Den-o adalah serial dengan tema perjalanan waktu dan dikenal karena berbagai bentuk Imagin yang komikal.</p>";
    } elseif ($riderName == 'Kiva') {
        echo "<h1>Detail Kamen Rider Kiva</h1>";
        echo "<p>Kamen Rider Kiva adalah cerita tentang Fangire, makhluk yang menyerang manusia, dengan latar dua era berbeda.</p>";
    } elseif ($riderName == 'Decade') {
        echo "<h1>Detail Kamen Rider Decade</h1>";
        echo "<p>Kamen Rider Decade adalah Kamen Rider yang mampu berpindah antar dunia dan mengambil kekuatan dari Rider lain.</p>";
    } else {
        echo "<h1>Detail Kamen Rider</h1>";
        echo "<p>Tidak ada informasi yang ditemukan untuk Kamen Rider tersebut.</p>";
    }
    ?>

    <a href="dashboard.php">Kembali ke Daftar Kamen Rider</a>
</body>
</html>
