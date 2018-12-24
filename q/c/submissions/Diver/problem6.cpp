#include<bits/stdc++.h>
#include<conio.h>
using namespace std;
void rev(string t)
{
	int len=t.length();
	len = len - 1;
	for(int j = len;j>=0;j--)
	{cout<<t[j];
	} 
 cout<<" ";}

int main()
{ string p; 
	string s;  int x=0; int y; int z;
	
	int c =0;
	getline(cin,s);
	int l = s.length();
for(int b =0;b<l;b++)	
{if(s[b]==' ')
c++;
}
if(c==(l-1))
	{rev(s);
	}
else
{
	
	
	
	
	for(int i =0;i<l;i++)
	{ 
     
	 p=p+s[i];
		if(s[i]==' ')
	{ 
rev(p);
	p=' ';
	}
x=i;	}
	while (s[x]!=' ')
	{cout<<s[x];
	x--;
	}}

getch();
return 0;}