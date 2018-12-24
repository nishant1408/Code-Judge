#include<stdio.h>
 int main()
{
  int n,i,flag=0;
  printf("Enter the number: ");
  scanf("%d",&n);
  for(i=2;i<=n/2;i++)
  {if(n%i==0)
   {flag=1;
    break;
    }
  }
  if(n==1)
  {printf("is a not prime number");
  }
  else
  {
   if (flag=0);
   {
   printf("is a prime number");
   }
   else if
   {
   printf("is not prime");
   }
   }
 return 0;
}