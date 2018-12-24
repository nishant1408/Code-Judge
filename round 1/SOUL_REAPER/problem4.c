#include<stdio.h>
int main()
{
int n,r,s=0,a,p=0;
scanf("%d",&n);
while(n>0)
{
r=n%10;
s=s+r;
n=n/10;
}
while(s>0)
{
 a=s%10;
p=p+a;
s=s/10; 
}
if(p==1)
printf("yes");
else
printf("no");
return 0;
}