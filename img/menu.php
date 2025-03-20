<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Menu</title>
    <style>
        /* CSS untuk menu */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .menu-container {
            position: relative;
            width: 100%;
            background-color: #007BFF;
            color: white;
        }

        .menu-button {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            padding: 15px;
            cursor: pointer;
            background-color: #0056b3;
            border: none;
            color: white;
            font-size: 18px;
        }

        .dropdown-menu {
            display: none; /* Menu tersembunyi secara default */
            flex-direction: column;
            align-items: center;
            background-color: #007BFF;
        }

        .dropdown-menu a {
            width: 100%;
            text-align: center;
            padding: 10px 0;
            color: white;
            text-decoration: none;
            border-top: 1px solid white;
        }

        .dropdown-menu a:hover {
            background-color: #0056b3;
        }

        /* Responsivitas */
        @media (max-width: 768px) {
            .dropdown-menu a {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <div class="menu-container">
        <!-- Tombol utama -->
        <button class="menu-button" onclick="toggleMenu()">☰ Menu</button>

        <!-- Tombol dropdown -->
        <div class="dropdown-menu" id="dropdownMenu">
            <a href="#home">Home</a>
            <a href="#produk">Produk</a>
            <a href="#kontak">Kontak</a>
            <a href="#logout">Logout</a>
        </div>
    </div>

    <script>
        // JavaScript untuk toggle menu
        function toggleMenu() {
            const menu = document.getElementById('dropdownMenu');
            if (menu.style.display === 'flex') {
                menu.style.display = 'none'; // Sembunyikan menu
            } else {
                menu.style.display = 'flex'; // Tampilkan menu
            }
        }
    </script>
</body>
</html>
