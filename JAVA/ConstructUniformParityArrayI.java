/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class ConstructUniformParityArrayI {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", uniformArray( new int[]{1,22,1} ));
    }

    public static boolean uniformArray(int[] nums1) {
        int n = nums1.length;
        int evenCnt = 0, oddCnt = 0;

        for (int i = 0; i < n; i++) {
            if(nums1[i] % 2 == 0)
                evenCnt++;
            else
                oddCnt++;
        }

        return (evenCnt >= 1 &&  oddCnt >= 1) || (evenCnt == 0) || (oddCnt == 0);
    }

}
