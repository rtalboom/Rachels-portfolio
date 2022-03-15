let lightTheme = "../public/CSS/style2.css";
let darkTheme = "../public/CSS/styledm.css";

// clear
function clearScreen() {
  document.getElementById("result").value = "";
}


const buttons = document.querySelectorAll('.btn')
const display = document.querySelector('input')
const equals = document.querySelector('.equals')
let savedSums = []
let firstValue=null;
let secondValue=null;
let operator=null;

let answer = 0.00000
let l = 0

for (l = 0; l < buttons.length; l++) {
    buttons[l].addEventListener('click', HandleClick)
}
function HandleClick(event) {
    const element = event.target;
    switch (element.classList[3]) {
        case 'n':
            display.value += element.innerHTML
            break;
        case 'backspace':
            display.value = display.value.slice(0, -1)
            break;
        case 'dot':
            Dot()
            break;    
        case 'clear':
            clear()
            break; 
        case 'equals':
            Equals()
            break;
        case 'operator':
            firstValue=display.value;
            operator=element.innerHTML;
            display.value += element.innerHTML
            break;
        default:
            break;
    }
}
function Dot() {
    if (!display.value.includes('.')) {
        display.value += '.'
    }

}
function clear() {
    display.value = null
}
function Equals() {
    let values=display.value.split(operator);
    secondValue=values[1];
    switch (operator) {
        case '+':
            answer = parseFloat(firstValue) + parseFloat(secondValue)
            break;
        case '-':
            answer = parseFloat(firstValue) - parseFloat(secondValue)
            break;
        case '*':
            answer = parseFloat(firstValue) * parseFloat(secondValue)
            break;
        case '/':
            answer = parseFloat(firstValue) / parseFloat(secondValue)
            break;
        default:
            answer = display.value
            break;
    }
    if (answer >= 2147483647 || answer == Infinity) {
        answer = 'error number is out of bounds'
    }
    savedSums.push(`${display.value}=${answer}`)
    display.value = answer
    savedSums.forEach(elem => {
       console.log(elem) 
    });
    Math.PI
    Math.pow()
    Math.sqrt()
    
}

// dark n light mode
function changeTheme() {
  let darkMode = document.getElementById("dark-mode");
  let theme = document.getElementById("theme");
  if (theme.getAttribute("href") == lightTheme) {
      console.log("dfhfhdh");
    theme.href = darkTheme;
    darkMode.innerHTML = "Light Mode";
  } else {
    theme.href = lightTheme;
    darkMode.innerHTML = "Dark Mode";
  }
}
