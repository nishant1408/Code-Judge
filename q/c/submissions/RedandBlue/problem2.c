#include<stdio.h>
#include<string.h>
int main()
{
int i, len;
char str[350];
printf("Input");
scanf("%c",&str);
len=strlen(str);
for(i=0; str[i]!='\0'; i++)
{
if(str[i]==' ')
{
printf("%c""%c",str[0]+". "+str[i+1]+". ")
}
}
}