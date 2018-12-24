import java.io.*;
class problem6
{
public static void main(String[]args)throws IOException 
{
InputStreamReader read= new InputStreamReader(System.in);
BufferedReader br= new BufferedReader(read);
String str,t="",str1="",str2="";
int i,j,a,b,p=0;
char ch,ch1;
str=br.readLine();
str=str+" ";
a=str.length();
if(a<=100)
{
for(i=0;i<a;i++)
{
ch=str.charAt(i);
if(ch==' ')
{
t=str.substring(p,i);
p=i+1;
b=t.length();
for(j=b-1;j>=0;j--)
{
ch1=t.charAt(j);
str1=str1+ch1;
}
str2=str2+str1+" ";
str1="";
t="";
}
else
{
t="";
str1="";
continue;
}
}
}
System.out.println(str2);
}
}


