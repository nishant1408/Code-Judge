import java.util.*;
class problemtest
{
 public static void main(String args[])
{
Scanner in=new Scanner(System.in);
int n=in.nextInt();
int c=0;
for(int i=2;i<=n;i++)
{
  if(n%i==0)
  c++;
}
if(c==1)
System.out.println("Yes");
else
System.out.println("No");
}
}
