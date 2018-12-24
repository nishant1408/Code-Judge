#include<stdio.h>
#include<math.h>

int main()
{
   int rem,x,n=0,r,sum=0;
   scanf("%d",&x);
    while(r>0)
   {
      rem = x%10;
      sum = sum + rem;
      r = x/10;
      x = r;
   }
printf("No%d",sum);
   if(sum >= 10)
   {
      x = sum;
      while(r>0)
      {
         rem = x%10;
         r = x/10;
         sum = sum + rem;
         x = r;
      }
   n= sum;
   }   
   if(n == 1)
      printf("Yes%d",n);
   else
      printf("No%d",n);
}