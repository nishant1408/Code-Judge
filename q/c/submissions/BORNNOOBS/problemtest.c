#include<stdio.h>
#include<conio.h>
int main()
{
int sum=0;
int date=0;
int n3=0,n1,yr,n,i,mon1=0,mon=0;
int dn[] = {31,28,31,30,31,30,31,31,30,31,30,31};
int dn1[] = {31,29,31,30,31,30,31,31,30,31,30,31};
int month[]={1,2,3,4,5,6,7,8,9,10,11,12};
n1=29;
scanf("%d",&yr);
scanf("%d",&n);
if(yr%4==0)
{
if(n>366)
{
yr=yr+1;
n3=n-366;
mon=n3%30;
for(i=0;i<mon;i++)
sum=sum+dn1[i];
if(sum==n3)
{
mon1=month[mon-1];
date=dn1[mon-1];
}
else
{
mon1=month[mon-1];
date=n3-sum;
}
}
else
{
mon=n%30;
for(i=0;i<mon;i++)
sum=sum+dn1[i];
if(sum==n3)
{
mon1=month[mon-1];
date=dn1[mon-1];
}
else
{
mon1=month[mon-1];
date=n-sum;
}
}
}
else
{
if(n>365)
{
yr=yr+1;
n3=n-366;
mon=n3%30;
for(i=0;i<mon;i++)
sum=sum+dn1[i];
if(sum==n)
{
mon1=month[mon-1];
date=dn1[mon-1];
}
else
{
mon1=month[mon-1];
date=n3-sum;
}
}
else
{
mon=n%30;
for(i=0;i<mon;i++)
sum=sum+dn1[i];
if(sum==n)
{
mon1=month[mon-1];
date=dn1[mon-1];
}
else
{
mon1=month[mon-1];
date=n-sum;
}
}
}
if(date<10 && mon1<10)
printf("0%d/0%d/%d",date,mon1,yr);
else
printf("%d/%d/%d",date,mon1,yr);
}
