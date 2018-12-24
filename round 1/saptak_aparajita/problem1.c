#include<stdio.h>
#include long x=5805689712569812103268987
long main(long n)
{
int i,count=0;

if(n>-10000 && n<x)
{
for(i=1;i<=(n/2);i++)
{
if((n%i)==0)
{
count++;
}
if(count ==2)
printf("Yes");
else
printf("No");
}
return 0;
}