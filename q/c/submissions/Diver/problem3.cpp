#include<iostream>
using namespace std;
int main()
{ cout<<"yo";
  int i;int n; int j;int k;
cin>>n;
for(i=1;i<=n;i=i+2)
{
for(j=1;j<=i;j++)
{
cout<<j;
}
if(i>1)
{for(k=(i-1);k>=1;k--)
{
cout<<k;
}}
cout<<"\n";
}
return 0;
}