#include<stdio.h>
int main()
{
 long n;
 int flag=0;
 scanf("%d",&n);
 for(int i=2;i<=(n/2);i++)
 {
  if((n%i)==0)
    flag=1;
 }
 if(flag==1)
   printf("No");
 else if(flag==0)
   printf("Yes");
 return 0;
}