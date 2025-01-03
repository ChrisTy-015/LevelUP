<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de Bord - LevelUp</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f9f9f9;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        header {
            width: 100%;
            background-color: #3490dc;
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
        }

        .dashboard-container {
            display: flex;
            justify-content: space-around;
            width: 90%;
            max-width: 1200px;
            margin-top: 30px;
        }

        .card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 45%;
        }

        .card h2 {
            font-size: 20px;
            margin-bottom: 20px;
            color: #3490dc;
        }

        .message, .announcement {
            margin-bottom: 15px;
            padding: 10px;
            border-radius: 5px;
            background-color: #f1f1f1;
        }

        .message:hover, .announcement:hover {
            background-color: #e6e6e6;
        }

        .message p, .announcement p {
            font-size: 16px;
        }

        footer {
            margin-top: 30px;
            padding: 20px;
            width: 100%;
            text-align: center;
            background-color: #3490dc;
            color: white;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <header>
        Tableau de Bord - LevelUp
    </header>

    <div class="dashboard-container">
        <!-- Section Messages -->
        <div class="card">
            <h2>📩 Messages</h2>
            <div class="message">
                <p><strong>Mentor Jean:</strong> N'oublie pas notre session demain à 14h.</p>
            </div>
            <div class="message">
                <p><strong>Mentee Clara:</strong> Merci pour les conseils ! 😊</p>
            </div>
            <div class="message">
                <p><strong>Admin:</strong> Votre profil a été mis à jour avec succès.</p>
            </div>
        </div>

        <!-- Section Annonces -->
        <div class="card">
            <h2>📢 Annonces</h2>
            <div class="announcement">
                <p>🚀 Nouvelle fonctionnalité : Vous pouvez désormais planifier des sessions de groupe !</p>
            </div>
            <div class="announcement">
                <p>🌟 Astuce : Ajoutez une bio captivante pour attirer plus de mentorés.</p>
            </div>
            <div class="announcement">
                <p>🎉 Bonne nouvelle : 20% de réduction sur les sessions premium jusqu'à la fin du mois !</p>
            </div>
        </div>
    </div>

    <footer>
        © 2025 LevelUp. Tous droits réservés.
    </footer>
</body>
</html>
