import java.util.*;
class problem4
{
  public static void main(String args[])
{
 int r,s=0;
  Scanner sc=new Scanner (System.in);
  int n=sc.nextInt();
  String st="n";
  int num=st.length();
while(num!=1)
{
 while(n!=0)
{
 r=n%10;
 s=s+r;
 n/=10;
 n=s;
}
num="s".length();
}
if(s==1)
System.out.println("no");
else
System.out.println("yes");
}
}