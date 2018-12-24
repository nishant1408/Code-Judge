#include<stdio.h>
#include<conio.h>
int main()
{
long int n,i;
i=2;
int flag;
flag=0;
printf("Enter the no");
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
printf("yes");
}
else
{
printf("No");
}
return 0;
}