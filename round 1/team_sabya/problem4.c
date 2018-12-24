#include<stdio.h>
int main()
{
scanf("%d",&n);
{
int a,n,z;
while(n>1)
{
z=0;
while(n>0)
{
a=n%10;
z=z+a;
n=n/10;
}
n=z;
}
if(n==1)
printf("yes");
else
printf("no");
return 0;
}