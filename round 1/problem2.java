import java.util.*;
class problem2
{
public static void main(String[]args)
{
 int a,i,b=0;
 char ch;
 int t,flag=0;
String s;
Scanner sc=new Scanner(System.in);
s=sc.nextLine();
 a=s.length();
 for(i=0;i<a;i++)
{
  ch=s.charAt(i);
  t= (int) ch;
  for(i=1;i<=t;i++)
  {
   if(t%i==0)
   b++;
  }
  if(b==2)
  flag++;
}
System.out.println(flag);
}
} 
  

