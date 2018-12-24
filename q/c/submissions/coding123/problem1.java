import java.util.*;
class problem1
{
 public static void main()
{
 Scanner sc=new Scanner(System.in);
int c=0,i;
 int n=sc.nextInt();
 for(i=1;i<=n;i++)
{
  if(n%i==0)
 c=c+1;
}
  if(c==2)
System.out.print("yes");
else
System.out.print("no");
}
}