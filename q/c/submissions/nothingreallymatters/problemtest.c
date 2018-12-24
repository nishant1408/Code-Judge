#include<stdio.h>
#include<string.h>
int main()
{
char ar1[351],ar2[351];
int count=0,flag=0,i,j,l;
scanf("%s",&ar1);
l=strlen(ar1);
for(i=0;i<l;i++)
{
 if(flag!=1)
 {
  for(j=i;j<l;j++)
  {
   if(ar1[j]==' ')
   {
    ar2[count]=ar1[i];
    ar2[count+1]='.';
    i=j+1;
    count+=2;
    break;
   }
   else if(j==l)
      flag=1;
  }
 }
}
printf("%s",&ar2);
return 0;
}