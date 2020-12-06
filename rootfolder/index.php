<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Főoldal</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" id="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="img/png" href="images/favicon.jpg">

    <link rel="stylesheet" href="fancybox\jquery.fancybox-1.3.4.css" type="text/css" media="screen" />

    <script src="js/theme-changer.js"></script>
    <script src="js/welcome.js"></script>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <script type="text/javascript" src="fancybox\jquery.fancybox-1.3.4.pack.js"></script>


    <script>
        fetch('https://beer-project2020.herokuapp.com/beers')
        .then(response => response.json())
        .then(beerlist => {
            beerlist.forEach(beer => {

                fetch('https://beer-project2020.herokuapp.com/image/'+beer._id)
                .then(response => response.json())
                .then(data => document.getElementById("beerlist").innerHTML +="<li><div><img class='galleryImage' src="+data.image+"><div></li>");

                }); 
            });
    </script>

<script>

setTimeout( () => {
    $(document).ready(function(){

    $(".galleryImage").each(function(){

            $(this).fancybox({

                    href : $(this).attr('src'),

            });
    });

    });

}, 3000 );


    </script>
</head>


<!-- HOME PAGE STARTS HERE-->

<body>




    <header id="home-page">
        <nav class="nav-bar">
            <ul>
                <li><a href="#home-page">Főoldal</a></li>
                <li><a href="#gallery">Galéria</a></li>
                <li><a href="#about-us">Rólunk</a></li>
                <li><a href="profile.php">Profil</a></li>
                <button id="theme_switch" type="submit" class="stylebutton" onclick="changeTheme()">Sötét téma</button>
            </ul>
        </nav>
        <div class="nav-bar-bottom-border"></div>

        <!--Name-->        
            <div class="login-box">
                <h2>Jelentkezz be!</h2>
                <form class="login-form" action="profile.php" method="POST">
                    <div id="id1"><input  type="text" name="username-field" placeholder="Felhasználónév"></div>
                    <div><input type="password" name="password-field" placeholder="Jelszó"></div>
                    <div><input type="submit" name="submit-button" value="Belépés"></div>
                </form>
                <h2>Vagy ha még nem vagy tag,<a href="registration-page.php">regisztrálj!</a></h2>
            </div>
        </form>

        <div class="main-wrapper">

            <section class="description">
                <h3>Miről szól az oldal?</h3>
                <p>Célunk egy galéria létrehozása volt, ahol különböző, hazánkban, első sorban Debrecenben is kapható
                    sörfajtákat jelenítünk meg.
                </p> <br>
                <p>Különböző sörökről készült fényképeket mutatunk be, melléjük leírást illesztve, amiben leírjuk, hogy
                    az általunk kedvelt Debreceni kocsmák közül hol kaphatóak és mennyiért.
                </p> <br>
                <p>Tanulmányi kirándulás révén, felkutattunk városunk ismertebb pub-jai közül néhányat, ahol
                    anyagot gyűjtöttünk ezen projekt elkészítéséhez.
                    A Galériában megjelenő képek közül az összes saját készítésű.
                </p> <br>
            </section>
        </div>
    </header>

    <!-- GALLERY STARTS HERE-->

    <section class="section-gallery" id="gallery">
        <div class="gallery-main-wrapper">
            <h2>Galéria</h2>
            <h3>Milyen sörök találhatók itt?</h3>
            <p>A képeken általunk kedvelt Debreceni kocsmákban kapható sörök láthatóak.</p>
            <ul id="beerlist" class="beer-showcase clearfix">
                
            </ul>
        </div>
    </section>

    <!-- ABOUT US SECTION STARTS HERE -->

    <section class="section-about-us" id="about-us">
        <div class="main-wrapper">
            <h1>
                <center>A Fejlesztő Csapat</center>
            </h1>
            <div class="us-gallery">
                <div class="inline-block">
                    <img src="images/pm.jpg" alt="alt-text">
                    <p>Pócsi Máté</p>
                </div>
                <div class="inline-block">
                    <img class="galleryImage" src="images/bim.jpg" alt="alt-text">
                    <p>Bene Imre</p>
                </div>
                <div class="inline-block">
                    <img src="images/lt.jpg" alt="alt-text">
                    <p>Loós Tamás</p>
                </div>
                <div class="inline-block">
                    <img src="images/sm.jpg" alt="alt-text">
                    <p>Stiegelmayer Máté</p>
                </div>
            </div>
            <p>
                <h3>„A sör a bizonyíték arra, hogy az Isten szeret minket, és azt akarja, hogy boldogok legyünk.”</h3>
            </p>
        </div>

    </section>

    <footer>

    </footer>
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