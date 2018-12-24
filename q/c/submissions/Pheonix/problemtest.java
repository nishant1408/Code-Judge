import java.util.Scanner;
public class problemtest{

 public static void main(String args[])
{ 
Scanner sc=new Scanner(System.in);
String s=sc.nextLine();
String str;
int i,j=0,c=0,k,l;
l=s.length();
for(i=0;i<l;i++)
{
if(s.charAt(i)==' ')
{ 
   c++;
}
}
c++;
String arr[]=new String[c];
for(k=0;k<arr.length;k++)
{
  arr[k]="";
}
for(i=0;i<l;i++)
{
if(s.charAt(i)!=' ')
{ 
   arr[j]=arr[j]+s.charAt(i);
   
}
}
for(i=0;i<c;i++)
{
 str=arr[i];

System.out.println(str);
}
}
}


