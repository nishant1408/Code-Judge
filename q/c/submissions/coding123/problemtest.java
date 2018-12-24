import java.io.*;
class problemtest
{
 public static void main()throws IOException
{
BufferedReader br=new BufferedReader(new InputStreamReader(System.in));
int c=0,i;
 int n=Integer.parseInt(br.readLine());
 for(i=1;i<=n;i++)
{
  if(n%i==0)
 c=c+1;
}
  if(c==2)
System.out.print("yes");
else
System.out.print("no");
}
}