/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class FindTheStudentThatWillReplaceTheChalk {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", chalkReplacer( new int[]{0}, 2 ));
    }

    public static int chalkReplacer(int[] chalk, int k) {
        long sum = 0; // Use long to handle large sums
        for (int x : chalk) {
            sum += x; // Calculate the sum of the chalk array
        }
        k %= sum; // Reduce k by modulo the sum (modulus with long sum)

        for (int i = 0; i < chalk.length; i++) {
            if (k < chalk[i]) {
                return i; // Return the current index if k is less than chalk amount
            }
            k -= chalk[i]; // Reduce k by the current chalk amount
        }
        return -1;
    }
}
