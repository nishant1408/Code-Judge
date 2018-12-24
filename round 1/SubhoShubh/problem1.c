#include<stdio.h>
int main()
{
int a,b,c;
int i=0;
printf("Enter a number = ");
scanf("%d",&a);
for(i=0,i<a,i++)
if(a/i!=0){
printf("Yes");
else{ 
printf("no");
}
}