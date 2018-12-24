#include<stdio.h>
int main()
{ int r,n,sum=0;
  scanf("%d",&n);
  do
{
  while(n>9);
  {r=n%10;
   sum=sum+r;
   n=n/10;
}
n=sum;
sum=0;
}while(n>=10);
if(n==1)
{ 
 printf("yes");
}
else
{ printf("no");
}
  return 0;
}