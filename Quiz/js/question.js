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
    new Question("Question", ["c1", "c2","c3", "c4"], "answer"),
    new Question("Question", ["c1", "c2","c3", "c4"], "answer"),
    new Question("Question", ["c1", "c2","c3", "c4"], "answer"),
    new Question("Question", ["c1", "c2","c3", "c4"], "answer"),
    new Question("Question", ["c1", "c2","c3", "c4"], "answer"),
    new Question("Question", ["c1", "c2","c3", "c4"], "answer"),
    new Question("Question", ["c1", "c2","c3", "c4"], "answer"),
    new Question("Question", ["c1", "c2","c3", "c4"], "answer"),
    new Question("Question", ["c1", "c2","c3", "c4"], "answer"),
    new Question("Question", ["c1", "c2","c3", "c4"], "answer"),
];
 
// create quiz
var quiz = new Quiz(questions);

 
// display quiz
populate();