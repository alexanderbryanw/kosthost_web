<?php
session_start();
$IDPemilik = $_SESSION['IDPemilik'];
$_SESSION['IDPemilik'] = $IDPemilik;
?>

<head>
    <title>KOST HOST</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap.css" />
    <!--Bootstrap CSS-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ovo&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-sm bg navbar-light fixed-top" style="background-color: #fff0cb;">
        <!-- Brand/logo -->
        <img src="../images/logoHijau.png" style="width: 8%; height: 8%;">
        <a class="navbar-brand" href="dashboard-pemilik.php" style="font-family: 'Playfair Display', serif; font-weight: bold; color: #4c7031;">Kost Host</a>

        <!-- Links -->
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
                <a class="nav-link " href="pengajuansewa-pemilik.php" style="font-family: 'Ovo', serif; margin-right: 10pt; color: #4c7031">
                    <span data-feather="bell"></span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="faq-pemilik.php" style="font-weight:bold; font-family: 'Ovo', serif; margin-right: 20pt;">FAQ</a>
            </li>
            <li class="nav-item">
                <a href="profile-pemilik.php" class="btn btn-info" role="button" style="background-color: #f2ae1c; border: none; color: #4c7031">PROFIL</a>
            </li>
        </ul>
    </nav>

    <div class="container" style="font-family: 'Ovo', serif; text-align: center; margin-bottom:20px">
        <h2 style="margin-top: 100px;  color: #4c7031; ">Frequently Asked Questions</h2>
        <div class="container">
            <div class="card" style="width: 700px; display: inline-block; margin-top:20px">
                <div class="card-header bg-success text-white">
                    Bagaimana cara mendaftarkan data kos baru?
                </div>
                <div class="card-body">
                    Untuk mendaftarkan kos, Anda akan diminta mengisi informasi kos dengan lengkap pada menu Tambah Data Kos. Ada pun informasi kos tersebut diantaranya adalah:
                    Data Kos, Alamat Kos, Foto Kos, Foto Kamar, Fasilitas, Ketersediaan Kamar, dan juga Harga.
                </div>
            </div>
            <div class="card" style="width: 700px; display: inline-block; margin-top: 20px;">
                <div class="card-header bg-success text-white">
                    Bagaimana cara melakukan update kos?
                </div>
                <div class="card-body">
                Anda dapat melakukan update kos melalui dua cara: Melalui menu Edit Kos, dan Melalui menu Update Kamar dan Harga. Jika Anda update melalui menu Edit Kos, maka data kos yang Anda update akan diverifikasi terlebih dahulu oleh tim KostHost.
                </div>
            </div>
            <div class="card" style="width: 700px; display: inline-block; margin-top: 20px;">
                <div class="card-header bg-success text-white">
                    Mengapa iklan kos yang saya buat belum tampil?
                </div>
                <div class="card-body">
                Ada beberapa kemungkinan iklan kos yang dibuat belum tampil, antara lain: Akun pemilik kos Anda belum terverifikasi, Iklan kos Anda masih dalam proses verifikasi, atau Proses verifikasi iklan kos Anda ditolak karena terdapat data yang tidak lengkap/ tidak sesuai.
                </div>
            </div>
            <div class="card" style="width: 700px; display: inline-block; margin-top: 20px;">
                <div class="card-header bg-success text-white">
                    Apa tips foto kos agar menarik dan mudah diverifikasi admin?
                </div>
                <div class="card-body">
                Dalam mencari kos idaman mereka, para pencari kos akan lebih tertarik untuk menghubungi kos yang memiliki banyak foto menarik, dan mudah dilihat. Di sisi lain, pada saat Anda mendaftarkan kos, tim admin KostHost harus melakukan verifikasi agar data kos dan fotonya benar, dapat dipertanggung-jawabkan, dan mudah dilihat di KostHost.
                </div>
            </div>
        </div>
    </div>

     <!-- Icons -->
     <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()
    </script>
</body>