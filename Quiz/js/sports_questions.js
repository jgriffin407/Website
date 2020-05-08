function Quiz(questions) {
    this.score = 0;
    this.questions = questions;
    this.questionIndex = 0;
}
 
Quiz.prototype.getQuestionIndex = function() {
    return this.questions[this.questionIndex];
}
 
Quiz.prototype.guess = function(answer) {
    if(this.getQuestionIndex().isCorrectAnswer(answer)) {
        this.score++;
    }
 
    this.questionIndex++;
}
 
Quiz.prototype.isEnded = function() {
    return this.questionIndex === this.questions.length;
}
 
 
function Question(text, choices, answer) {
    this.text = text;
    this.choices = choices;
    this.answer = answer;
}
 
Question.prototype.isCorrectAnswer = function(choice) {
    return this.answer === choice;
}
 
 
function populate() {
    if(quiz.isEnded()) {
        showScores();
    }
    else {
        // show question
        var element = document.getElementById("question");
        element.innerHTML = quiz.getQuestionIndex().text;
 
        // show options
        var choices = quiz.getQuestionIndex().choices;
        for(var i = 0; i < choices.length; i++) {
            var element = document.getElementById("choice" + i);
            element.innerHTML = choices[i];
            guess("btn" + i, choices[i]);
        }
 
        showProgress();
    }
};
 
function guess(id, guess) {
    var button = document.getElementById(id);
    button.onclick = function() {
        quiz.guess(guess);
        populate();
    }
};
 
 
function showProgress() {
    var currentQuestionNumber = quiz.questionIndex + 1;
    var element = document.getElementById("progress");
    element.innerHTML = "Question " + currentQuestionNumber + " of " + quiz.questions.length;
};
 
function showScores() {
    var gameOverHTML = "<h1>Result</h1>";
    gameOverHTML += "<h2 id='score'> Your score: " + quiz.score + "</h2>" + "<h4 id='closeTab'>Close this tab to return to main screen</h4>";
    var element = document.getElementById("quiz");
    element.innerHTML = gameOverHTML;
};
 
// create questions here
var questions = [
    new Question("The Olympics are held every how many years?", ["7", "5","4", "6"], "4"),
    new Question("What do you call it when a player makes three consecutive strikes in bowling?", ["Turkey", "Banger", "Mash", "Whammy"], "Turkey"),
    new Question("Which sporting event is held on Memorial Day every year?", ["Southern 500", "Coca-Cola 600","Daytona 500", "Indianapolis 500"], "Indianapolis 500"),
    new Question("What is Canada's national sport?", ["Ice Hockey", "Lacrosse", "Curling", "Bobsledding"], "Lacrosse"),
    new Question("Which NFL team has never hosted or played a Super Bowl?", ["Los Angeles Rams", "Oakland Raiders", "Cleveland Browns", "New York Jets"], "Cleveland Browns"),
    new Question("How much time are golfers allowed to find their ball?", ["5 Minutes", "2 Minutes", "10 Minutes", "No Time Limit"], "5 Minutes"),
    new Question("What material was first used to cover baseballs?", ["Horsehide", "Cowhide", "Rubber", "Deerhide"], "Cowhide"),
    new Question("Which NFL team scored the most points in a single Super Bowl?", ["New England Patriots", "Green Bay Packers", "Miami Dolphins", "San Francisco 49ers"], "San Francisco 49ers"),
    new Question("'Murderers' Row' refers to which baseball team in the 1920's?", ["Detroit Tigers", "New York Yankees", "Chicago Cubs", "Boston Red Sox"], "New York Yankees"),
    new Question("How many points is a touchdown worth in American Football?", ["6", "1", "2", "7"], "6")
];
 
// create quiz
var quiz = new Quiz(questions);

 
// display quiz
populate();