<?php

// Konfigurasi koneksi ke database
$servername = "localhost";
$username = "u847122198_novri";
$password = "Novri017#";
$dbname = "u847122198_apt";
// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Memproses data dari form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Enkripsi password

    // Masukkan data ke tabel users
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        // Tampilkan pesan sukses dan redirect ke halaman login
        echo "<script>
                alert('Registrasi berhasil! Silakan login.');
                window.location.href = '../login.php';
              </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
