/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.HashMap;
import java.util.Map;

public class UniqueNumberOfOccurrences {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", uniqueOccurrences( new int[]{1,2} ));
    }

    public static boolean uniqueOccurrences(int[] arr) {
        Map<Integer, Integer> resMap = new HashMap<>();
        for (int item : arr) {
            if (resMap.containsKey(item)) {
                resMap.put(item, resMap.get(item) + 1);
                continue;
            }
            resMap.put(item, 1);
        }
        
        Map<Integer, Integer> resNewMap = new HashMap<>();
        for (int item : resMap.values()) {
            if (resNewMap.containsKey(item)) {
                return false;
            }
            resNewMap.put(item, 1);
        }

        return true;
    }

}
