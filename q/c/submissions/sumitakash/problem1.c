#include<stdio.h>
int main()
{
int n,i,k=0;

scanf("%d",&n);
for(i=1;i<=n;i++)
{
if(n%i==0)
k++;
}
if(k==2)
printf("Yes");
else
printf("No");


}