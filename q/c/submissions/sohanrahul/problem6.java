import java.io.*;
class problem6
{
public static void main(String args[])throws IOException
{
BufferedReader br=new BufferedReader(new InputStreamReader(System.in));
String str=br.readLine();
int l=str.length();
int k=0,l2,i,j;
String str2;
if(str.charAt(l-1)!=' ')
{
str=str+" ";
l++;
}
for(i=0;i<l;i++)
{
if(str.charAt(i)==' ')
{
str2=str.substring(k,i);
l2=str2.length();
for(j=l2-1;j>=0;j--)
System.out.print(str2.charAt(+j));
System.out.print(" ");
k=i+1;
}
}
}
}