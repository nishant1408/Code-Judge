#include<stdio.h>
int main()
{
   int a,i,f=0;
   //printf("Enter the number \n");
   scanf("%d",&a);
   for(i=2;i<=a-1;i++)
    {  
     if(a%i==0)
       f++;
     }
     if(f==0)
    printf("Yes");
     else
    printf("No");
    return 0;
}