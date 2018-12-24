#include<stdio.h>
int main()
{

int i,n,f=0;
scanf("%d",&n);
for(i=2;i<n/2;i++)
{
if(n%i==0)
{
f++;
break;
}
}
if(f==0)

printf("Yes");

else
printf("No");
return 0;
}