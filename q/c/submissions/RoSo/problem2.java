import java.util.*;
class problem2
{
public static void main(String args[])
{
Scanner sc=new Scanner(System.in);
String n=sc.nextLine();
String word="", name="";
int count=0;
int l=n.length();
if (l<=350)
{
n=" "+n;
for (int i=0; i<l+1;i++)
{
char a=n.charAt(i);
if(a==' ')
count=count++;
}
for (int i=0; i<l+1; i++)
{
char b=n.charAt(i);
if(b==' ')
{
if (count==1)
{
name=name+word;
word="";
}
else
{
name=name+word.charAt(1)+". ";
}
--count;
}
else
word=word+b;
}
}
System.out.println(name);
}
}