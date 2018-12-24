#include<stdio.h>
#include<string.h>
int main()
{
int a,i,f,j,p=0,x=0,y[100];
char c,s[100];
scanf("%s",&s);
a=strlen(s);
for(i=0;i<a;i++)
{
if((s[i]>='a'&& s[i]<='z')||(s[i]>='A'&& s[i]<='Z'))
f=s[i];
else
f=(int)s[i];
for(j=1;j<=f;j++)
{
if(f%j==0)
p++;
}
if(p==2)
x++;
p=0;
}
printf("%d",x);
return 0;
}


