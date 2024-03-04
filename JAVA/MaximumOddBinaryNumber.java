/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class MaximumOddBinaryNumber {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", maximumOddBinaryNumber( "010" ));
    }

    public static String maximumOddBinaryNumber(String s) {
        int cnt = (int) s.chars().filter(ch -> ch == '1').count();
        return "1".repeat(Math.max(0, cnt - 1)) + "0".repeat(Math.max(0, s.length() - cnt)) + "1";
    }
}
