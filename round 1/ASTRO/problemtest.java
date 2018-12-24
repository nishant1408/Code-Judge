import java.util.*;
class problem3{
public static void main(String args[]){
Scanner sc=new Scanner(System.in);
int a=sc.nextInt();
int h=a*2-2;
for(int i=1;i<=a;i++){
for(int j=1;j<=i;j++)
System.out.print(j);

for(int m=(i-1);m>=1;m--)
System.out.print(m);
for(int k=h;k>=1;k--)
System.out.print(" ");
h=h-2;
System.out.println();
}

}
}