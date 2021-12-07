#include <stdio.h>    
#define N 4    
//-----------------------------------------------//
void swap (int *a, int *b)    
{    
   int t;
   t= *a;
   *a= *b;
   *b= t;
}    
//-----------------------------------------------//
void reverse (int *P, int m)
{    
   int i= 0, j= m;
   while (i < j)
   {
      swap (&P[i], &P[j]);
      i++;
      j--;
   }
}    
//-----------------------------------------------//
void antilex (int *P, int m)    
{    
   int i;    
   if (m == 0)
   {
    
      for (i= 0; i < N / 2; i++)
        
      for (; i < N; i++)
        
      {
         for (i= 0; i < N; i++)
            printf ("%d ", P[i]);
         printf("\n");
      }
   }
   else
   {
      for (i= 0; i <= m; i++)
      {
         antilex (P, m - 1);
         if (i < m)
         {
            swap (&P[i], &P[m]);
            reverse (P, m - 1);
         }
      }
   } // else if (m == 0)
}
//-----------------------------------------------//
int main()    
{    
   int i;
   int P[N];
   for (i= 0; i < N; i++)
      P[i]= i + 1;
   antilex (P, N - 1);
   return 0;
}