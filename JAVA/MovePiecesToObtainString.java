/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class MovePiecesToObtainString {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", canChange( "_L__R__R_", "L______RR" ));
    }

    public static boolean canChange(String start, String target) {
        int n = start.length();
        int i = 0, j = 0;

        while (true) {
            while (i < n && start.charAt(i) == '_') {
                i++;
            }
            while (j < n && target.charAt(j) == '_') {
                j++;
            }
            if (i == n && j == n) {
                return true;
            }
            if (i == n || j == n || start.charAt(i) != target.charAt(j)) {
                return false;
            }
            if (start.charAt(i) == 'L' && i < j) {
                return false;
            }
            if (start.charAt(i) == 'R' && i > j) {
                return false;
            }
            i++;
            j++;
        }
    }

}
