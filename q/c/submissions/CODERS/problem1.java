import java.io.*;
class problem1
{
public static void main(String args[])throws IOException
{
InputStreamReader ir=new InputStreamReader(System.in);
BufferedReader br=new BufferedReader(br.readLine());
long n=Long.parseLong(br.readLine())
int i=0,k=0;
for(i=0;i<=n;i++)
{
k=(n%i==0);
if(k==2)
System.out.println("Yes");
else
{
System.out.println("No");
}
}
}
}