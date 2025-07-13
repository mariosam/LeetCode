/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class RescheduleMeetingsForMaximumFreeTimeII {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", maxFreeTime(3, new int[]{3,2,2,3},  new int[]{3} ));
    }

    public static int maxFreeTime(int eventTime, int[] startTime, int[] endTime) {
        int n = startTime.length;

        java.util.function.IntFunction<Integer> get = (i) -> {
            if (i == 0) return startTime[0];
            else if (i == n) return eventTime - endTime[i - 1];
            return startTime[i] - endTime[i - 1];
        };

        int a = 0, b = -1, c = -1;

        for (int i = 1; i <= n; i++) {
            int sz = get.apply(i);
            if (sz > get.apply(a)) {
                int tmpA = a, tmpB = b;
                a = i; b = tmpA; c = tmpB;
            } else if (b < 0 || sz > get.apply(b)) {
                c = b; b = i;
            } else if (c < 0 || sz > get.apply(c)) {
                c = i;
            }
        }

        int ans = 0;

        for (int i = 0; i < n; i++) {
            int s = startTime[i], e = endTime[i];
            int sz = e - s;
            if ((i != a && i + 1 != a && get.apply(a) >= sz) ||
                (i != b && i + 1 != b && get.apply(b) >= sz) ||
                (i != c && i + 1 != c && get.apply(c) >= sz)) {
                ans = Math.max(ans, get.apply(i) + get.apply(i + 1) + sz);
            } else {
                ans = Math.max(ans, get.apply(i) + get.apply(i + 1));
            }
        }

        return ans;
    }

}
