#include<stdio.h>
int main()
{
int i,j,k,n,p;
scanf("%d",&n);
for(i=0;i<=n;i++)
{
for(j=0;j<=n;j++)
{
for(k=-10;k<=n;k+=10)
{
p=i+(j*6)+(16-k);
}
}
}

for(i=1;i<=n;i++)
{
for(j=1;j<=i;j++)
{
for(k=1;k<=n-i;k++)
{
printf(" ");
}
printf("%d",p);
}
printf("\n");
}

return 0;
}











