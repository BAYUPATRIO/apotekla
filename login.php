<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            color: #fff;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-card {
            background:green;
            backdrop-filter: blur(10px);
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 100%;
            max-width: 400px;
        }

        .login-card h1 {
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .login-card p.subtitle {
            font-size: 1rem;
            margin-bottom: 1.5rem;
            font-weight: 300;
        }

        .login-card .form-control {
           
            border: none;
            color: #fff;
        }

        .login-card .form-control:focus {
           
            border: 1px solid #fff;
            box-shadow: none;
        }

        .login-card button {
            background-color: #ff6a6a;
            color: #fff;
            border: none;
            font-weight: 600;
            transition: all 0.3s;
        }

        .login-card button:hover {
            background-color: #ff4040;
        }

        .register-link {
            margin-top: 1.5rem;
            font-size: 0.85rem;
        }

        .register-link a {
            color: #ff6a6a;
            text-decoration: none;
        }

        .register-link a:hover {
            text-decoration: underline;
        }
        input {
    color: black !important; /* Pastikan teks terlihat */
    background-color: white; /* Ubah sesuai desain */
    border: 1px solid #ccc;
    padding: 10px;
    font-size: 16px;
}

input::placeholder {
    color: #888; /* Warna placeholder lebih redup */
}

    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="login-card">
            <h1>Welcome Back!</h1>
            <p class="subtitle">Please login to your account</p>
            <form action="inclued/login.php" method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" id="username" name="username" class="form-control" placeholder="Enter your username" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
                </div>
                <button type="submit" class="btn btn-danger w-100">Login</button>
            </form>
            <div class="register-link mt-3">
                <p>Don’t have an account? <a href="register.html">Register here</a></p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
