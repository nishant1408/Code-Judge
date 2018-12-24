import java.io.*;
class problem4
{
public static void  main(String args[])throws IOException
{
BufferedReader br=new BufferedReader(new InputStreamReader(System.in));
int N=Integer.parseInt(br.readLine());
int ar[][]=new int[N][N];
int ar2[][]=new int[N][N];
int i,j,k;
for(i=0;i<N;i++)
{
for(j=0;j<N;j++)
{
ar[i][j]=Integer.parseInt(br.readLine());
}
System.out.println();
}
int a=Integer.parseInt(br.readLine());
a=a/90;
for(k=0;k<a;k++)
{
for(i=0;i<N;i++)
{
for(j=0;j<N;j++)
{
ar2[i][j]=ar[j][i];
}
}
}
for(i=0;i<N;i++)
{
for(j=0;j<N;j++)
{
System.out.print(ar[i][j]);
}
System.out.println();
}
}
}