#include<stdio.h>
#include<string.h>
#include<conio.h>
int prime(int);
int main()
{
int x[100],n,c=0,i;
char st[100];
gets(st);
for(i=0;i<n;i++)
{
x[i]=st(char);
if(prime(x[i])==1)
c=c+1;
}
return 0;
}
int prime(int n)
{
int c=0,i;
for(i=1;i<=n;i++)
{
if(n%i==0)
c=c+1;
}
if(c==2)
return 1;
else 
return 0;
}