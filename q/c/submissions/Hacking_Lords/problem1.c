#include<stdio.h>
#include<conio.h>
int main()
{
long int i,n;
i=2;
int flag=0;

scanf("%d",&n);
while(i!=(n-1))
{
if((n%i)==0)
{
flag=1;
break;
}
i++;
}
if(flag==0)
{
printf("Yes");
}
else
{
printf("No");
}
return 0;
}