var foodWords = [
    'hamburger',
    'pretzel',
    'quinoa',
    'casserole',
    'linguine',
    'spaghetti',
    'chicken',
    'garlic',
    'steak',
    'pizza',
    'lobster',
    'eggs',
    'breakfast',
    'lunch',
    'dinner',
    'bacon',
    'waffles',
    'pancakes',
    'cookie',
    'brownie',
    'cinnamon',
    'custard',
    'gnocchi',
    'chocolate',
    'strawberry',
    'popcorn',
    'rice',
    'salad',
    'strawberry',
    'fajita',
    'popsicle',
    'pomegranate',
    'tomato',
    'meatball',
    'sandwich',
    'cheese',
    'lettuce',
    'cucumber',
    'pepper',
    'onion',
    'avocado',
    'asparagus',
    'falafel',
    'couscous',
    'gingerbread',
]

let answer = '';
let maxWrong = 6;
let mistakes = 0;
let guessed = [];
let wordStatus = null;

function randomWord () {
    answer = foodWords[Math.floor(Math.random() * foodWords.length)];

}

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

function updateHangmanPicture() {
    document.getElementById('hangmanPic').src = 'img/' + mistakes + '.jpg';
}

function checkIfGameWon() {
    if (wordStatus === answer) {
        document.getElementById('keyboard').innerHTML = 'You Won!';
    } 
}

function checkIfGameLost() {
    if (mistakes === maxWrong) {
        document.getElementById('wordSpotlight').innerHTML = 'The answer was ' + answer;
        document.getElementById('keyboard').innerHTML = 'You Lost!';
    } 
}

function guessedWord () {
    wordStatus = answer.split('').map (letter => (guessed.indexOf(letter) >= 0 ? letter : " _ ")).join('');

    document.getElementById('wordSpotlight').innerHTML = wordStatus;
}

function updateMistakes() {
    document.getElementById('mistakes').innerHTML = mistakes;
}

function reset () {
    mistakes = 0;
    guessed = [];
    document.getElementById('hangmanPic').src = 'img/0.jpg';

    randomWord();
    guessedWord();
    updateMistakes();
    generateButtons();
}

document.getElementById('maxWrong').innerHTML = maxWrong;

randomWord();
generateButtons();
guessedWord();