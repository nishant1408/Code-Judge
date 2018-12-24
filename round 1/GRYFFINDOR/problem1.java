public class problem1
{
public static void main(long n)
{
long i=0;
int p=0;
for(i=1;i<=n;i++)
{
if(n%i==0)
{
p++;
}
if(p==2)
System.out.println("Yes");
else
System.out.println("No");
}
}
}
