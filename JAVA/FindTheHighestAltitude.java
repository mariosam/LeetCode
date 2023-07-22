/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class FindTheHighestAltitude {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", largestAltitude( new int[]{-5,1,5,0,-7} ));
    }

    public static int largestAltitude(int[] gain) {
        int res = 0;
        int cur = 0;

        for (int g : gain) {
            cur += g;
            res = Math.max(res, cur);
        }
        
        return res;
    }
}
