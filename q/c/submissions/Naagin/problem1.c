#include<stdio.h>
int main()
{
int n;
int i,c=0;
scanf("%d",&n);
for(i=1;i<=n;i++)
{
if(n%i==0)
c++;
}
if(c==2)
printf("Yes");
else
printf("No");
return 0;
}