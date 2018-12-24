import java.io.*;
class problem5{
public static void main(String args[]){
String y="";
String p="";
try{

BufferedReader br=new BufferedReader(new InputStreamReader(System.in));
String s=br.readLine();
int l=s.length();
if (l%2==0){
for(int i=0;i<(l-1);i=i+2){
char ch=s.charAt(i);
char ch1=s.charAt(i+1);
p=p+ch1+ch;
}
}
else{
for(int i=0;i<(l-2);i=i+2){
char ch=s.charAt(i);
char ch1=s.charAt(i+1);
p=p+ch1+ch;
}
p=p+s.charAt(l-1);
}
for(int i=0;i<s.length();i++){
char ch=p.charAt(i);
int z=(int)ch;
z=z+(i+1);
y=y+((char)z);
}
}
catch(Exception e){}
System.out.println(y);

}}