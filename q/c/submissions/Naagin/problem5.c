#include<stdio.h>
#include<string.h>
int main()
{
char s[100],c[100],t;
int i,r=0,l,q=0;
for(i=0;i<100;i++)
scanf("%c",&s);
r=strlen(s);
if(r%2==0)
{
for(i=0;i<r;i+=2)
{
t=s[i];
s[i]=s[i+1];
s[i+1]=t;
}
}
else if(r%2!=0)
{
for(i=0;i<r-1;i+=2)
{
t=s[i];
s[i]=s[i+1];
s[i+1]=t;
}
}
l=1;
for(i=0;i<r;i++)
{
q=(int)s[i];
q+=l;
l++;
c[i]=(char)q;
printf("%c",c[i]);
}
return 0;
}


