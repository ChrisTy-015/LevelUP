<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LevelUp - Accueil</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f1f5f8;
            overflow-x: hidden;
            color: #333;
        }

        header {
            background-color: #4e73df;
            color: white;
            padding: 20px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            font-size: 30px;
            font-weight: 700;
        }

        header nav {
            display: flex;
            align-items: center;
        }

        header a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            padding: 10px 20px;
            border-radius: 25px;
            background-color: transparent;
            border: 2px solid white;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        header a:hover {
            background-color: white;
            color: #4e73df;
            transform: scale(1.05);
        }

        .hero {
            background-image: url('https://example.com/hero-image.jpg');
            background-size: cover;
            background-position: center;
            height: 450px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
            position: relative;
        }

        .hero h2, .hero p {
            color: #000; /* Changer la couleur du texte en noir */
        }

        .hero h2 {
            font-size: 40px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .hero p {
            font-size: 18px;
        }

        .search-container {
            margin-top: -100px;
            display: flex;
            justify-content: center;
            width: 100%;
        }

        .search-container input[type="text"] {
            padding: 15px;
            width: 60%;
            border-radius: 25px;
            border: 1px solid #ddd;
            font-size: 16px;
            transition: all 0.3s ease-in-out;
        }

        .search-container input[type="text"]:focus {
            border-color: #4e73df;
            box-shadow: 0 0 10px rgba(78, 115, 223, 0.5);
        }

        .search-container button {
            padding: 15px 25px;
            border: none;
            background-color: #4e73df;
            color: white;
            border-radius: 25px;
            font-size: 16px;
            cursor: pointer;
            margin-left: 10px;
            transition: all 0.3s ease-in-out;
        }

        .search-container button:hover {
            background-color: #2e59d9;
            transform: scale(1.05);
        }

        .services {
            display: flex;
            justify-content: space-around;
            margin-top: 40px;
            padding: 40px 20px;
            background-color: white;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .service-card {
            background-color: white;
            border-radius: 10px;
            padding: 20px;
            width: 30%;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
            transition: all 0.3s ease-in-out;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        }

        .service-card h3 {
            margin-bottom: 15px;
            font-size: 22px;
            color: #333;
        }

        .service-card p {
            font-size: 14px;
            color: #555;
        }

        footer {
            background-color: #4e73df;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
        }

        footer a {
            color: white;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <header>
        <h1>LevelUp</h1>
        <nav>
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        </nav>
    </header>

    <section class="hero">
        <div>
            <h2>Trouver votre mentor idéal</h2>
            <p>Un accompagnement personnalisé pour atteindre vos objectifs</p>
        </div>
    </section>

    <div class="search-container">
        <input type="text" placeholder="Recherchez un mentor, une matière, ou un domaine...">
        <button>Rechercher</button>
    </div>

    <section class="services">
        <div class="service-card">
            <h3>📚 Mentorat académique</h3>
            <p>Des experts pour vous aider à réussir vos examens et projets</p>
        </div>
        <div class="service-card">
            <h3>💻 Cours particuliers</h3>
            <p>Des séances personnalisées pour améliorer vos compétences</p>
        </div>
        <div class="service-card">
            <h3>🚀 Conseils de carrière</h3>
            <p>Des mentors prêts à vous guider dans vos choix professionnels</p>
        </div>
    </section>

    <footer>
        <p>© 2025 LevelUp. Tous droits réservés. <br><a href="#">Politique de confidentialité</a> | <a href="#">Conditions d'utilisation</a></p>
    </footer>

</body>
</html>
