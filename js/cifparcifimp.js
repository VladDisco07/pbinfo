//Rezolvarile in JavaScript nu sunt inca acceptate pe PbInfo

var n = window.prompt("Introdu numarul n:")
n = parseInt(n)

var par = 0
var impar = 0

for (var i = 1; i <= n; i = i + 1)
{
    var k = window.prompt("Introdu un numar:")
    k = parseInt(k)

    while (k !== 0)
    {
        if (k % 2 === 0)
        {
            par = par + 1
        }

        else
        {
            impar = impar + 1
        }

        k = parseInt(k / 10)
    }
}

alert (par)
alert (impar)
