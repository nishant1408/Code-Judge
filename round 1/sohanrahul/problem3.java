import java.io.*;
class problem3
{
public static void main(String args[])throws IOException
{
BufferedReader br=new BufferedReader(new InputStreamReader(System.in));
int n,i,j;
n=Integer.parseInt(br.readLine());
for(i=1;i<=n;i++)
{
for(j=1;j<=i;j++)
System.out.print(j);
if(i>1)
{
for(j=i-1;j>=1;j--)
System.out.print(j);
}
System.out.println();
}
}
}
