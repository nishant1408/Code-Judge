#include<stdio.h>
#include<string.h>
int main()
{
char s[100];
int i,l,p=0,q,j;
for(i=0;i<100;i++)
{
scanf("%c",&s[i]);
}
l=strlen(s);
for(i=0;i<l;i++)
{
 if((s[i]==' ')||(i==(l-1)))
{
 q=i;
  for(j=q-1;j>=p;j--)
   printf("%c",s[j]);
 p=q;
}
}
return 0;
}