#include<stdio.h>
int main()
{
int i,rem,x,p;
int n ;
printf("Enter the no of year");
scanf("%d",n);
{
if(n%365)
{
n=n+1;
}
scanf("%d",x);
scanf("%d",p);
if((p%31))
{
rem=x+1;
}
if(rem%28)
{
rem=x+1;
}
if(rem%30)
{
rem=x+1;
}
scanf("%d\n%d\n%d\n",n,p,rem);
}
}
