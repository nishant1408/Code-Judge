#include<stdio.h>
int main()
{
	int y,m=0,d,limit=365;
	int dd[]={31,28,31,30,31,30,31,31,30,31,30,31};
	scanf("%d %d",&y,&d);
	if((y%4==0 && y%100!=0) || (y%100==0 && y%400==0))
	{	
		dd[1]=29;
		limit=366;
	}
	while(d>limit)
	{
		d=d-limit;
		y=y+1;
		if((y%4==0 && y%100!=0) || (y%100==0 && y%400==0))
		{	
			dd[1]=29;
			limit=366;
		}
		else
		{
			dd[1]=28;
			limit=365;
		}
	}
	while(d>dd[m])
	{
		d=d-dd[m];
		m++;
	}
	if(d>9)
		printf("%d/",d);
	else
		printf("0%d/",d);
	if(m+1>9)
		printf("%d/",m+1);
	else
		printf("0%d/",m+1);
	if(y<1000)
		printf("0%d",y);
	else
		printf("%d",y);
}