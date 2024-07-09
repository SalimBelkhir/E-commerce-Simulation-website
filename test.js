// let username ;
// username = window.prompt('what\'s your username ?');
// console.log(`Hello ${username}`);
// let username;

// document.getElementById("mysubmit").onclick = function(){
    // username = document.getElementById("myText").value;
    // document.getElementById("myH1").textContent = `Hello ${username}` ;
// }
// let age ;
// age = window.prompt('what\'s your age brah ?');
// age = Number(age);
// age+=1 ;
// console.log(age);

/* const PI = 3.14 ;
let radius ;
let circumference ;

document.getElementById("Mysubmit").onclick = function() {
    radius = document.getElementById("myText").value ;
    radius=Number(radius);
    circumference =2*PI*radius;
    document.getElementById("myp").textContent = `the circumference : ${circumference}` ;
}*/
/*
let increase = document.getElementById("Increase") ;
let decrease = document.getElementById("Decrease");
let reset = document.getElementById("Reset") ;
let countlabel = document.getElementById("cntlabel") ;
let count = 0;
increase.onclick =function(){
    count ++ ;
    countlabel.textContent = count ;
}

decrease.onclick =function(){
    count -- ;
    countlabel.textContent = count ;
}

reset.onclick =function(){
    count = 0 ;
    countlabel.textContent = count ;
}
*/
/*
const label =document.getElementById("cntlabel") ;
const button =document.getElementById("Random") ;
let number  ;
const min =50 ;
const max = 100 ;
button.onclick = function() {
    number = Math.floor(Math.random() *(max - min) ) +min ;
    label.textContent = number ;
}*/
/*
const result=document.getElementById("res") ;
const submit=document.getElementById("submit") ;
const text=document.getElementById("res");
let age ;

submit.onclick = function(){
    age = text.value ;
    if(age >= 18){
        res.textContent = `Bro you are an adult` ;
    }else{
        res.textContent = `You still a kiddie` ;
    }
}*/
/*
const myCheckBox = document.getElementById("myCheckBox");
const visaBtn = document.getElementById("visaBtn");
const mastercardbtn = document.getElementById("mastercardbtn");
const paypalBtn = document.getElementById("paypalBtn");
const subResult = document.getElementById("subResult");
const paymentResult = document.getElementById("paymentResult");
const submit = document.getElementById("submit");

submit.onclick = function() {
    if (myCheckBox.checked) {
        subResult.textContent = `You are subscribed`;
    } else {
        subResult.textContent = `You are not subscribed bruh`;
    }
}*/
/*let username ;
do{
    username = window.prompt(`Enter your name`);
}while(username === "" || username === null)
console.log(`Hello ${username}`);*/

/*
const min = 3;
const max = 10;
const answer =Math.floor(Math.random() * (max-min))+min;
let attempts = 0;
let guess ;
let running = true ;
while(running){
    guess = window.prompt(`Guess a number betwenn ${min} and ${max}`);
    guess = Number(guess);
    if(isNaN(guess)){
        window.alert('invalid number');
    }else if(guess < min || guess > max){
        window.alert(`your number isn't between ${min} and ${max}`);
    }else{
        if(guess < answer){
            window.alert(`too low`);
        }else if(guess > answer){
            window.alert(`too high`);
        }
        else{
            window.alert(`CORRECT ANSWER MF !, it took you ${attempts} attempts`);
            running = false ;
        }
    }
    
}*/
/*
const textBox = document.getElementById("textBox") ;
const toFarenheit=document.getElementById("toFarenheit");
const toCelsius=document.getElementById("toCelsius");
const result=document.getElementById("result");
let temp ;
function convert(){
    if(toFarenheit.checked){
        temp = Number(textBox.value);
        temp = temp*9/5 +32 ;
        result.textContent = temp + "F°"
    }else if(toCelsius.checked){
        temp = Number(textBox.value);
        temp = (temp-32)*5/9 ;
        result.textContent = temp +"°C"
    }else{
        result.textContent = `Select a Unit`;
    }
}*/

/*
function rollDice() {
    const nbDice = document.getElementById("nbDice").value;
    const DiceResult = document.getElementById("DiceResult");
    const DiceImages = document.getElementById("DiceImages");
    const values = [];
    const images = [];

    for (let i = 0; i < nbDice; i++) {
        const value = Math.floor(Math.random() * 6) + 1;
        values.push(value);
        images.push(`<img src="Dice_images/${value}.png" height="50px" width="50px">`);
    }
    DiceResult.textContent = `Dice: ${values.join(', ')}`;
    DiceImages.innerHTML = images.join(' ');
}
*/
/*
//RANDOM PASSWORD GENERATOR
function generatePassword(length, includeLowercase,includeUppercase,includeNumbers,includeSymboles){
    lowercasechars='abcdefghijklmnopqrstuwxyz';
    uppercasechars='ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    numbers='0123456789';
    symbols='!?*$&~^%§/:.,-+°)]}=`|-_#';
    let allowedchars ='';
    let password = '';
    allowedchars+= includeLowercase ? lowercasechars : "" ;
    allowedchars+= includeUppercase? uppercasechars : "" ;
    allowedchars+= includeNumbers?  numbers: "";
    allowedchars+= includeSymboles? symbols: "";
    if(length<=0){
        return `(the number of characters must be at least 1)`;
    } 
    if(allowedchars.length === 0){
        return `(you need to set at least one option)`;
    }
    for(let i =0;i<length;i++){
        const randomIndex = Math.floor(Math.random() * allowedchars.length);
        password += allowedchars[randomIndex];
    }

    return password ;
}
const passwordLength = 12 ;
const includeLowercase = true ;
const includeUppercase = true ;
const includeNumbers = true ;
const includeSymboles = true ;

const password =generatePassword(passwordLength,includeLowercase,includeUppercase,includeNumbers,includeSymboles);
console.log(`Generated Password: ${password}`) ;
*/
/*
sum(displayConsole,1,2);

function sum(callback, x,y){
    let result = x+ y ;
    callback(result);
}
function displayConsole(result){
    console.log(result);
}
let number = [1,2,3,4,5];
let evenNums = number.map(isEven);
console.log(evenNums);
function isEven(element){
    return element % 2 === 0 ;
}

const age = [16,17,18,19,20,60];
const ageAdult = age.filter(isAdult);
console.log(ageAdult);
function isAdult(elt){
    return elt >= 18 ;
}
const person2 ={
name : "Patrick" ,
favFood : "pizza" ,
eat : function(){console.log(`${person2.name} is eating a ${this.favFood}`)}
}
person2.eat() ;*/
/*
function updateClock() {
    console.log('updateClock called'); // Debug statement
    const now = new Date();
    const hours = now.getHours().toString().padStart(2, 0);
    const minutes = now.getMinutes().toString().padStart(2, 0);
    const seconds = now.getSeconds().toString().padStart(2, 0);
    const timeString = `${hours}:${minutes}:${seconds}`;
    document.getElementById('clock').textContent = timeString;
    console.log(timeString); // Debug statement
}

updateClock();
setInterval(updateClock, 1000);*/




