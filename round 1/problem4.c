#include<stdio.h>
int sum=0;
int main()
{
int num,sum=0,flag=0;
scanf("%d",&num);
if(Magic(num)==1)
printf("Yes");
else
printf("No");
}
int Magic(int n)
{
if(n==1)
return 1;
else if(n>9)
{
while(nsum=sum+(n%10);
n=n/10;
