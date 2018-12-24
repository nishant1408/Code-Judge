#include<stdio.h>
#include<String.h>
int Func(int num)
{
	int count=0;
	for(int i=1;i<=num;i++)
	{
		if(num%i==0)
		 count++;
	}
	return count;
}
int main()
{
	char str[100];
	int len=0;
	gets(str);
	len=strlen(str);
	int arr[len];
	int count=0;
	for(int i=0;i<len;i++)
	{
		arr[i]=(int)str[i];
	}
	for(int i=0;i<len;i++)
	{
		if(Func(arr[i])==2)
		 count++;
	}
	printf("%d",count);
}