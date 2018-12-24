#include<stdio.h>
int main()
{
int x=6,y=22,N,i,j,k=0;
scanf("%d",&N);
if(N>0&&N<=14)
{
for(i=1;i<=N;i++)
{
for(j=1;j<=N;j++)
{
printf(" ");
}
for(k=1;k<i;k++)
{
printf(" %05d",x);
x=x+y;
y=y+16;
}
printf("\n");
}
}
return 0;
}
