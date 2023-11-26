/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class KthSymbolinGrammar {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", kthGrammar( 1, 3 ));
    }

    public static int kthGrammar(int n, int k) {
        if (k == 1) {
            return 0;
        }

        if (k % 2 == 0) {
            int r = kthGrammar(n, k / 2);
            if (r == 0) {
                r = 1;
            } else if (r == 1) {
                r = 0;
            }
            return r;
        }

        return kthGrammar(n, (k + 1) / 2);
    }

}
