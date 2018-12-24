#include<stdio.h>
int main()
{
int n,i,r,sum=0,num;
scanf("%d",&n);
if(n==1)
printf("yes");
num=n;
while(num>=10)
{
r=n%10;
sum+=r;
n/=10;
num=sum;
}
if(sum==1)
printf("yes");
else
printf("no");
return 0;
}



