#include<stdio.h>
#include<string.h>
int main()
{
int a=0,s=0,m,n,k,r,c=0,s1=0,q;
scanf("%d",&n);
m=n;
while(n!=0)
{
q=n/10;
r=n%10;
s=s+r;
c=c+1;
n=q;
}
k=c;

if(k>1)
{

 r=s%10;
 s1=s1+r;
a=a+1;
s=s/10;
  
}

if(a==1)
printf("yes");
else
printf("no");
return 0;
}