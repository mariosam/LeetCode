/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.List;

public class Triangle {

    public static void main(String[] args) {
        List<List<Integer>> triangle = new ArrayList<>();
        triangle.add(Arrays.asList(2));
        triangle.add(Arrays.asList(3, 4));
        triangle.add(Arrays.asList(6, 5, 7));
        triangle.add(Arrays.asList(4, 1, 8, 3));
        System.out.printf("Resultado: %d\n", minimumTotal( triangle ));
    }

    public static int minimumTotal(List<List<Integer>> triangle) {
        if (triangle.size() == 0) {
            return 0;
        }
        if (triangle.size() == 1) {
            return triangle.get(0).get(0);
        }
        
        int[] curr = new int[triangle.size()];
        Arrays.fill(curr, Integer.MAX_VALUE);
        
        curr[0] = triangle.get(0).get(0);
        int min = Integer.MAX_VALUE;
        for (int i = 1; i < triangle.size(); i++) {
            List<Integer> row = triangle.get(i);
            int[] prev = curr.clone();
            for (int j = 0; j < row.size(); j++) {
                if (j == 0) {
                    curr[j] = prev[0] + row.get(j);
                }
                else if (j == row.size() - 1) {
                    curr[j] = prev[row.size() - 2] + row.get(j);
                }
                else {
                    curr[j] = Math.min(prev[j-1], prev[j])+ row.get(j);
                }
                if (i == triangle.size() - 1) {
                    min = Math.min(min, curr[j]);                    
                }
            }
        }
        
        return min;
    }

}
