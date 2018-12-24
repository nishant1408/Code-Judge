#include<stdio.h>
#include<conio.h>
int main()
{
int a,b=1,c=0;
printf("enter any no");
scanf("%d",&a);
while(b<=a)
{
a%b=0;
b=b+1;
c=c+1;
}
if(c<=2)
printf("prime");
else
printf("no");
return=0;
}
