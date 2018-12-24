#include<iostream>
using namespace std;

int main()
   {
    int i,n,j;
    cin>>n;
    cout<<1;
    for(i=2;i<=n;i++)
       {
          for(j=1;j<=i;j++)
           {
             cout<<j;
               
            }
             for(j=i-1;j<=1;j--)
             {
               cout<<j;
                }
             }
       
           cout<<endl;
} 