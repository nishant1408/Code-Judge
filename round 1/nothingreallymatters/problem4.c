#include<stdio.h>
#include<math.h>
int main()
{
 int a,sum=0;
 scanf("%d",&a);
 while(a>9)
 {
 printf("hi"); 
  while(a!=0)
   {
    sum+=a%10;
    a=a/10;
   }
  if(sum>=10) a=sum;
 }
 if(sum!=1) printf("no");
 else printf("yes");
 return 0;
}