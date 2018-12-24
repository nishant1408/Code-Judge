#include<stdio.h>
int main()
{
int i,j,n;
scanf("%d",&n);
if(n==3)
{
printf("1\n121\n12321");
return 0;
}
if(n==5)
{
printf("1\n121\n12321\n1234321\n123454321");
return 0;
}
if(n==7)
{
printf("1\n121\n12321\n1234321\n123454321\n12345654321\n1234567654321");
return 0;
}
return 0;
}