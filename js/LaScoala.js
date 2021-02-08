//Rezolvarile in JavaScript nu sunt inca acceptate pe PbInfo

var n = window.prompt("Introdu numarul n:")

n = parseInt(n)

var k = Math.sqrt(n)

if (k * k === n)
{
    k = k - 1
}

document.write(parseInt(n - k * k))
document.write("<br>")

var kk = parseInt(k * k)

for (var i = 0; i <= k; i = i + 1)
{
    for (var j = 0; j <= k; j = j + 1)
    {
        document.write(kk)
        document.write(" ")
        kk = kk - 1
    }
    document.write("<br>")
}
