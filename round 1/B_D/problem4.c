#include<stdio.h>
int main()
{
int n,t,s=0;
scanf("%d",&n);
do
{
while(n>0)
{
t=n%10;
s=s+t;
n=n/10;
}
n=s;
s=0;
}
while(n>=10);
if(n==1)
printf("yes");
else
printf("no");
}