var words = ['hamburger','pretzel','quinoa','casserole', 'linguine', 'spaghetti', 'chicken', 'garlic',
    'steak', 'pizza', 'lobster', 'eggs', 'breakfast', 'lunch', 'dinner', 'bacon', 'waffles',
    'pancakes','cookie','brownie','cinnamon', 'custard', 'gnocchi', 'chocolate', 'strawberry', 'popcorn',
    'rice',  'salad', 'fajita', 'popsicle', 'tomato', 'meatballs',
    'sandwich','cheese','cucumber','pepper','onion','avocado','asparagus',
    'gingerbread']

let answer = '';
let maxWrong = 6;
let mistakes = 0;
let guessed = [];
let wordStatus = null;

//Displays category on main page //
document.getElementById("category").innerHTML = "Category: Food";

// Generates random word for user to guess //
function randomWord () {
    answer = words[Math.floor(Math.random() * words.length)];

}
// Generates on screen keyboard //
function generateButtons () {
    let buttonsHTML = 'abcdefghijklmnopqrstuvwxyz'.split('').map(letter =>
        `
        <button 
        class="btn btn-lg btn-primary m-2"
        id='` + letter + `'
        onClick="handleGuess('` + letter + `')"
        >
        ` + letter + `
        </button>
        `).join('');

    document.getElementById('keyboard').innerHTML = buttonsHTML;
}

function handleGuess (chosenLetter) {
    guessed.indexOf(chosenLetter)=== -1 ? guessed.push(chosenLetter) : null;
    document.getElementById(chosenLetter).setAttribute('disabled', true);

    if (answer.indexOf(chosenLetter) >= 0) {
        guessedWord();
        checkIfGameWon();
    } else if (answer.indexOf(chosenLetter)=== -1) {
        mistakes++;
        updateMistakes();
        checkIfGameLost();
        updateHangmanPicture();
    }
}
// Changes Hangman picture if user guesses incorrect letter //
function updateHangmanPicture() {
    document.getElementById('hangmanPic').src = 'img/' + mistakes + '.jpg';
}
// Validates whether user wins //
function checkIfGameWon() {
    if (wordStatus === answer) {
        document.getElementById('keyboard').innerHTML = 'You Won!';
        document.getElementById('hintbtn').setAttribute('disabled', true);
    } 
}
// Validates whether user loses //
function checkIfGameLost() {
    if (mistakes === maxWrong) {
        document.getElementById('wordSpotlight').innerHTML = 'The answer was ' + answer;
        document.getElementById('keyboard').innerHTML = 'You Lost!';
        document.getElementById('hintbtn').setAttribute('disabled', true);
    } 
}

function guessedWord () {
    wordStatus = answer.split('').map (letter => (guessed.indexOf(letter) >= 0 ? letter : " _ ")).join('');

    document.getElementById('wordSpotlight').innerHTML = wordStatus;
}
// Increments wrong guesses //
function updateMistakes() {
    document.getElementById('mistakes').innerHTML = mistakes;
}
// Resets game board //
function reset () {
    mistakes = 0;
    guessed = [];
    document.getElementById('hangmanPic').src = 'img/0.jpg';
    document.getElementById('hintbtn').removeAttribute('disabled', true);
    randomWord();
    guessedWord();
    updateMistakes();
    generateButtons();
}

document.getElementById('maxWrong').innerHTML = maxWrong;

//Give user a hint//
function giveHint () {
   var hints = [
        'what you might cook on the grill', 'twisted and soft baked', 'grain crop grown for its edible seeds', 
        'a stew or side dish cooked slow in the oven', 'type of pasta similar to fettuccine', 'italian dish with skinny noodles',
        'a lean kind of meat', 'a close relative of the onion', 'red meat', 'a circular italian dish', 'a new england seafood favorite',
        'a breakfast protein that can be cooked different ways', 'the most important meal of the day', 'an afternoon meal', 'your biggest meal of the day',
        'a salty breakfast meat', 'a sweet breakfast dish with a unique surface', 'a flat breakfast dish', 'a flat dessert', 'a square or rectangular chocolate dessert', 
        'a spice used as an aromatic or flavor additive', 'a milk and egg yolk based dessert', 'a small, soft dumpling-like pasta', 'a popular flavor of ice cream', 'a bright red fruit', 'heated dried corn, goes great with a movie',
        'a popular grain side dish', 'a healthy side dish with green vegetables', 'a sizzling tex-mex dish', 'flavored ice pop', 'a red berry grown in greenhouses', 'goes great with spaghetti',
        'consists of meat between slices of bread', 'a dairy based food that comes in thousands of varieties', 'long green vegetable with seeds in the middle', 'a bell shaped vegetable', 'a bulb vegetable that brings tears',
        'green fruit with giant pit', 'long green spring vegetable', 'a type of christmas cookie shaped like a person']
    var hintIndex = words.indexOf(answer);
    window.alert(hints [hintIndex]);
    }
 

randomWord();
generateButtons();
guessedWord();