#include<stdio.h>
int main()
{
int n,i,j,a[20][20],p;
scanf("%d\n",&n);
for(i=0;i<n;i++)
{
for(j=0;j<n;j++)
{
scanf("%d",&a[i][j]);
}
}
scanf("\n%d",&p);
if(p==90)
{
for(i=0;i<n;i++)
{
for(j=n-1;j<=0;j--)
{
printf("%d",a[j][i]);
}
}
}
printf("Hello");
return 0;
}