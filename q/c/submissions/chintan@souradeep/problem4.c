#include<stdio.h>
int main()
{
int a[10][10],b[10][10],n,i,j,c,d=1;
scanf("%d",&n);
for(i=1;i<=3;i++)
{
for(j=1;j<=3;j++)
{
a[i][j]=d;
d=d+1;
}
}
scanf("%d",c);
for(i=1;i>=3;i++)
{
for(j=1;j>=3;j++)
{
printf("%d",a[i][j]);
}}}