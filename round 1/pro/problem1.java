import java.util.Scanner;
class problem1
{
public void main()
{
Scanner sc= new Scanner(System.in);
System.out.println("enter number");
long long n= sc.nextLongLong();
long c=0;
for(long long i=1; i<=n; i++)
{
if(n%i==0)
c++;
}
if(c==2)
System.out.println("YES");
else 
System.out.println("NO");
}
}
