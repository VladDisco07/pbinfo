//100 de puncte

#include <iostream>

using namespace std;

int main()
{
    int n;
    cin >> n;

    int m = n;
    int vec[n];

    for (int i = 1; i <= n; i++)
    {
        cin >> vec[i];
    }

    for (int j = 2; j <= n; j = j + 2)
    {
        cout << vec[j] << ' ';
    }

    cout << endl;

    if (m % 2 == 0)
    {
        m = m - 1;
    }

    for (int k = m; k > 0 ; k = k - 2)
    {
        cout << vec[k] << ' ';
    }
}
