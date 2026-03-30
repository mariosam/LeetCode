/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class FindTheStringWithLCP {

    public static void main(String[] args) {
        System.out.printf("Resultado: %s\n", findTheString( new int[][]{{4,0,2,0},{0,3,0,1},{2,0,2,0},{0,1,0,1}} ));
    }

    public static String findTheString(int[][] lcp) {
        int n = lcp.length;
        char[] s = new char[n];
        Arrays.fill(s, '\0');

        int i = 0;

        for (char c = 'a'; c <= 'z'; c++) {
            while (i < n && s[i] != '\0') i++;
            if (i == n) break;

            for (int j = i; j < n; j++) {
                if (lcp[i][j] > 0) {
                    s[j] = c;
                }
            }
        }

        for (char ch : s) {
            if (ch == '\0') return "";
        }

        for (i = 0; i < n; i++) {
            for (int j = 0; j < n; j++) {
                if (s[i] == s[j]) {
                    if (i == n - 1 || j == n - 1) {
                        if (lcp[i][j] != 1) return "";
                    } else {
                        if (lcp[i][j] != lcp[i+1][j+1] + 1) return "";
                    }
                } else {
                    if (lcp[i][j] != 0) return "";
                }
            }
        }

        return new String(s);
    }
}
