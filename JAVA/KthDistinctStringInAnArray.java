/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.HashMap;
import java.util.Map;

public class KthDistinctStringInAnArray {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", kthDistinct( new String[]{"d","b","c","b","c","a"}, 4 ));
    }

    public static String kthDistinct(String[] arr, int k) {
        Map<String, Integer> map = new HashMap<>();
        for (String s : arr) {
            map.put(s, map.getOrDefault(s, 0) + 1);
        }
        for (String s : arr) {
            if (map.get(s) == 1) {
                if (--k == 0) {
                    return s;
                }
            }
        }
        return "";
    }

}
