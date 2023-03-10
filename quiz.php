<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style\style-quiz\quiz.css">
    <title>PHP Knowledge Test </title>
</head>

<body>
    <!--navbar-->
    <header id="page-quiz">
        <nav>
            <div class="note-condidat">
                <div class="image">
                    <img src="image/achievement.png" height="20px" width="20px">
                </div>
                <div class="lesNotes">
                    <span></span>
                </div>
            </div>
            <div id="progress-question">
                <span></span>
            </div>
            <div>
                <a href="index.php"><button type="submit" class="close">&#9747</button></a>
            </div>
        </nav>
        <!--main-->
        <section>
            <form name="quiz">
                <div class="container-question">
                    <div class="question" name="question" id="question">
                        <strong></strong>
                    </div>
                    <div class="round-time-bar" data-style="smooth" style="--duration: 6;width: 700px;">
                        <div></div>
                    </div>
                </div>
                <div class="container-answer">
                    <button type="button" id="answer1" class="answer1">
                        <strong></strong>
                    </button>
                    <butoon type="button" id="answer2" class="answer2">
                        <strong></strong>
                    </butoon>
                    <button type="button" id="answer3" class="answer3">
                        <strong></strong>
                    </button>
                    <button type="button" id="answer4" class="answer4">
                        <strong></strong>
                    </button>
                </div>
                <div class="skip">
                    <button type="button" class="btn-skip" id="btn-skip">Next &raquo;</button>
                </div>
            </form>
        </section>
    </header>
    <footer id="page-resultat">
        <div class="resultat-condidat">
            <div class="title-resultat">
                <u>
                    <h1>Votre Resultat</h1>
                </u>
            </div>
            <div class="scores-finale">
                <div class="image-resultat">
                    <img src="./image/award.png" height="70px" width="80px" style="opacity: 0.8;">
                </div>
                <div class="table-resultat">
                    <table class="style-table">
                        <tr>
                            <td><span>score</span></td>
                            <td id="mynote"><span></td></span> 
                        </tr>
                        <tr>
                            <td><span> total correcte answer en %</span></td>
                            <td id="total-correcte-answer">
                            </td>
                        </tr>
                        <tr>
                            <td><span> total incorrecte answer en %</span></td>
                            <td id="total-incorrecte-answer">
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="div-btn-restart">
                <a href="index.php"><button>restart quizz</button></a>
            </div>
        </div>
    </footer>
<!--style-->
<script src="js\script.js" type="module"></script>
</body>
</html>