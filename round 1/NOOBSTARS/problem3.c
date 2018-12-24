#include<stdio.h>
#include<conio.h>
int main()
{
int n,i,j,r;
scanf("%d",&n);
for(i=1;i<=n;i++)
{
for(j=1;j<=i;j++)
{
printf("%d",j);
}
for(r=i;r>1;r--)
printf("%d",r-1);
printf("\n");
}
return 0;
}
