#include<stdio.h>
int main()
{
int y,x,i,k=1;
int a[]={31,28,31,30,31,30,31,31,30,31,30,31};
int b[]={31,29,31,30,31,30,31,31,30,31,30,31};
scanf("%d",&y);
scanf("%d",&x);

while(x>365)
{
if(y%4!=0)
{
x=x-365;
y++;
}

else
{
x=x-366;
y++;
}
}
if(y%4!=0)
{
for(i=0;i<12;i++)
{
if(x>a[i])
{
x=x-a[i];
k++;
}
else
break;
}
}
else
{
for(i=0;i<12;i++)
{
if(x>b[i])
{
x=x-b[i];
k++;
}
else
break;
}
}
if(x<10&&k<10)
printf("0%d/0%d/%d",x,k,y);
else if(x<10)
printf("0%d/%d/%d",x,k,y);
else if(k<10)
printf("%d/0%d/%d",x,k,y);
else
printf("%d/%d/%d",x,k,y);

}