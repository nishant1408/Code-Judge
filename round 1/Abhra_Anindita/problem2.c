#include<stdio.h>
int isPrime(int);
main()
{
char str[100];
int i,val,count=0;
for(i=0;i<100;i++)
{
val=str[i];
if(isPrime(val)==1)
count=count+1;
}
printf("%d",count);
}
int isPrime(int n)
{
int i,c;
for(i=2;i<=n;i++)
{
if(n%i==0)
c=c+1;
}
if(c==1)
return 1;
else
return 0;
}