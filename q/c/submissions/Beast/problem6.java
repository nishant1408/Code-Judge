import java.io.*;
class problem6
{
public static void main(String args[])throws IOException
{
BufferedReader br = new BufferedReader(new InputStreamReader(System.in));
String s=br.readLine();
s=s+" ";
int p=0;
String k="";
for(int i=0;i<s.length();i++)
{
if(s.charAt(i)==' ' || i==s.length()-1)
{
k="";
k=s.substring(p,i);
p=i+1;
for(int j=k.length()-1;j>=0;j--)
{
System.out.print(k.charAt(j));
}
if(p!=s.length())
System.out.print(" ");
}
}
}
}