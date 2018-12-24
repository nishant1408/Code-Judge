#include<stdio.h>
#include<String.h>
int main()
{
	char name[350];
	char ch[50];
	int len;
	gets(name);
	len=strlen(name);
	name[len]='\0';
	int j=0;
	
    for(int i=0;i<=len;i++)
    {
    	
    	if(name[i]==' ')
    	{	
    	 printf("%c",ch[0]);
    	 printf(". ");
    	 memset(ch,0,strlen(ch));
    	 j=0;
		}
		else if(name[i]=='\0')
		{
			
			puts(ch);
		}
		else
		{
			
			ch[j]=name[i];
			j++;
		}
    	 
	}
	
}