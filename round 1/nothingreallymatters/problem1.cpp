#include<stdio.h>
#include<conio.h>
int main()
{
 long double n;
int flag=0;
for(int i=2;i<=(n/2);i++)
{
 if((n%i)==0)
flag=1;
}
if(flag==1) printf("%d is a prime number",&n);
else printf("%d is not a prime number",&n);
return 0;
}