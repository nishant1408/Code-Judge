#include<stdio.h>
main()
{
int y,a,q=0,r=0,n1,n2; 
scanf("%d",&y);
scanf("%d",&a);
n1=a;
if(a<365)
{
q=(a/30)+1;
r=(a%30)+1;
if(r<10)
{
printf("%0d/",r);
}
else
{
printf("%d/",r);
}
if(q<10)
{
printf("%0d/",q);
}
else
{
printf("%d/",q);
}
printf("%d",y);
}
else
{
q=(a/365);
r=(a%365);
y=y+1;
if(r<10)
{
printf("%0d/",r);
}
else
{
printf("%d/",r);
}
if(q<10)
{
printf("%0d/",q);
}
else
{
printf("%d/",q);
}
printf("%d",y);
if(r<10)
{
printf("%0d/",r);
}
else
{
printf("%d/",r);
}
if(q<10)
{
printf("%0d/",q);
}
else
{
printf("%d/",q);
}
printf("%d",y);


}
}