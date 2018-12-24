#include<stdio.h>
int main()
{
longint n,i,s=0;
for(i=2;i<n/2;i++)
{
if(n%i==0)
s=s++;
}
if(s==1)
printf("no");
else
printf("yes");
}