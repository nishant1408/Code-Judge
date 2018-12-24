#include<stdio.h>
int main()
{
int a,c=0;
scanf("%d",&a);
for(int i=1;i<=a;i++)
{
if(a%i==0)
c++;
}
if(c==2)
printf("Yes");
else
printf("No");

return 0;
}
