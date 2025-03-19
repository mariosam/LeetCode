/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class DivideArrayIntoEqualPairs {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", divideArray( new int[]{1,22,1} ));
    }

    public static boolean divideArray(int[] nums) {
        int[] cnt = new int[510];

        for (int x : nums) {
            cnt[x]++;
        }

        for (int v : cnt) {
            if (v % 2 != 0) {
                return false;
            }
        }
        return true;
    }

}
