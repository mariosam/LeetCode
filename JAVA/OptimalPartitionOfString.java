/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.HashSet;
import java.util.Set;

public class OptimalPartitionOfString {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", partitionString( "aaaaa" ));
    }

    public static int partitionString(String s) {
        if (s.length() <= 0) return 0;
        Set<Character> hashSet = new HashSet<>();
        int result = 0;

        for (Character character : s.toCharArray()) {
            if (hashSet.contains(character)) {
                result += 1;
                hashSet.clear();
            }
            hashSet.add(character);
        }
        if (!hashSet.isEmpty()) result += 1;
				
        return result;
    }

}
