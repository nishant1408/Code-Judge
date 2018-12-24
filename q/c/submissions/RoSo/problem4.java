import java.util.*;
class problem4
{
public static void main(String args[])
{
Scanner sc=new Scanner(System.in);
int n=sc.nextInt();
int ar[][]=new int[n][n];
int ar1[][]=new int[n][n];
if(n<10)
{
for(int i=0; i<n; i++)
{
for(int j=0; j<n; j++)
{
ar[j][i]=sc.nextInt();
}
}
int a=sc.nextInt();
if (a%90==0)
{
int count=a/90;
while (count>0)
{
int l=0;
for(int i=n-1; i>=0; i--)
{
for(int j=0; j<n; j++)
{
ar1[l][j]=ar[j][i];
}
l++;
}
count--;
}
}
for(int i=0; i<n; i++)
{
for(int j=0; j<n; j++)
{
if(j<n-1)
System.out.print(ar1[j][i]+" ");
else
System.out.print(ar1[j][i]);
}
System.out.println();
}
}
}
}