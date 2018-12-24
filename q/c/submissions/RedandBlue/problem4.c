#include<stdio.h>
int main()
{
int N, i, j, A, a[10][10];
//printf("Input -");
scanf("%d",&N);
for(i=1; i<=N; i++)
{
for(j=1; j<=N; j++)
{
scanf("%d",&a[i][j]);
printf("%d",a[i][j]);
}
printf("\n");
}
}
scanf("%d",&A);
if(A%90==0)
{
if(A=='1')
{
for(i=N; i>=1; i--)
{
for(j=1; j<=N; j++)
{
printf("%d",a[i][j]);
}
printf("\n");
}
}
}
}
