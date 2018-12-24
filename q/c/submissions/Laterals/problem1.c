#include<stdio.h>
#include<math.h>
int main()
{
   int a,flag=0,i;
   scanf("%d",&a);
   
   for(i=2; i<=a/2; i++)
   {
      if(a%i==0)
      {
          flag=1;
      }
      else
      {
          flag=0;
      }
   }
   if(flag==0)
      printf("Yes");
   else
      printf("No");
}