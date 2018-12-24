import java.util.*;
import java.io.*;
class problem1
{
	static void print(int n)
	{
		int x=count(n);
		for(int i=1;i<=5-x;i++)
			System.out.print("0");
		System.out.print(n);
	}
	static int count(int n)
	{
		int c=0;
		while(n>0)
		{
			c++;
			n/=10;
		}
		return c;
	}
	public static void main(String args[])
	{
		Scanner sc = new Scanner(System.in);
		int n = sc.nextInt();
		int s = 6,i,j,c=1;
		for(i=1;i<=n;i++)
		{
			for(j=1;j<=n-i;j++)
			{
				System.out.print(" ");
			}
			for(j=1;j<=i;j++)
			{
				print(s);
				if(j!=i)
					System.out.print(" ");
				s=s+(16*c++)+6;
			}
			if(i!=n)
			System.out.println();
		}
	}
}
