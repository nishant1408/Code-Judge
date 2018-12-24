import java.io.*;
class problem5
{
public static void main(String args[])throws IOException
{
BufferedReader br=new BufferedReader(new InputStreamReader(System.in));
String str,str2,str3;
str=br.readLine();
str2="";
str3="";
int n,i;
int l=str.length();
if(l%2!=0)
{
for(i=0;i<l-1;i=i+2)
{
str2=str2+str.charAt(i+1)+str.charAt(i);
}
str2=str2+str.charAt(l-1);
}
else
{
for(i=0;i<l;i=i+2)
{
str2=str2+str.charAt(i+1)+str.charAt(i);
}
}
for(i=0;i<l;i++)
{
n=(int)str2.charAt(i)+i+1;
str3=str3+(char)n;
}
System.out.println(str3);
}
}