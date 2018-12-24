#include<stdio.h>
int main()
{ 
  int a,s=0,f=0,r,i;
  scanf("%d",&a);
 

  while(a>0)
  { a=a%10;
    s=s+a;
  }
  a=s;
  if(a==1)
  { printf("Yes");
  
   }
  else
  printf("No");

return 0;
}