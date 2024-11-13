<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz App</title>
    <style>
	
	body, html {
    margin: 0;
    padding: 0;
    font-family: 'Arial', sans-serif;
    height: 100%;
    overflow: hidden;
    background: linear-gradient(120deg, #8B0000 0%, #8B0000 50%, #b22222 50%, #ff6347 100%);;
    animation: gradientAnimation 10s ease infinite;
	overflow-y: auto; 
}

.quiz-container {
    position: relative;
    max-width: 600px;
    margin: 50px auto;
    background: linear-gradient(120deg, #001f4d 0%, #004080 40%, #0080ff 100%);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(255, 105, 180, 0.7), 0 0 50px rgba(255, 105, 180, 0.4);
    z-index: 1;
    text-align: center;
    animation: quizFadeIn 1.5s;
}

h1 {
    margin-bottom: 20px;
    color: #fff176;
    animation: textPulse 1.5s infinite;
}

.question {
    font-size: 1.4em;
    margin-bottom: 15px;
    color: #ffffff;
}

.choices {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.choices li {
    background: #444;
    padding: 15px;
    margin: 7px 0;
    border-radius: 8px;
    cursor: pointer;
    transition: background 0.3s ease, transform 0.2s;
    color: #fff;
}

.choices li:hover {
    background: #666;
    transform: scale(1.08);
}

.result {
    margin-top: 15px;
    font-size: 1.3em;
    color: #fff;
    animation: fadeIn 1s ease-out;
}

.action-btn, .hint-btn {
    background: #ffe066;
    border: none;
    padding: 12px 24px;
    margin: 10px;
    cursor: pointer;
    border-radius: 8px;
    font-size: 1.1em;
    color: #1e1e1e;
    transition: background 0.3s ease, transform 0.2s;
}

.action-btn:hover, .hint-btn:hover {
    background: #ffca28;
    transform: translateY(-3px);
}

.progress-bar {
    margin-top: 20px;
    width: 100%;
    background: #555;
    border-radius: 8px;
    overflow: hidden;
    height: 20px;
    box-shadow: inset 0 0 10px rgba(0, 0, 0, 0.3);
}

.progress {
    background: #66bb6a;
    height: 100%;
    width: 0;
    transition: width 0.5s ease;
}

.scoreProgress {
    background: #42a5f5;
    height: 100%;
    width: 0;
    position: relative;
    z-index: 1;
    transition: width 0.5s ease;
}

.timer {
    position: relative;
    display: inline-block;
    margin-bottom: 20px;
    color: #fff;
    font-weight: bold;
}

.timer svg {
    width: 50px;
    height: 50px;
    transform: rotate(-90deg);
}

.timer circle {
    fill: none;
    stroke: #ffca28;
    stroke-width: 5;
    stroke-dasharray: 126;
    stroke-dashoffset: 0;
    transition: stroke-dashoffset 1s linear;
}

.modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.8);
    animation: modalFadeIn 0.5s;
}

.modal-content {
    background-color: #a29af0 ;
    margin: 15% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
    max-width: 500px;
    border-radius: 10px;
    animation: fadeIn 0.5s;
}

.close-btn {
    color: #ffffff;
    float: right;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
}

.close-btn:hover,
.close-btn:focus {
    color: #fff;
    text-decoration: none;
    cursor: pointer;
}

textarea {
    width: 100%;
    height: 100px;
    margin-bottom: 10px;
    margin-bottom: 10px;
    padding: 10px;
    border-radius: 15px;
    border: 1px solid #888;
    background: #222;
    color: #fff;
    resize: none;
}

textarea:focus {
    outline: none;
    border-color: #66bb6a;
}

.light-mode {
    background-color: #f4f4f4;
    color: #1e1e1e;
}

.light-mode .quiz-container {
    background: rgba(255, 255, 255, 0.8);
}

.light-mode .choices li {
    background: #ddd;
}

.light-mode .choices li:hover {
    background: #bbb;
}

.light-mode .action-btn, .light-mode .hint-btn {
    background: #333;
    color: #fff;
}

.light-mode .action-btn:hover, .light-mode .hint-btn:hover {
    background: #222;
}

.light-mode .modal-content {
    background-color: #fff;
    border-color: #ddd;
}

.light-mode .close-btn {
    color: #333;
}

canvas {
    position: absolute;
    top: 0;
    left: 0;
    pointer-events: none;
}

canvas#backgroundCanvas {
    z-index: 4000;
}

canvas#confetti {
    z-index: 4000;
}

/* Animations */
@keyframes gradientAnimation {
    0% {
        background-position: 0% 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0% 50%;
    }
}

@keyframes quizFadeIn {
    from {
        opacity: 0;
        transform: scale(0.9);
    }
    to {
        opacity: 1;
        transform: scale(1);
    }
}

@keyframes textPulse {
    0%, 100% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.1);
    }
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

@keyframes modalFadeIn {
    from {
        opacity: 0;
        transform: scale(0.9);
    }
    to {
        opacity: 1;
        transform: scale(1);
    }
}
.overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.8);
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 10;
    animation: fadeIn 1.5s forwards;
}

.overlay-content {
    text-align: center;
    animation: slideIn 1.5s forwards;
}

.overlay-content h1 {
    font-size: 2.5rem;
    margin-bottom: 20px;
}

