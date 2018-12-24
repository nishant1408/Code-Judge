public class problem4
{
public static void main (int n,int l,int i,int s)
{
int p;
while(n>0)
{
l=n%10;
s=s+l;
while(s!=1)
{
n=n/10;
}
}
}
}