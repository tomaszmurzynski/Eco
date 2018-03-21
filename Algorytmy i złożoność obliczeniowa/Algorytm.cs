using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Algorytmy_i_złożoność_obliczeniowa
{
    public class Algorytm
    {
        public static void SortowanieBabelkowe()
        {
            int n = 5;
            int[] a = new int[] { 1, 3, 5, 7, 9 };
            int i, j, k;
            for (i = 1; i < n; i++)
            {
                k = a[i];
                for (j = i; j > 0 && (a[j - 1] > k); j--)
                {
                    a[j] = a[j - 1];
                    a[j] = k;
                }
            }
        }
    }
}
