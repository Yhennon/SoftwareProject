<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Főoldal</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" id="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="img/png" href="images/favicon.jpg">
    <script src="js/lightbox-plus-jquery.min.js"></script>
    <script src="js/theme-changer.js"></script>
    <script src="js/welcome.js"></script>
</head>


<!-- HOME PAGE STARTS HERE-->

<body>
    <header id="home-page">
        <nav class="nav-bar">
            <ul>
                <li><a href="index.php#home-page">Főoldal</a></li>
                <li><a href="index.php#gallery">Galéria</a></li>
                <li><a href="index.php#about-us">Rólunk</a></li>
                <button id="theme_switch" type="submit" class="stylebutton" onclick="changeTheme()">Sötét téma</button>
            </ul>
        </nav>
        <div class="nav-bar-bottom-border"></div>

        <!--Registration section-->
        <div class="registration-box">
            <h2>Itt regisztrálhatsz!</h2>
            <form class="login-form" action="registration-page.php" method="POST">
                <div><input type="text" name="reg-username-field" placeholder="Felhasználónév"></div>
                <div><input type="password" name="reg-password-field" placeholder="Jelszó"></div>
                <div><input type="submit" name="reg-submit-button" value="Regisztrálj!"></div>

                <?php
                // this if is only here to ensure that script runs only after the submit
                if ('POST' === $_SERVER['REQUEST_METHOD']) {


                    function registerUser($username, $password)
                    {
                        $conn = new mysqli("localhost", "root", "", "beergallery");
                        if ($conn->connect_error) {
                            die('<script>
                            alert("Connection failed: " . $conn->connect_error)
                            </script>');
                            
                        }

                        $sql = "INSERT INTO users (username,password)
                            VALUES ('$username','$password')";

                        $result = $conn->query($sql);
                        $conn->close();
                    }

                    $username;
                    $password;
                    unset($username);
                    unset($password);

                    if (isset($_POST["reg-username-field"]) && $_POST["reg-username-field"] == true && isset($_POST["reg-password-field"]) && $_POST["reg-password-field"] == true) {
                        $username = $_POST["reg-username-field"];
                        $password = $_POST["reg-password-field"];
                        registerUser($username, $password);
                        echo
                            '
                    <p>A regisztráció sikeres.<br></p>
                    <p><a href="index.php">Vissza az előző oldalra!</a></p>
                    ';
                    } else if ($_POST["reg-username-field"] == false && $_POST["reg-password-field"] == false) {
                        echo '<script>alert("You need to type in the username and the password first.")</script>';
                    } else if ($_POST["reg-password-field"] == false) {
                        echo "You need to type in the password.";
                    } else if ($_POST["reg-username-field"] == false) {
                        echo "You need to type in the username.";
                    }
                }



                ?>

            </form>
        </div>
        </form>
    </header>



    <script>
        document.onscroll = function() {
            if (window.scrollY == 0) {
                document.getElementById('homeButton').style.display = 'none';
            } else {
                document.getElementById('homeButton').style.display = 'inline-block';
            }
        }
    </script>
    <img src="images/upArrow.png" alt="Up" id="homeButton" onclick="window.scroll({top:0,left:0,behavior:'smooth'});">

</body>

</html>