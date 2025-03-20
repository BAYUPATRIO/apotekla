<?php
$servername = "localhost";
$username = "u847122198_novri";
$password = "Novri017#";
$dbname = "u847122198_apt";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$id = $_GET['id'];
$sql = "DELETE FROM products WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
    echo "Produk berhasil dihapus.";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