.overlay-content button {
    padding: 15px 30px;
    font-size: 1.2rem;
    background-color: #ff4081;
    border: none;
    border-radius: 5px;
    color: white;
    cursor: pointer;
    transition: background-color 0.3s;
}

.overlay-content button:hover {
    background-color: #e91e63;
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

@keyframes slideIn {
    from {
        transform: translateY(-100%);
    }
    to {
        transform: translateY(0);
    }
}

#backgroundCanvas {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 4000;
}

.question-counter {
    font-size: 1.1rem;
    color: #ffffff;
    background-color: rgba(0, 0, 0, 0.5);
    padding: 10px 20px;
    border-radius: 5px;
    margin-bottom: 20px;
    display: inline-block;
    animation: counterFadeIn 1s ease-in-out;
}

@keyframes counterFadeIn {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes counterUpdate {
    0%, 100% {
        transform: scale(1);
    }
    50% {
        transform: scale(1.1);
    }
}



#rating-container {
    background-color: #fafafa;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
}


.star-rating {
    display: flex;
    justify-content: center;
    margin-bottom: 10px;
}

.star {
    font-size: 2em;
    cursor: pointer;
    color: #ccc;
    transition: color 0.2s;
}

.star:hover,
.star.hovered,
.star.selected {
    color: gold;
}

textarea {
    width: 100%;
    height: 60px;
    margin-bottom: 10px;
    padding: 10px;
    border-radius: 15px;
    border: 1px solid #ccc;
    resize: none;
}


#custom-alert {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    justify-content: center;
    align-items: center;
}

#alert-content {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    text-align: center;
    max-width: 300px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

