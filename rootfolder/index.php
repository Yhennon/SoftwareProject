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
                <li><a href="#home-page">Főoldal</a></li>
                <li><a href="#gallery">Galéria</a></li>
                <li><a href="#about-us">Rólunk</a></li>
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
            <ul class="beer-showcase clearfix">
                <li>
                    <figure class="beer-photo">
                        <a href="images/1.JPG" data-lightbox="mygallery" data-title="Miller (Valhalla Söröző - 400Ft)">
                            <img src="images/1.JPG">
                        </a>
                    </figure>
                </li>
                <li>
                    <figure class="beer-photo">
                        <a href="images/2.JPG" data-lightbox="mygallery" data-title="Staropramen (Valhalla Söröző - 450Ft)">
                            <img src="images/2.JPG">
                        </a>
                    </figure>
                </li>
                <li>
                    <figure class="beer-photo">
                        <a href="images/3.JPG" data-lightbox="mygallery" data-title="Mort Subite (Valhalla Söröző - 600Ft)">
                            <img src="images/3.JPG">
                        </a>
                    </figure>
                </li>
                <li>
                    <figure class="beer-photo">
                        <a href="images/4.JPG" data-lightbox="mygallery" data-title="Soproni - IPA (Pikoló Söröző - 450Ft)">
                            <img src="images/4.JPG">
                        </a>
                    </figure>
                </li>
                <li>
                    <figure class="beer-photo">
                        <a href="images/11.JPG" data-lightbox="mygallery" data-title="Borsodi - Hoppy (Pikoló Söröző - 420Ft)">
                            <img src="images/11.JPG">
                        </a>
                    </figure>
                </li>
                <li>
                    <figure class="beer-photo">
                        <a href="images/12.JPG" data-lightbox="mygallery" data-title="Gösser - Natur Radler (Pikoló Söröző - 330Ft)">
                            <img src="images/12.JPG">
                        </a>
                    </figure>
                </li>
                <li>
                    <figure class="beer-photo">
                        <a href="images/13.JPG" data-lightbox="mygallery" data-title="Kőbányai (Pikoló Söröző - 280Ft)">
                            <img src="images/13.JPG">
                        </a>
                    </figure>
                </li>
                <li>
                    <figure class="beer-photo">
                        <a href="images/14.JPG" data-lightbox="mygallery" data-title="Desperados (Roncs - 580Ft)">
                            <img src="images/14.JPG">
                        </a>
                    </figure>
                </li>
                <li>
                    <figure class="beer-photo">
                        <a href="images/21.JPG" data-lightbox="mygallery" data-title="Csíki - Áfonya (Pikoló Söröző - 480Ft)">
                            <img src="images/21.JPG">
                        </a>
                    </figure>
                </li>
                <li>
                    <figure class="beer-photo">
                        <a href="images/22.JPG" data-lightbox="mygallery" data-title="Dreher - Hideg Komlós (Latin - 490Ft)">
                            <img src="images/22.JPG">
                        </a>
                    </figure>
                </li>
                <li>
                    <figure class="beer-photo">
                        <a href="images/23.JPG" data-lightbox="mygallery" data-title="Szent András - Áfonyás Ale">
                            <img src="images/23.JPG">
                        </a>
                    </figure>
                </li>
                <li>
                    <figure class="beer-photo">
                        <a href="images/24.JPG" data-lightbox="mygallery" data-title="Edelweiss (Roncs - 840Ft)">
                            <img src="images/24.JPG">
                        </a>
                    </figure>
                </li>
                <li>
                    <figure class="beer-photo">
                        <a href="images/41.JPG" data-lightbox="mygallery" data-title="Stella Artois (Latin - 490Ft)">
                            <img src="images/41.JPG">
                        </a>
                    </figure>
                </li>
                <li>
                    <figure class="beer-photo">
                        <a href="images/42.JPG" data-lightbox="mygallery" data-title="Corona">
                            <img src="images/42.JPG">
                        </a>
                    </figure>
                </li>
                <li>
                    <figure class="beer-photo">
                        <a href="images/43.JPG" data-lightbox="mygallery" data-title="Heineken (Latin - 490Ft)">
                            <img src="images/43.JPG">
                        </a>
                    </figure>
                </li>
                <li>
                    <figure class="beer-photo">
                        <a href="images/44.JPG" data-lightbox="mygallery" data-title="Pilsner Urquell (Latin - 490Ft)">
                            <img src="images/44.JPG">
                        </a>
                    </figure>
                </li>
                <li>
                    <figure class="beer-photo">
                        <a href="images/31.JPG" data-lightbox="mygallery" data-title="Csapolt Dreher (Valhalla Söröző - 450Ft)">
                            <img src="images/31.JPG">
                        </a>
                    </figure>
                </li>
                <li>
                    <figure class="beer-photo">
                        <a href="images/32.JPG" data-lightbox="mygallery" data-title="Csapolt Soproni (Roncs - 450Ft)">
                            <img src="images/32.JPG">
                        </a>
                    </figure>
                </li>
                <li>
                    <figure class="beer-photo">
                        <a href="images/34.JPG" data-lightbox="mygallery" data-title="Csapolt Mort Subite (Roncs - 480Ft)">
                            <img src="images/34.JPG">
                        </a>
                    </figure>
                </li>
                <li>
                    <figure class="beer-photo">
                        <a href="images/33.JPG" data-lightbox="mygallery" data-title="Szent András - Áfonyás Ale">
                            <img src="images/33.JPG">
                        </a>
                    </figure>
                </li>
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
                    <img src="images/bim.jpg" alt="alt-text">
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