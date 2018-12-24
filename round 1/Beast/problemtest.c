#include<stdio.h>
#include<math.h>
#include<conio.h>
int armstrong(int n);
int power(int a,int b)
{
	int i,p=1;
	for(i=1;i<=b;i++)
		p=p*a;
	return p;
}
int main()
{
	int i,a,b;
	printf("\nenter the lower limit=");
	scanf("%d",&a);
	printf("\nenter the upper limit=");
	scanf("%d",&b);
	printf("\nthe armstrong numbers in the range:\n");
	for(i=a;i<=b;i++)
	{
		if(armstrong(i)==1)
		printf("\n %d",i);
	}
	return 0;
	getch();
}
int armstrong(int n)
{
	int n1,n2,c=0,s=0,r;
	n1=n2=n;
	while(n1!=0)
	{
		c++;
		n1=n1/10;
	}
	while(n2!=0)
	{
		r=n2%10;
		s=s+power(r,c);
		n2=n2/10;
	}
	if(n==s)
	{
		return 1;
	}
}


