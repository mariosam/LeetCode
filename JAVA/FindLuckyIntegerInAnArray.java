/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class FindLuckyIntegerInAnArray {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", findLucky( new int[]{1,2,3,4,5,6} ));
    }

    public static int findLucky(int[] arr) {
        int[] cnt = new int[501];
        for (int x : arr) {
            cnt[x]++;
        }
        for (int x = 500; x > 0; x--) {
            if (cnt[x] == x) {
                return x;
            }
        }
        return -1;
    }

}
