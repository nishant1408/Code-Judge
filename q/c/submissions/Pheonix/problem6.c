#include<stdio.h>
#include<string.h>
 int main()
{
char a[100];
int l,i,j;
gets(a);
l=strlen(a);
for(i=0,j=l-1;i<l,j>0;i++,j--)
{
if(a[i]!='\0')
{



printf("%s",a);
}
}
}