#include<stdio.h>
main()
{
int i,j,n,p=0,q;
scanf("%d",&n);
for(i=1;i<n;i++)
{
for(q=10;q>p;q--)
{
printf(" ");
printf("%d",i);
}
for(j=1;j<i;j++)
{
 printf("%d",j);

}
}

printf("\n");
}




