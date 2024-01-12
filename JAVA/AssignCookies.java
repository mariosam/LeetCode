/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class AssignCookies {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", findContentChildren( new int[]{5}, new int[]{5} ));
    }

    public static int findContentChildren(int[] g, int[] s) {
        if (g.length == 0 || s.length == 0) return 0;
        Arrays.sort(g);
        Arrays.sort(s);

        int j = -1;
        for (int i = 0; i < g.length; i++) {
            while (true) {
                j++;
                if(j >= s.length) return i;
                if (s[j] >= g[i]) break;
            }
        }
        
        return g.length;
    }

}
