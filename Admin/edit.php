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
$sql = "SELECT * FROM products WHERE id='$id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $product = $result->fetch_assoc();
} else {
    echo "Produk tidak ditemukan.";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $benefit = $_POST['benefit'];
    $price = $_POST['price'];

    if (!empty($_FILES['image_url']['name'])) {
        $image_url = $_FILES['image_url']['name'];
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($image_url);

        if (move_uploaded_file($_FILES['image_url']['tmp_name'], $target_file)) {
            $sql = "UPDATE products SET name='$name', benefit='$benefit', price='$price', image_url='$image_url' WHERE id='$id'";
        }
    } else {
        $sql = "UPDATE products SET name='$name', benefit='$benefit', price='$price' WHERE id='$id'";
    }

    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success'>Produk berhasil diupdate.</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk - Apotek L A</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: #fff;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem;
        }

        .form-container {
            background: rgba(255, 255, 255, 0.1);
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 500px;
        }

        .form-container h1 {
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .form-container label {
            font-size: 1rem;
            margin-bottom: 0.5rem;
            display: block;
        }

        .form-container input,
        .form-container textarea,
        .form-container button {
            width: 100%;
            margin-bottom: 1rem;
            padding: 0.8rem;
            border: none;
            border-radius: 5px;
        }

        .form-container input,
        .form-container textarea {
            background: rgba(255, 255, 255, 0.2);
            color: #fff;
        }

        .form-container input:focus,
        .form-container textarea:focus {
            background: rgba(255, 255, 255, 0.3);
            border: 1px solid #fff;
            outline: none;
        }

        .form-container button {
            background: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background 0.3s;
        }

        .form-container button:hover {
            background: #0056b3;
        }

        .alert {
            margin-bottom: 1rem;
            padding: 1rem;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Edit Produk</h1>
        <form method="POST" enctype="multipart/form-data">
            <label for="name">Nama Produk:</label>
            <input type="text" id="name" name="name" value="<?php echo $product['name']; ?>" required>

            <label for="benefit">Manfaat:</label>
            <textarea id="benefit" name="benefit" rows="3" required><?php echo $product['benefit']; ?></textarea>

            <label for="price">Harga:</label>
            <input type="number" id="price" name="price" value="<?php echo $product['price']; ?>" required>

            <label for="image_url">Gambar:</label>
            <input type="file" id="image_url" name="image_url">

            <button type="submit" class="btn btn-primary">Update Produk</button>
              <a href="produk.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
