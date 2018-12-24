#include<stdio.h>
int main()
{
	int n,ang;
	scanf("%d ",&n);
	int a[n][n],b[n][n],i,j;
	for(i=0;i<n;i++)
	{
		for(j=0;j<n;j++)
			scanf("%d ",&a[i][j]);
	}
	scanf("%d",&ang);
	ang=ang/90;
while(ang--){
	for(i=0;i<n;i++)
	{
		for(j=0;j<n;j++)
		{
			b[j][n-i-1]=a[i][j];
		}
	}
	for(i=0;i<n;i++)
	{
		for(j=0;j<n;j++)
		{
			a[i][j]=b[i][j];
		}
	}
}
for(i=0;i<n;i++)
{
for(j=0;j<n;j++)
{
if(j!=n-1)
printf("%d ",a[i][j]);
else
printf("%d",a[i][j]);
}
if(i!=n-1)
printf("\n");
}
}