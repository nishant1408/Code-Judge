#include<stdio.h>
int main()
int i,j,n,a,b; 
printf("Enter the no of columns and rows");
scanf("%d",&n);
printf("Enter the angler");
scanf("%d",&b);
for( i=0;i<n;i++)
{
for( j=0;j<n;j++)
{
scanf("%d",&a[i][j]);
}
}
for(i=0;i<=n;i++)
{
for( j=0;j<=n;j++)
{
printf("%d",a[i][j]);
}
}
if(a==90)
{
for( i=0;i<n;i++)
{
for(j=0;j<n;j++)
{
printf("%d",a[j][i]);
}
}
for( i=0;i<n;i++))
{
for( j=n;j>0;j--)
{
printf("%d",a[i][j]);
}
}
}
return 0;
}


