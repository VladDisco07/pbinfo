//100 de puncte

#include <iostream>
#include <cmath>

using namespace std;

int main()
{
    int a,b,x;

    cin>>a>>b>>x;

    if((a<=x) && (b>=x))
    {
        cout << "DA";
    } else
    {
        cout << "NU";
    }
    return 0;
}
