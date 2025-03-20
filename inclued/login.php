<?php
session_start(); // Mulai sesi

// Konfigurasi koneksi ke database
$servername = "localhost";
$username = "u847122198_novri";
$password = "Novri017#";
$dbname = "u847122198_apt";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Proses login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $conn->real_escape_string($_POST['username']);
    $password = $_POST['password'];

    // Ambil data pengguna dari database
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $row['username'];
        $_SESSION['role'] = $row['role'];

        // Redirect sesuai role
        if ($row['role'] == 'admin') {
            header("Location: ../Admin/home.php"); // Admin dashboard
        } else {
            header("Location: ../User/user.php"); // User dashboard
        }
    } else {
        echo "Username atau password salah!";
    }
}


$conn->close();

?>