#alert-content button {
    margin-top: 10px;
}


 .timem {
            font-size: 24px;
            margin-bottom: 20px;
			color:white;
        }
		
		
		
		
		
		
		
		
		
		
		
		
		
		
 /* Base Streak Counter Styling */
  #streak-counter {
    position: fixed;
    top: 10px;
    right: 20px;
    padding: 10px 20px;
    color: white;
    font-size: 2em;
    font-weight: bold;
    border-radius: 10px;
    transform-origin: center;
    transition: transform 0.2s ease, color 0.5s ease;
    animation: shimmer 2s infinite;
    background: linear-gradient(45deg, #ff6a00, #ee0979);
    background-size: 200% 200%;
    animation: gradient-move 3s ease infinite;
    text-shadow: 0px 0px 10px rgba(255,255,255,0.8);
  }

  /* Gradient Animation */
  @keyframes gradient-move {
    0% { background-position: 0% 50%; }
    100% { background-position: 100% 50%; }
  }

  /* Shimmer Effect */
  @keyframes shimmer {
    0% { opacity: 0.9; }
    50% { opacity: 1; }
    100% { opacity: 0.9; }
  }

  /* Pop Effect */
  .pop {
    transform: scale(1.2);
  }

  /* Streak Lost Animation */
  @keyframes shatter {
    0% { opacity: 1; transform: scale(1); }
    100% { opacity: 0; transform: scale(0); }
  }

  /* Confetti Particles Styling */
  .confettiss {
    position: absolute;
    width: 6px;
    height: 12px;
    background: linear-gradient(45deg, #ff5f6d, #ffc371);
    opacity: 0.8;
    animation: fall 2s linear infinite;
  }

  @keyframes fall {
    to {
      transform: translateY(500px) rotate(360deg);
      opacity: 0;
    }
  }
  
  
  .high-streak {
    animation: glow 0.5s ease-out;
}
.medium-streak {
    animation: glow 0.3s ease-out;
}

@keyframes glow {
    0% { text-shadow: 0 0 10px rgba(255, 69, 0, 1); }
    100% { text-shadow: 0 0 20px rgba(255, 69, 0, 0.5); }
}



.shake {
    animation: shake 0.3s;
}

@keyframes shake {
    0% { transform: translateX(0); }
    25% { transform: translateX(-5px); }
    50% { transform: translateX(5px); }
    75% { transform: translateX(-5px); }
    100% { transform: translateX(0); }
}



	
	</style>
</head>
<body>
    <div class="quiz-container">
        <h1>Bright Addis Institute</h1>
		<div id="startOverlay" class="overlay">
    <div class="overlay-content">
       <div style='margin-right:5%; margin-left:5%;'> <h3>Bright Addis Training, Research, and Consultancy Institute</h3></div>
		<div id="subcon">
		
		
		</div>
        <button id="startQuizButton" >Start Quiz</button>
    </div>
</div>
 <canvas id="backgroundCanvas"></canvas>
        <div id="questionCounter" class="question-counter"></div>
		<div id="streak-counter"></div>
        <div id="question"></div>
        <ul id="choices" class="choices"></ul>
        <button id="submit" class="action-btn">Submit</button>
        <button id="hint" class="hint-btn">Hint</button>
        <button id="prevb" class="action-btn" >Explore more quizzes</button>
        <button id="endQuiz" class="action-btn" style="display: none;">End Quiz</button>
        <button id="restart" class="action-btn" style="display: none;">Restart</button>
        <button id="feedback" class="action-btn" style="display: none;">Feedback</button>
		<div class="timem" id="timem">00:00:00</div>
        <div class="progress-bar">
            <div id="progress" class="progress"></div>
        </div>
        <div class="progress-bar">
            <div id="scoreProgress" class="scoreProgress"></div>
        </div>
        <div id="result" class="result"></div>
		
		    <div id="rating-container" style="display: none;">
			
            <h3>Rate the Quiz</h3>
            <div class="star-rating">
                <span class="star" data-value="5">&#9733;</span>
                <span class="star" data-value="4">&#9733;</span>
                <span class="star" data-value="3">&#9733;</span>
                <span class="star" data-value="2">&#9733;</span>
                <span class="star" data-value="1">&#9733;</span>
            </div>
            <textarea id="review-comment" placeholder="Leave a comment (max 150 characters)" maxlength="150"></textarea>
            <button class="action-btn"  id="submit-rating-btn">Submit Rating</button>
        </div>
		
		
        <div class="timer">
            <svg>
                <circle cx="25" cy="25" r="20"></circle>
            </svg>
            <div id="time">90</div>
        </div>
    </div>

    <div id="explanationModal" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <p id="explanationText"></p>
        </div>
    </div>

    <div id="hintModal" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <p id="hintText"></p>
        </div>
    </div>
	
	 <div id="custom-alert" style="display: none;">
        <div id="alert-content"></div>
    </div>
	

    <div id="feedbackModal" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <h2>Feedback</h2>
            <textarea id="feedbackText" placeholder="Enter your feedback here..."></textarea>
            <button id="submitFeedback" class="action-btn">Submit Feedback</button>
        </div>
    </div>

    <audio id="correctSound" src="../aud/md1.m4a" preload="auto"></audio>
    <audio id="incorrectSound" src="../aud/md3.m4a" preload="auto"></audio>
    <audio id="clap" src="clap2.wav" preload="auto"></audio>
    <audio id="end" src="end.mp3" preload="auto"></audio>
    <audio id="backgroundMusic" src="https://dn790002.ca.archive.org/0/items/100ClassicalMusicMasterpieces/1894%20Massenet%20-%20Meditation,%20from%20'Thais'.mp3" preload="auto" loop></audio>
   
   
    <script src="../coursedetails/confetti.js"></script>
   
    <script>
	
	let startTime = 0;
    let updatedTime = 0;
    let paused = true;
    let interval;
    let elapsedTime = 0;
	let streakCount = 0;
	
	var quizData = [];
	var token = localStorage.getItem('jwtToken');
 const quizId = getQueryParameter('id');
async function fetchQuizQuestions() {
    // Get the quiz_id from the URL query parameters
   

    // Check if quiz_id is available
    if (!quizId) {
        console.error('Quiz ID not found in the URL');
		window.location.replace("../explore/");
        return;
    }

    try {
        // Fetch quiz questions using the quiz_id
        const response = await fetch(`../api/?action=getQuizQuestions&quiz_id=${quizId}`, {
            method: 'GET',
            headers: {
                'Authorization': `Bearer ${token}`, 
                'Content-Type': 'application/json'
            }
        });

        // Check if the response is ok
        if (!response.ok) {
			window.location.replace("../login/");
            throw new Error('Network response was not ok');
			
        }
         
        // Parse the JSON response
        const data = await response.json();
            
            quizData=data.questions;
			lod(data);
       
    } catch (error) {
        
        // Redirect after 5 seconds
        setTimeout(function() {
            window.location.href = "../payment"; // Replace with the desired URL
        }, 1000);
    }
}

function checkAndRedirect(input) {
    try {
        input=JSON.stringify(input);
        JSON.parse(input);
        // Input is valid JSON, no action needed
    } catch (e) {
        // Input is not valid JSON
        

        // Redirect after 5 seconds
        setTimeout(function() {
            window.location.href = "../payment"; // Replace with the desired URL
        }, 5000);
    }
}

function speakText(text) {
    if (typeof AndroidTTS !== 'undefined') {
        AndroidTTS.speak(text);
    } else {
        console.log('AndroidTTS interface is not available.');
    }
}


fetchQuizQuestions();

function lod(dat){
	
	document.title=dat.title;
	document.getElementById('subcon').innerHTML+="<div style='margin-right:5%; margin-left:5%;'><h2>"+dat.title+"</h2></div><br>";
	document.getElementById('subcon').innerHTML+="<div style='margin-right:2%; margin-left:2%;'><h3>"+dat.expectation+"</h3></div><br>";
	document.getElementById('subcon').innerHTML+="<h2><b>"+dat.questions.length+" questions</b></h2>";
}


let currentQuestion = 0;
let score = 0;
let userAnswers = [];
let timer;
let confettiAnimation;
let particleAnimation;
let backgroundMusic = document.getElementById('backgroundMusic');
let endmusic = document.getElementById('end');
var hintsUsed=0;

shuffle(quizData);

const questionElement = document.getElementById('question');
const choicesElement = document.getElementById('choices');
const submitButton = document.getElementById('submit');
const hintButton = document.getElementById('hint');
const prevButton = document.getElementById('prevb');
const resultElement = document.getElementById('result');
const explanationModal = document.getElementById('explanationModal');
const explanationText = document.getElementById('explanationText');
const hintModal = document.getElementById('hintModal');
const hintText = document.getElementById('hintText');
const feedbackModal = document.getElementById('feedbackModal');
const feedbackText = document.getElementById('feedbackText');
const submitFeedbackButton = document.getElementById('submitFeedback');
const closeBtns = document.querySelectorAll('.close-btn');
const progressElement = document.getElementById('progress');
const scoreProgressElement = document.getElementById('scoreProgress');
const timerElement = document.getElementById('time');
const themeSwitch = document.getElementById('themeSwitch');
const endQuizButton = document.getElementById('endQuiz');
const restartButton = document.getElementById('restart');
const feedbackButton = document.getElementById('feedback');

const ratingContainer = document.getElementById('rating-container');
const submitRatingButton = document.getElementById('submit-rating-btn');
const stars = document.querySelectorAll('.star');
let selectedRating = 0;



const correctSound = document.getElementById('correctSound');
const clap = document.getElementById('clap');
const incorrectSound = document.getElementById('incorrectSound');

correctSound.volume = 0.5;
incorrectSound.volume = 0.3;
clap.volume = 0.5;

const achievements = [
    { name: "First Answer Correct!", condition: (score) => score >= 1 },
    { name: "Halfway There!", condition: (score) => score >= Math.floor(quizData.length / 2) },
    { name: "Quiz Master!", condition: (score) => score === quizData.length }
];

function showQuestion() {
    const currentQuizData = quizData[currentQuestion];
    questionElement.innerHTML = "<h3 style='color: #fff; background-color: rgba(0, 0, 0, 0.5); padding: 10px 20px; border-radius: 5px;'><b>"+currentQuizData.question+"</b></h3>";
    choicesElement.innerHTML = '';
    shuffle(currentQuizData.choices).forEach((choice, index) => {
        const li = document.createElement('li');
        li.innerText = choice;
        li.onclick = () => selectAnswer(index);
        choicesElement.appendChild(li);
    });
	
	 updateQuestionCounter();
}

function getQueryParameter(name) {
    const urlParams = new URLSearchParams(window.location.search);
    return urlParams.get(name);
}


function updateQuestionCounter() {
    const totalQuestions = quizData.length;
    const current = currentQuestion + 1;
    const counterText = `Question ${current} of ${totalQuestions}`;
    const counterElement = document.getElementById('questionCounter');

    counterElement.innerText = counterText;
    counterElement.style.animation = 'counterUpdate 0.5s ease-in-out';

    // Remove animation class after completion to reset
    setTimeout(() => {
        counterElement.style.animation = '';
    }, 500);
}


function selectAnswer(selectedIndex) {
    userAnswers[currentQuestion] = selectedIndex;
    const choices = choicesElement.querySelectorAll('li');
    choices.forEach((choice, index) => {
        choice.style.background = index === selectedIndex ? '#777' : '#333';
    });
}

function submitAnswer() {
    const currentQuizData = quizData[currentQuestion];
    const selectedChoiceIndex = userAnswers[currentQuestion];
    const selectedChoice = currentQuizData.choices[selectedChoiceIndex];
    const isCorrect = selectedChoice === currentQuizData.answer;

    if (isCorrect) {
        score++;
        showExplanation('Correct!', true);
		streakCount++;
		ultimateCelebration();
        updateStreakCounter();
        intensifyEffects();
    } else {
        showExplanation(`Incorrect! The correct answer was "${currentQuizData.answer}",`, false);
		loseStreak();
    }

    updateProgressBar();
    updateScoreBar();
    playSound(isCorrect);

    setTimeout(nextQuestion, 2000);
}

function nextQuestion() {
    currentQuestion++;
    if (currentQuestion < quizData.length) {
        showQuestion();
        startTimer();
    } else {
        showFinalResult();
    }
}

function prevQuestion() {
    window.location.replace("../explore")
}

function showExplanation(message, isCorrect) {
    explanationText.innerText = message;
    explanationModal.style.display = 'block';
    explanationText.innerText += ` ${quizData[currentQuestion].explanation}`;
}

function startTimer() {
    clearInterval(timer);
    let time = 90;
    timerElement.innerText = time;
    timer = setInterval(() => {
        time--;
        timerElement.innerText = time;
        updateTimerCircle(time);
        if (time === 0) {
            clearInterval(timer);
            showExplanation('Time is up!', false);
			loseStreak();
            nextQuestion();
        }
    }, 1000);
}

function updateTimerCircle(time) {
    const circle = document.querySelector('.timer circle');
    const circumference = 2 * Math.PI * circle.r.baseVal.value;
    const offset = circumference - (time / 90) * circumference;
    circle.style.strokeDashoffset = offset;
}

function updateProgressBar() {
    const progress = ((currentQuestion + 1) / quizData.length) * 100;
    progressElement.style.width = progress + '%';
}

function updateScoreBar() {
    const scoreProgress = (score / quizData.length) * 100;
    scoreProgressElement.style.width = scoreProgress + '%';
}

function playSound(isCorrect) {
    if (isCorrect) {
        correctSound.play();
    } else {
        incorrectSound.play();
    }
}

function showFinalResult() {
    clearInterval(timer);
	pauseStopwatch();
    questionElement.innerText = '';
    choicesElement.innerHTML = '';
    resultElement.innerText = `You scored ${score} out of ${quizData.length}!`;
    resultElement.innerHTML = resultElement.innerText + `<br><br>You got `+Math.round(100*score/quizData.length)+`% of the questions correct <br><br>`;
    //showAchievements();
    //endQuizButton.style.display = 'inline-block';
    restartButton.style.display = 'inline-block';
    submitButton.style.display = 'none';
    hintButton.style.display = 'none';
	ratingContainer.style.display = 'block';
    //rateQuizButton.style.display = 'block';
    //feedbackButton.style.display = 'inline-block';
	
	var pass=Math.round(100*score/quizData.length);
	if(pass>69){
	setTimeout(function(){
	//spk("Congrajulations!! You got "+score+" out of "+quizData.length+" questions correct, which means you got "+pass+"% of the questions correct, you have passed the quiz, Time to celebrate",0);
    endmusic.volume = 0.2;
    endmusic.play();
	},4000);
	}
	else{
	setTimeout(function(){
	 //spk("Sorry!! You got "+score+" out of "+quizData.length+" questions correct, which means you got only "+pass+"% of the questions correct, better luck next time",0);
	 incorrectSound.volume=0.2;
	 incorrectSound.play();
	 },4000);
	}
	
	
	 var elapsedTime = Date.now() - startTime;
     let seconds = Math.round(elapsedTime / 1000);
	
	
	fetch('../api/?action=saveQuizResults', {
    method: 'POST',
    headers: {
        'Authorization': localStorage.getItem('jwtToken'),
        'Content-Type': 'application/json'
    },
    body: JSON.stringify({
        quiz_id: quizId,
        score: pass,
        time: seconds,
        hints: hintsUsed		// User's score
    })
})
.then(response => {
    if (response.status === 401) {
      // If the status is 401, redirect to the login page
      window.location.href = '../login/';  // Redirects to the login page
    } else if (response.ok) {
      // If the request is successful, parse the response
      return response.json();
    } else {
      // Handle other types of errors
      throw new Error('Something went wrong: ' + response.statusText);
    }
  })
.then(data => {
    console.log('Quiz results saved:', data);
});

	
	backgroundMusic.pause();
}

function restartQuiz() {
    currentQuestion = 0;
	shuffle(quizData);
    score = 0;
    userAnswers = [];
    showQuestion();
    startTimer();
    updateProgressBar();
    updateScoreBar();
    resultElement.innerText = '';
    endQuizButton.style.display = 'none';
    restartButton.style.display = 'none';
    submitButton.style.display = 'inline-block';
    feedbackButton.style.display = 'none';
}

function showAchievements() {
    explanationText.innerText = '';
    achievements.forEach(achievement => {
        if (achievement.condition(score)) {
            explanationText.innerText += `${achievement.name}\n`;
        }
    });
    explanationModal.style.display = 'block';
}

function showHint() {
    const currentQuizData = quizData[currentQuestion];
    hintText.innerText = currentQuizData.hint;
	hintModal.style.display = 'block';
	spk(currentQuizData.hint,0);
	hintsUsed++;
}

function toggleTheme() {
    document.body.classList.toggle('light-mode');
}

function submitFeedback() {
    const feedback = feedbackText.value.trim();
    if (feedback) {
        alert('Thank you for your feedback!');
        feedbackText.value = '';
        feedbackModal.style.display = 'none';
    }
}

submitFeedbackButton.addEventListener('click', submitFeedback);

closeBtns.forEach(btn => {
    btn.onclick = function () {
        const modal = this.parentElement.parentElement;
        modal.style.display = 'none';
    }
});

function shuffle(array) {
    for (let i = array.length - 1; i > 0; i--) {
        const j = Math.floor(Math.random() * (i + 1));
        [array[i], array[j]] = [array[j], array[i]];
    }
    return array;
}

document.getElementById('startQuizButton').addEventListener('click', function() {
    document.getElementById('startOverlay').style.display = 'none';
	startStopwatch();
    startQuiz();
});


function startQuiz() {
    showQuestion();
    startTimer();
	backgroundMusic.volume = 0.1;
    backgroundMusic.play();
}



submitButton.addEventListener('click', submitAnswer);
hintButton.addEventListener('click', showHint);
//prevButton.addEventListener('click', prevQuestion);
prevButton.onclick =function () { window.location.replace("../explore"); };
endQuizButton.addEventListener('click', showFinalResult);
restartButton.addEventListener('click', restartQuiz);

var gd=0;
var voices;
var seq=0;

function spk(a,p){
	if(p==0){
		gd=0;
	}
	var b=a.split(/\s+/).reduce(function(prev, curr) {
    if (prev.length && (prev[prev.length - 1] + ' ' + curr).length <= 150) {
        prev[prev.length - 1] += ' ' + curr;
    }
    else {
        prev.push(curr);
    }
    return prev;
}, [])
    
	var mod=new SpeechSynthesisUtterance(b[p-0]);
	mod.voice = voices;
	mod.onend = function() {
		gd++;
		if(gd<b.length){
		spk(a,gd);
		}
	}
	window.speechSynthesis.cancel();
	window.speechSynthesis.speak(mod);
}

 new Promise((function(e, t) {
        let n, a = window.speechSynthesis;
        n = setInterval((() => {
            0 !== a.getVoices().length && (e(a.getVoices()), clearInterval(n))
        }), 10)
    })).then((function(e) {
        o = e, o.forEach((e => {
            if (e.name.toLowerCase().includes("google uk english male")) {
               voices=e;
            }
        }))
    }));
	
	
	
	const canvas = document.getElementById('backgroundCanvas');
const ctx = canvas.getContext('2d');

canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

let particlesArray = [];
const numberOfParticles = 100;
const maxDistance = 150;
const mouse = { x: null, y: null, radius: (canvas.height / 80) * (canvas.width / 80) };

// Audio Setup (optional for audio reactive particles)
let audioContext, analyser, dataArray;

window.addEventListener('resize', () => {
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;
  mouse.radius = (canvas.height / 80) * (canvas.width / 80);
  init();
});

window.addEventListener('mousemove', (event) => {
  mouse.x = event.x;
  mouse.y = event.y;
});

window.addEventListener('mouseout', () => {
  mouse.x = null;
  mouse.y = null;
});

class Particle {
  constructor(x, y, size, color, weight) {
    this.x = x;
    this.y = y;
    this.size = size;
    this.color = color;
    this.weight = weight;
    this.directionX = Math.random() * 3 - 1.5;
    this.directionY = Math.random() * 3 - 1.5;
    this.maxSize = size;
  }

  draw() {
    ctx.beginPath();
    ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2, false);
    ctx.fillStyle = this.color;
    ctx.fill();
  }

  update() {
    // Check mouse position / particle position - collision detection
    const dx = mouse.x - this.x;
    const dy = mouse.y - this.y;
    const distance = Math.sqrt(dx * dx + dy * dy);
    const maxDistance = 100;
    let forceDirectionX, forceDirectionY;

    // Repel or Attract
    if (distance < maxDistance) {
      forceDirectionX = dx / distance;
      forceDirectionY = dy / distance;
      let maxForce = 10;
      let force = (maxDistance - distance) / maxDistance * maxForce;
      let directionX = forceDirectionX * force;
      let directionY = forceDirectionY * force;

      this.x += directionX;
      this.y += directionY;
    }

    // Move particle
    this.x += this.directionX;
    this.y += this.directionY;

    // Gravity
    if (this.y > canvas.height - this.size || this.y < this.size) {
      this.directionY = -this.directionY;
    }
    if (this.x > canvas.width - this.size || this.x < this.size) {
      this.directionX = -this.directionX;
    }

    // Shrink or grow
    if (distance < maxDistance) {
      if (this.size < this.maxSize) {
        this.size += 1;
      }
    } else if (this.size > this.maxSize) {
      this.size -= 0.1;
    }

    this.draw();
  }
}

