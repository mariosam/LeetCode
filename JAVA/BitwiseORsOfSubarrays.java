/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.HashSet;

public class BitwiseORsOfSubarrays {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", subarrayBitwiseORs( new int[]{1,2,11,2,1} ));
    }

    public static int subarrayBitwiseORs(int[] arr) {
        int[] cur = new int[33], next = new int[33];
        int n1 = 0;
        HashSet<Integer> set = new HashSet<>();
        for (int a : arr) {
            int n2 = 0;
            set.add(next[n2++] = a);
            for (int i = 0; i < n1; i++) {
                int a2 = a | cur[i];
                if (a2 != a) {
                    set.add(next[n2++] = a = a2);
                }
            }
            int[] temp = cur; cur = next; next = temp;
            n1 = n2;
        }
        return set.size();
    }

}
