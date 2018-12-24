#include<stdio.h>
#include<conio.h>
void main()
{
int n,i,j;
clrscr();
printf("Enter the number:");
scanf("%d",&n);
if(n<10)
{
for(i=1;i<=n;i++)
{
for(j=1;j<=i;j++)
{
printf("%d",j);
printf(/n);
}
}
}
}