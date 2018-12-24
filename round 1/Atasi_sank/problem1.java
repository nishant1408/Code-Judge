import java.util.*;
class problem1
{
 public static void main(String[]args)
 {
  int n;
  Scanner sc=new Scanner(System.in);
  n=sc.nextInt();
  int a=0,i;
  for(i=1;i<=n;i++)
  {
   if(n%i==0)
   a++;
  }
  if(a==2)
  System.out.print("Yes");
  else
  System.out.print("No");
 }
}
