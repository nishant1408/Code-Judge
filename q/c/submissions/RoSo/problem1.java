import java.util.*;
class problem1
{
public static void main(String args[])
{
Scanner sc=new Scanner(System.in);
int n,c=1,i;
n=sc.nextInt();
for(i=2;i<=n;i++)
{
if(n%i==0)
{
c=c+1;
}
}
if(c==2)
{
System.out.println("Yes");
}
else
{
System.out.println("No");
}
}
}