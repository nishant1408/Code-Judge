#include<stdio.h>
int main()
{
int m,d,n,y;
scanf("%d",&y);
scanf("%d",&d);
if(d>0 && d<=31)
{
m=1;
n=d;
}
if(d>31 && d<=59)
{
m=2;
n=d-31;
}
if(d>59 && d<=90)
{
m=3;
n=d-59;
}
if(d>90 && d<=120)
{
m=4;
n=d-90;
}
if(d>120 && d<=151)
{
m=5;
n=d-120;
}
if(d>151 && d<=181)
{
m=6;
n=d-151;
}
if(d>181 && d<=212)
{
m=7;
n=d-181;
}
if(d>212 && d<=243)
{
m=8;
n=d-212;
}
if(d>243 && d<=273)
{
m=9;
n=d-243;
}
if(d>273 && d<=304)
{
m=10;
n=d-273;
}
if(d>304 && d<=334)
{
m=11;
n=d-304;
}
if(d>334 && d<=365)
{
m=12;
n=d-334;
}



if(d>365)
{
d=d-365;
y=y+1;
if(d>0 && d<=31)
{
m=1;
n=d;
}
if(d>31 && d<=59)
{
m=2;
n=d-31;
}
if(d>59 && d<=90)
{
m=3;
n=d-59;
}
if(d>90 && d<=120)
{
m=4;
n=d-90;
}
if(d>120 && d<=151)
{
m=5;
n=d-120;
}
if(d>151 && d<=181)
{
m=6;
n=d-151;
}
if(d>181 && d<=212)
{
m=7;
n=d-181;
}
if(d>212 && d<=243)
{
m=8;
n=d-212;
}
if(d>243 && d<=273)
{
m=9;
n=d-243;
}
if(d>273 && d<=304)
{
m=10;
n=d-273;
}
if(d>304 && d<=334)
{
m=11;
n=d-304;
}
if(d>334 && d<=365)
{
m=12;
n=d-334;
}
}




if(y%100==0)
{
if(y%400==0)
{
if(d>0 && d<=31)
{
m=1;
n=d;
}
if(d>31 && d<=60)
{
m=2;
n=d-31;
}
if(d>60 && d<=91)
{
m=3;
n=d-60;
}
if(d>91 && d<=121)
{
m=4;
n=d-91;
}
if(d>121 && d<=152)
{
m=5;
n=d-121;
}
if(d>152 && d<=182)
{
m=6;
n=d-152;
}
if(d>182 && d<=213)
{
m=7;
n=d-182;
}
if(d>213 && d<=244)
{
m=8;
n=d-213;
}
if(d>244 && d<=274)
{
m=9;
n=d-244;
}
if(d>274 && d<=305)
{
m=10;
n=d-274;
}
if(d>305 && d<=335)
{
m=11;
n=d-305;
}
if(d>335 && d<=366)
{
m=12;
n=d-335;
}
}
}




if(y%100==0)
{
if(y%400==0)
{
if(d>366)
{
d=d-366;
y=y+1;
if(d>0 && d<=31)
{
m=1;
n=d;
}
if(d>31 && d<=60)
{
m=2;
n=d-31;
}
if(d>60 && d<=91)
{
m=3;
n=d-60;
}
if(d>91 && d<=121)
{
m=4;
n=d-91;
}
if(d>121 && d<=152)
{
m=5;
n=d-121;
}
if(d>152 && d<=182)
{
m=6;
n=d-152;
}
if(d>182 && d<=213)
{
m=7;
n=d-182;
}
if(d>213 && d<=244)
{
m=8;
n=d-213;
}
if(d>244 && d<=274)
{
m=9;
n=d-244;
}
if(d>274 && d<=305)
{
m=10;
n=d-274;
}
if(d>305 && d<=335)
{
m=11;
n=d-305;
}
if(d>335 && d<=366)
{
m=12;
n=d-335;
}
}
}
}
printf("0%d/0%d/%d",n,m,y);
return 0;
}