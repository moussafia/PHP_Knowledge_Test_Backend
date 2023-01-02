<?php include('./php-script/controller/script.php'); 
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style\page-home\style.css">
        <title>PHP Knowledge Test </title>
</head>

<body>
    <!--navbar-->
    <nav>
        <div class="logo-siteweb">
            <span>PHP Knowledge Test</span>
        </div>
        <ul class="nav-link">
            <!--using checkBox toogle for responsivité-->
            <input type="checkbox" id="checkbox-toggle">
            <label for="checkbox-toggle" class="symbole-lignes-three">&#9776;</label>
            <!--Menu-->
            <div class="menu">
                <li><a href="#">Home</a></li>
                <li><a href="#" class="category">category&#5121;</a>
                    <ul class="dropDown">
                        <li><a href="#">Algorithm en PHP</a></li>
                        <li><a href="#">complixité</a></li>
                        <li><a href="#">culture en PHP</a></li>
                        <li><a href="#">Autre</a></li>
                    </ul>
                </li>
                <li><a href="#">About US</a></li>
            </div>
        </ul>
    </nav>
    <!--main-->
    <main id="index-page-home">
        <div class="index">
            <div class="picture-page-homme">
                <img src="./image/img-index.jpg" width="500px" height="510px">
            </div>
            <div class="countainer-page-homme">
                <div class="about-us">
                    <div class="info-header">
                        <h2>Some Rules of this Quiz</h2>
                    </div>
                    <div class="info_body">
                        <div class="info">1- You will have only <span>30 seconds</span> per each question.</div>
                        <div class="info">2- Once you select your answer, you can't reselect.</div>
                        <div class="info">3- You can't select any option once time goes off.</div>
                        <div class="info">4- You can't exit from the Quiz while you're playing.</div>
                        <div class="info">5- You'll get points on the basis of your correct answers.</div>
                    </div>
                </div>
                <div class="button-entrer">
                    <button type="button" class="btn" id="btn-play">play</button>
                </div>
            </div>
        </div>
    </main>
    <!--sign UP form-->
    <footer id="signUP">
        <div class="signUP"> 
                <form method="POST">
                    <div class="title-name"><h2>Entrer votre Nom</h2></div>
                    <div>
                        <input type="text" class="input-name" name="input_name" id="input_name">
                    </div>
                    <div class="button-entrer">
                        <button type="submit" class="btn" name="logQuizz" id="logQuizz">Entrer</button>
                    </div>
                </form>
            </div>
    </footer>
    <!--scrip of index-->
    <script src="./js/index.js"></script>
</body>

</html>