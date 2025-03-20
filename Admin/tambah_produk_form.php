<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/cropperjs/dist/cropper.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/cropperjs"></script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: #fff;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background: rgba(255, 255, 255, 0.1);
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
            max-width: 500px;
            width: 100%;
        }

        h1 {
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .product-item img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        button {
            background-color: #6a11cb;
            color: #fff;
            border: none;
            padding: 0.8rem 1.5rem;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 1.5rem;
            width: 100%;
        }

        button:hover {
            background-color: #2575fc;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Tambah Produk Baru</h1>
        <form action="../inclued/tambah.php" method="POST" enctype="multipart/form-data" id="product-form">
            <div class="mb-3">
                <label for="name" class="form-label">Nama Produk:</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Masukkan nama produk" required>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Upload Gambar:</label>
                <input type="file" id="image" name="image" class="form-control" accept="image/*" required>
            </div>

            <div class="mb-3" id="cropper-container" style="display: none;">
                <label for="cropped-image" class="form-label">Potong Gambar:</label>
                <div>
                    <img id="image-preview" style="max-width: 100%; border: 1px solid #fff;" alt="Preview">
                </div>
            </div>

            <!-- Input Hidden untuk Gambar Hasil Crop -->
            <input type="hidden" id="cropped-image-data" name="cropped_image">

            <button type="submit">Tambah Produk</button>
            <a href="produk.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const imageInput = document.getElementById("image");
            const cropperContainer = document.getElementById("cropper-container");
            const imagePreview = document.getElementById("image-preview");
            const croppedImageData = document.getElementById("cropped-image-data");
            let cropper;

            // Saat gambar dipilih
            imageInput.addEventListener("change", function (e) {
                const file = e.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function (event) {
                        imagePreview.src = event.target.result;
                        cropperContainer.style.display = "block";

                        // Inisialisasi Cropper.js
                        if (cropper) {
                            cropper.destroy();
                        }
                        cropper = new Cropper(imagePreview, {
                            aspectRatio: 1, // Rasio aspek (1:1 untuk persegi)
                            viewMode: 2,
                        });
                    };
                    reader.readAsDataURL(file);
                }
            });

            // Kirim gambar hasil crop saat form di-submit
            document.getElementById("product-form").addEventListener("submit", function (event) {
                if (cropper) {
                    const canvas = cropper.getCroppedCanvas({
                        width: 300, // Lebar hasil potongan
                        height: 300, // Tinggi hasil potongan
                    });

                    // Konversi hasil potongan ke base64 dan masukkan ke input hidden
                    croppedImageData.value = canvas.toDataURL("image/png");

                    // Membiarkan form submit
                }
            });
        });
    </script>
</body>
</html>
