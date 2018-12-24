#include<stdio.h>
#include<conio.h>
int main()
{

long int i,n;
printf("enter number:",n);
scanf("%d",&n);
  
  for(i=2;i<=n;i++)
  {
   if(n%i!=0){

   printf("Yes");
}
else{
printf("No");
}
}
getch();
return 0;

}