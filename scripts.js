let num1 = document.getElementById("display-el") /*zima html element po identitet*/


let count = 0

function increment() {
    count++
    num1.textContent = count //prints the html in the form of text
    console.log(count)
}
function decrement() {
    count--

    num1.textContent = count
    console.log(count)
}
function execute() {
    let n = document.getElementById("num").value;
    let i, f=1; 
    if (n < 0) {
        document.getElementById("fact").innerHTML = "Error!"
    } else if (n >= 20) {
        document.getElementById("fact").innerHTML = "Number too big(thats what she said). Use a number smaller than 20."
    }
    else {

    if (n <= 20) {
        for(i=1; i<=n; i++){
            f *= i;
         }
    } 
    document.getElementById("fact").innerHTML = f;
}
}
////////Calc scripts
let display = document.getElementById("display");
let buttons = Array.from(document.getElementsByClassName("kopce")); //converting the buttons in an array 
                                                                    //bc the buttons are an html collection

buttons.map(kopce => { //buttons are being mapped with an event listener on click
    kopce.addEventListener('click', (e) => { 
        switch(e.target.innerText){
            case 'Ce': display.innerText = ' '; break;
            case '←' : display.innerText = display.innerText.slice(0, -1); break;
            case '=': 
                try{ 
                    display.innerText = eval(display.innerText);
                } catch { 
                    display.innerText = "Error!"; 
                } break;
            case '!' :                                     
                
                    var f=1;
                    display.innerText = eval(display.innerText);
                    if (display.innerText < 50) {
                        for (let i=1; i <= display.innerText; i++){
                            f *= i;
                            console.log(display.innerText);
                        }
                        display.innerText = f;
                    } else {
                        display.innerText = "Try a number smaller than 50"
                    }
                
                 break;
            default: display.innerText += e.target.innerText;
            console.log(display.innerText);
        }}
    )}
)
 
















//console.log("clicked");
        //console.log(e);
        //console.log(e.target);
        //console.log(e.target.innerText);