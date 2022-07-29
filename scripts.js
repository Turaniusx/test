let num1 = document.getElementById("display-el")
let count = 0

function increment() {
    count++
    num1.textContent = count
    console.log(count)
}