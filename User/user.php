<?php 
session_start();

// Periksa apakah pengguna sudah login
if ($_SESSION['role'] != 'user') {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  
</head>
 <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #FFFFFF 0%, #FFFFFF 100%);
            color: green;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            text-align: center;
        }

        header {
            background: green(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 1rem 2rem;
            border-bottom: 1px solid green(255, 255, 255, 0.2);
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            flex-direction: column;
            text-align: center;
            background: green;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: bold;
             color : #fff;
        }

        .contact {
            display: flex;
            gap: 15px;
            align-items: center;
            flex-wrap: wrap;
            color : #fff;
        }

        .contact-item {
            display: flex;
            align-items: center;
            gap: 5px;
            font-size: 0.9rem;
        }

        .contact-item img {
            width: 20px;
            height: 20px;
        }

        .login-button a {
            font-weight: bold;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .login-button a:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .form-control {
            background: rgba(255, 255, 255, 0.2);
            border: none;
            color: #fff;
        }

        .form-control:focus {
            background: rgba(255, 255, 255, 0.3);
            border: 1px solid #fff;
            box-shadow: none;
        }

        .hero {
            text-align: center;
            padding: 4rem 2rem;
        }

        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .hero h2 {
            font-size: 1.3rem;
            font-weight: 300;
        }

        .description {
            background: #fff;
            backdrop-filter: blur(10px);
            padding: 2rem;
            margin: 2rem auto;
            border-radius: 10px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
            max-width: 800px;
            text-align: center;
        }

        .description h3 {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .devices {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            margin-top: 1.5rem;
            flex-wrap: wrap;
            text-align: center;
        }

        .devices img {
            width: 80%;
            max-width: 300px;
            height: auto;
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            
        }

        footer {
            text-align: center;
            padding: 1rem 0;
            background: black(255, 255, 255, 0.1);
            border-top: 1px solid black(255, 255, 255, 0.2);
            margin-top: auto;
            color: black;
            background-color: green;
        }

        footer a {
            color: black;
            text-decoration: none;
            
        }

        footer a:hover {
            text-decoration: underline;
            color: black;
        }
        
        footer p {
            color:white;
        }
        
        footer h10 {
            color: black;
            
        }

        .menu-section {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin: 2rem auto;
            text-align: center;
            flex-wrap: wrap;
        }

        .menu-item {
            background: black(255, 255, 255, 0.1);
            padding: 1rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s, background 0.3s;
            width: 200%;
            max-width: 150px;
        }

        .menu-item:hover {
            transform: translateY(-5px);
            background: rgba(255, 255, 255, 0.2);
        }

        .menu-item a {
            color: #fff;
            text-decoration: none;
            font-weight: 600;
        }

        @media (max-width: 992px) {
            .hero h1 {
                font-size: 1.8rem;
            }

            .menu-section {
                flex-wrap: wrap;
            }

            .contact {
                flex-direction: column;
                gap: 10px;
            }
        }

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2rem;
            }

            .hero h2 {
                font-size: 1rem;
            }

            .menu-item {
                max-width: 120px;
            }

            .description {
                padding: 1.5rem;
                margin: 1rem;
            }
        }

        @media (max-width: 576px) {
            .devices img {
                width: 100%;
                max-width: 250px;
            }

            .hero {
                padding: 2rem 1rem;
                color: black;
            }

            .description {
                font-size: 0.9rem;
                color: black;
            }

            .menu-section {
                gap: 1rem;
            }

            .menu-item {
                padding: 0.8rem;
            }

            footer .social-media img {
                width: 80px;
            }
        }
        .menu-section {
    display: flex;
    justify-content: center;
    gap: 2rem;
    margin: 2rem auto;
    text-align: center;
    flex-wrap: wrap;
    flex-direction: row; /* Pastikan ini ditambahkan */
}

.menu-item {
    background:green;
    padding: 1rem;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    transition: transform 0.3s, background 0.3s;
    width: auto; /* Sesuaikan dengan kontennya */
    max-width: none; /* Hapus batasan lebar */
    text-align: center;
}

.menu-item:hover {
    transform: translateY(-5px);
    background: rgba(255, 255, 255, 0.2);
}

.rooms .devices-foto {
    display: flex;
    gap: 2rem;
    justify-content: space-between;
    flex-wrap: wrap;
    text-align: center;
}

.rooms .devices {
    text-align: center;
    flex: 1;
    max-width: 300px;
    background: var(--light-grey);
    padding: 1rem;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    flex-wrap: wrap;
}

.rooms .devices img {
    width: 100%; /* Mengisi penuh elemen */
    height: 200px; /* Memberikan tinggi konsisten */
    object-fit: cover; /* Memastikan gambar tidak terdistorsi */
    border-radius: 10px;
    margin-bottom: 1rem;
    flex-wrap: wrap;
    text-align: center;
}

.rooms .devices h3 {
    font-size: 1.2rem;
    color: var(--black);
    text-align: center;
}

.rooms .devices p {
    font-size: 0.9rem;
    color: #666;
    text-align: center;
    .rooms .devices {
    display: flex;
    flex-direction: column; /* Mengatur elemen di dalamnya agar tersusun ke bawah */
    align-items: center; /* Pusatkan konten di tengah */
    justify-content: center; /* Pusatkan secara vertikal jika perlu */
    text-align: center;
    margin: 0 auto; /* Memastikan elemen ini berada di tengah */
    max-width: 400px; /* Sesuaikan dengan lebar yang diinginkan */
}

.rooms .devices img {
    width: 100%; /* Mengisi penuh elemen */
    height: 200px; /* Memberikan tinggi konsisten */
    object-fit: cover; /* Memastikan gambar tidak terdistorsi */
    border-radius: 10px;
    margin-bottom: 1rem;
}
.menu-item a {
    color: white !important;  /* Warna teks tetap putih */
    text-decoration: none;  /* Menghilangkan garis bawah */
    display: block;
    padding: 10px 20px;
    background-color: green;  /* Warna latar tetap hijau */
    border-radius: 5px;
    transition: background 0.3s, color 0.3s;
}

.menu-item a:hover,
.menu-item a:focus,
.menu-item a:active,
.menu-item a:visited {
    background-color: darkgreen !important; /* Warna hijau lebih gelap saat dihover atau diklik */
    color: white !important; /* Pastikan teks tetap putih */
    text-decoration: none;
}


    </style>
<body>
    <header>
        <div class="logo">Apotek L A</div>
        <div class="contact">
            <div class="contact-item">
                <img src="../img/telepone.png" alt="Phone">
                <span>+6285210669197</span>
            </div>
            <div class="contact-item">
                <img src="../img/wa.png" alt="WhatsApp">
                <span>+6285210669197</span>
            </div>
            <div class="contact-item">
                <img src="../img/email.png" alt="Email">
                <span>apotekla.shop@gmail.com</span>
            </div>
        </div>
      <div class="login-button">
            <a href="../inclued/logout.php" class="btn btn-outline-light">Logout</a>
        </div>
    </header>
    
    <div class="menu-section">
        <div class="menu-item">
            <a href="produk_user.php">Produk</a>
        </div>
        <div class="menu-item">
            <a href="hubungi_kami.html">Hubungi Kami</a>
        </div>
    </div>

   
    <div class="hero">
        <h1>Temukan Solusi Kesehatan Anda Disini</h1>
        <h2>Produk obat aman, lengkap dan terpercaya untuk Anda dan keluarga.</h2>
    </div>

    <div class="description">
        <h3>Apotek L A Pasar Pramuka, Jakarta Timur</h3>
        <p>Belanja di apotek kami mudah, cepat, dan praktis, baik melalui toko langsung maupun online. Kami juga menawarkan harga terjangkau dan anda juga dapat mengunjungi onlineshop kami yang di Shopee & Tokopedia, serta pengiriman yang cepat dan aman, sehingga kesehatan Anda tetap menjadi prioritas utama.</p>
    </div>
    
        <section class="rooms">
    <div class="devices-foto">
        <div class="devices">
            <img src="../img/gm0.png" alt="Produk 1">
            <h3>Xepazym</h3>
            <p>Membantu pencernaan pada penderita kekurangan enzim pankreas, meningkatkan penyerapan nutrisi dan mengurangi gejala gangguan pencernaan seperti kembung dan diare berlemak.</p>
        </div>
         <div class="devices">
            <img src="../img/gm2.png" alt="Produk 1">
            <h3>Tride Capsul Vitamin D3</h3>
            <p>membantu memenuhi kebutuhan vitamin D dalam tubuh, menjaga kesehatan tulang dan gigi, meningkatkan penyerapan kalsium dan fosfor, mendukung sistem imun.</p>
        </div> <div class="devices">
            <img src="../img/gm3.png" alt="Produk 1">
            <h3>Calnic Plus Sirup</h3>
            <p>Bermanfaat mencegah dan mengatasi defisiensi kalsium, mendukung pertumbuhan tulang pada anak, serta menjaga kepadatan tulang pada orang dewasa dan lansia untuk mencegah osteoporosis.</p>
        </div>
        <div class="devices">
            <img src="../img/gm4.png" alt="Produk 2">
            <h3>Cohistan Expectorant</h3>
            <p>Membantu mengencerkan dan mengeluarkan dahak, sehingga meredakan batuk berdahak akibat infeksi saluran pernapasan seperti bronkitis atau flu.</p>
        </div>
    </div>
    </div>
     

    <footer>
        <div class="description">
            <h3>E-commerce Store Kami</h3>
            <a>Klik gambar untuk menuju web kami</a>
            <div class="social-media">
                <a href="https://tokopedia.link/bulanmedica2" target="_blank">
                    <img src="../img/Tokopediaa.png" alt="tokopedia" style="width:100px; height:auto; margin:10px;">
                </a>

                <a href="https://id.shp.ee/E3iRcXU" target="_blank">
                    <img src="../img/shopee.png" alt="Shopee" style="width:100px; height:auto; margin:10px;">
                </a>

            </div>
            <div class="help-button" style="margin-top: 20px;">
                <a href="https://wa.me/message/N62EAUZP5H7IH1" target="_blank" class="btn btn-success">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" style="width:20px; height:auto; margin-right:5px;">
                    Pesan Sekarang!
                </a>
            </div>
        </div>
        <p>&copy; 2025 Apotek L A. Semua Hak Dilindungi.</p>
        <h10 href="privasi">Design by</h10> | <h10 href="syarat">Yurey Developed</h10>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>