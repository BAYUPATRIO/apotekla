<style>
   body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
            color: #fff;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        header {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 1rem 2rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header .logo {
            font-size: 1.8rem;
            font-weight: bold;
        }

        header form {
            display: flex;
            gap: 0.5rem;
        }

        header nav {
            margin-left: 1rem;
        }

        header nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 0.5rem;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            transition: background 0.3s;
        }

        header nav a:hover {
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
            background: rgba(255, 255, 255, 0.1);
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
            background: rgba(255, 255, 255, 0.1);
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            margin-top: auto;
        }

        footer a {
            color: #ff6a6a;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
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
            background: rgba(255, 255, 255, 0.1);
            padding: 1rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s, background 0.3s;
            width: 100%;
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

        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2rem;
            }

            .hero h2 {
                font-size: 1rem;
            }

            header {
                flex-direction: column;
                text-align: center;
            }

            header form {
                flex-direction: column;
                gap: 0.5rem;
            }

            header nav {
                margin: 1rem 0;
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
            }

            .description {
                font-size: 0.9rem;
            }

            .menu-section {
                gap: 1rem;
            }

            .menu-item {
                padding: 0.8rem;
            }
        }
  
</style>
<div class="menu-section">
        <div class="menu-item">
        <a href="https://wa.me/+62081275648770" target="_blank" class="btn-whatsapp">Hubungi via WhatsApp</a>

        </div>
       
    </div>
    

