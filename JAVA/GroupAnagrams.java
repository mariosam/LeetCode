/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.ArrayList;
import java.util.Arrays;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

public class GroupAnagrams {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", groupAnagrams( new String[]{"a"} ));
    }

    public static List<List<String>> groupAnagrams(String[] strs) {
        Map<String, List<String>> hashmap = new HashMap<>();

        for (String str : strs) {
            char[] tmp = str.toCharArray();
            Arrays.sort(tmp);
            String sortStr = new String(tmp);
            hashmap.computeIfAbsent(sortStr, k -> new ArrayList<>()).add(str);
        }

        return new ArrayList<>(hashmap.values());
    }

}
