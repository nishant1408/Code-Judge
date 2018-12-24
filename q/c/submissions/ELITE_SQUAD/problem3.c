#include<stdio.h>
int main()
{
int y,d,p,p1,p2,p3,p4,p5;
scanf("%d\n%d",&y,&d);
if(d<=31)
{
if(d<10)
printf("0%d/01/%d",d,y);
else
printf("%d/01/%d",d,y);
}
if(d>31 && d<=59)
{
if((d-31)<10)
printf("0%d/02/%d",(d-31),y);
else
printf("%d/02/%d",(d-31),y);
}
if(d>59 && d<=90)
{
if((d-59)<10)
printf("0%d/03/%d",(d-59),y);
else
printf("%d/03/%d",(d-59),y);
}
if(d>90 && d<=120)
{
if((d-90)<10)
printf("0%d/04/%d",(d-90),y);
else
printf("%d/04/%d",(d-90),y);
}
if(d>120 && d<=151)
{
if((d-120)<10)
printf("0%d/05/%d",(d-120),y);
else
printf("%d/05/%d",(d-120),y);
}
if(d>151 && d<=181)
{
if((d-151)<10)
printf("0%d/06/%d",(d-151),y);
else
printf("%d/06/%d",(d-151),y);
}
if(d>181 && d<=212)
{
if((d-181)<10)
printf("0%d/07/%d",(d-181),y);
else
printf("%d/07/%d",(d-181),y);
}
if(d>212 && d<=243)
{
if((d-212)<10)
printf("0%d/08/%d",(d-212),y);
else
printf("%d/08/%d",(d-212),y);
}
if(d>243 && d<=273)
{
if((d-243)<10)
printf("0%d/09/%d",(d-243),y);
else
printf("%d/09/%d",(d-243),y);
}
if(d>273 && d<=304)
{
if((d-273)<10)
printf("0%d/10/%d",(d-273),y);
else
printf("%d/10/%d",(d-273),y);
}
if(d>304 && d<=334)
{
if((d-304)<10)
printf("0%d/11/%d",(d-304),y);
else
printf("%d/11/%d",(d-304),y);
}
if(d>334 && d<365)
{
if((d-334)<10)
printf("0%d/12/%d",(d-334),y);
else
printf("%d/12/%d",(d-334),y);
}
if(d==365)
printf("00/01/%d",(y+1));
if(d>365 && d<=730)
{
p=d-365;
if(p<=31)
{
if(p<10)
printf("0%d/01/%d",p,(y+1));
else
printf("%d/01/%d",p,(y+1));
}
if(p>31 && p<=59)
{
p1=(p-31);
if(p1<10)
printf("0%d/02/%d",p1,(y+1));
else
printf("%d/02/%d",p1,(y+1));
}
if(p>59 && p<=90)
{
p2=(p-59);
if(p2<10)
printf("0%d/03/%d",p2,(y+1));
else
printf("%d/03/%d",p2,(y+1));
}
if(p>90 && p<=120)
{
p3=(p-90);
if(p3<10)
printf("0%d/04/%d",p3,(y+1));
else
printf("%d/04/%d",p3,(y+1));
}
if(p>120 && p<=151)
{
p4=(p-120);
if(p4<10)
printf("0%d/05/%d",p4,(y+1));
else
printf("%d/05/%d",p4,(y+1));
}
if(p>151 && p<=181)
{
if((p-151)<10)
printf("0%d/06/%d",(p-151),(y+1));
else
printf("%d/06/%d",(p-151),(y+1));
}
if(p>181 && p<=212)
{
if((p-181)<10)
printf("0%d/07/%d",(p-181),(y+1));
else
printf("%d/07/%d",(p-181),(y+1));
}
if(p>212 && p<=243)
{
if((p-212)<10)
printf("0%d/08/%d",(p-212),(y+1));
else
printf("%d/08/%d",(p-212),(y+1));
}
if(p>243 && p<=273)
{
if((p-243)<10)
printf("0%d/09/%d",(p-243),(y+1));
else
printf("%d/09/%d",(p-243),(y+1));
}
if(p>273 && p<=304)
{
if((p-273)<10)
printf("0%d/10/%d",(p-273),(y+1));
else
printf("%d/10/%d",(p-273),(y+1));
}
if(p>304 && p<=334)
{
if((p-304)<10)
printf("0%d/11/%d",(p-304),(y+1));
else
printf("%d/11/%d",(p-304),(y+1));
}
if(p>334 && p<365)
{
if((p-334)<10)
printf("0%d/12/%d",(p-334),(y+1));
else
printf("%d/12/%d",(p-334),(y+1));
}
if(p==365)
printf("00/01/%d",(y+2));
if(d>730 && d<=1095)
{
p=d-730;
if(p<=31)
{
if(p<10)
printf("0%d/01/%d",p,(y+2));
else
printf("%d/01/%d",p,(y+2));
}
if(p>31 && p<=59)
{
p1=(p-31);
if(p1<10)
printf("0%d/02/%d",p1,(y+2));
else
printf("%d/02/%d",p1,(y+2));
}
if(p>59 && p<=90)
{
p2=(p-59);
if(p2<10)
printf("0%d/03/%d",p2,(y+2));
else
printf("%d/03/%d",p2,(y+2));
}
if(p>90 && p<=120)
{
p3=(p-90);
if(p3<10)
printf("0%d/04/%d",p3,(y+2));
else
printf("%d/04/%d",p3,(y+2));
}
if(p>120 && p<=151)
{
p4=(p-120);
if(p4<10)
printf("0%d/05/%d",p4,(y+2));
else
printf("%d/05/%d",p4,(y+2));
}
if(p>151 && p<=181)
{
if((p-151)<10)
printf("0%d/06/%d",(p-151),(y+2));
else
printf("%d/06/%d",(p-151),(y+2));
}
if(p>181 && p<=212)
{
if((p-181)<10)
printf("0%d/07/%d",(p-181),(y+2));
else
printf("%d/07/%d",(p-181),(y+2));
}
if(p>212 && p<=243)
{
if((p-212)<10)
printf("0%d/08/%d",(p-212),(y+2));
else
printf("%d/08/%d",(p-212),(y+2));
}
if(p>243 && p<=273)
{
if((p-243)<10)
printf("0%d/09/%d",(p-243),(y+2));
else
printf("%d/09/%d",(p-243),(y+2));
}
if(p>273 && p<=304)
{
if((p-273)<10)
printf("0%d/10/%d",(p-273),(y+2));
else
printf("%d/10/%d",(p-273),(y+2));
}
if(p>304 && p<=334)
{
if((p-304)<10)
printf("0%d/11/%d",(p-304),(y+2));
else
printf("%d/11/%d",(p-304),(y+2));
}
if(p>334 && p<365)
{
if((p-334)<10)
printf("0%d/12/%d",(p-334),(y+2));
else
printf("%d/12/%d",(p-334),(y+2));
}
if(p==365)
printf("00/01/%d",(y+3));
}
if(d>1095 && d<=1460)
{
p=d-1095;
if(p<=31)
{
if(p<10)
printf("0%d/01/%d",p,(y+3));
else
printf("%d/01/%d",p,(y+3));
}
if(p>31 && p<=59)
{
p1=(p-31);
if(p1<10)
printf("0%d/02/%d",p1,(y+3));
else
printf("%d/02/%d",p1,(y+3));
}
if(p>59 && p<=90)
{
p2=(p-59);
if(p2<10)
printf("0%d/03/%d",p2,(y+3));
else
printf("%d/03/%d",p2,(y+3));
}
if(p>90 && p<=120)
{
p3=(p-90);
if(p3<10)
printf("0%d/04/%d",p3,(y+3));
else
printf("%d/04/%d",p3,(y+3));
}
if(p>120 && p<=151)
{
p4=(p-120);
if(p4<10)
printf("0%d/05/%d",p4,(y+3));
else
printf("%d/05/%d",p4,(y+3));
}
if(p>151 && p<=181)
{
if((p-151)<10)
printf("0%d/06/%d",(p-151),(y+3));
else
printf("%d/06/%d",(p-151),(y+3));
}
if(p>181 && p<=212)
{
if((p-181)<10)
printf("0%d/07/%d",(p-181),(y+3));
else
printf("%d/07/%d",(p-181),(y+3));
}
if(p>212 && p<=243)
{
if((p-212)<10)
printf("0%d/08/%d",(p-212),(y+3));
else
printf("%d/08/%d",(p-212),(y+3));
}
if(p>243 && p<=273)
{
if((p-243)<10)
printf("0%d/09/%d",(p-243),(y+3));
else
printf("%d/09/%d",(p-243),(y+3));
}
if(p>273 && p<=304)
{
if((p-273)<10)
printf("0%d/10/%d",(p-273),(y+3));
else
printf("%d/10/%d",(p-273),(y+3));
}
if(p>304 && p<=334)
{
if((p-304)<10)
printf("0%d/11/%d",(p-304),(y+3));
else
printf("%d/11/%d",(p-304),(y+3));
}
if(p>334 && p<365)
{
if((p-334)<10)
printf("0%d/12/%d",(p-334),(y+3));
else
printf("%d/12/%d",(p-334),(y+3));
}
if(p==365)
printf("00/01/%d",(y+4));
}
if(d>1095 && d<=1460)
{
p=d-1095;
if(p<=31)
{
if(p<10)
printf("0%d/01/%d",p,(y+3));
else
printf("%d/01/%d",p,(y+3));
}
if(p>31 && p<=59)
{
p1=(p-31);
if(p1<10)
printf("0%d/02/%d",p1,(y+3));
else
printf("%d/02/%d",p1,(y+3));
}
if(p>59 && p<=90)
{
p2=(p-59);
if(p2<10)
printf("0%d/03/%d",p2,(y+3));
else
printf("%d/03/%d",p2,(y+3));
}
if(p>90 && p<=120)
{
p3=(p-90);
if(p3<10)
printf("0%d/04/%d",p3,(y+3));
else
printf("%d/04/%d",p3,(y+3));
}
if(p>120 && p<=151)
{
p4=(p-120);
if(p4<10)
printf("0%d/05/%d",p4,(y+3));
else
printf("%d/05/%d",p4,(y+3));
}
if(p>151 && p<=181)
{
if((p-151)<10)
printf("0%d/06/%d",(p-151),(y+3));
else
printf("%d/06/%d",(p-151),(y+3));
}
if(p>181 && p<=212)
{
if((p-181)<10)
printf("0%d/07/%d",(p-181),(y+3));
else
printf("%d/07/%d",(p-181),(y+3));
}
if(p>212 && p<=243)
{
if((p-212)<10)
printf("0%d/08/%d",(p-212),(y+3));
else
printf("%d/08/%d",(p-212),(y+3));
}
if(p>243 && p<=273)
{
if((p-243)<10)
printf("0%d/09/%d",(p-243),(y+3));
else
printf("%d/09/%d",(p-243),(y+3));
}
if(p>273 && p<=304)
{
if((p-273)<10)
printf("0%d/10/%d",(p-273),(y+3));
else
printf("%d/10/%d",(p-273),(y+3));
}
if(p>304 && p<=334)
{
if((p-304)<10)
printf("0%d/11/%d",(p-304),(y+3));
else
printf("%d/11/%d",(p-304),(y+3));
}
if(p>334 && p<365)
{
if((p-334)<10)
printf("0%d/12/%d",(p-334),(y+3));
else
printf("%d/12/%d",(p-334),(y+3));
}
if(p==365)
printf("00/01/%d",(y+4));
}
return 0;
}
}