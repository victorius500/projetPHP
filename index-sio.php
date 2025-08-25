<?php
$title = "Projet PHP - Stage Développeur Web";
$dateStage = "13 Mai - 27 Juin 2024";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            margin: 0;
            padding: 40px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .container {
            background: white;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            text-align: center;
            max-width: 600px;
        }
        h1 {
            color: #2c3e50;
            margin-bottom: 20px;
        }
        .date-badge {
            background: #e74c3c;
            color: white;
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 1em;
            margin: 10px;
            display: inline-block;
        }
        .link-button {
            display: inline-block;
            background: #3498db;
            color: white;
            text-decoration: none;
            padding: 15px 30px;
            border-radius: 25px;
            font-size: 1.1em;
            margin: 10px;
            transition: all 0.3s ease;
        }
        .link-button:hover {
            background: #2980b9;
            transform: translateY(-2px);
        }
        .slideshow-link {
            background: #e74c3c;
        }
        .slideshow-link:hover {
            background: #c0392b;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><?php echo $title; ?></h1>
        <div class="date-badge"><?php echo $dateStage; ?></div>
        <p>Ma page d'index avec PHP - Présentation de mon stage de développeur web</p>
        
        <div style="margin-top: 30px;">
            <a href="diaporama.php" class="link-button slideshow-link">
                🎯 Voir le Diaporama de Stage
            </a>
            <a href="index-sio.html" class="link-button">
                📄 Page HTML
            </a>
        </div>
        
        <div style="margin-top: 20px; text-align: left; max-width: 400px;">
            <h3>Informations du stage :</h3>
            <ul>
                <li><strong>Durée :</strong> 7 semaines</li>
                <li><strong>Début :</strong> 13 Mai 2024</li>
                <li><strong>Fin :</strong> 27 Juin 2024</li>
                <li><strong>Domaine :</strong> Développement Web</li>
            </ul>
        </div>
    </div>
</body>
</html>
