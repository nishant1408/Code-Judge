#include<iostream>
using namespace std;
int main()
{ int c = 0;
  int i;int n; int j;int k;
cin>>n;
if(n<10)
{for(i=1;i<=n;i=i+2)
{++c;
for(j=1;j<(c+1);j++)
{
cout<<j;
}
if(i>1)
{for(k=(i-1);k>=1;k--)
{
cout<<k;
}}
cout<<"\n";
}}
return 0;
}