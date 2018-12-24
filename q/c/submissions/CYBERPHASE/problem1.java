class problem1
{
public static void main(int n)
{
int i=0,c=1;
for(i=1;i<=n;i++)
{
if(n%i==0)
{
c=c+1;
}
}
if(c==2)
{System.out.println("Yes");
}
else
{
System.out.println("No");
}
}
}
