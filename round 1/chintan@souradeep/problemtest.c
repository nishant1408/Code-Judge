#include<stdio.h>
int main()
{
int i,n,c=0,s,k=0,r=0;
scanf("%d",&n);
while(n!=0)
{
c=n%10;
s=s+c;
n=n/10;
}
printf("%d",s);
}