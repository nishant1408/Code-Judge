#include<iostream>

using namespace std;
      
     
    int primer(int x)
       {
         int i, count=0;
         for(i=2;i<x/2;i++)
           { 
             if(x%i==0)
                count++;
            }
          if(count==0)
            return 1;
          else
            return 0;
      }

int main()
    {
     char arr[100];
     int j,s,y,z,counts;
      
       cin.getline(arr,100);
       s=strlen(arr);
            
          for( j=0;j<s+1;j++)
           { y = (int)arr[j];
             z = primer(y);

             if(z==1)
               counts++;
            }

         cout<<counts;

          return 0;
         
}
        
     




