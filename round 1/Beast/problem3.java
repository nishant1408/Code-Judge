#include<stdio.h>
int main()
{
	int n;
	scanf("%d",&n);
	long long int sum=1;
	for(int i=1;i<=n;i++)
	{
		if(i==n)
		{
		 printf("%lld",(sum*sum));	
		}
		else
		printf("%lld\n",(sum*sum));
		sum=sum*10+1;
	}
}
