#include<stdio.h>
#include<conio.h>
int main()
{
int n,i,sum=0,rem=0;
scanf("%d",&n);
while(n>9)
{
sum=0;
while(n>0)
{
rem=n%10;
sum=sum+rem;
n=n/10;
}
n=sum;
}
if(sum==1)
printf("yes");
else
printf("no");
return 0;
}
