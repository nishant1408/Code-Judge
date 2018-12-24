import java.io.*;
class problem4
{
public static void main(String args[])throws IOException
{
BufferedReader br=new BufferedReader(new InputStreamReader(System.in));
int n,n2,n3,sum,a,sum2=0;
sum=0;
sum2=0;
n=Integer.parseInt(br.readLine());
n3=n;
while((n%10)!=0)
{
a=n%10;
sum=sum+a;
n=n/10;
}
n2=sum;
while(n2>0)
{
a=n2%10;
sum2=(sum2*10)+a;
n2=n2/10;
}
if((sum2*n2)==n3)
System.out.println("yes");
else
System.out.println("no");
}
}