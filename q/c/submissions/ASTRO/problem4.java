import java.util.*;
class problem4{
public static void main(String args[]){
int k=0;
Scanner sc=new Scanner(System.in);
int n=sc.nextInt();
int a[][]=new int[n][n];
int a1[][]=new int[n][n];
for(int i=0;i<n;i++){
for(int j=0;j<n;j++)
a[i][j]=sc.nextInt();
}
int ang=sc.nextInt();
int x=n-1;

for(int i=0;i<n;i++){
for(int j=0;j<n;j++)
a1[j][x]=a[j][i];
x=x-1;
}

for(int i=0;i<n;i++){
for(int j=0;j<n;j++)
System.out.print(a1[i][j]);
System.out.println();
}
}
}
