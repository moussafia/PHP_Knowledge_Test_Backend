//====================== import data.js =========================
import { quizz } from "./data.js";
let footer = document.getElementById("page-resultat");
let header = document.getElementById("page-quiz");
//====================== get elementfrom =========================
let score = 0;
let index = 0;
let time = 6;
//==============show function=======================
showQuizz(index);

//==================== display quizz in html file =======================
function showQuizz(index) {
  var randomQuestion = quizz.sort(() => Math.random() - 0.5);
  var arrAnswrCount = [0, 1, 2, 3];
  var arrAnswrRandom = arrAnswrCount.sort(() => Math.random() - 0.5);

  // ======================declaration variable vide================
  var boxQuestion = document.querySelector(".question strong");
  var answer1 = document.querySelector(".answer1 strong");
  var answer2 = document.querySelector(".answer2 strong");
  var answer3 = document.querySelector(".answer3 strong");
  var answer4 = document.querySelector(".answer4 strong");

  // ======================declaration button answer================
  var next = document.getElementById("btn-skip");
  var btnAnswer1 = document.querySelector(".answer1");
  var btnAnswer2 = document.querySelector(".answer2");
  var btnAnswer3 = document.querySelector(".answer3");
  var btnAnswer4 = document.querySelector(".answer4");
  var buttonAnswers = [btnAnswer1, btnAnswer2, btnAnswer3, btnAnswer4];

  const bar = document.querySelector(".round-time-bar");

  // ==========================initialisation des variables=================
  boxQuestion.innerHTML = "";
  answer1.innerHTML = "";
  answer2.innerHTML = "";
  answer3.innerHTML = "";
  answer4.innerHTML = "";

  // =================== Appel function display==========================
  footer.style.display = "none";
  next.style.display = "none";

  display(index);
  next.onclick = () => {
    index++;
    if (index < randomQuestion.length) {
      display(index);
      next.style.display = "none";
      progressBarTiming(bar);
      removeClassesAndOpacity(buttonAnswers);
    }
    if (index >= randomQuestion.length) {
      footer.style.display = "block";
      header.style.display = "none";
      document.getElementById("mynote").innerHTML = `${
        score + "/" + randomQuestion.length
      }`;
      document.getElementById("total-correcte-answer").innerHTML = `${
        Math.trunc((score * 100) / randomQuestion.length) + "%"
      }`;
      document.getElementById("total-incorrecte-answer").innerHTML = `${
        Math.trunc(
          ((randomQuestion.length - score) * 100) / randomQuestion.length
        ) + "%"
      }`;
    }
  };

  function display(index) {
    boxQuestion.innerHTML = randomQuestion[index].question;
    answer1.innerHTML = randomQuestion[index].answers[arrAnswrRandom[0]];
    answer2.innerHTML = randomQuestion[index].answers[arrAnswrRandom[1]];
    answer3.innerHTML = randomQuestion[index].answers[arrAnswrRandom[2]];
    answer4.innerHTML = randomQuestion[index].answers[arrAnswrRandom[3]];
    document.querySelector(".lesNotes span").innerHTML = score;
    document.querySelector("#progress-question span").innerHTML = `${
      1 + index + " of " + randomQuestion.length + " Question"
    }`;
    // ======================declaration variable rempli================
    var asw1 = document.querySelector(".answer1 strong").textContent;
    var asw2 = document.querySelector(".answer2 strong").textContent;
    var asw3 = document.querySelector(".answer3 strong").textContent;
    var asw4 = document.querySelector(".answer4 strong").textContent;
    var asws = [asw1, asw2, asw3, asw4];

    for (let j = 0; j < buttonAnswers.length; j++) {
      answerUser(j, buttonAnswers, asws, randomQuestion, index, next);
    }
    timeAnswer(buttonAnswers, asws, index,time);
  }
}

function removeClassesAndOpacity(array) {
  for (let i = 0; i < array.length; i++) {
    array[i].classList.remove("correct-answer", "incorrect-answer");
    array[i].style.opacity = "1";
    array[i].style.pointerEvents = "auto";
  }
}

function progressBarTiming(array) {
  array.classList.remove("round-time-bar");
  array.offsetWidth;
  array.classList.add("round-time-bar");
}

function answerUser(j, buttonAnswers, asws, randomQuestion, index, next) {
  buttonAnswers[j].onclick = () => {
    removeClassesAndOpacity(buttonAnswers);
    if (asws[j].localeCompare(randomQuestion[index].trueAnswer[0]) == 0) {
      buttonAnswers[j].classList.add("correct-answer");
      for (let i = 0; i < buttonAnswers.length; i++) {
        buttonAnswers[i].style.pointerEvents = "none";
        if (i != j) {
          buttonAnswers[i].style.opacity = "0";
        }
      }
      score++;
      document.querySelector(".lesNotes span").innerHTML = score;
    } else {
      buttonAnswers[j].classList.add("incorrect-answer");
      for (let i = 0; i < buttonAnswers.length; i++) {
        buttonAnswers[i].style.pointerEvents = "none";
        if (i != j) {
          if (asws[i].localeCompare(randomQuestion[index].trueAnswer[0]) == 0) {
            buttonAnswers[i].classList.add("correct-answer");
          } else buttonAnswers[i].style.opacity = "0";
        }
      }
    }
    next.style.display = "block";
  };
}

let timeDecrement;
function timeAnswer(buttonAnswers, asws, index, t) {
  function timer() {
    t--;
    if (t <= 0) {
      clearInterval(timeDecrement);
      removeClassesAndOpacity(buttonAnswers);
      for (let j = 0; j < buttonAnswers.length; j++)
        if (asws[j].localeCompare(randomQuestion[index].trueAnswer[0]) == 0) {
          buttonAnswers[j].classList.add("correct-answer");
          for (let i = 0; i < buttonAnswers.length; i++) {
            buttonAnswers[i].style.pointerEvents = 'none';
            if (i != j) {
              buttonAnswers[j].classList.add("incorrect-answer");
            }
          }
        }
    }
  }
  timeDecrement = setInterval(timer, 1000);console.log(time)
}
