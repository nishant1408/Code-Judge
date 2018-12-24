# include<stdio.h>
int main()
{
int p,s=0,copy,n,c;
scanf("%d",&n);
copy=n;
while(copy>0)
{
p=copy%10;
s=s+p;
p=copy/10;
}
if(s==1)
printf("yes");
else
printf("no");
return(0);
}
