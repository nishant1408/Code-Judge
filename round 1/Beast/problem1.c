#include<stdio.h>
#include<math.h>
int main()
{
int n,flag=0,i;
scanf("%d",&n);
for(i=2;i<=sqrt(n);i++)
{
if(n%i==0)
{
flag=1;
break;
}
}
if(flag==0)
printf("Yes");
else
printf("No");
}