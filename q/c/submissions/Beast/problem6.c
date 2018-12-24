#include<stdio.h>
#include<String.h>
void func(char str[50],int len)
{
	for(int i=len-1;i>=0;i--)
	 printf("%c",str[i]);
	printf(" ");
}
int main()
{
	char ch[100];
	char str[50];
	gets(ch);
	int len=strlen(ch);
	int len1=0;
	int n=0;
	ch[len]='\0';
	for(int i=0;i<=len;i++)
	{
		if(ch[i]==' '||ch[i]=='\0')
		{
			len1=strlen(str);
			func(str,len1);
			memset(str,0,strlen(str));
			n=0;
		}
		else
		{
			str[n]=ch[i];
			n++;
		}
	}
}