function init() {
  particlesArray = [];
  for (let i = 0; i < numberOfParticles; i++) {
    const size = 1;
    const x = Math.random() * (canvas.width - size * 2) + size;
    const y = Math.random() * (canvas.height - size * 2) + size;
    const color = `rgba(${Math.random() * 255}, ${Math.random() * 255}, ${Math.random() * 255}, 0.8)`;
    particlesArray.push(new Particle(x, y, size, color, 1));
  }
}

function connectParticles() {
  for (let a = 0; a < particlesArray.length; a++) {
    for (let b = a; b < particlesArray.length; b++) {
      const dx = particlesArray[a].x - particlesArray[b].x;
      const dy = particlesArray[a].y - particlesArray[b].y;
      const distance = Math.sqrt(dx * dx + dy * dy);
      if (distance < maxDistance) {
        ctx.strokeStyle = `rgba(255, 255, 255, ${1 - distance / maxDistance})`;
        ctx.lineWidth = 1;
        ctx.beginPath();
        ctx.moveTo(particlesArray[a].x, particlesArray[a].y);
        ctx.lineTo(particlesArray[b].x, particlesArray[b].y);
        ctx.stroke();
      }
    }
  }
}

function animate() {
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  particlesArray.forEach(particle => particle.update());
  connectParticles();
  requestAnimationFrame(animate);
}

