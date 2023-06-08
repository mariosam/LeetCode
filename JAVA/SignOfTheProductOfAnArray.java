/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class SignOfTheProductOfAnArray {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", arraySign( new int[]{3,2,2,3} ));
    }

    public static int arraySign(int[] nums) {
        int res = 1;
        for (int a : nums) {
            if (a == 0) { return 0; }
            res *= (a > 0) ? 1 : -1;
        }

        return res;
    }

}
