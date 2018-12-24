#include<stdio.h>
int power(int a,int b)
{
long long int i,p=1;
for(i=1;i<b;i++)
p=p*a;
return p;
}
int main()
{
int n;
scanf("%d",&n);
if(n%2!=0)
printf("%d",n);
else
printf("%lld",power(3,(n/2-1)));
}