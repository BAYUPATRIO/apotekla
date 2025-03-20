<?php
// Konfigurasi koneksi database menggunakan PDO
$servername = "localhost";
$username = "u847122198_novri";
$password = "Novri017#";
$dbname = "u847122198_apt";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}

// Query untuk mengambil data produk
$sql = "SELECT * FROM products";
$stmt = $conn->prepare($sql);
$stmt->execute();
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk - Apotek L A</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f5f5f5;
            color: #333;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        header {
            background: rgba(0, 128, 0, 0.9);
            color: white;
            text-align: center;
            padding: 1rem;
        }

        .product-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
            gap: 15px;
            padding: 20px;
        }

        .product-item {
            background: white;
            border-radius: 10px;
            padding: 10px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .product-item img {
            width: 100%;
            max-height: 150px;
            object-fit: cover;
            border-radius: 8px;
        }

        .whatsapp-float {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #25D366;
            padding: 10px;
            border-radius: 50%;
            box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease-in-out;
        }

        .whatsapp-float img {
            width: 50px;
        }

        .whatsapp-float:hover {
            transform: scale(1.1);
        }

        footer {
            background: green;
            color: white;
            text-align: center;
            padding: 1rem;
            margin-top: auto;
        }

        @media (max-width: 768px) {
            .product-list {
                grid-template-columns: repeat(2, 1fr);
            }
        }
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
            font-size: 30px;
            font-weight: bold;
            color : #fff;

             
        }
        .logo img {
            width: 250px;
            height: 250px;
            display: flex-wrap;
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
            background: green;
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
            color: green;
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
            color: blue;
            
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
                color:green;
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
                color: green;
            }

            .menu-item {
                max-width: 120px;
            }

            .description {
                padding: 1.5rem;
                margin: 1rem;
                color:green;
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
                color: green;
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
</head>
<body>

<header>
      <div class="logo">Daftar Produk</div>
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
</header>
<div class="menu-section">
        <div class="menu-item">
            <a href="index.php">Home</a>
        </div>
      
        <div class="menu-item">
            <a href="hubungi_index.html">Hubungi Kami</a>
        </div>
       
       
    </div>
<main>
    <div class="container">
        <input type="text" id="searchInput" class="form-control my-3" placeholder="Cari produk..." onkeyup="searchProducts()">
        <div class="product-list" id="productList">
            <?php if (!empty($products)) : ?>
                <?php foreach ($products as $row) : ?>
                    <div class="product-item" data-name="<?= strtolower($row['name']); ?>">
                        <img src="../uploads/<?= htmlspecialchars($row['image_url']); ?>" alt="<?= htmlspecialchars($row['name']); ?>">
                        <h3><?= htmlspecialchars($row['name']); ?></h3>
                        <a href="https://wa.me/message/N62EAUZP5H7IH1?text=Apakah produk ini masih ada?" class="btn btn-success btn-sm mt-2">Tanya via WhatsApp</a>
                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <p class="text-center">Belum ada produk yang ditambahkan.</p>
            <?php endif; ?>
        </div>
    </div>

    <a href="https://wa.me/message/N62EAUZP5H7IH1" class="whatsapp-float" target="_blank">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
    </a>
</main>

<footer>
    <p>&copy; 2025 Apotek L A. Semua Hak Dilindungi.</p>
</footer>

<script>
    function searchProducts() {
        let input = document.getElementById('searchInput').value.toLowerCase();
        let items = document.querySelectorAll('.product-item');

        items.forEach(item => {
            let name = item.getAttribute('data-name');
            item.style.display = name.includes(input) ? "block" : "none";
        });
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
