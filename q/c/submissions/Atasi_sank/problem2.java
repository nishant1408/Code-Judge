import java.io.*;
class problem2
{
public static void main(String[]args)throws IOException 
{
InputStreamReader read= new InputStreamReader(System.in);
BufferedReader br= new BufferedReader(read);
String str="";
int a,k=0,b,i,j;
char ch=' ';
String name=br.readLine();
a=name.length();
if(a<=350)
{
for(i=0;i<a;i++)
{
ch=name.charAt(i);
if(ch==' ')
k++;
}
if(k==0)
{
System.out.println(name);
return;
}
str=str+name.charAt(0)+"."+" ";
b=name.lastIndexOf(' ');
for(j=1;j<b;j++)
{
if(ch==' ')
str=str+name.charAt(j+1)+"."+" ";
}
str=str+name.substring(b+1,a);
System.out.println(str);
}
}
}
