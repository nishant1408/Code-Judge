import java.io.*;
class problemtest
{
public static void main(String args[])throws IOException
{
BufferedReader br=new BufferedReader(new InputStreamReader(System.in));
int n=Integer.parseInt(br.readLine());
int ar[]=new int[n*n];
int c=0;
int i,k,j;
ar[0]=6;
if(n>1)
ar[1]=28;
for(i=2;i<(n*n);i++)
{
ar[i]=ar[i-1]+(ar[i-1]-ar[i-2])+16;
}
for(i=1;i<=n;i++)
{
for(k=n-i-1;k>=0;k++)
System.out.print("    ");
for(j=1;j<=i;j++)
{
System.out.print(ar[c]);
c++;
}
System.out.println();
}
}
}