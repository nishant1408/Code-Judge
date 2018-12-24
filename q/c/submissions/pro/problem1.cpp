#include<iostream>
using namespace std;
class problem1
{
void main()
{ 
long long n;
cout<<"enter n";
cin>>n;
int c=0;
for(long long i=0;i<=n;i++)
{
if(n%i==0)
c++;
}
if(c==2)
cout<<"YES";
else
cout<<"NO";
}
};


