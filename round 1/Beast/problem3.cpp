#include<stdio.h>
int main()
{
	int n;
	scanf("%d",&n);
	long sum=1;
	for(int i=1;i<=n;i++)
	{
		if(i==n)
		{
		 printf("%ld",(sum*sum));	
		}
		else
		printf("%ld\n",(sum*sum));
		sum=sum*10+1;
	}
}
