#include<stdio.h>
int main()
{
int y,d,r=0,m,dd,x=0;
scanf("%d",&y);
scanf("%d",&d);
if(d>=365)
{
x=d/365;
d=d-(365*x);
y=y+x;
}
if(d<31)
{
m=1;
dd=d;
}
else if((d>31)&&(d<=59))
{
m=2;
dd=d-31;
}
else if((d>59)&&(d<=90))
{
m=3;
dd=d-59;
}
else if((d>90)&&(d<=120))
{
m=4;
dd=d-90;
}
else if((d>120)&&(d<=151))
{
m=5;
dd=d-120;
}
else if((d>151)&&(d<=181))
{
m=6;
dd=d-151;
}
else if((d>181)&&(d<=212))
{
m=7;
dd=d-181;
}
else if((d>212)&&(d<=243))
{
m=8;
dd=d-212;
}
else if((d>243)&&(d<=273))
{
m=9;
dd=d-243;
}
else if((d>273)&&(d<=304))
{
m=10;
dd=d-273;
}
else if((d>304)&&(d<=334))
{
m=11;
dd=d-304;
}
else if((d>334)&&(d<=365))
{
m=12;
dd=d-334;
}
if(dd<10)
{
printf("0");
printf("%d",dd);
}
else if(dd>=10)
printf("%d",dd);
printf("/");
if(m<10)
{
printf("0");
printf("%d",m);
}
else if(m>=10)
printf("%d",m);
printf("/");
printf("%d",y);
return 0;
}
