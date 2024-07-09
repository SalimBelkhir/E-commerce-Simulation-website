const choices = ["rock", "paper", "scissors"];
const playerDisplay = document.getElementById("playerDisplay");
const computerDisplay = document.getElementById("computerDisplay");
const resultDisplay = document.getElementById("resultDisplay");

function playGame(playerChoice) {
    const computerChoice = choices[Math.floor(Math.random() * 3)];
    console.log(computerChoice);
    let result = "";
    
    if (playerChoice === computerChoice) {
        result = "IT'S A TIE!";
    } else {
        switch(playerChoice) {
            case "rock":
                result = (computerChoice === "scissors") ? "YOU WIN!" : "YOU LOSE :(";
                break;
            case "paper":
                result = (computerChoice === "rock") ? "YOU WIN!" : "YOU LOSE :(";
                break;
            case "scissors":
                result = (computerChoice === "paper") ? "YOU WIN!" : "YOU LOSE :(";
                break;
        }
    }

    playerDisplay.textContent = `PLAYER: ${playerChoice}`;
    computerDisplay.textContent = `COMPUTER: ${computerChoice}`;
    resultDisplay.textContent = result;
}
const slides = document.querySelectorAll(".slides img");
let slideIndex = 0 ;
let intervalId = null ;

document.addEventListener("DOMContentLoaded",initializeSlider);

function initializeSlider(){
    slides[slideIndex].classList.add("displaySlide");
    intervalId = setInterval(nextSlider,5000);
}
function showSlider(index){
    if(index>= slides.length){
        slideIndex =0
    }else if(index < 0){
        slideIndex = slides.length - 1;
    }
    slides.forEach(slide => {
        slide.classList.remove("displaySlide");
    });
    slides[slideIndex].classList.add("displaySlide");
    

}
function prevSlider(){
    clearInterval(intervalId);
    slideIndex--;
    showSlider(slideIndex);
}
function nextSlider(){
    slideIndex++;
    showSlider(slideIndex);
}

