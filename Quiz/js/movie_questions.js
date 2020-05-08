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
    new Question("What is Indiana Jones' weapon of choice?", ["Revolver", "Whip","Sword", "Knife"], "Whip"),
    new Question("What was the first non-English language film to win an Oscar for Best Picture?", ["Spirited Away", "Downfall","Amélie", "Parasite"], "Parasite"),
    new Question("In what year were the first Academy Awards held?", ["1929", "1939","1941", "1935"], "1929"),
    new Question("What is Stephen King's top grossing movie?", ["IT", "Carrie","The Shining", "Salem's Lot"], "The Shining"),
    new Question("In what city does the 1986 film Ferris Bueller's Day Off take place?", ["Los Angeles", "Miami","Chicago", "St. Louis"], "Chicago"),
    new Question("In Back to the Future, what kind of car is the time machine?", ["Mustang", "DeLorean","Corvette", "Gremlin"], "DeLorean"),
    new Question("Which actor earned an Oscar for his role as the Joker?", ["Joaquin Phoenix", "Heath Ledger","Jack Nicholson", "Jim Carrey"], "Joaquin Phoenix"),
    new Question("Which social media website is the subject of the movie The Social Network?", ["Twitter", "MySpace","Instagram", "Facebook"], "Facebook"),
    new Question("Which movie won the Academy Award for Best Picture in 2018?", ["Dunkirk", "The Shape of Water","Darkest Hour", "Get Out"], "The Shape of Water"),
    new Question("Who was the only non-Jedi to use a lightsaber in the Star Wars trilogy?", ["Han Solo", "Chewbacca","Lando Calrissian", "C3P0"], "Han Solo"),
];
 
// create quiz
var quiz = new Quiz(questions);

 
// display quiz
populate();