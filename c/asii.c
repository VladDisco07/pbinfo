//100 de puncte

#include <stdio.h>
#include <stdlib.h>

int main()
{
    int a, b;
    scanf("%d %d", &a, &b);

    int adunare = a + b;
    int scadere = a - b;
    int inmultire = a * b;
    int impartire = a / b;

    printf("%d %d %d %d", adunare, scadere, inmultire, impartire);

    return 0;
}
