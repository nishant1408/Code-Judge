#include<stdio.h>
int main()
{
int n,i,a=0;
scanf("%d",&n);
for(i=0;i<n/2;i++)
{
if(n%i==0)
{
a=a+1;
}
}
if(a==2)
{
printf("Yes");
}else
{
printf("No");
}


}