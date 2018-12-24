import java.util*;
class problem1
{
public static void main(String args[])
{
Scanner sc=new Scanner(System.in);
int n;int c=0;
int i;
n=sc.nextInt();
for(i=2;i<=n;i++)
{
if(n%i==0)
{
c++;
}
}
if(c==1)
{
System.out.println("Yes");
}
else
{
System.out.println("No");
}
}
}