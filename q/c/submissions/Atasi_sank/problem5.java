import java.io.*;
class problem5
{
public static void main(String[]args)throws IOException 
{
InputStreamReader read= new InputStreamReader(System.in);
BufferedReader br= new BufferedReader(read);
String name;
name=br.readLine();
int j=0,a,p,t=1,k,v;
char ch,ch1,ch2;
String str="",str1="";
a=name.length();
if(a%2==0)
{
while(j<a)
{
ch=name.charAt(j);
ch1=name.charAt(j+1);
str=str+ch1+ch;
j=j+2;
}
}
else
{
while(j<a-1)
{
ch=name.charAt(j);
ch1=name.charAt(j+1);
str=str+ch1+ch;
j=j+2;
}
str=str+name.charAt(a-1);
}
for(k=0;k<a;k++)
{
ch2=str.charAt(k);
p=(int)(ch2)+t;
str1=str1+(char)(p);
t=t+1;
}
System.out.println(str1);
}
}