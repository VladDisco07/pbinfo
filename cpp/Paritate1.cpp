//100 de puncte

#include <iostream>

using namespace std;

int main()
{
    int n, par = 0, impar = 0, C;
    cin >> n;

    int vec[n];
    for (int i = 1; i <= n; i++)
    {
        cin >> vec[i];
    }

    for (int j = 1; j <= n; j++)
    {
        if (vec[j] % 2 == 0)
        {
            par++;
        }
        else
        {
            impar++;
        }
    }

    if (par > impar)
    {
        C = par - impar;
    }
    else
    {
        C = impar - par;
    }

    cout << C;
}
