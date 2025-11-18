/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class NumberOfSubstringsWithOnly1s {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", numSub( "111111" ));
    }

    public static int numSub(String s) {
        int count = 0;
        int sum = 0;
        for (int i = 0; i < s.length(); i++) {
            if (s.charAt(i) == '1') {
                sum++;
                count = (count + sum) % ((int)1e9 + 7);
            } else {
                sum = 0;
            }
        }
        return count;
    }

}