function startAudioProcessing() {
  navigator.mediaDevices.getUserMedia({ audio: true }).then(stream => {
    audioContext = new (window.AudioContext || window.webkitAudioContext)();
    analyser = audioContext.createAnalyser();
    const source = audioContext.createMediaStreamSource(stream);
    source.connect(analyser);
    analyser.fftSize = 2048;
    const bufferLength = analyser.frequencyBinCount;
    dataArray = new Uint8Array(bufferLength);
    animate();
  }).catch(err => console.error(err));
}

init();
animate();

// Register a new quiz
function registerQuiz(quizName, totalQuestions) {
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "quiz.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                const quizId = parseInt(xhr.responseText, 10);
                if (!isNaN(quizId)) {
                    console.log("Quiz registered with ID:", quizId);
                    // Start quiz or do something with quizId
                } else {
                    console.error("Error registering quiz:", xhr.responseText);
                }
            } else {
                console.error("Error:", xhr.statusText);
            }
        }
    };

    const data = `action=register_quiz&quizName=${encodeURIComponent(quizName)}&totalQuestions=${totalQuestions}`;
    xhr.send(data);
}

// Save user quiz progress
function saveUserQuizProgress(quizId, correctAnswers, hintsUsed) {
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "quiz.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                console.log(xhr.responseText);
            } else {
                console.error("Error:", xhr.statusText);
            }
        }
    };

    const data = `action=save_progress&quizId=${quizId}&correctAnswers=${correctAnswers}&hintsUsed=${hintsUsed}`;
    xhr.send(data);
}

