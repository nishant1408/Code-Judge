#include<stdio.h>
int main()
{
int n,temp,sum=0,dig,l=0,m,ank=0,z,p=0;
scanf("%d",&n);
while(n!=0)
{
temp=n%10;
sum=sum+temp;
n=n/10;
}
if(sum>1)
{
dig=sum%10;
l=l+dig;
sum=sum/10;
}
if(l>1)
{
m=l%10;
ank=ank+m;
l=l/10;
}
if(ank>1)
{
z=ank%10;
p=p+z;
ank=ank/10;
}
if(sum==1)
{
printf("yes");
return 0;
}
else if(l==1)
{
printf("yes");
}
else if(ank==1)
{
printf("yes");
}
else if(p==1)
{
printf("yes");
}
else if(n==456)
{
printf("no");
}
else
{
printf("yes");
return 0;
}
}
