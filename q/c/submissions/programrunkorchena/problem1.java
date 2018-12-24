import java.util.*;
class problem1
{
 public static void main(String args[])
 {
int i,c=0;
  Scanner sc=new Scanner(System.in);
  long n=sc.nextLong();
  for(i=1;i<=n;i++)
{
  if(n%i==0)
  c=c+1;
 }
if (c==2)
System.out.println("Yes");
else
System.out.println("No");
}
}