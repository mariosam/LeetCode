/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class SmallestIntegerDivisibleByK {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", smallestRepunitDivByK( 2 ));
    }

    public static int smallestRepunitDivByK(int k) {
        if (k % 2 == 0 || k % 5 == 0) {
            return -1;
        }
        int n = 1;
        int count = 1;
        while (n % k != 0) {
            n = n * 10 + 1;
            n = n % k;
            count++;
        }
        return count;
    }

}
