/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.HashSet;
import java.util.Set;

public class FairDistributionOfCookies {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", distributeCookies( new int[]{8,15,10,20,8}, 3 ));
    }

    static int res;
    
    public static int distributeCookies(int[] cookies, int k) {
        int n = cookies.length;
        res = Integer.MAX_VALUE;
        int[] arr = new int[n];

        bt(0, n, cookies, k, arr);
        return res;
    }

    private static void bt(int idx, int n, int[] cookies, int k, int[] arr) {
        if (idx == n) {
            int max = Integer.MIN_VALUE;
            for (int num : arr) {
                max = Math.max(max, num);
            }
            res = Math.min(res, max);
            return;
        }

        int cur = cookies[idx];
        Set<Integer> visited = new HashSet<>();
        for (int i = 0; i < k; i++) {
            int e = arr[i];
            if (visited.contains(e)) continue;
            if (cur + e >= res) continue;
            visited.add(e);
            arr[i] += cur;
            bt(idx + 1, n, cookies, k, arr);
            arr[i] -= cur;
            if (arr[i] == 0) break;
        }
    }
}
