#include<stdio.h>
#include<math.h>

main()
{
   int rem,x,r,sum;
   scanf("%d",&x);
    while(x>0)
   {
      rem = x%10;
      sum = sum + rem;
      r = x/10;
      x = r;
   }
   
   if(sum == 1)
      printf("Yes");
   else
      printf("No");
}