#include<stdio.h>
int main()
{
int n, sum=0;int num;
while(n!=0)
{
num=n;
n=n%10;
sum=sum+n;
n=n/10;
}
sum=n;
if(sum==1)
printf("no");
else
printf("yes");
return 0;
}