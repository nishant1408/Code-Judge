import java.util.*;
class problem4 {

	public static void main(String args[]) 
        {
	Scanner sc=new Scanner(System.in);
	int d;int sum=0;int l=0;
	int i;int n;
	n=sc.nextInt();
        int g=n;int m=n;
        while (g>0)
        {
         int f=g%10;
         l++;
         g=g/10;
      }
        for(i=0;i<l;i++)
	{
          if(m<10)
          {
          sum=n;
          }
          else
          {
            d=m%10;
            sum=sum+d;
            m=m/10;
          }
         }
	if(sum==1)
	{
	System.out.println("yes");
	}
	else
	{
	System.out.println("no");
	}
	}
	}