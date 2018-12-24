#include<stdio.h>
#include<conio.h>
int main()
{

int i,n;
printf("enter number:",n);
scanf("%d",&n);
  
  for(i=2;i<=n/2;i++)
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