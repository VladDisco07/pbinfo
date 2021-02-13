//100 de puncte

#include <stdio.h>
#include <stdlib.h>

int main()
{
    int n;
    scanf("%d", &n);
    int copie_n = n;

    int vec[n];
    int contor1 = 1;
    int contor2 = 1;

    while (contor1 <= n)
    {
        scanf("%d", &vec[contor1]);

        contor1 = contor1 + 1;
    }

    while (contor2 <= copie_n)
    {
        printf("%d ", vec[contor2]);
        if (contor2 != copie_n)
            printf("%d ", vec[copie_n]);

        contor2 = contor2 + 1;
        copie_n = copie_n - 1;
    }

    return 0;
}
