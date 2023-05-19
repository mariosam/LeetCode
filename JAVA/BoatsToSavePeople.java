/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;

public class BoatsToSavePeople {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", numRescueBoats( new int[]{1,2,1}, 5 ));
    }

    public static int numRescueBoats(int[] people, int limit) {
        Arrays.sort(people);
        int n = people.length;
        int l = 0, r = n - 1;
        int ans = 0;

        while (l < r) {
            int sum = people[l] + people[r];
            ans++;
            if (sum <= limit) {
                l++;
                r--;
            } else {
                r--;
            }
        }
        if (l == r) ans++;
        
				return ans;
    }

}
