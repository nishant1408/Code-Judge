import java.io.*;
class problem2
{
public static void main(String args[])throws IOException
{
BufferedReader br=new BufferedReader(new InputStreamReader(System.in));
String str;
str=br.readLine();
int l=str.length();
int i,j,c,n,c2;
char ch;
c=0;
for(i=0;i<l;i++)
{
ch=str.charAt(i);
n=(int)ch;
c2=0;
for(j=1;j<=n;j++)
{
if(n%j==0)
c2++;
}
if(c2==2)
c++;
}
System.out.println(c);
}
}
