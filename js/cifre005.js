//Rezolvarile in JavaScript nu sunt inca acceptate pe PbInfo

var n = window.prompt("Introdu numarul n:")
var r = window.prompt("Introdu numarul r:")
n = parseInt(n)
r = parseInt(r)

var contor = 0

for (var i = 1; i <= n; i = i + 1)
{
    var k = window.prompt("Introdu un numar:")
    k = parseInt(k)
    
    if (k % 9 === r)
    {
        contor = contor + 1
    }
}

alert (contor)
