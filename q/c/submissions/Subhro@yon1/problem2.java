import java.io.*;
class problem2
{
public static void main(String[]args)throws IOException
{
BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
int c=0,l,i,len=0,k,m=0;
char ch,ch1;
int prime=0;
String s="";
String sent = br.readLine();
l = sent.length();
for(i=0;i<l;i++)
{
ch = sent.charAt(i);
m=(int)ch;
for(k=1;k<=m;k++)
{
if(m%k==0)
{
prime++;
}
}
if(prime==2)
{
c++;
}
}
System.out.println(c);
}
}