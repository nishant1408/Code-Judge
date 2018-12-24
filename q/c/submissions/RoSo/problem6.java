import java.util.*;
class problem6
{
public static void main(String args[])
{
Scanner sc=new Scanner(System.in);
String word="", sent="";
String n=sc.nextLine();
int l=n.length();
if(l<=100)
{
n=n+" ";
for (int i=0; i<l+1; i++)
{
char c=n.charAt(i);
if(c==' ')
{
sent=sent+word+" ";
word="";
}
else
word=c+word;
}
System.out.println(sent);
}
}
}

