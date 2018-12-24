#include<stdio.h>
int sum(int x);
int check(int a);
int sum(int n)
{
int rem,s=0;
while(n!=0)
{
int s;
rem=n%10;
s=s+rem;
n=n/10;
}
return s;
}
int check(int a)
{ int r,su=0;
while(a!=0)
{
r=a%10;
su=su+r;
a=a/10;

}
return su;
}
int main()
{
int n,k,w,g;
scanf("%d",&n);
k=sum(n);
w=check(k);
g=check(w);
if(g==1)
{
printf("yes");
}
else
{
printf("no");
}
}