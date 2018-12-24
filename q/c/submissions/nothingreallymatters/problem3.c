#include<stdio.h>
int main()
{
 scanf("%d",year1);
 scanf("%d",day1);
 if((year1%100==0)&&(year1%400==0)||(year1%100!=0)&&(year1%4==0))
 {
  year2=year1+(4*(day1/1461));
  if(day1>=366)
  { year2=year1+1+((day1-366)%365);
  }
 }
 printf("%d",day1);
}