// Example usage
/*
document.getElementById('startQuizButton').addEventListener('click', function() {
    const quizName = "Sample Quiz";
    const totalQuestions = 10;
    registerQuiz(quizName, totalQuestions);
});
*/

// Call saveUserQuizProgress at the end of the quiz
// Example: saveUserQuizProgress(1, 8, 2);


const customAlert = document.getElementById('custom-alert');
const alertContent = document.getElementById('alert-content');

function showAlert(message) {
    alertContent.innerHTML = `<p>${message}</p><button onclick="closeAlert()">OK</button>`;
    customAlert.style.display = 'flex';
}

function closeAlert() {
    customAlert.style.display = 'none';
}




stars.forEach((star, index) => {
    star.addEventListener('mouseover', () => {
        highlightStars(index + 1);
    });

    star.addEventListener('mouseout', () => {
        highlightStars(selectedRating);
    });

    star.addEventListener('click', () => {
        selectedRating = index + 1;
        highlightStars(selectedRating);
    });
});

function highlightStars(count) {
    stars.forEach((star, index) => {
        if (index < count) {
            star.classList.add('hovered');
        } else {
            star.classList.remove('hovered');
        }
    });
}


submitRatingButton.addEventListener('click', () => {
    const reviewComment = document.getElementById('review-comment').value;
    if (!selectedRating) {
        showAlert('Please select a star rating.');
        return;
    }
    if (reviewComment.length > 150) {
        showAlert('Comment is too long. Please keep it under 150 characters.');
        return;
    }

    // Replace this part with a call to the backend API to submit the rating and comment
    fetch('../api/?action=rateQuiz', {
        method: 'POST',
        headers: {
            'Authorization': localStorage.getItem('jwtToken'),
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            quiz_id: quizId, // Replace with the actual quiz ID
            rating: selectedRating,
            comment: reviewComment
        })
    })
    .then(response => {
    if (response.status === 401) {
      // If the status is 401, redirect to the login page
      window.location.href = '../login/';  // Redirects to the login page
    } else if (response.ok) {
      // If the request is successful, parse the response
      return response.json();
    } else {
      // Handle other types of errors
      throw new Error('Something went wrong: ' + response.statusText);
    }
  })
    .then(data => {
        
            showAlert('Thank you for your feedback!');
			ratingContainer.style.display = 'none';
        // Hide the rating container and show a thank you message or something else
        
    });
});


    

    function startStopwatch() {
        if (paused) {
            paused = false;
            startTime = Date.now() - elapsedTime;
            interval = setInterval(updateTime, 1000);
        }
    }

    function pauseStopwatch() {
        if (!paused) {
            paused = true;
            elapsedTime = Date.now() - startTime;
            clearInterval(interval);
        }
    }

    function resetStopwatch() {
        paused = true;
        clearInterval(interval);
        startTime = 0;
        elapsedTime = 0;
        document.getElementById('timem').innerHTML = "00:00:00";
    }

    function updateTime() {
        elapsedTime = Date.now() - startTime;

        let seconds = Math.floor((elapsedTime / 1000) % 60);
        let minutes = Math.floor((elapsedTime / (1000 * 60)) % 60);
        let hours = Math.floor((elapsedTime / (1000 * 60 * 60)) % 24);

        seconds = (seconds < 10) ? "0" + seconds : seconds;
        minutes = (minutes < 10) ? "0" + minutes : minutes;
        hours = (hours < 10) ? "0" + hours : hours;

        document.getElementById('timem').innerHTML = `${hours}:${minutes}:${seconds}`;
    }


    document.getElementById("streak-counter").style.display="none";
    function updateStreakCounter() {
	if(streakCount>1){
		document.getElementById("streak-counter").style.display="block";
	}
	else {
	    document.getElementById("streak-counter").style.display="none";
	}
    const streakCounter = document.getElementById("streak-counter");
    streakCounter.innerText = `+${streakCount} Streak!`;
	
	if(streakCount%3==0 && streakCount>0){
		 document.getElementById('clap').play();
	}
    
    // Bounce/Scale animation
    streakCounter.style.transform = "scale(1.2)";
    setTimeout(() => streakCounter.style.transform = "scale(1)", 200);
    
    // Apply intensifying color
    if (streakCount >= 10) streakCounter.style.color = "#ff4500"; // high streak color
    else if (streakCount >= 5) streakCounter.style.color = "#ffa500"; // medium streak color
    else streakCounter.style.color = "#00aaff"; // low streak color
   }
   
   
   function intensifyEffects() {
    const streakCounter = document.getElementById("streak-counter");

    if (streakCount >= 10) {
        // High streak effects
        streakCounter.classList.add("high-streak");
    } else if (streakCount >= 5) {
        // Medium streak effects
        streakCounter.classList.add("medium-streak");
    }
    
    // Remove effects after 1 second for reusability
    setTimeout(() => {
        streakCounter.classList.remove("high-streak", "medium-streak");
    }, 1000);
   }
   
   function loseStreak() {
    const streakCounter = document.getElementById("streak-counter");
    
    // Show streak loss message and reset
    streakCounter.innerText = "Streak Broken!";
    streakCounter.style.color = "#ff0000";
    
    // Shaking animation
    streakCounter.classList.add("shake");
	
    setTimeout(() => {
        streakCounter.classList.remove("shake");
        streakCount = 0; // reset streak
        updateStreakCounter(); // update to show 0 streak
    }, 1000);
	if (navigator.vibrate) navigator.vibrate([100, 50, 100]); // short buzz on streak loss
  }
  
  
  
  
  
  
  
  
  
