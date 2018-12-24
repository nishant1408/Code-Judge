#include<stdio.h>
int main()
{
int i,rem,x,p;
int n ;
scanf("%d",n);
{
if(n%365)
{
n=n+1;
}

scanf("%d",p);
if((p%31))
{
rem=x+1;
}
if(p%28)
{
rem=x+1;
}
if(rem%30)
{
rem=x+1;
}

printf("%d/%d/%d",n,p,rem);
}
}
