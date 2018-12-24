#include<stdio.h>
int main()
{ 
  char a[30];
  int i,b[30],j,f=0;
  for(i=0;i<30;i++)
  { scanf("%s",&a[i]);
}
for(i=0;i<30;i++)
{ b[i]=a[i];
}
for(i=0;i<30;i++)
{ for(j=2;j<(b[i]-1);j++)
   { if(b[i]%j==0)
      f++;
    }
}
printf(f);
return 0;
}