// Advanced Confetti Effect
function showAdvancedConfetti() {
    // Base configuration for the confetti
    let confettiSettings = {
        particleCount: 100,  // number of particles
        angle: 60,           // angle of the confetti
        spread: 120,         // spread of particles
        origin: { x: Math.random(), y: Math.random() - 0.2 }, // random origin
        colors: ['#bb0000', '#ffffff', '#00bb00', '#ffbb00', '#0000bb'], // array of colors
        shapes: ['circle', 'square'], // types of shapes
        gravity: 1.2,        // makes confetti fall faster or slower
        ticks: 200,          // how long confetti lasts
        scalar: 1,           // size of particles
    };

    // Trigger multiple bursts of confetti at different angles and origins
    confetti(confettiSettings);

    // Add some more confetti bursts after a delay to simulate longer celebrations
    setTimeout(() => {
        confetti({
            ...confettiSettings,
            particleCount: 150, // increase particles
            angle: 120,         // angle the confetti in a different direction
            origin: { x: Math.random(), y: Math.random() - 0.3 }, // adjust origin slightly
        });
    }, 500); // delay before next burst

    setTimeout(() => {
        confetti({
            ...confettiSettings,
            particleCount: 200,
            angle: 90,
            spread: 180,
            origin: { x: 0.5, y: 0.5 }, // center burst
            scalar: 1.5,  // larger confetti particles
        });
    }, 1000); // another delay for final burst
}


