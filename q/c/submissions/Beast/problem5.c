#include<stdio.h>
#include<String.h>
int main()
{
	char ch[100];
	char temp=' ';
	gets(ch);
	
	int len=strlen(ch);
	if(len%2==0){
	 for(int i=0;i<len;i=i+2)
	 {
		temp=ch[i];
		ch[i]=ch[i+1];
		ch[i+1]=temp;
	 } 
		
	}
	else
	{
	 for(int j=0;j<len;j=j+2)
	 {
	 	if(j==len-1){
		 
	 	 break;}
		temp=ch[j];
		ch[j]=ch[j+1];
		ch[j+1]=temp;
	 } 
	 

	}
	
	for(int k=0;k<len;k++){
		
	 	ch[k]=ch[k]+k+1;
	}
		

    puts(ch);
	return 0;
}