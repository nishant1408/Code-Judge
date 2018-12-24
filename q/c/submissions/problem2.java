import java.io.*;
class problem2
{
public static void main(String[]args)throws IOException
{
InputStreamReader read=new InputStreamReader(System.in);
BufferedReader br=new BufferedReader(read);
int a,b,k=0,i,j;
String s="",name;
char ch,ch1;
name=br.readLine();
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
s=s+name.charAt(0)+".";
b=name.lastIndexOf(' ');
for(j=1;j<b;j++)
{
ch1=name.charAt(j);
if(j==' ')
{
s=s+" "+name.charAt(j+1)+".";
}
}
s=s+" "+name.substring(b+1,a);
System.out.println(s);
}
else
{
return;
}
}
}