function directionalConfetti() {
    // Left-side burst
    confetti({
        particleCount: 50,
        angle: 60,
        spread: 55,
        origin: { x: 0, y: 0.5 }, // from the left side
        colors: ['#f00', '#0f0', '#00f'],
        gravity: 1.5,
    });

    // Right-side burst
    confetti({
        particleCount: 50,
        angle: 120,
        spread: 55,
        origin: { x: 1, y: 0.5 }, // from the right side
        colors: ['#0ff', '#f0f', '#ff0'],
        gravity: 1.5,
    });
}



function cascadingConfetti() {
    let duration = 5 * 1000; // confetti lasts for 5 seconds
    let end = Date.now() + duration;

    (function frame() {
        confetti({
            particleCount: 3,  // fewer particles for a slower trickle effect
            angle: 60,
            spread: 55,
            origin: { x: Math.random(), y: 0 }, // randomize origin on the top edge
            colors: ['#ff6666', '#66ff66', '#6666ff'],
            gravity: 1.5,  // particles fall at moderate speed
            scalar: Math.random() * 1.2, // randomize size of particles
            ticks: 300,   // how long the particles stay visible
        });

        if (Date.now() < end) {
            requestAnimationFrame(frame); // continue until duration ends
        }
    })();
}



function explosiveConfetti() {
    // Explode confetti in a circular pattern
    confetti({
        particleCount: 200,   // lots of particles for a big explosion
        spread: 360,          // spread in a circular pattern
        startVelocity: 50,    // make it explode fast
        origin: {
            x: Math.random(),
            y: Math.random()
        },
        colors: ['#f39c12', '#8e44ad', '#2ecc71', '#e74c3c'], // vibrant colors
        gravity: 0.8,         // light gravity for a slow fall
        scalar: 1.2,          // slightly larger particles
    });
}


function setConfettiCanvasZIndex() {
    // Find the canvas element created by confetti and set its z-index
    const confettiCanvas = document.querySelector('canvas');
    if (confettiCanvas) {
        confettiCanvas.style.position = 'fixed';
        confettiCanvas.style.top = '0';
        confettiCanvas.style.left = '0';
        confettiCanvas.style.width = '100vw';
        confettiCanvas.style.height = '100vh';
        confettiCanvas.style.zIndex = '4000';
        confettiCanvas.style.pointerEvents = 'none'; // Prevents clicks from being blocked
    }
}


function ensureConfettiOnTop() {
    // Ensure the canvas is attached to the <body> and correctly styled.
    let canvas = document.querySelector('canvas'); // Find the confetti canvas
    
    if (!canvas) return; // Safety check

    // Move canvas to the end of <body> to ensure it renders on top
    document.body.appendChild(canvas);

    // Set styles to ensure it stays above everything
    canvas.style.position = 'fixed';
    canvas.style.zIndex = '4000'; // Ensure it's above the modal
    canvas.style.pointerEvents = 'none'; // Allow interactions through the canvas
    canvas.style.top = '0';
    canvas.style.left = '0';
    canvas.style.width = '100%';
    canvas.style.height = '100%';
}



function ultimateCelebration() {
    showAdvancedConfetti();   // A large, multi-burst effect
	setTimeout(() => {
        directionalConfetti();  // Confetti from the left and right
    }, 800);
    
    setTimeout(() => {
        explosiveConfetti();  // A final explosive burst
    }, 1500);

    // Set z-index to make sure the confetti shows up on top
    setConfettiCanvasZIndex();
}





	
	</script>
</body>
</html>
