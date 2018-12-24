#include<stdio.h>
int main()
{
int N=0,A=0;
scanf("%d",&N);

int a[N][N];
int b[N][N];
int c[N][N];
int d[N][N];
int sq=N*N;
for(int i=0;i<N;i++)
{
for(int j=0;j<N;j++)
{
scanf("%d",&a[i][j]);
}
}
scanf("%d",&A);
for(int i=0;i<N;i++)
{
for(int j=0;j<N;j++)
{
b[j][N-1-i]=a[i][j];
}
}
for(int i=0;i<N;i++)
{
for(int j=0;j<N;j++)
{
c[j][N-1-i]=b[i][j];
}
}
for(int i=0;i<N;i++)
{
for(int j=0;j<N;j++)
{
d[j][N-1-i]=c[i][j];
}
}
if(A%360==0)
{
for(int i=0;i<N;i++)
{
for(int j=0;j<N;j++)
{
if(j==0)
printf("%d",a[i][j]);
else
printf(" %d",a[i][j]);
}
printf("\n");
}
}
if(A%360==90)
{
for(int i=0;i<N;i++)
{
for(int j=0;j<N;j++)
{
if(j==0)
printf("%d",b[i][j]);
else
printf(" %d",b[i][j]);
}
printf("\n");
}
}
if(A%360==180)
{
for(int i=0;i<N;i++)
{
for(int j=0;j<N;j++)
{
if(j==0)
printf("%d",c[i][j]);
else
printf(" %d",c[i][j]);
}
printf("\n");
}
}
if(A%360==270)
{
for(int i=0;i<N;i++)
{
for(int j=0;j<N;j++)
{
if(j==0)
printf("%d",d[i][j]);
else
printf(" %d",d[i][j]);
}
printf("\n");
}
}
}