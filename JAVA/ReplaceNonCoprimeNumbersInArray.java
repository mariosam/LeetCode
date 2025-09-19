/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.ArrayList;
import java.util.List;

public class ReplaceNonCoprimeNumbersInArray {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", replaceNonCoprimes( new int[] {2,2,1,1,3,3,3} ));
    }

    public static List<Integer> replaceNonCoprimes(int[] nums) {
        int n = nums.length;
        List<Integer> res = new ArrayList<>();
        for (int i = 0; i < n; i++) {
            int x = nums[i];
            res.add(x);
            while (res.size() > 1) {
                int t1 = res.get(res.size() - 1);
                int t2 = res.get(res.size() - 2);
                int gcdVal = gcd(t1, t2);
                if (gcdVal <= 1) break;
                res.remove(res.size() - 1);
                res.set(res.size() - 1, t1 * (t2 / gcdVal));
            }
        }
        return res;
    }
    
    private static int gcd(int x, int y) {
        if (y == 0) return x;
        return gcd(y, x % y);
    }

}
