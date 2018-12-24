#include<stdio.h>
int main()
{
  int i,j,c=0,n;
  scanf("%d",&n);
  for(i=1;i<=n;i++)
  { if(n%i==0)
    c++;

  }
  if(c==2)
  printf("Yes");
  else
  printf("No");
  return 0;
}