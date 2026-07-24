/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class MaximizeActiveSectionWithTradeI {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", maxActiveSectionsAfterTrade("101111"));
    }

    public static int maxActiveSectionsAfterTrade(String s) {
        int n = s.length();
        int ans = 0, i = 0;
        int pre = Integer.MIN_VALUE, mx = 0;

        while (i < n) {
            int j = i + 1;
            while (j < n && s.charAt(j) == s.charAt(i)) {
                j++;
            }
            int cur = j - i;
            if (s.charAt(i) == '1') {
                ans += cur;
            } else {
                mx = Math.max(mx, pre + cur);
                pre = cur;
            }
            i = j;
        }

        ans += mx;
        return ans;
    }
}
