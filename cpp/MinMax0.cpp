//100 de puncte

#include <iostream>

using namespace std;

int main()
{
    int n, maxx = 0, minn = 999999;
    cin >> n;

    int vec[n];

    for (int i = 1; i <= n; i++)
    {
        cin >> vec[i];
    }

    for (int j = 1; j <= n; j++)
    {
        if (vec[j] < minn)
        {
            minn = vec[j];
        }
        else if (vec[j] > maxx)
        {
            maxx = vec[j];
        }
    }

    cout << minn << ' ' << maxx;
}
