/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.Arrays;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

public class EvaluateTheBracketPairsOfString {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", evaluate( "hi?", Arrays.asList(Arrays.asList("2"))));
    }

    public static String evaluate(String s, List<List<String>> knowledge) {
        if (s.length() == 1)
            return s;
        Map<String, String> map = new HashMap<>();
        for (List<String> info : knowledge) {
            String key = info.get(0);
            String value = info.get(1);
            map.put(key, value);
        }
        StringBuilder sb = new StringBuilder();
        for (int i=0; i<s.length();) {
            char current = s.charAt(i);
            if (current == ')') {
                i += 1;
                continue;
            }
            else if (current != '(') {
                sb.append(current);
                i += 1;
            }
            else if (current == '(') {
                StringBuilder key = new StringBuilder();
                i += 1;
                while (s.charAt(i) != ')') {
                    key.append(s.charAt(i));
                    i += 1;
                }
                if (map.containsKey(key.toString())) {
                    sb.append(map.get(key.toString()));
                }
                else {
                    sb.append("?");
                }
            }
        }
        return sb.toString();
    }
}
