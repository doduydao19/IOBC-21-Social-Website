<html lang="fr">
    <head>
        <title>UpToShare</title>
        <meta charset="UTF-8">
        <meta name="description" content="A cross-generational plateform for sharing skills and experience">
        <meta name="keywords" content="Html, Css, Php">
        <meta name="author" content="Do Duy Dao, Sofiane, Ilias, Ted, Jade, TaAnhQuan">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="CSS/Header-Footer.css">
        <link rel="shortcut icon" href="Img/UpToShare_logo.png" type="image/x-icon">
    </head>

    <body id="background">
    <header>
        <div class="nav">
            <div class="name">
                    <div>
                        <img src="Img/UpToShare_logo.png" alt="UpToShare" width="15%" style="margin-left: 5%">
                        <label>
                            <input type="text" placeholder="Search.." class="search" style="margin-left: 30%;">
                        </label>
                    </div>
                    <script>
                        function ouvrirPage() {
                            var a = document.getElementById("search").value;

                            if (a === "page 1") {
                                window.open("/inscription.html");
                            }

                            if (a === "page 2") {
                                window.open("/connexion.html");
                            }
                        }
                    </script>
                    <div class="lang-menu" style="margin-left: 23%;margin-top: 2.5%;font-family: fantasy" style="width: 100%">
                        <div class="selected-lang" style="color: #EF7F00">
                            English
                        </div>
                        <ul>
                            <li>
                                <a href="" class="en">English</a>
                            </li>
                            <li>
                                <a href="" class="fr">French</a>
                            </li>
                            <li>
                                <a href="" class="ar">Arabic</a>
                            </li>
                        </ul>
                    </div>
            </div>

            <nav class="menu">
                <ul>
                    <li><a href="Home.php"><img src="Img/house%20(1).png" alt="House" style="width: 30%"></a></li>
                    <li><a href="News-Posts.php"><img src="Img/news.png" alt="News" style="width: 30%" id="international"></a></li>
                    <li><a href="Live-Video.php"><img src="Img/blog%20(1).png" alt="videos/live" style="width: 30%"></a></li>
                </ul>
                <p style="width: 10%; margin-top: 4%; font-family: fantasy; font-size: 14pt" id="signup"><a href="" style="text-decoration: none; width: 8%; letter-spacing:1pt" class="signup">Sign Up</a></p>
                <p style="width: 10%; margin-top: 4%; color: #EF7F00; font-family: fantasy; font-size: 14pt" class="signin"><a href="" style="text-decoration: none; letter-spacing:1pt" class="signin">Sign In</a></p>
            </nav>
        </div>
    </header>


    <footer>
        <div>
            <nav>
                <div class="wrapper">
                    <h1>Up to Share<span class="orange">.</span></h1>
                </div>
                <div class="lien" style="margin-top: 2%">
                    <a href="#" class="legal" style="font-family: fantasy; text-decoration: none; font-size: 14pt; letter-spacing:1pt">Legal Notice</a>
                    <a href="#" class="terms" style="font-family: fantasy; text-decoration: none; font-size: 14pt; letter-spacing:1pt">Terms of Service</a>
                    <a href="#" class="about" style="font-family: fantasy; text-decoration: none; font-size: 14pt; letter-spacing:1pt">About Us</a>
                    <a href="#" class="forms" style="font-family: fantasy; text-decoration: none; font-size: 14pt; letter-spacing:1pt">Forms</a>
                    <a href="#" class="contact" style="font-family: fantasy; text-decoration: none; font-size: 14pt; letter-spacing:1pt">Contact Us</a>
                    <a href="#" class="privacy" style="font-family: fantasy; text-decoration: none; font-size: 14pt; letter-spacing:1pt">Privacy Policy</a>
                </div>
            </nav>
        </div>
    </footer>
    </body>
</html>

<?php