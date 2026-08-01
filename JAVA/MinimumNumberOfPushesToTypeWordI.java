/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class MinimumNumberOfPushesToTypeWordI {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", minimumPushes("abcde"));
    }

    public static int minimumPushes(String word) {
        int len = word.length();

        if (len <= 8) {
            return len;
        } else if (len <= 16) {
            return 8 + (len - 8) * 2;
        } else if (len <= 24) {
            return 8 + 8 * 2 + (len - 16) * 3;
        } else {
            return 8 + 8 * 2 + 8 * 3 + (len - 24) * 4;
        }
    }
}
