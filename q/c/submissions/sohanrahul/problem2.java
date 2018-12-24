import java.io.*;
class problem2
{
public static void main(String args[])throws IOException
{
BufferedReader br=new BufferedReader(new InputStreamReader(System.in));
String str=br.readLine();
int l,i,c=0;
l=str.length();
if(str.charAt(l-1)!=' ')
str=str+" ";
l=l+1;
for(i=0;i<l;i++)
{
if(str.charAt(i)==' ')
c++;
}
if(c==1)
System.out.println(str);
else
{
c=0;
for(i=0;i<(l-1);i++)
{
if(str.charAt(i)==' ')
{
System.out.print(str.charAt(c)+". ");
c=i+1;
}
}
System.out.print(str.substring(c,l));
}
}
}