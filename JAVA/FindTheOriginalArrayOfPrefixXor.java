/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

public class FindTheOriginalArrayOfPrefixXor {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", findArray(new int[]{2,7,11,15}));
    }

    public static int[] findArray(int[] pref) {
        int[] ans = new int[pref.length];

        ans[0] = pref[0];
        for (int i = 1; i < ans.length; ++i)
        ans[i] = pref[i] ^ pref[i - 1];

        return ans;
    }

}
