#include<stdio.h>
#include<string.h>
int main()
{
char s[100];
int i=0,l=0,r=0,x,j;
for(i=0;i<100;i++)
{
scanf("%c",&s[i]);
}
l=strlen(s);
for(i=0;i<l;i++)
{
if(s[i]==' ')
r++;}
if(r>0)
{
printf("%c",s[0]);
printf(". ");
for(i=1;i<l;i++)
{
if(s[i]==' ')
{x=i;
break;
}
}
for(j=x+1;j<l;j++)
printf("%c",s[j]);
}
if(r==0)
printf("%s",s);
return 0;
}


