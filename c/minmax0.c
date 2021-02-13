//100 de puncte

#include <stdio.h>
#include <stdlib.h>

int main()
{
    int n;
    int maxx = 0, minn = 999999;
    scanf("%d", &n);

    int i = 1;
    int j = 1;

    int vec[n];

    while (i <= n)
    {
        scanf("%d", &vec[i]);
        i = i + 1;
    }

    while (j <= n)
    {
        if (vec[j] > maxx)
        {
            maxx = vec[j];
        } else if (vec[j] < minn){
            minn = vec[j];
        }
        j = j + 1;
    }

    printf("%d %d", minn, maxx);
    return 0;
}
