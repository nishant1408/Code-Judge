#include<iostream>
#include<conio.h>

using namespace std;
int main()
{ 
 int n=0, c=0;
 cout<<"input no.";
 cin>>n; 
 for(int i=1;i<n;i++)
 {
   c=n%i;
   if(c!=0)
    cout<<"Yes";
   else
    cout<<"No";
  }
 getch();
}