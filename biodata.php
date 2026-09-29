<?php
$nama = "Athirah Naurah Jinan";
$nim = "2559201026";
$jurusan = "Sistem Teknologi Informasi";
$kampus = "Universitas Pertiba";
$hobi1 = "Memasak";
$hobi2 = "Bermain Seni";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tugas Biodata Web</title>
    <!-- Menghubungkan file HTML dengan file CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Membuat kotak bungkus dengan class 'kotak-biodata' -->
    <div class="kotak-biodata">
        
        <h1>Biodata</h1>
        
        <!-- Menampilkan Gambar (Ganti src dengan nama file foto kamu, misal: foto.jpg) -->
        <img src="profil.jpeg" alt="Foto Profil">

        <h2>Profil Mahasiswa</h2>
        
        <!-- Menampilkan teks paragraf -->
       <p><?php echo $nama; ?> (Jinan)</p>

        <!-- Membuat Tabel untuk data diri -->
        <table>
            <tr>
                <td>NIM</td>
                <td><?php echo $nim; ?></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td><?php echo $jurusan; ?></td>
            </tr>
            <tr>
                <td>Kampus</td>
                <td><?php echo $kampus; ?></td>
            </tr>
        </table>

        <!-- Membuat Daftar Hobi (List) -->
        <h2>Hobi Saya</h2>
        <ul>
            <li><?php echo $hobi1; ?></li>
            <li><?php echo $hobi2; ?></li>
        </ul>

    </div>

</body>
</html>