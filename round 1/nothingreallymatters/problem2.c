#include<stdio.h>
#include<string.h>
int main()
{
 int l,i,j,count=0,flag=0,a;
 char ar[20];
 scanf("%c",&ar);
 l=strlen(ar);
 for(i=0;i<l;i++)
 {
  flag=0;
  a=ar[i];
  for(j=2;j<=(a/2);j++)
  {
   if((ar[i]%j)==0)
   flag=1;
  }
  if(flag==1)
  count=count+1;
 }
 printf("%d",count);
 return 0;
}