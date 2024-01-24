/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class SetMismatch {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", findErrorNums(new int[]{2,7,11,15}));
    }

    public static int[] findErrorNums(int[] nums) {
        int n = nums.length;
        int s1 = (n * (n + 1)) / 2;
        int s2 = 0, s = 0;
        boolean[] set = new boolean[n + 1];
        
        for (int x : nums) {
            if (!set[x]) {
                set[x] = true;
                s2 += x;
            }
            s += x;
        }

        return new int[]{s - s2, s1 - s2};
    }

}
