#include<stdio.h>
main()
{
int i,count=0;
int n;
//do
//{
//printf("Input:\n");
//scanf("%d",&n);
//}
while((n<=-10000)||(n>=58056897));
for(i=1;i<=n;i++)
{
if((n%i)==0)
count=count+1;
}
if(count==2)
{
//printf("Output:\n");
printf("Yes");
}
else
{
//printf("Output:\n");
printf("No");
}
}
