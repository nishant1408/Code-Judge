import java.io.*;
class problem1
{
public static void main(String args[])throws IOException
{
BufferedReader br=new BufferedReader(new InputStreamReader(System.in));
int n,c,i;
c=0;
n=Integer.parseInt(br.readLine());
for(i=1;i<=n;i++)
{
if(n%i==0)
c++;
}
if(c==2)
System.out.println("Yes");
else
System.out.println("No");
}
}



