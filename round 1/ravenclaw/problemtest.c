#include<stdio.h>
int main()
{
   long int i,n,c=0;
   scanf("%ld",&n);
   
   for(i=2;i<=n-1;i++)
    {
        if(n%i==0)
        {
         c++;
        }
    }
    if (c==2)
    printf ("Yes");
    else
    printf ("No");
}