<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" id="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="img/png" href="images/favicon.jpg">
    <script src="js/theme-changer.js"></script>
</head>
<body>
    <header id="home-page">
        <nav class="nav-bar">
            <ul>
                <li><a href="index.php">Főoldal</a></li>
                <li><a href="index.php">Galéria</a></li>
                <li><a href="index.php">Rólunk</a></li>
                <li><a href="profile.php">Profil</a></li>
                <button id="theme_switch" type="submit" class="stylebutton" onclick="changeTheme()">Sötét téma</button>
            </ul>
        </nav>
        
        <div class="nav-bar-bottom-border"></div>

        <div class="main-wrapper">
            <section class="descripion">
            <h3>Üdvözöllek a Sörök Birodalmában</h3>
                <?php
                    echo "Aktuális dátum: " . date("Y-m-d") . "<br>";
                ?>
            <h2>Kedvencek:</h2>
            </section>
        </div>
    </header>
    

</body>
</html>