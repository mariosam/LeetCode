/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.ArrayList;
import java.util.Collections;
import java.util.List;

public class SequentialDigits {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", sequentialDigits(100, 200));
    }

    public static List<Integer> sequentialDigits(int low, int high) {
        List<Integer> results = new ArrayList<>();
        for (int i = 1; i <= 9; i++) {
            int num = i;
            for (int j = i + 1; j <= 9; j++) {
                num = num * 10 + j;
                if (num >= low && num <= high) {
                    results.add(num);
                }
            }
        }
        Collections.sort(results);
        return results;
    }

}
