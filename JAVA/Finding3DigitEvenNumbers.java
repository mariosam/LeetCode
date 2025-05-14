/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Set;
import java.util.TreeSet;

public class Finding3DigitEvenNumbers {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", findEvenNumbers( new int[]{1,2,2,3,5,0,5} ));
    }

    public static int[] findEvenNumbers(int[] digits) {
        int[] records = new int[10];
        for (int d : digits) {
            records[d]++;
        }

        Set<Integer> resultSet = new TreeSet<>();

        dfs(0, 0, records, resultSet);

        return resultSet.stream().mapToInt(i -> i).toArray();
    }

    private static void dfs(int i, int x, int[] records, Set<Integer> results) {
        if (i == 3) {
            results.add(x);
            return;
        }

        for (int d = 0; d < 10; d++) {
            if (records[d] == 0) continue;
            if ((i == 0 && d == 0) || (i == 2 && d % 2 != 0)) continue;

            records[d]--;
            dfs(i + 1, x * 10 + d, records, results);
            records[d]++;
        }
    }

}
