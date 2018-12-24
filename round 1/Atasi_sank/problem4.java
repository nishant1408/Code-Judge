import java.util.*;
class problem4
{
 public static void main(String[]args)
 {
  int x,n;
  int s=0;
  Scanner sc=new Scanner(System.in);
  n=sc.nextInt();
  while(n>0)
  {
   s=0;
  while(n!=0)
  {
  x=n%10;
  n=n/10;
  s=s+x;
 }
 if(s<10)
 break;
 else
 n=s;
continue;
}
if(s==1)
System.out.println("yes");
else
System.out.println("no");
}
}