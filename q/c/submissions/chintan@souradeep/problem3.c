#include<stdio.h>
int main()
{
int c,d,m,n,i,t;
scanf("%d",&n);
scanf("%d",&c);
if(c>365)
{
t=c/365;
for(i=1;i<=t;i++)
{
c=c-365;
n=n+1;
}
}
if(c<=31)
{
m=1;
d=c;
}
else if(c>31&&c<=59)
{
m=2;
d=c-31;
}
else if(c>59&&c<=90)
{
m=3;
d=c-59;
}
else if(c>90&&c<=120)
{
m=4;
d=c-90;
}
else if(c>120&&c<=151)
{
m=5;
d=c-120;
}
else if(c>151&&c<=181)
{
m=6;
d=c-151;
}
else if(c>181&&c<=212)
{
m=7;
d=c-181;
}
else if(c>212&&c<=243)
{
m=8;
d=c-212;
}
else if(c>243&&c<=273)
{
m=9;
d=c-243;
}
else if(c>273&&c<=304)
{ 
m=10; 
d=c-273;
}
else if(c>304&&c<=334)
{
m=11;
d=c-304;
}
else if(c>334&&c<=356)
{
m=12;
d=c-334;
}
printf("0%d/0%d/%d",d,m,n);
}
