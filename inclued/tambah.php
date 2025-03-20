<?php
// Konfigurasi koneksi ke database
$servername = "localhost";
$username = "u847122198_novri";
$password = "Novri017#";
$dbname = "u847122198_apt";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari formulir
$name = $_POST['name'];
$benefit = $_POST['benefit'];
$description = $_POST['description'];
$price = $_POST['price'];

// Menangani gambar hasil crop
if (isset($_POST['cropped_image'])) {
    $croppedImage = $_POST['cropped_image'];

    // Decode base64 menjadi file gambar
    list($type, $croppedImage) = explode(';', $croppedImage);
    list(, $croppedImage)      = explode(',', $croppedImage);
    $croppedImage = base64_decode($croppedImage);

    // Tentukan nama file unik untuk gambar hasil crop
    $croppedImageFileName = uniqid() . '.png';

    // Tentukan path untuk menyimpan gambar hasil crop
    $croppedImagePath = "../uploads/" . $croppedImageFileName;

    // Simpan gambar hasil crop ke server
    file_put_contents($croppedImagePath, $croppedImage);

    // Simpan nama file gambar hasil crop ke database
    $stmt = $conn->prepare("INSERT INTO products (name, benefit, description, price, image_url) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssis", $name, $benefit, $description, $price, $croppedImageFileName);

    if ($stmt->execute()) {
        // Redirect ke halaman produk
        header("Location: ../Admin/produk.php");
        exit();
    } else {
        echo "Error: Gagal menyimpan data ke database.";
    }

    $stmt->close();
}

// Tutup koneksi
$conn->close();
?>
