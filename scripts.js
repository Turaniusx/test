let num1 = document.getElementById("display-el") /*zima html element po identitet*/


let count = 0

function increment() {
    count++
    num1.textContent = count /*pecate na hmtl-o u tip na text */
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
let buttons = Array.from(document.getElementsByClassName("kopce")); //gi konvertirame vo array 
                                                                    //oti kopcinjata se html kolekcija

buttons.map(kopce => { //mapirame gi kopcinjata so event listener za click
    kopce.addEventListener('click', (e) => { 
        switch(e.target.innerText){
            case 'Ce': display.innerText = ' '; break;
            case '←' : display.innerText = display.innerText.slice(0, -1); break;
            case '=': 
                try{ //se izvrshuvaat instrukciite vo taj block
                    display.innerText = eval(display.innerText);
                } catch { //ako nesto loso se desava, se izvrsuva taj blok
                    display.innerText = "Error!"; //damn
                } break;
            
            default: display.innerText += e.target.innerText;
        }}
    )}
)
 
















//console.log("clicked");
        //console.log(e);
        //console.log(e.target);
        //console.log(e.target.innerText);