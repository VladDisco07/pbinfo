//Rezolvarile in JavaScript nu sunt inca acceptate pe PbInfo

var n = window.prompt("Introdu numarul n:")
n = parseInt(n)

var max_imp = 0

while (n)
{
    if (parseInt((n % 10) % 2) !== 0)
    {
        if (parseInt((n % 10)) > max_imp)
        {
            max_imp = (n % 10)
        }
    }

    n = parseInt(n / 10)
}

alert (max_imp)
