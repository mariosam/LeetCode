/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class NumberOfWonderfulSubstrings {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", wonderfulSubstrings( "aabb" ));
    }

    public static long wonderfulSubstrings(String word) {
        long ans = 0;
        int mask = 0;
        int[] freq = new int[1024];
        Arrays.fill(freq, 0);
        freq[0] = 1;

        for (char c : word.toCharArray()) {
            int index = c - 'a';
            mask ^= 1 << index;
            ans += freq[mask];

            for (int i = 0; i < 10; i++) {
                ans += freq[mask ^ (1 << i)];
            }

            freq[mask]++;
        }

        return ans;
    }

}
