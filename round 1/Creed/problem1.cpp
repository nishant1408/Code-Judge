#include<iostream>
#include<conio.h>
using namespace std;
int main()
{
 int a,i;
  cin>>a;
  for(i=0;i<=a;i++)
   { if(a%2==1)
     {
      if(a%i==1)
      cout<<"No";
      else 
cout<<"Yes"; 
     }
     else
     cout<<"No";
   }
 return 0;
}