<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - LevelUP</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <style>
       
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f3f4f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            width: 100%;
            max-width: 500px;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .form-container h1 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333;
        }

        .form-container .input-group {
            margin-bottom: 20px;
            position: relative;
        }

        .form-container input {
            width: 100%;
            padding: 15px 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            outline: none;
            transition: 0.3s;
        }

        .form-container input:focus {
            border-color: #3490dc;
        }

        .form-container button {
            width: 100%;
            padding: 15px;
            background-color: #3490dc;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        .form-container button:hover {
            background-color: #2579b8;
        }

        .form-container .links {
            margin-top: 20px;
            font-size: 14px;
        }

        .form-container .links a {
            text-decoration: none;
            color: #3490dc;
        }

        /* Ensures input fields are properly aligned */
        .input-group input {
            width: calc(100% - 40px);
        }

        /* Styling for error messages */
        .error-message {
            color: red;
            font-size: 14px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Se connecter</h1>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="input-group">
                <input type="email" name="email" placeholder="Adresse email" required>
            </div>
            <div class="input-group">
                <input type="password" name="password" placeholder="Mot de passe" required>
            </div>
            <button type="submit">Se connecter</button>
        </form>

        <!-- Affichage des erreurs -->
        @if ($errors->any())
            <div class="error-message">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="links">
            <p>Pas encore inscrit ? <a href="{{ route('register') }}">Créer un compte</a></p>
        </div>
    </div>
</body>
</html>
