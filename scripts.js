let num1 = document.getElementById("display-el")
let num2 = document.getElementById("calculated-el")

let count = 0

function increment() {
    count++
    num1.textContent = count
    console.log(count)
}
function decrement() {
    count--
    num1.textContent = count
    console.log(count)
}
function execute() {
    var n = document.getElementById("num").value;
    var i, f=1;
    if (n < 0) {
        document.getElementById("fact").innerHTML = "Error!"
    } else {

    
    for(i=1; i<=n; i++){
        f *= i;
    }
    document.getElementById("fact").innerHTML = f;
}
}