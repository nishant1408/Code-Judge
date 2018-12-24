#include<iostream>
#include<conio.h>
int main()
{
int n;
cin>>n;
for(int i=1;i <= n;i++)
{
for(int j=i; j <= i;j++)
{
cout<<++j;
}
}
}
