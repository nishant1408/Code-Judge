#include<iostream>
using namespace std;
int main()
{
 int n ;
 cout<<"enter";
cin>>n;   
int c=0;
   
 for(int i=1;i<=n;i++)
{if((n%i)==0)
{c++;}
}
if(c==2)
{ cout<<"Yes";
}
else 
{cout<<"No";}
return 0;
}
