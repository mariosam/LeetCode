/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.ArrayList;
import java.util.List;

public class Combinations {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", combine( 5, 2 ));
    }

    public static List<List<Integer>> combine(int n, int k) {
        List<List<Integer>> res = new ArrayList<>();
        int[] values = new int[k];
        int i = 0;

        while (i >= 0) {
            values[i]++;
            if (values[i] > n) {
                i--;
            } else if (i == k - 1) {
                List<Integer> r = new ArrayList<>();
                for (int val : values) {
                    r.add(val);
                }
                res.add(r);
            } else {
                i++;
                values[i] = values[i - 1];
            }
        }
        
        return res;
    }

}
