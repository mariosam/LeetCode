/**
 * @version JAVA
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 */
package JAVA;

import java.util.HashMap;
import java.util.HashSet;
import java.util.Map;
import java.util.Set;

public class MinimumNumberOfPeopleToTeach {

    public static void main(String[] args) {
        System.out.printf("Resultado: %d\n", minimumTeachings( 2, new int[][]{{1},{2},{33}}, new int[][]{{2,2,2}} ));
    }

    public static int minimumTeachings(int n, int[][] languages, int[][] friendships) {
        Map<Integer, Set<Integer>> langMap = new HashMap<>();
        for (int i = 0; i < languages.length; i++) {
            Set<Integer> set = new HashSet<>();
            langMap.put(i + 1, set);
            for (int lang : languages[i]) {
                set.add(lang);
            }
        }
        boolean[] canCommunicate = new boolean[friendships.length];
        for (int i = 1; i <= n; i++) {
            for (int j = 0; j < friendships.length; j++) {
                int friend1 = friendships[j][0];
                int friend2 = friendships[j][1];
                if (langMap.get(friend1).contains(i) && langMap.get(friend2).contains(i)) {
                    canCommunicate[j] = true;
                }
            }
        }
        int minTeach = friendships.length;
        for (int i = 1; i <= n; i++) {
            Set<Integer> teach = new HashSet<>();
            for (int j = 0; j < friendships.length; j++) {
                if (!canCommunicate[j]) {
                    int friend1 = friendships[j][0];
                    int friend2 = friendships[j][1];
                    if (!langMap.get(friend1).contains(i)) {
                        teach.add(friend1);
                    }
                    if (!langMap.get(friend2).contains(i)) {
                        teach.add(friend2);
                    }
                }
            }
            minTeach = Math.min(minTeach, teach.size());
        }
        return minTeach;
    }
}
