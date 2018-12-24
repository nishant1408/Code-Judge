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
if(p/90==1 || p/90==5  || p/90==9  || p/90==13 || p/90==17)
{
for(i=0;i<n;i++)
{
for(j=n-1;j>=0;j--)
{
if(j==0)
printf("%d",a[j][i]);
else
printf("%d ",a[j][i]);
}
if(i!=(n-1))
printf("\n");
}
}
if(p/90==3 || p/90==7 || p/90==11  || p/90==15 || p/90==19)
{
for(i=n-1;i>=0;i--)
{
for(j=0;j<n;j++)
{
if(j==2)
printf("%d",a[j][i]);
else
printf("%d ",a[j][i]);
}
//if(i!=(n-1))
printf("\n");
}
}
if(p/90==2  || p/90==6  || p/90==10  || p/90==14 || p/90==18)
{
for(i=n-1;i>=0;i--)
{
for(j=n-1;j>=0;j--)
{
if(j==0)
printf("%d",a[i][j]);
else
printf("%d ",a[i][j]);
}
//if(i!=(n-1))
printf("\n");
}
}
if(p/90==4  || p/90==8  || p/90==12  || p/90==16 || p/90==20)
{
for(i=0;i<n;i++)
{
for(j=0;j<n;j++)
{
if(j==2)
printf("%d",a[i][j]);
else
printf("%d ",a[i][j]);
}
//if(i!=(n-1))
printf("\n");
}
}
return 0;
}