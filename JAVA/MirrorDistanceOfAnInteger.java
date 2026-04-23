/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class MirrorDistanceOfAnInteger {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", mirrorDistance(123));
    }

    public static int mirrorDistance(int n) {
        return Math.abs(n - reverse(n));
    }

    private static int reverse(int x) {
        int y = 0;
        while (x > 0) {
            y = y * 10 + x % 10;
            x /= 10;
        }
        return y;
    }

}
