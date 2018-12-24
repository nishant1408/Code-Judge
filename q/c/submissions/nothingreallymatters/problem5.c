#include<stdio.h>
#include<string.h>
int main()
{
char ar[100];
int l,i;
gets(ar);
l=strlen(ar);
if(l%2==0)
for(i=0;i<l;i++)
{
 if(i%2==0)
 {
  ar[i]=ar[i]+ar[i+1];
  ar[i+1]=ar[i]-ar[i+1];
  ar[i]=ar[i]-ar[i+1];
 }
}
else if(l%2!=0)
for(i=0;i<(l-1);i++)
{
 if(i%2==0)
 {
  ar[i]=ar[i]+ar[i+1];
  ar[i+1]=ar[i]-ar[i+1];
  ar[i]=ar[i]-ar[i+1];
 }
}
for(i=0;i<l;i++)
{
 ar[i]=ar[i]+i+1;
}
printf("%s",ar);
return 0;
}