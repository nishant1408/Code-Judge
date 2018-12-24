#include<stdio.h>
int main()
{
int num,sum=0,flag=0;
scanf("%d",&num);

while(num>0)
{
sum=sum+(num%10);
num=num/10;
}
//if(sum!=1)
//continue;
//else
//{
//flag=1;
//break;
//}
if(sum==1)
{
flag=1;
break;
}
else
{
num=sum;
continue;
}
}
