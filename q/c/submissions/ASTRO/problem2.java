import java.io.*;
class problem2{
public static void main(String args[]){
try{String p="";
BufferedReader br=new BufferedReader(new InputStreamReader(System.in));
String s=br.readLine();
s=s.trim();
int sp=s.lastIndexOf(" ");
s=" "+s;
int l=s.length();
for(int i=0;i<(sp);i++){
char ch=s.charAt(i);
if (ch==' ')
p=p+s.charAt(i+1)+".";
}
String k=s.substring((sp+1),(l));
System.out.println((p+k).trim());
}
catch(Exception e){}
}}