//Rezolvazrile in JavaScript nu sunt inca acceptate pe PbInfo

var n = window.prompt("Introdu numarul n:")
n = parseInt(n)

var suma = 0
var contor = 0

while (n !== 0)
{
    suma = parseInt(suma + (n % 10))
    n = n / 10
}

while (suma != 0)
{
    contor = parseInt(contor + 1)
    suma = parseInt(suma / 10)
}

alert (contor)
