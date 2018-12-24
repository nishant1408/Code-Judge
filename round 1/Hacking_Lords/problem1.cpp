#include<iostream.h>
#include<conio.h>
void main()
{
long int i=2;
int flag=0;
long int n;
cout<<"Enter any number: ";
cin>>n;
while(i!=(n-1))
{
if((n%i)==0)
{
flag=1;
break;
}
}
if(flag==0)
{
cout<<"yes";
}
else
{
cout<<"No";
}
cout<<endl;
}

