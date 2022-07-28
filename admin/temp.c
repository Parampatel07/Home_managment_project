#include <stdio.h>
int main() {
   int  i, j;
   
   for(i = 1; i<=5; i++) {
      for(j = 1; j<=5-i; j++) {
         Printf ("  ");
      }
      if(i == 1 || i == 5) {
         for(j = 1; j<=i; j++) {
            Printf("* ");
         }
      }else{
         Printf("*"); 
         for(j = 1; j<=2*i-3; j++) {
            Printf(" ");
         }
         Printf("*");
      }
      Printf("\n");
   }
}
